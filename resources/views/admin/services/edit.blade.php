@extends('admin.master')
@section('contents')
<section class="page_area">
    <div class="panel">
        <div class="panel_header">
            <div class="row">
                <div class="col-md-6">
                    <div class="panel_title"><span class="panel_icon"><i class="fas fa-plus-square"></i></span><span>All
                            Services</span></div>
                </div>
                <div class="col-md-6 text-right">

                    <button type="button" style="margin: 5px;" class="btn btn-success"><i class="fas fa-award"></i> <a
                            href="#" style="color: #fff;">Add
                            Service</a></button>
                </div>
            </div>
        </div>
        <div class="panel_body">
            <form class="form-horizontal my-5" action="{{route('admin.service.update')}}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Service Name:</label>
                    <div class="col-sm-6">
                        <input type="hidden" class="form-control" name="id"  value="{{$service->id}}">
                        <input type="text" class="form-control" name="name"  value="{{$service->name}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Service Description:</label>
                    <div class="col-sm-6">
                        
                        <input type="text" name="details" value="{{$service->details}}" class="form-control" data-role="tagsinput">
                        
                    </div>
                </div>
               
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Service Image:</label>
                    <div class="col-sm-4">
                        <input type="file" name="image">
                        <p>(90px*70px)</p>
                    </div>
                    <div class="col-sm-3">
                        
                        <img src="{{asset('public/images/services/')}}/{{$service->image}}" alt="" width="50%"/>
                    </div>
                </div>
               


                
                <div class="form-group text-center">

                    <button type="submit" class="btn btn-blue">Update Service</button>
                </div>

            </form>

        </div>
    </div>
</section>
@endsection