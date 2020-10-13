<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Image;
use App\Team;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        return view('admin.team.index',compact('teams'));
    }

    public function create()
    {
        
        return view('admin.team.create');
    }

    public function store(Request $request)
    {
        
        
        $team = new team();
        $team->name = $request->name;
        $team->designation = $request->designation;
        $team->details = $request->details;
        $team->facebook = $request->facebook;
        $team->twitter = $request->twitter;
        $team->linkedin = $request->linkedin;
        $team->phone = $request->phone;
        

        if ($request->hasFile('image')) {
            $team_id =Str::random(6);
            $team_img = $request->file('image');
            $imagename = $team_id . '.' . $team_img->getClientOriginalExtension();
            Image::make($team_img)->resize(600, 400)->save(base_path('public/images/team/' . $imagename), 50);
            $team->image = $imagename;
        }
        $team->save();

        $notification=array(
            'messege'=>' Team Member Created Successfully.',
            'alert-type'=>'success'
             );
         return redirect()->route('admin.team.index')->with($notification);
    }

    public function edit ($id)
    {
        $team = Team::findOrFail($id);
        return view('admin.team.edit',compact('team'));
    }

    public function update (Request $request)
    {

        $team = Team::findOrFail($request->id);
        $team->name = $request->name;
        $team->designation = $request->designation;
        $team->details = $request->details;
        $team->facebook = $request->facebook;
        $team->twitter = $request->twitter;
        $team->linkedin = $request->linkedin;
        $team->phone = $request->phone;
        

        if ($request->hasFile('image')) {
            unlink(base_path('public/images/team/'.$team->image));
            $team_id =Str::random(6);
            $team_img = $request->file('image');
            $imagename = $team_id . '.' . $team_img->getClientOriginalExtension();
            Image::make($team_img)->resize(600, 400)->save(base_path('public/images/team/' . $imagename), 50);
            $team->image = $imagename;
        }

        $team->save();

        $notification=array(
            'messege'=>' Team Member Info Updated Successfully.',
            'alert-type'=>'success'
             );
         return redirect()->route('admin.team.index')->with($notification);

    }

    public function status($id)
    {
        $team = team::findOrFail($id);
        $status =$team->status;
        if($status==0){
            $team->status =1;
            $team->save();
        }else{
            $team->status =0;
            $team->save();   
        }

        $notification=array(
            'messege'=>' Team Member Status Changed Successfully.',
            'alert-type'=>'success'
             );
         return redirect()->back()->with($notification);
    }

    public function delete($id)
    {
        
        $team = team::findOrFail($id);
        unlink(base_path('public/images/team/'.$team->image));
        $team->delete();
        $notification=array(
            'messege'=>' Team Deleted Successfully.',
            'alert-type'=>'success'
             );
         return redirect()->back()->with($notification);
    } 
}
