<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Image;
use App\Partner;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::all();
        return view('admin.partner.index',compact('partners'));
    }

    public function create()
    {
        
        return view('admin.partner.create');
    }

    public function store(Request $request)
    {
        
        
        $partner = new Partner();
        $partner->link = $request->link;
        

        if ($request->hasFile('image')) {
            $partner_id =Str::random(6);
            $partner_img = $request->file('image');
            $imagename = $partner_id . '.' . $partner_img->getClientOriginalExtension();
            Image::make($partner_img)->resize(120, 70)->save(base_path('public/images/partner/' . $imagename), 50);
            $partner->image = $imagename;
        }
        $partner->save();

        $notification=array(
            'messege'=>' Partner Created Successfully.',
            'alert-type'=>'success'
             );
         return redirect()->route('admin.partner.index')->with($notification);
    }

    public function edit ($id)
    {
        $partner = Partner::findOrFail($id);
        return view('admin.partner.edit',compact('partner'));
    }

    public function update (Request $request)
    {

        $partner = Partner::findOrFail($request->id);
        $partner->link = $request->link;
        

        if ($request->hasFile('image')) {
            unlink(base_path('public/images/partner/'.$partner->image));
            $partner_id =Str::random(6);
            $partner_img = $request->file('image');
            $imagename = $partner_id . '.' . $partner_img->getClientOriginalExtension();
            Image::make($partner_img)->resize(120, 70)->save(base_path('public/images/partner/' . $imagename), 50);
            $partner->image = $imagename;
        }

        $partner->save();

        $notification=array(
            'messege'=>' Partner Updated Successfully.',
            'alert-type'=>'success'
             );
         return redirect()->route('admin.partner.index')->with($notification);

    }

    public function status($id)
    {
        $partner = Partner::findOrFail($id);
        $status =$partner->status;
        if($status==0){
            $partner->status =1;
            $partner->save();
        }else{
            $partner->status =0;
            $partner->save();   
        }

        $notification=array(
            'messege'=>' Partner Status Changed Successfully.',
            'alert-type'=>'success'
             );
         return redirect()->back()->with($notification);
    }

    public function delete($id)
    {
        
        $partner = Partner::findOrFail($id);
        unlink(base_path('public/images/partner/'.$partner->image));
        $partner->delete();
        $notification=array(
            'messege'=>' Partner Deleted Successfully.',
            'alert-type'=>'success'
             );
         return redirect()->back()->with($notification);
    } 
}
