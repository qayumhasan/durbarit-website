<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function index()
    {
        $subscribers = Subscriber::all();
        return view('admin.subscribers.index',compact('subscribers'));
    }

    public function status($id)
    {
        
        $status =Subscriber::findOrFail($id);
        if($status->status ==0){
            $status->status =1;
            $status->save();
        }else{
            $status->status =0;
            $status->save();   
        }

        $notification=array(
            'messege'=>' Subscriiber Status Changed Successfully.',
            'alert-type'=>'success'
             );
         return redirect()->back()->with($notification);
    }

    public function delete($id)
    {
        $subscriber =Subscriber::findOrFail($id);
        $subscriber->delete();
        $notification=array(
            'messege'=>' Subscriiber Deleted Successfully.',
            'alert-type'=>'success'
             );
         return redirect()->back()->with($notification);
    }
}
