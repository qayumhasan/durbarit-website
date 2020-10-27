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
use App\Subscriber;
use App\Whychoseus;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class FrontendController extends ApiController
{
    public function slider()
    {
        $slider =Slider::select(['id','heading','paragraph','image','link'])->get();

        return $this->showAll($slider);
    }

    public function searvices()
    {
        return $services =ServiceResources::collection(Service::select(['id','name','image','details'])->get());
        // return $this->showAll($services);
    }

    public function partners()
    {
        $partners = Partner::select(['id','image','link'])->get();
        return $this->showAll($partners);
    }

    public function logos()
    {
        $logos = Logo::where('id',1)->select(['id','flogo'])->first();
        return $this->showOne($logos);
    }


    public function categoris(){
      $categoris=Category::get();
        return $this->showAll($categoris);
    }

    public function aboutUs()
    {
        $about = AboutUs::where('id',1)->first();
        return $this->showOne($about);
    }

    public function chooseus()
    {

        $data=Whychoseus::all();
        return $this->showAll($data);
    }

    public function clientSay()
    {

        $data =Client::all();
        return $this->showAll($data);
    }


    public function team(){
      $team=Team::where('status',1)->get();
      return $this->showAll($team);
    }

    public function career(){
        $career=Career::where('status',1)->get();
        return $this->showAll($career);
    }

    // public function product(){
    //     $product=Product::where('status',1)->get();
    //     return $this->showAll($product);
    // }


    public function contact()
    {
        $data = ContactInformation::findOrFail(1);
        return $this->showOne($data);
    }

    public function pages()
    {
        $data = Page::all();
        return $this->showAll($data);
    }

    public function NewsLetter(Request $request)
    {
        $request->validate([
            'email'=>'required|email|unique:subscribers'
        ]);
        $sub= new Subscriber;
        $sub->email = $request->email;
        $sub->status = 1;
        $sub->save();
        return $this->showOne($sub);
    }

    public function categores()
    {
       $data= Category::all();
       return $this->showAll($data);
       
    }

    public function projects()
    {
        $data = Project::where('status',1)->get();
        return $this->showAll($data);
    }

    public function projectsDetails($id)
    {
        $data = Project::where('cat_id',$id)->get();
        return $this->showAll($data);
    }

    public function singlePage($id)
    {
        $data = Page::findOrFail($id);
        return $this->showOne($data);
    }

    public function addToCart(Request $request)
    {
        $product = Product::findOrFail($request->product_id);
        $cartdata = new AddToCart();
        $cartdata->user_ip = \Request::ip();
        $cartdata->product_id = $request->product_id;
        $cartdata->package_id = $request->package_id;
        if($request->package_id == 1){
            $price = $product->reqular_price;
        }elseif($request->package_id == 2){
            $price = $product->premium_price;
        }else{
            $price = $product->reqular_price;
        }
        $cartdata->price = $price;
        $cartdata->sku = $product->sku;
        $cartdata->extr_price = $request->extr_price;
        $cartdata->image = $product->image;
        $cartdata->created_at = Carbon::now();

        $cartdata->save();
    }

    public function totalQty()
    {
        $ip =\Request::ip();
        $cart = AddToCart::where('user_ip',$ip)->get();
       
        return $cart->count();

    }

    public function getCartData()
    {
        $ip =\Request::ip();
        return $cart = AddToCart::where('user_ip',$ip)->with('product')->get();
     
    }

    public function cartDataDelete($id)
    {
     
        $cart = AddToCart::findOrFail($id);
        $cart->delete();
        $ip =\Request::ip();
        return $cart = AddToCart::where('user_ip',$ip)->with('product')->get()->count();
     
    }
    
    public function totalPrice()
    {
        $ip =\Request::ip();
        $cart = AddToCart::where('user_ip',$ip)->with('product')->get();
        $total = 0;
        foreach($cart as $row){
            $total +=$row->price;
        }
        return $total;
     
    }


}
