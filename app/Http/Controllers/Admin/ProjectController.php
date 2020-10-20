<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Image;
use App\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
       
        return view('admin.project.index',compact('projects'));
    }

    public function create()
    {
        $categores = Category::all();
        return view('admin.project.create',compact('categores'));
    }

    public function store(Request $request)
    {
        
        
        $project = new Project();
        $project->cat_id = $request->cat_id;
        $project->title = $request->title;
        $project->link = $request->link;
        

        if ($request->hasFile('image')) {
            $project_id =Str::random(6);
            $project_img = $request->file('image');
            $imagename = $project_id . '.' . $project_img->getClientOriginalExtension();
            Image::make($project_img)->resize(390, 390)->save(base_path('public/images/project/' . $imagename), 50);
            $project->image = $imagename;
        }
        $project->save();

        $notification=array(
            'messege'=>' Project Created Successfully.',
            'alert-type'=>'success'
             );
         return redirect()->route('admin.project.index')->with($notification);
    }

    public function edit ($id)
    {   $categores = Category::all();
        $project = Project::findOrFail($id);
        return view('admin.project.edit',compact('project','categores'));
    }

    public function update (Request $request,$id)
    {

        $project = Project::findOrFail($id);
        $project->cat_id = $request->cat_id;
        $project->title = $request->title;
        $project->link = $request->link;
        
        

        if ($request->hasFile('image')) {
            unlink(base_path('public/images/project/'.$project->image));
            $project_id =Str::random(6);
            $project_img = $request->file('image');
            $imagename = $project_id . '.' . $project_img->getClientOriginalExtension();
            Image::make($project_img)->resize(390, 390)->save(base_path('public/images/project/' . $imagename), 50);
            $project->image = $imagename;
        }

        $project->save();

        $notification=array(
            'messege'=>' Project Updated Successfully.',
            'alert-type'=>'success'
             );
         return redirect()->route('admin.project.index')->with($notification);

    }

    public function status($id)
    {
        $project = Project::findOrFail($id);
        $status =$project->status;
        if($status==0){
            $project->status =1;
            $project->save();
        }else{
            $project->status =0;
            $project->save();   
        }

        $notification=array(
            'messege'=>' Project Status Changed Successfully.',
            'alert-type'=>'success'
             );
         return redirect()->back()->with($notification);
    }

    public function delete($id)
    {
        
        $project = Project::findOrFail($id);
        unlink(base_path('public/images/project/'.$project->image));
        $project->delete();
        $notification=array(
            'messege'=>' Project Deleted Successfully.',
            'alert-type'=>'success'
             );
         return redirect()->back()->with($notification);
    } 
}
