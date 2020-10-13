@extends('admin.master')
@section('contents')
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

				<section class="page_area">
					<div class="panel">
						<div class="panel_header">
							<div class="row">
								<div class="col-md-6">
									<div class="panel_title"><span class="panel_icon"><i class="fas fa-plus-square"></i></span><span>Update SEO Setting</span></div>
								</div>
								<div class="col-md-6 text-right">

								</div>
							</div>
						</div>
						<div class="panel_body">
						<form class="form-horizontal" action="{{route('admin.seo.update',$data->id)}}" method="POST" enctype="multipart/form-data" >
						          	@csrf
									 <div class="form-group row">
									    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Meta Title:</label>
									    <div class="col-sm-6">
									      <input type="text" class="form-control" name="meta_title" value="{{$data->meta_title}}">
									    </div>
									  </div>
                    <div class="form-group row">
                       <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Meta Author:</label>
                       <div class="col-sm-6">
                         <input type="text" class="form-control" name="meta_author" value="{{$data->meta_author}}">
                       </div>
                     </div>
                     <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Meta Keyword:</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" name="meta_keyword" data-role="tagsinput" value="{{$data->meta_keyword}}">
                        </div>
                     </div>
                    <div class="form-group row">
                       <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Meta Description:</label>
                       <div class="col-sm-6">
                         <textarea  class="form-control" name="meta_description">{{$data->meta_description}}</textarea>
                       </div>
                     </div>
                     <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Google Analytics:</label>
                        <div class="col-sm-6">
                             <input type="text" class="form-control" name="google_analitics" value="{{$data->google_analitics}}">
                        </div>
                      </div>
                     <div class="form-group row">
  									    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Google Verification</label>
  									    <div class="col-sm-6">
  									      <input type="text" class="form-control" name="google_verification" value="{{$data->google_verification}}">
  									    </div>
  									  </div>
                      <div class="form-group row">
                         <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Bing Verification:</label>
                         <div class="col-sm-6">
                           <input type="text" class="form-control" name="bing_verification" value="{{$data->bing_verification}}">
                         </div>
                       </div>
                       <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Alexa Analytics:</label>
                          <div class="col-sm-6">
                            <input type="text" class="form-control" name="alexa_analytics" value="{{$data->alexa_analytics}}">
                          </div>
                        </div>
                        <div class="form-group row">
                           <label for="inputEmail3" class="col-sm-3 col-form-label text-right"></label>
                           <div class="col-sm-6 text-center">
                             <button type="submit" class="btn btn-blue">Update ContactInformation</button>
                           </div>
                         </div>


							</form>

						</div>
					</div>
				</section>




@endsection
