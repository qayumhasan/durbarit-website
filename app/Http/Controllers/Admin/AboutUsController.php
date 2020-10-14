<?php

namespace App\Http\Controllers\Admin;

use App\AboutUs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;

class AboutUsController extends Controller
{
    public function index()
    {
        $aboutus = AboutUs::findOrFail(1); 
        return view('admin.about_us.edit',compact('aboutus'));
    }

    public function update(Request $request)
    {
       $aboutus = AboutUs::findOrFail(1);
       $aboutus->details = $request->details;
       $aboutus->oursay = $request->oursay;
       $aboutus->mission = $request->mission;
       $aboutus->vission = $request->vission;

       if ($request->hasFile('image')) {
        unlink(base_path('public/images/aboutus/'.$aboutus->image));
        $slider_id =Str::random(6);
        $slider_img = $request->file('image');
        $imagename = $slider_id . '.' . $slider_img->getClientOriginalExtension();
        Image::make($slider_img)->resize(600, 400)->save(base_path('public/images/aboutus/' . $imagename), 50);
        $aboutus->image = $imagename;
    }

    $aboutus->save();

    $notification=array(
        'messege'=>' About Us Updated Successfully.',
        'alert-type'=>'success'
         );
     return redirect()->back()->with($notification);
       

    }
}
