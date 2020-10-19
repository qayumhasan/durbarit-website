<?php

namespace App\Http\Controllers\Frontend;

use App\AboutUs;
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
use App\Http\Resources\ServiceResources;
use App\Whychoseus;

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
        $logos = Logo::all();
        return $this->showAll($logos);
    }


    public function categoris(){
      $categoris=Category::get();
        return $this->showAll($categoris);
    }

    public function aboutUs()
    {
        $about = AboutUs::all();
        return $this->showAll($about);
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


}
