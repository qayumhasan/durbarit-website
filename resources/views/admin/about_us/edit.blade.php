@extends('admin.master')
@section('contents')
<section class="page_area">
    <div class="panel">
        <div class="panel_header">
            <div class="row">
                <div class="col-md-6">
                    <div class="panel_title"><span class="panel_icon"><i class="fas fa-plus-square"></i></span><span>
                            About Us</span></div>
                </div>
               
            </div>
        </div>
        <div class="panel_body">
            <form class="form-horizontal my-5" action="{{route('admin.aboutus.update')}}" method="POST"
                enctype="multipart/form-data">
                @csrf

                <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label text-right">About Details:</label>
                    <div class="col-sm-6">
                        <textarea name="details" id="editor1" rows="10" cols="80" required>
                           {{$aboutus->details}}
                        </textarea>
                    </div>
                </div>

                <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Our Say:</label>
                    <div class="col-sm-6">
                        <textarea name="oursay" id="editor2" rows="10" cols="80" required>
                        {{$aboutus->oursay}}
                        </textarea>
                    </div>
                </div>

                <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Our Mission:</label>
                    <div class="col-sm-6">
                        <textarea name="mission" id="editor3" rows="10" cols="80" required>
                        {{$aboutus->mission}}
                        </textarea>
                    </div>
                </div>
                <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Our Vission:</label>
                    <div class="col-sm-6">
                        <textarea name="vission" id="editor4" rows="10" cols="80" required>
                        {{$aboutus->vission}}
                        </textarea>
                    </div>
                </div>
               

               
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">About Us Image:</label>
                    <div class="col-sm-4">
                        <input type="file" name="image">
                        <p>(270px*270px)</p>
                    </div>
                    <div class="col-sm-3">
                        
                        <img src="{{asset('public/images/aboutus/')}}/{{$aboutus->image}}" alt="" width="50%"/>
                    </div>
                </div>
               


                
                <div class="form-group text-center">

                    <button type="submit" class="btn btn-blue">Update About Us</button>
                </div>

            </form>

        </div>
    </div>
</section>
@endsection