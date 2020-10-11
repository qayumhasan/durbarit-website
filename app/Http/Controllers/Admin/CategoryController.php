<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category=Category::get();
        //return response()->json($category);
        return view('admin.category.index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $cat_name=$request->name;
        $slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $cat_name);
        $validatedData = $request->validate([
            'name' => 'required|unique:categories|max:255',
        ]);
        $data = new Category;
        $data->name = $request->name;
        $data->slug = $slug;
        $data->meta_tag = $request->meta_tag;

        if ($data->save()) {
            $notification = array(
                'messege' => 'Banner Insert Successfully',
                'alert-type' => 'success'
            );
            return Redirect()->back()->with($notification);
        } else {
            $notification = array(
                'messege' => 'Banner Insert Faild',
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
          $category=Category::where('id',$id)->first();
          return response()->json($category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Category::where('id',$id)->first();
        //return response()->json($data);
        return view('admin.category.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $cat_name=$request->name;
        $slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $cat_name);
        $validatedData = $request->validate([
            'name' => 'required|max:255',
        ]);
        $data = Category::findOrFail($id);
        $data->name = $request->name;
        $data->meta_tag = $request->meta_tag;
        $data->slug =$slug;
        if($data->save()){
          $notification = array(
              'messege' => 'Delete Success',
              'alert-type' => 'success'
          );
          return Redirect()->back()->with($notification);
        }else{
          $notification = array(
              'messege' => 'Delete Success',
              'alert-type' => 'success'
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
      $delete=Category::where('id',$id)->delete();
      // return response('deleted');
      if($delete){
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
