@extends('admin.master')
@section('contents')
<section class="page_area">
    <div class="panel">
        <div class="panel_header">
            <div class="row">
                <div class="col-md-6">
                    <div class="panel_title"><span class="panel_icon"><i class="fas fa-plus-square"></i></span><span>Create
                            User/Admin</span></div>
                </div>
                <div class="col-md-6 text-right">

                    <button type="button" style="margin: 5px;" class="btn btn-success"><i class="fas fa-award"></i> <a href="{{route('admin.user.index')}}" style="color: #fff;">All
                            User/Admin</a></button>
                </div>
            </div>
        </div>
        <div class="panel_body">
            <form class="form-horizontal my-5" action="{{route('admin.user.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Name:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="name" placeholder="Enter User Name" required>
                    </div>
                </div>

                <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">User Name:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="username" placeholder="Enter User Name" required>
                    </div>
                </div>

                <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Email:</label>
                    <div class="col-sm-6">
                        <input type="email" class="form-control" name="email" placeholder="Enter User Email" required>
                    </div>
                </div>

                <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Phone:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="phone" placeholder="Enter User Phone Number">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Role<span style="color:red">*<span></span></span></label>
                    <div class="col-sm-6">
                        <select name="type" class="form-control">
                            <option value="Admin">Admin</option>
                            <option value="User">User</option>
                        </select>
                    </div>
                </div>


                <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Password:</label>
                    <div class="col-sm-6">
                        <input type="password" class="form-control" placeholder="Enter Password" name="password">
                    </div>
                    @error('password')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>

                <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Confirm Password:</label>
                    <div class="col-sm-6">
                        <input type="password" class="form-control" placeholder="Re-type Password" name="password_confirmation">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">User Image:</label>
                    <div class="col-sm-6">
                        <input type="file" name="image">
                        <p>(270px*270px)</p>
                    </div>
                </div>




                <div class="form-group text-center">

                    <button type="submit" class="btn btn-blue">Add User</button>
                </div>

            </form>

        </div>
    </div>
</section>
@endsection