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
						<form class="form-horizontal" action="{{route('admin.product.store')}}" method="POST" enctype="multipart/form-data" >
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
 									      <input type="text" class="form-control" name="owner" required>
 									    </div>
 									  </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Product Version:</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="version" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Regular Price:</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="reqular_price" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label text-right">premium Price:</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="premium_price" required>
                      </div>
                    </div>
                    <div class="form-group row">
 									    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Category:</label>
 									    <div class="col-sm-6">
 									      <select class="form-control" name="cate_id">
                          @foreach($category as $cate)
                          <option value="{{$cate->id}}">{{$cate->name}}</option>
                          @endforeach
                        </select>
 									    </div>
 									  </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Product Details:</label>
                      <div class="col-sm-6">
                        <textarea class="form-control" name="product_details" id="editor1" rows="10" cols="80"></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Feature:</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="feature" data-role="tagsinput">
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
                      <input type="text" class="form-control" name="compatible_browser" data-role="tagsinput" value="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Software Version:</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="software_version" data-role="tagsinput">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Demo Url:</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="demourl" id="">
                      </div>
                    </div>

                      <div class="form-group row skin-square">
                        <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Resulation:</label>
                        <div class="col-sm-6">
                            <select class="form-control" name="resulation">
                                <option value="1">High</option>
                                <option value="2">Medium</option>
                                <option value="3">Low</option>
                            </select>
                        </div>
                      </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Framework:</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="framework" id="">
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
                        <textarea class="form-control" name="meta_description" id=""></textarea>
                     </div>
                   </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Screenshot:</label>
                      <div class="col-sm-6">
                        <div id="thumbnail_img" class="row">

  					           </div>
                      </div>
                    </div>
                    <div class="form-group row">
                     <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Image Gallary:</label>
                     <div class="col-sm-6">
                       <div id="photos" class="row">

                      </div>
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
