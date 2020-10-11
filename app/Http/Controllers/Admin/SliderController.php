<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.sliders.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $slider = new Slider();
        $slider->heading = $request->heading;
        $slider->paragraph = $request->paragraph;

        if ($request->hasFile('image')) {
            $slider_id =Str::random(6);
            $slider_img = $request->file('image');
            $imagename = $slider_id . '.' . $slider_img->getClientOriginalExtension();
            Image::make($slider_img)->resize(600, 400)->save(base_path('public/images/slider/' . $imagename), 50);
            $slider->image = $imagename;
        }

        $slider->link = $request->link;
        $slider->save();

        $notification=array(
            'messege'=>' Slider Created Successfully.',
            'alert-type'=>'success'
             );
         return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        $status =$slider->status;
        if($status==0){
            $slider->status =1;
            $slider->save();
        }else{
            $slider->status =0;
            $slider->save();   
        }

        $notification=array(
            'messege'=>' Slider Status Changed Successfully.',
            'alert-type'=>'success'
             );
         return redirect()->back()->with($notification);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view('admin.sliders.edit',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        
        $slider->heading = $request->heading;
        $slider->paragraph = $request->paragraph;

        if ($request->hasFile('image')) {
            $link = base_path('public/images/slider/') . $slider->image;
		    unlink($link);
            $slider_id =Str::random(6);
            $slider_img = $request->file('image');
            $imagename = $slider_id . '.' . $slider_img->getClientOriginalExtension();
            Image::make($slider_img)->resize(600, 400)->save(base_path('public/images/slider/' . $imagename), 50);
            $slider->image = $imagename;
        }

        $slider->link = $request->link;
        $slider->save();
        $notification=array(
            'messege'=>' Slider Updated Successfully.',
            'alert-type'=>'success'
             );
         return redirect()->route('slider.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        
        
            $link = base_path('public/images/slider/') . $slider->image;
		    unlink($link);
        
        $slider->delete();
        $notification=array(
            'messege'=>' Slider Deleted Successfully.',
            'alert-type'=>'success'
             );
         return redirect()->route('slider.index')->with($notification);
    }
}
