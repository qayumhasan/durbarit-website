@extends('admin.master')
@section('contents')
<section class="page_area">
    <div class="panel">
        <div class="panel_header">
            <div class="row">
                <div class="col-md-6">
                    <div class="panel_title"><span class="panel_icon"><i class="fas fa-plus-square"></i></span><span>All
                            teams</span></div>
                </div>
                <div class="col-md-6 text-right">

                    <button type="button" style="margin: 5px;" class="btn btn-success"><i class="fas fa-award"></i> <a
                            href="{{route('admin.team.index')}}" style="color: #fff;">All
                            team</a></button>
                </div>
            </div>
        </div>
        <div class="panel_body">
            <form class="form-horizontal my-5" action="{{route('admin.team.store')}}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    
                    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Team Name:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="name" placeholder="Enter Name" required>
                    </div>
                </div>

                <div class="form-group row">
                    
                    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Designation:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="designation" placeholder="Enter Designation Name" required>
                    </div>
                </div>
                

                <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Details:</label>
                    <div class="col-sm-6">
                        <textarea name="details" id="editor1" rows="10" cols="80" required>
                           
                        </textarea>
                    </div>
                </div>

                <div class="form-group row">
                    
                    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Facebook:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="facebook" placeholder="Enter Team Member Facebook Link " required>
                    </div>
                </div>

                <div class="form-group row">
                    
                    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Twitter:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="twitter" placeholder="Enter Team Member Twitter Link " required>
                    </div>
                </div>

                <div class="form-group row">
                    
                    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Linked In:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="linkedin" placeholder="Enter Team Member Linked In Link " required>
                    </div>
                </div>
                <div class="form-group row">
                    
                    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Phone:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="phone" placeholder="Enter Team Member Phone Number " required>
                    </div>
                </div>
               
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Image:</label>
                    <div class="col-sm-6">
                        <input type="file" name="image" required>
                        <p>(270px*270px)</p>
                    </div>
                </div>
               


                
                <div class="form-group text-center">

                    <button type="submit" class="btn btn-blue">Add team</button>
                </div>

            </form>

        </div>
    </div>
</section>
@endsection