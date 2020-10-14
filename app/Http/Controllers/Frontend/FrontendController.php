<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\ApiController;
use App\Logo;
use Illuminate\Http\Request;
use App\Slider;
use App\Service;
use App\Partner;
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

    
}
