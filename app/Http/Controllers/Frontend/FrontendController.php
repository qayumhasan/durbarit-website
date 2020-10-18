<?php

namespace App\Http\Controllers\Frontend;

use App\AboutUs;
use App\Http\Controllers\ApiController;
use App\Logo;
use Illuminate\Http\Request;
use App\Slider;
use App\Team;
use App\Service;
use App\Partner;
use App\Category;
use App\Product;
use App\Career;
use App\ContactInformation;
use App\Http\Resources\ServiceResources;

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

    public function team()
    {
        $team = Team::all();
        return $this->showAll($team);
    }
    public function product(){
      $product=Product::orderBy('id','DESC')->where('is_deleted',0)->where('status',1)->get();
      return $this->showAll($product);
    }

    public function career(){
      $carrer=Career::orderBy('id','DESC')->where('status',1)->get();
      return $this->showAll($carrer);
    }

    public function contactinformation(){
      $contactinformation=ContactInformation::first();
      return $this->showAll($contactinformation);
    }



}
