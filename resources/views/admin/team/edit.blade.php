@extends('admin.master')
@section('contents')
<section class="page_area">
    <div class="panel">
        <div class="panel_header">
            <div class="row">
                <div class="col-md-6">
                    <div class="panel_title"><span class="panel_icon"><i class="fas fa-plus-square"></i></span><span>Update
                            Teams</span></div>
                </div>
                <div class="col-md-6 text-right">

                    <button type="button" style="margin: 5px;" class="btn btn-success"><i class="fas fa-award"></i> <a
                            href="{{route('admin.team.index')}}" style="color: #fff;">All
                            Team</a></button>
                </div>
            </div>
        </div>
        <div class="panel_body">
            <form class="form-horizontal my-5" action="{{route('admin.team.update')}}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Team Name:</label>
                    <div class="col-sm-6">
                        <input type="hidden" class="form-control" name="id" value="{{$team->id}}" required>
                        <input type="text" class="form-control" name="name" value="{{$team->name}}" required>
                    </div>
                </div>

                <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Designation:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="designation" value="{{$team->designation}}" required>
                    </div>
                </div>


                <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Details:</label>
                    <div class="col-sm-6">
                        <textarea name="details" id="editor1" rows="10" cols="80" required>
                        {{$team->details}}
                        </textarea>
                    </div>
                </div>

                <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Facebook:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="facebook" value="{{$team->facebook}}" required>
                    </div>
                </div>

                <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Twitter:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="twitter" value="{{$team->twitter}}" required>
                    </div>
                </div>

                <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Linked In:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="linkedin" value="{{$team->linkedin}}" required>
                    </div>
                </div>
                <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Phone:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="phone" value="{{$team->phone}}" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Service Image:</label>
                    <div class="col-sm-4">
                        <input type="file" name="image">
                        <p>(270px*270px)</p>
                    </div>
                    <div class="col-sm-3">
                        <img src="{{asset('public/images/team/')}}/{{$team->image}}" alt="" width="50%"/>
                    </div>
                </div>
                <!-- <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-3 col-form-label text-right"></label>
                    <div class="col-sm-6">
                        <img src="{{asset('public/')}}" height="45px" >
                    </div>
                </div> -->





                <div class="form-group text-center">

                    <button type="submit" class="btn btn-blue">Update Team Member</button>
                </div>

            </form>

        </div>
    </div>
</section>
@endsection
