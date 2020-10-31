<?php

namespace App\Http\Controllers\Frontend;

use App\AboutUs;
use App\AddToCart;
use App\Http\Controllers\ApiController;
use App\Logo;
use Illuminate\Http\Request;
use App\Slider;
use App\Service;
use App\Partner;
use App\Category;
use App\Client;
use App\Team;
use App\Career;
use App\Product;
use App\ContactInformation;
use App\Http\Resources\ServiceResources;
use App\Page;
use App\Project;
use App\ContactMessage;
use App\Subscriber;
use App\Whychoseus;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class FrontendController extends ApiController
{
   
        public function index(){
            $whyschochus=Whychoseus::get();
            $teatimonial=Client::where('status',1)->orderBy('id','DESC')->get();
            $aboutus=AboutUs::first();
            $slider=Slider::where('status',1)->latest()->get();
            return view('frontend.home.index',compact('slider','aboutus','whyschochus','teatimonial'));
        }
        public function product(){
            $product=Product::where('status',1)->latest()->get();
            return view('frontend.product.productpage',compact('product'));
        }

        public function productdetails($id){
            $product=Product::where('id',$id)->first();
            return view('frontend.product.productdetails',compact('product'));
        }
        public function carrer(){
            $carrer=Career::where('status',1)->latest()->get();
            return view('frontend.carrer.carrerpage',compact('carrer'));
        }

        public function contact(){
            return view('frontend.contact.contactpage');
        }

        public function team(){
            $team=Team::where('status',1)->get();
            return view('frontend.team.teampage',compact('team'));
        }
        public function loginpage(){
            return view('frontend.auth.login');
        }

        

        public function page($id){
            $pagedetails=Page::where('id',$id)->firstOrFail();
            return view('frontend.pages.page',compact('pagedetails'));
        }
        public function servicepage($id){
            //return $id;
            $serviclle=Service::where('id',$id)->first();
            return view('frontend.service.servicepage',compact('serviclle'));
        }

        public function subcrive(Request $request){
            $check=Subscriber::where('email',$request->email)->first();

            if($check){
                $notification=array(
                    'messege'=>'You Allready Subcrive our website',
                    'alert-type'=>'info'
                    );
                return redirect()->back()->with($notification);
            }else{
                $insert=Subscriber::insert([
                    'email'=>$request['email'],
                    'created_at'=>Carbon::now()->toDateTimeString(),
                ]);
                if($insert){
                        $notification=array(
                            'messege'=>'Success',
                            'alert-type'=>'success'
                            );
                        return redirect()->back()->with($notification);
                    }else{
                        $notification=array(
                            'messege'=>'Faild',
                            'alert-type'=>'error'
                            );
                        return redirect()->back()->with($notification);
                    }
            }
            
                
        }
        public function about(){
            return "about page";
        }

        public function contactinsert(Request $request){

        
           $contact=ContactMessage::InsertGetId([
                'name'=>$request->name,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'message'=>$request->message,
                'created_at'=>Carbon::now()->toDateTimeString(),
           ]);
    
            if ($contact){
                $notification = array(
                    'messege' => 'Message Send success',
                    'alert-type' => 'success'
                      );
                      return Redirect()->back()->with($notification);
                 }else{
                      $notification = array(
                          'messege' => 'Message SendFaild',
                          'alert-type' => 'error'
                      );
                      return Redirect()->back()->with($notification);
                  }



        }



}
