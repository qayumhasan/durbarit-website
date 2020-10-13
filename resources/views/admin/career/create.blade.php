@extends('admin.master')
@section('contents')
<section class="page_area">
    <div class="panel">
        <div class="panel_header">
            <div class="row">
                <div class="col-md-6">
                    <div class="panel_title"><span class="panel_icon"><i class="fas fa-plus-square"></i></span><span>Add
                            Career Post</span></div>
                </div>
                <div class="col-md-6 text-right">

                    <button type="button" style="margin: 5px;" class="btn btn-success"><i class="fas fa-award"></i> <a
                            href="{{route('admin.career.index')}}" style="color: #fff;">All
                            Career Post</a></button>
                </div>
            </div>
        </div>
        <div class="panel_body">
            <form class="form-horizontal my-5" action="{{route('admin.career.store')}}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    
                    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Designation Name:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="designation" placeholder="Enter Career Designation" required>
                    </div>
                </div>

                <div class="form-group row">
                    
                    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Subject Name:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="subject" placeholder="Enter Career Subject" required>
                    </div>
                </div>

                <div class="form-group row">
                    
                    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Job Type Name:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="jobtype" placeholder="Enter Career Job Type" required>
                    </div>
                </div>

                <div class="form-group row">
                    
                    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Link:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="link" placeholder="Enter Career Link" required>
                    </div>
                </div>
               
              
               


                
                <div class="form-group text-center">

                    <button type="submit" class="btn btn-blue">Add Career Post</button>
                </div>

            </form>

        </div>
    </div>
</section>
@endsection