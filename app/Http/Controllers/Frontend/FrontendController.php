<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Slider;

class FrontendController extends Controller
{
    public function slider()
    {
        $slider = Slider::select(['id','heading','paragraph','image','link'])->get();
        return response()->json($slider);
    }
}
