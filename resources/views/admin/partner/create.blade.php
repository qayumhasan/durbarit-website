@extends('admin.master')
@section('contents')
<section class="page_area">
    <div class="panel">
        <div class="panel_header">
            <div class="row">
                <div class="col-md-6">
                    <div class="panel_title"><span class="panel_icon"><i class="fas fa-plus-square"></i></span><span>All
                            Partners</span></div>
                </div>
                <div class="col-md-6 text-right">

                    <button type="button" style="margin: 5px;" class="btn btn-success"><i class="fas fa-award"></i> <a
                            href="{{route('admin.partner.index')}}" style="color: #fff;">All
                            Partner</a></button>
                </div>
            </div>
        </div>
        <div class="panel_body">
            <form class="form-horizontal my-5" action="{{route('admin.partner.store')}}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    
                    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Partner Name:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="link" placeholder="Enter Partner Link" required>
                    </div>
                </div>
               
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Partner Image:</label>
                    <div class="col-sm-6">
                        <input type="file" name="image" required>
                        <p>(120px*70px)</p>
                    </div>
                </div>
               


                
                <div class="form-group text-center">

                    <button type="submit" class="btn btn-blue">Add Partner</button>
                </div>

            </form>

        </div>
    </div>
</section>
@endsection