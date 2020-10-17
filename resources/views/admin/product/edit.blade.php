@extends('admin.master')
@section('contents')


				<section class="page_area">
					<div class="panel">
						<div class="panel_header">
							<div class="row">
								<div class="col-md-6">
									<div class="panel_title"><span class="panel_icon"><i class="fas fa-plus-square"></i></span><span>Update Product</span></div>
								</div>
								<div class="col-md-6 text-right">

									<button type="button"  style="margin: 5px;" class="btn btn-success" ><i class="fas fa-award"></i> <a href="{{route('admin.product.index')}}" style="color: #fff;">All Product</a></button>
								</div>
							</div>
						</div>
						<div class="panel_body">


						<form class="form-horizontal" action="{{route('admin.product.update',$data->id)}}" method="POST" enctype="multipart/form-data">
						          	@csrf
									 <div class="form-group row">
									    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Product Name:</label>
									    <div class="col-sm-6">
									      <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$data->product_name}}">
									      <input type="hidden" name="id" value="{{$data->id}}">
                        @error('name')
                            <div class="alert asif">{{ $message }}</div>
                        @enderror
									    </div>
									  </div>
                    <div class="form-group row">
 									    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Product Sku:</label>
 									    <div class="col-sm-6">
 									      <input type="text" class="form-control  @error('sku') is-invalid @enderror" name="sku" value="{{$data->sku}}">
                        @error('sku')
                            <div class="alert asif">{{ $message }}</div>
                        @enderror
 									    </div>
 									  </div>
                    <div class="form-group row">
 									    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Product Owner:</label>
 									    <div class="col-sm-6">
 									      <input type="text" class="form-control  @error('owner') is-invalid @enderror" name="owner" value="{{$data->owner}}">
                        @error('owner')
                            <div class="alert asif">{{ $message }}</div>
                        @enderror
 									    </div>
 									  </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Product Version:</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="version" value="{{$data->version}}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Regular Price:</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control @error('reqular_price') is-invalid @enderror" name="reqular_price" value="{{$data->reqular_price}}">
                        @error('reqular_price')
                            <div class="alert asif">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Regular Price Feature:</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="reqular_price_feture" data-role="tagsinput" value="{{$data->reqular_price_feture}}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label text-right">premium Price:</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="premium_price" value="{{$data->premium_price}}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label text-right">premium Price Feature:</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="premium_price_feture" data-role="tagsinput" value="{{$data->premium_price_feture}}">
                      </div>
                    </div>
                    <div class="form-group row">
 									    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Category:</label>
 									    <div class="col-sm-6">
 									      <select class="form-control" name="cate_id">
                          @foreach($category as $cate)
                          <option value="{{$cate->id}}" @if($data->category_id==$cate->id) selected @endif>{{$cate->name}}</option>
                          @endforeach
                        </select>
 									    </div>
 									  </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Product Details:</label>
                      <div class="col-sm-6">
                        <textarea class="form-control" name="product_details" id="editor1" rows="10" cols="80">{{$data->product_details}}</textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Feature:</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="feature" data-role="tagsinput" value="{{$data->feature}}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Release Log:</label>
                      <div class="col-sm-6">
                        <textarea class="form-control" name="release_log">{{$data->release_log}}</textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Compatible Browser:</label>
                      <div class="col-sm-6">
                      <input type="text" class="form-control" name="compatible_browser" data-role="tagsinput" value="{{$data->compatible_browser}}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Software Version:</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="software_version" data-role="tagsinput" value="{{$data->software_version}}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Demo Url:</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control  @error('demourl') is-invalid @enderror" name="demourl" value="{{$data->demourl}}">
                        @error('demourl')
                            <div class="alert asif">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>

                      <div class="form-group row skin-square">
                        <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Resulation:</label>
                        <div class="col-sm-6">
                            <select class="form-control" name="resulation">
                                <option value="1" @if($data->resulation==1) selected @endif>High</option>
                                <option value="2" @if($data->resulation==2) selected @endif>Medium</option>
                                <option value="3" @if($data->resulation==3) selected @endif>Low</option>
                            </select>
                        </div>
                      </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Framework:</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="framework" id="" value="{{$data->framework}}">
                      </div>
                    </div>
									  <div class="form-group row">
									    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Meta Tag:</label>
									    <div class="col-sm-6">
									      <input type="text" name="meta_tag" class="form-control" data-role="tagsinput" value="{{$data->meta_tag}}">
									    </div>
									  </div>
                    <div class="form-group row">
                     <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Meta Description:</label>
                     <div class="col-sm-6">
                        <textarea class="form-control" name="meta_description" id="">{{$data->meta_tag}}</textarea>
                     </div>
                   </div>

                   <div class="form-group row">
                     <label for="" class="col-sm-3 col-form-label text-right">Thumbnail Image</label>
                     <div class="col-md-4">
                       @if ($data->image != null)
                         <div class="col-md-4">
                           <div class="img-upload-preview">
                             <button type="button" class="btn btn-danger close-btn remove_files" id="remove_file"><i class="fa fa-times remove-files"></i></button>
                             <img src="{{asset('public/uploads/product/'.$data->image)}}" alt="" class="img-responsive" height="200px">
                             	<input type="hidden" name="previous_thumbnail_img" value="{{ $data->image }}">
                           </div>
                         </div>
                       @endif
                       <br>
                     </div>
                     <div class="col-md-5">
                       <div id="thumbnail_img" class="">

                        </div>
                     </div>

                   </div>
                    <div class="form-group row">
                     <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Image Gallary:</label>
                     <div class="col-sm-6">
                       <div id="photos" class="row">
                         @if(is_array(json_decode($data->gallary_image)))
    											@foreach (json_decode($data->gallary_image) as $key => $photo)
    												<div class="col-md-4 col-sm-4 col-xs-6">
    													<button type="button" class="btn btn-danger close-btn remove_files"><i class="fa fa-times"></i></button>
    													<div class="img-upload-preview">
    														<img src="{{url('storage/app/public/'.$photo) }}" alt="" height="150px" width="170px;">
    														<input type="hidden" name="previous_photos[]" value="{{ $photo }}">
    													</div>
    												</div>
    											@endforeach
    										@endif
                      </div>
                     </div>
                   </div>
								    <div class="form-group text-center">
								    	<button type="submit" class="btn btn-blue">Update product</button>
								    </div>
							</form>
						</div>
					</div>
				</section>




@endsection
