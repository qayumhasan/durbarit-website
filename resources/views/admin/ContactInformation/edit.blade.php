@extends('admin.master')
@section('contents')
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

				<section class="page_area">
					<div class="panel">
						<div class="panel_header">
							<div class="row">
								<div class="col-md-6">
									<div class="panel_title"><span class="panel_icon"><i class="fas fa-plus-square"></i></span><span>Update ContactInformation</span></div>
								</div>
								<div class="col-md-6 text-right">

								</div>
							</div>
						</div>
						<div class="panel_body">
						<form class="form-horizontal" action="{{route('admin.contactinformation.update',$data->id)}}" method="POST" enctype="multipart/form-data" >
						          	@csrf
									 <div class="form-group row">
									    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Company Name:</label>
									    <div class="col-sm-6">
									      <input type="text" class="form-control" name="company_name" value="{{$data->company_name}}">
									    </div>
									  </div>
                    <div class="form-group row">
                       <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Details:</label>
                       <div class="col-sm-6">
                         <textarea  class="form-control" name="description">{{$data->description}}</textarea>
                       </div>
                     </div>
                     <div class="form-group row">
  									    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Phone:</label>
  									    <div class="col-sm-6">
  									      <input type="text" class="form-control" name="phone" value="{{$data->phone}}">
  									    </div>
  									  </div>
                      <div class="form-group row">
                         <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Email:</label>
                         <div class="col-sm-6">
                           <input type="text" class="form-control" name="email" value="{{$data->email}}">
                         </div>
                       </div>
                       <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Address:</label>
                          <div class="col-sm-6">
                               <textarea  class="form-control" name="address">{{$data->address}}</textarea>
                          </div>
                        </div>

								    <div class="form-group text-center">
								    	<button type="submit" class="btn btn-blue">Update ContactInformation</button>
								    </div>

							</form>

						</div>
					</div>
				</section>




@endsection
