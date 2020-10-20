<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service;
use Illuminate\Support\Str;
use Image;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('admin.services.index',compact('services'));
    }

    public function create()
    {
        
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        
        
        $service = new Service();
        $service->name = $request->name;
        $service->details =json_encode($request->details);

        if ($request->hasFile('image')) {
            $service_id =Str::random(6);
            $service_img = $request->file('image');
            $imagename = $service_id . '.' . $service_img->getClientOriginalExtension();
            Image::make($service_img)->resize(90, 70)->save(base_path('public/images/services/' . $imagename), 50);
            $service->image = $imagename;
        }
        $service->save();

        $notification=array(
            'messege'=>' Service Created Successfully.',
            'alert-type'=>'success'
             );
         return redirect()->route('admin.service.index')->with($notification);
    }

    public function edit ($id)
    {
        $service = Service::findOrFail($id);
        return view('admin.services.edit',compact('service'));
    }

    public function update (Request $request)
    {
        $service = Service::findOrFail($request->id);
        $service->name = $request->name;
        $service->details =json_encode($request->details);

        if ($request->hasFile('image')) {
		    unlink(base_path('public/images/services/'.$service->image));
            $service_id =Str::random(6);
            $service_img = $request->file('image');
            $imagename = $service_id . '.' . $service_img->getClientOriginalExtension();
            Image::make($service_img)->resize(90, 70)->save(base_path('public/images/services/' . $imagename), 50);
            $service->image = $imagename;
        }
        $service->save();

        $notification=array(
            'messege'=>' Service Updated Successfully.',
            'alert-type'=>'success'
             );
         return redirect()->route('admin.service.index')->with($notification);

    }

    public function status($id)
    {
        $service = Service::findOrFail($id);
        $status =$service->status;
        if($status==0){
            $service->status =1;
            $service->save();
        }else{
            $service->status =0;
            $service->save();   
        }

        $notification=array(
            'messege'=>' Service Status Changed Successfully.',
            'alert-type'=>'success'
             );
         return redirect()->back()->with($notification);
    }

    public function delete($id)
    {
        
        $service = Service::findOrFail($id);
        unlink(base_path('public/images/services/'.$service->image));
        $service->delete();
        $notification=array(
            'messege'=>' Service Deleted Successfully.',
            'alert-type'=>'success'
             );
         return redirect()->back()->with($notification);
    }
}
