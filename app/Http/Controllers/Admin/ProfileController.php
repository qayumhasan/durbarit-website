<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use Carbon\Carbon;

class ProfileController extends Controller
{
    public function showProfile($id)
    {
        $admin = Admin::findOrFail($id);
        return view('admin.profile.profile',compact('admin'));
    }

    public function editProfile($id)
    {
        $admin = Admin::findOrFail($id);
        return view('admin.profile.edit',compact('admin'));
    }

    public function updateProfile(Request $request)
    {
        $admin = Admin::findOrFail(auth()->user()->id);
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->username = $request->username;
        $admin->phone = $request->phone;
        if ($request->hasFile('image')) {

            if($admin->image != 'admin.jpg'){
                unlink(base_path('public/images/user/'.$admin->image));
            }

            $user_id =Str::random(6);
            $user_img = $request->file('image');
            $imagename = $user_id . '.' . $user_img->getClientOriginalExtension();
            Image::make($user_img)->resize(600, 400)->save(base_path('public/images/user/' . $imagename), 50);
            $admin->image = $imagename;
        }

        $admin->save();

        $notification=array(
            'messege'=>' Admin Updated Successfully.',
            'alert-type'=>'success'
             );
         return redirect()->back()->with($notification);
    }


    public function passwordChangePage($id)
    {
        return view('admin.profile.password_change');
    }

    public function passwordChange(Request $request)
    {
        $this->validate($request, [
            'password' => 'required',
            'new_password' => 'confirmed|max:8|different:password',
        ]);


        $validator = Validator::make($request->all(), [
            'old_password' => [
                'required', function ($attribute, $value, $fail) {
                    if (!Hash::check($value, Auth::user()->password)) {
                        $fail('Old Password didn\'t match');
                    }
                },
            ],
        ]);

        if (Hash::check($request->password, $user->password)) {
           $user->fill([
            'password' => Hash::make($request->new_password)
            ])->save();
    }
}
