<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Page;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::all();
        return view('admin.page.index',compact('pages'));
    }

    public function create()
    {
        
        return view('admin.page.create');
    }

    public function store(Request $request)
    {
        
        
        $page = new Page();
        $page->title = $request->title;
        $page->description = $request->description;
        $page->meta_tag = $request->meta_tag;
        $page->meta_description = $request->meta_description;
        $page->save();
        $notification=array(
            'messege'=>' Page Created Successfully.',
            'alert-type'=>'success'
             );
         return redirect()->route('admin.page.index')->with($notification);
    }

    public function edit ($id)
    {
        $page = Page::findOrFail($id);
        return view('admin.page.edit',compact('page'));
    }

    public function update (Request $request)
    {

        $page = Page::findOrFail($request->id);
        $page->title = $request->title;
        $page->description = $request->description;
        $page->meta_tag = $request->meta_tag;
        $page->meta_description = $request->meta_description;
        $page->save();
        $page->save();

        $notification=array(
            'messege'=>' Page Updated Successfully.',
            'alert-type'=>'success'
             );
         return redirect()->route('admin.page.index')->with($notification);

    }

    public function status($id)
    {
        $page = Page::findOrFail($id);
        $status =$page->status;
        if($status==0){
            $page->status =1;
            $page->save();
        }else{
            $page->status =0;
            $page->save();   
        }

        $notification=array(
            'messege'=>' page Status Changed Successfully.',
            'alert-type'=>'success'
             );
         return redirect()->back()->with($notification);
    }

    public function delete($id)
    {
        
        $page = Page::findOrFail($id);
        $page->delete();
        $notification=array(
            'messege'=>' Page Deleted Successfully.',
            'alert-type'=>'success'
             );
         return redirect()->back()->with($notification);
    } 
}
