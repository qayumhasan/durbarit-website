<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Image;
use App\Career;

class CareerController extends Controller
{
    public function index()
    {
        $careers = Career::all();
        return view('admin.career.index',compact('careers'));
    }

    public function create()
    {
        
        return view('admin.career.create');
    }

    public function store(Request $request)
    {
        
        
        $career = new Career();
        $career->designation = $request->designation;
        $career->subject = $request->subject;
        $career->jobtype = $request->jobtype;
        $career->link = $request->link;
        $career->save();
        $notification=array(
            'messege'=>' Career Job Post Created Successfully.',
            'alert-type'=>'success'
             );
         return redirect()->route('admin.career.index')->with($notification);
    }

    public function edit ($id)
    {
        $career = Career::findOrFail($id);
        return view('admin.career.edit',compact('career'));
    }

    public function update (Request $request)
    {

        $career = Career::findOrFail($request->id);
        $career->designation = $request->designation;
        $career->subject = $request->subject;
        $career->jobtype = $request->jobtype;
        $career->link = $request->link;
        $career->save();

        $notification=array(
            'messege'=>' Career Updated Successfully.',
            'alert-type'=>'success'
             );
         return redirect()->route('admin.career.index')->with($notification);

    }

    public function status($id)
    {
        $career = Career::findOrFail($id);
        $status =$career->status;
        if($status==0){
            $career->status =1;
            $career->save();
        }else{
            $career->status =0;
            $career->save();   
        }

        $notification=array(
            'messege'=>' career Status Changed Successfully.',
            'alert-type'=>'success'
             );
         return redirect()->back()->with($notification);
    }

    public function delete($id)
    {
        
        $career = Career::findOrFail($id);
        $career->delete();
        $notification=array(
            'messege'=>' Career Deleted Successfully.',
            'alert-type'=>'success'
             );
         return redirect()->back()->with($notification);
    } 
}
