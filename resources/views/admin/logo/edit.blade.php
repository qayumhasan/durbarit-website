@extends('admin.master')
@section('contents')
<section class="page_area">
    <div class="panel">
        <div class="panel_header">
            <div class="row">
                <div class="col-md-6">
                    <div class="panel_title"><span class="panel_icon"><i class="fas fa-plus-square"></i></span><span>
                            Site Logo</span></div>
                </div>
            </div>
        </div>
        
        <div class="panel_body">
            <form class="form-horizontal my-5" action="{{route('admin.logo.update')}}" method="POST"
                enctype="multipart/form-data">
                @csrf
               
               
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Front logo:</label>
                    <div class="col-sm-4">
                        <input type="file" name="flogo">
                        <p>(270px*270px)</p>
                    </div>
                    <div class="col-sm-3">
                        
                        <img src="{{asset('public/images/logo/')}}/{{$logo->flogo}}" alt="" width="50%"/>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Admin Logo:</label>
                    <div class="col-sm-4">
                        <input type="file" name="blogo">
                        <p>(270px*270px)</p>
                    </div>
                    <div class="col-sm-3">
                        
                        <img src="{{asset('public/images/logo/')}}/{{$logo->blogo}}" alt="" width="50%"/>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Favicon:</label>
                    <div class="col-sm-4">
                        <input type="file" name="favicon">
                        <p>(270px*270px)</p>
                    </div>
                    <div class="col-sm-3">
                        
                        <img src="{{asset('public/images/logo/')}}/{{$logo->favicon}}" alt="" width="50%"/>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Lazy Loader:</label>
                    <div class="col-sm-4">
                        <input type="file" name="lazyloader">
                        <p>(270px*270px)</p>
                    </div>
                    <div class="col-sm-3">
                        
                        <img src="{{asset('public/images/logo/')}}/{{$logo->lazyloader}}" alt="" width="50%"/>
                    </div>
                </div>
               


                
                <div class="form-group text-center">

                    <button type="submit" class="btn btn-blue">Update Logo</button>
                </div>

            </form>

        </div>
    </div>
</section>
@endsection