@extends('admin.master')
@section('contents')
<section class="page_area">
    <div class="panel">
        <div class="panel_header">
            <div class="row">
                <div class="col-md-6">
                    <div class="panel_title"><span class="panel_icon"><i class="fas fa-plus-square"></i></span><span>Add
                            Client Say </span></div>
                </div>
                <div class="col-md-6 text-right">

                    <button type="button" style="margin: 5px;" class="btn btn-success"><i class="fas fa-award"></i> <a
                            href="{{route('admin.client.index')}}" style="color: #fff;">All
                            Client Say </a></button>
                </div>
            </div>
        </div>
        <div class="panel_body">
            <form class="form-horizontal my-5" action="{{route('admin.client.update')}}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    
                    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Client Name:</label>
                    <div class="col-sm-6">
                        <input type="hidden" class="form-control" name="id" value="{{$client->id}}" required>
                        <input type="text" class="form-control" name="name" value="{{$client->name}}" required>
                    </div>
                </div>

                <div class="form-group row">
                    
                    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Client Designation:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="designation" value="{{$client->designation}}" required>
                    </div>
                </div>

                <div class="form-group row">
                    
                    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Client Company Name:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="company" value="{{$client->company}}" required>
                    </div>
                </div>

                <div class="form-group row">
                    
                    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Review:</label>
                    <div class="col-sm-6">
                        <textarea name="review" id="editor1" rows="10" cols="80" required>
                        {{$client->review}}
                        </textarea>
                    </div>
                </div>

           

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Client Image:</label>
                    <div class="col-sm-4">
                        <input type="file" name="image">
                        <p>(180px*180px)</p>
                    </div>
                    <div class="col-sm-3">
                        
                        <img src="{{asset('public/images/client/')}}/{{$client->image}}" alt="" width="50%"/>
                    </div>
                </div>

                <div class="form-group text-center">

                    <button type="submit" class="btn btn-blue">Create Client Review</button>
                </div>

            </form>

        </div>
    </div>
</section>
@endsection