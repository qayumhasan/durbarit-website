<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Whychoseus;

class WhyChoseUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $wchoseus=Whychoseus::get();
      return response()->json($wchoseus);
      //return view('admin.whychoseus.index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'title' => 'required|max:255',
        ]);
        $data = new Whychoseus;
        $data->title = $request->title;
        $data->details = $request->details;
        if($data->save()){
          return response('ok');
        }else{
          return response('lol hoyni');
        }
        // if ($data->save()) {
        //     $notification = array(
        //         'messege' => 'Banner Insert Successfully',
        //         'alert-type' => 'success'
        //     );
        //     return Redirect()->back()->with($notification);
        // } else {
        //     $notification = array(
        //         'messege' => 'Banner Insert Faild',
        //         'alert-type' => 'error'
        //     );
        //     return Redirect()->back()->with($notification);
        // }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
