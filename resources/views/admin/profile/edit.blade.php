@extends('admin.master')
@section('contents')
<section class="page_area">
    <div class="panel">
        <div class="panel_header">
            <div class="row">
                <div class="col-md-6">
                    <div class="panel_title"><span class="panel_icon"><i class="fas fa-plus-square"></i></span><span>Update Profile
                            </span></div>
                </div>
      
            </div>
        </div>
        <div class="panel_body">
            <form class="form-horizontal my-5" action="{{route('admin.profile.update')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Name:</label>
                    <div class="col-sm-6">
        
                        <input type="text" class="form-control" name="name" value="{{$admin->name}}" required>
                    </div>
                </div>

                <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">User Name:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="username" value="{{$admin->username}}" required>
                    </div>
                </div>

                <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Email:</label>
                    <div class="col-sm-6">
                        <input type="email" class="form-control" name="email" value="{{$admin->email}}" required>
                    </div>
                </div>

                <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Phone:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="phone" value="{{$admin->phone}}">
                    </div>
                </div>

              




                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Partner Image:</label>
                    <div class="col-sm-4">
                        <input type="file" name="image">
                        <p>(270px*270px)</p>
                    </div>
                    <div class="col-sm-3">
                        
                        <img src="{{asset('public/images/user/')}}/{{$admin->image}}" alt="" width="50%"/>
                    </div>
                </div>




                <div class="form-group text-center">

                    <button type="submit" class="btn btn-blue">Update Profile</button>
                </div>

            </form>

        </div>
    </div>
</section>
@endsection