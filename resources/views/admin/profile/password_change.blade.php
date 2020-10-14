@extends('admin.master')
@section('contents')
<section class="page_area">
    <div class="row">
        <div class="col-lg-6 offset-3">
            <div class="panel">
                <div class="panel_header">
                    <div class="panel_title"><span class="text-center">Password Change</span></div>
                </div>

                <div class="panel_body">
                    <form class="py-2" action="{{route('admin.password.change')}}" method="post">
                        @csrf
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-3 col-form-label">Old Password</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="password" required="" name="oldpass" id="oldpass">
                            </div>
                        </div><br>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-3 col-form-label">New Password</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="password" required="" name="password" id="pass1" onkeyup="checkPass(); return false;">
                            </div>
                            <label for="example-text-input" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9" style="color: red;"></div>
                            <label for="example-text-input" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9" style="color: red;"><small id="error-nwl"></small></div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-3 col-form-label">Confirm Password</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="password" required="" name="password_confirmation" id="pass2" onkeyup="checkPass(); return false;">
                            </div>
                        </div>

                        <br>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-info">Change Password</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection