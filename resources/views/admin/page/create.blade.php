@extends('admin.master')
@section('contents')
<section class="page_area">
    <div class="panel">
        <div class="panel_header">
            <div class="row">
                <div class="col-md-6">
                    <div class="panel_title"><span class="panel_icon"><i class="fas fa-plus-square"></i></span><span>Add
                            Page </span></div>
                </div>
                <div class="col-md-6 text-right">

                    <button type="button" style="margin: 5px;" class="btn btn-success"><i class="fas fa-award"></i> <a
                            href="{{route('admin.page.index')}}" style="color: #fff;">All
                            Page </a></button>
                </div>
            </div>
        </div>
        <div class="panel_body">
            <form class="form-horizontal my-5" action="{{route('admin.page.store')}}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    
                    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Page Title:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="title" placeholder="Enter Page Title" required>
                    </div>
                </div>

                <div class="form-group row">
                    
                    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Page Meta Tag:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="meta_tag" placeholder="Enter Page Meta Tag" required>
                    </div>
                </div>

                
                <div class="form-group row">
                    
                    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Meta Description:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="meta_description" placeholder="Enter Page Meta Description" required>
                    </div>
                </div>

                <div class="form-group row">
                    
                    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Page Description:</label>
                    <div class="col-sm-6">
                        <textarea name="description" id="editor1" rows="10" cols="80" required>
                           
                        </textarea>
                    </div>
                </div>

                <div class="form-group text-center">

                    <button type="submit" class="btn btn-blue">Create Page</button>
                </div>

            </form>

        </div>
    </div>
</section>
@endsection