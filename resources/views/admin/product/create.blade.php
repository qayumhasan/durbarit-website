@extends('admin.master')
@section('contents')
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

				<section class="page_area">
					<div class="panel">
						<div class="panel_header">
							<div class="row">
								<div class="col-md-6">
									<div class="panel_title"><span class="panel_icon"><i class="fas fa-plus-square"></i></span><span>Add Product</span></div>
								</div>
								<div class="col-md-6 text-right">

									<button type="button"  style="margin: 5px;" class="btn btn-success" ><i class="fas fa-award"></i> <a href="{{route('admin.category.index')}}" style="color: #fff;">All Product</a></button>
								</div>
							</div>
						</div>
						<div class="panel_body">
						<form class="form-horizontal" action="{{route('admin.category.store')}}" method="POST" enctype="multipart/form-data" >
						          	@csrf
									 <div class="form-group row">
									    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Product Name:</label>
									    <div class="col-sm-6">
									      <input type="text" class="form-control" name="name" required>
									    </div>
									  </div>
                    <div class="form-group row">
 									    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Product Owner:</label>
 									    <div class="col-sm-6">
 									      <input type="text" class="form-control" name="name" required>
 									    </div>
 									  </div>
                    <div class="form-group row">
 									    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Category:</label>
 									    <div class="col-sm-6">
 									      <select class="form-control" name="name">
                          <option>new</option>
                          <option></option>
                          <option></option>
                        </select>
 									    </div>
 									  </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Product Details:</label>
                      <div class="col-sm-6">
                        <textarea class="form-control" name="name" id=""></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Feature:</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="name">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Release Log:</label>
                      <div class="col-sm-6">
                        <textarea class="form-control" name="name" id=""></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Compatible Browser:</label>
                      <div class="col-sm-6">
                        <textarea class="form-control" name="name" id=""></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Compatible Browser:</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="name" id="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Software Version:</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="name" id="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Demo Url:</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="name" id="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Demo Url:</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="name" id="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Resulation:</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="name" id="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Framework:</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="name" id="">
                      </div>
                    </div>
									  <div class="form-group row">
									    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Meta Tag:</label>
									    <div class="col-sm-6">
									      <input type="text" name="meta_tag" class="form-control" data-role="tagsinput">
									    </div>
									  </div>
                    <div class="form-group row">
                     <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Meta Description:</label>
                     <div class="col-sm-6">
                       <input type="text" name="meta_tag" class="form-control" data-role="tagsinput">
                     </div>
                   </div>
                     <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Screenshot:</label>
                      <div class="col-sm-6">
                        <input type="text" name="meta_tag" class="form-control" data-role="tagsinput">
                      </div>
                    </div>
                    <div class="form-group row">
                     <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Image Gallary:</label>
                     <div class="col-sm-6">
                       <input type="text" name="meta_tag" class="form-control" data-role="tagsinput">
                     </div>
                   </div>

								    <div class="form-group text-center">
								    	<button type="submit" class="btn btn-blue">Add product</button>
								    </div>

							</form>

						</div>
					</div>
				</section>




@endsection
