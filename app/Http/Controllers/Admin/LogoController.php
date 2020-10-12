<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use App\Logo;

class LogoController extends Controller
{
    public function index()
    {
        $logo = Logo::findOrFail(1);
        return view('admin.logo.edit',compact('logo'));
    }

    

    public function update (Request $request)
    {

 
       $logo = Logo::findOrFail(1);
       
        

        if ($request->hasFile('flogo')) {
            unlink(base_path('public/images/logo/'.$logo->flogo));
            $flogo_img = $request->file('flogo');
            $imagename = 'flogo'. '.' . $flogo_img->getClientOriginalExtension();
            Image::make($flogo_img)->resize(600, 400)->save(base_path('public/images/logo/' . $imagename), 50);
            $logo->flogo = $imagename;
        }


        if ($request->hasFile('blogo')) {
            unlink(base_path('public/images/logo/'.$logo->blogo));
            $blogo_img = $request->file('blogo');
            $imagename = 'blogo'. '.' . $blogo_img->getClientOriginalExtension();
            Image::make($blogo_img)->resize(600, 400)->save(base_path('public/images/logo/' . $imagename), 50);
            $logo->blogo = $imagename;
        }

        
        if ($request->hasFile('favicon')) {
            unlink(base_path('public/images/logo/'.$logo->favicon));
            $favicon_img = $request->file('favicon');
            $imagename = 'favicon'. '.' . $favicon_img->getClientOriginalExtension();
            Image::make($favicon_img)->resize(600, 400)->save(base_path('public/images/logo/' . $imagename), 50);
            $logo->favicon = $imagename;
        }

        if ($request->hasFile('lazyloader')) {
            unlink(base_path('public/images/logo/'.$logo->lazyloader));
            $lazyloader_img = $request->file('lazyloader');
            $imagename = 'lazyloader'. '.' . $lazyloader_img->getClientOriginalExtension();
            Image::make($lazyloader_img)->resize(600, 400)->save(base_path('public/images/logo/' . $imagename), 50);
            $logo->lazyloader = $imagename;
        }

        $logo->save();

        $notification=array(
            'messege'=>' Logo Updated Successfully.',
            'alert-type'=>'success'
             );
         return redirect()->route('admin.logo.index')->with($notification);

    }

}
