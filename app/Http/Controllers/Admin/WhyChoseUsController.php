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
      //return response()->json($wchoseus);
      return view('admin.whychoseus.index',compact('wchoseus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.whychoseus.create');
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

        if ($data->save()) {
            $notification = array(
                'messege' => 'Insert Success',
                'alert-type' => 'success'
            );
            return Redirect()->back()->with($notification);
        } else {
            $notification = array(
                'messege' => 'Insert Faild',
                'alert-type' => 'error'
            );
            return Redirect()->back()->with($notification);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $data=Whychoseus::where('id',$id)->first();
      return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $data=Whychoseus::where('id',$id)->first();
      return view('admin.whychoseus.edit',compact('data'));
      // return response()->json($data);
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
      $validatedData = $request->validate([
          'title' => 'required|max:255',
      ]);
      $data =  Whychoseus::findOrFail($id);
      $data->title = $request->title;
      $data->details = $request->details;
      if ($data->save()) {
          $notification = array(
              'messege' => 'Update Success',
              'alert-type' => 'success'
          );
          return Redirect()->back()->with($notification);
      } else {
          $notification = array(
              'messege' => 'Update Faild',
              'alert-type' => 'error'
          );
          return Redirect()->back()->with($notification);
      }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $data=Whychoseus::where('id',$id)->delete();
      // return response('delete');
      if ($data) {
          $notification = array(
              'messege' => 'Delete Success',
              'alert-type' => 'success'
          );
          return Redirect()->back()->with($notification);
      } else {
          $notification = array(
              'messege' => 'Delete Faild',
              'alert-type' => 'error'
          );
          return Redirect()->back()->with($notification);
      }
    }
}
