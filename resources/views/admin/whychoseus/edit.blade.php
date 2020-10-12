@extends('admin.master')
@section('contents')
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

				<section class="page_area">
					<div class="panel">
						<div class="panel_header">
							<div class="row">
								<div class="col-md-6">
									<div class="panel_title"><span class="panel_icon"><i class="fas fa-plus-square"></i></span><span>Update Whychoseus</span></div>
								</div>
								<div class="col-md-6 text-right">

									<button type="button"  style="margin: 5px;" class="btn btn-success" ><i class="fas fa-award"></i> <a href="{{route('admin.whychoseus.index')}}" style="color: #fff;">All Whychoseus</a></button>
								</div>
							</div>
						</div>
						<div class="panel_body">
						<form class="form-horizontal" action="{{route('admin.whychoseus.update',$data->id)}}" method="POST" enctype="multipart/form-data" >
						          	@csrf
									 <div class="form-group row">
									    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Title</label>
									    <div class="col-sm-6">
									      <input type="text" class="form-control" name="title" value="{{$data->title}}">
									    </div>
									  </div>
									  <div class="form-group row">
									    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Meta Tag:</label>
									    <div class="col-sm-6">
									      <textarea  name="details" class="form-control">{{$data->details}}</textarea>
									    </div>
									  </div>
								    <div class="form-group text-center">
								    	<button type="submit" class="btn btn-blue">Update Category</button>
								    </div>

							</form>

						</div>
					</div>
				</section>




@endsection
