@extends('admin.master')
@section('contents')

					<section class="page_content">
						<!-- panel -->
						<div class="panel mb-0">
							<div class="panel_header">
								<div class="row">
									<div class="col-md-6">
										<div class="panel_title">
											<span class="panel_icon"><i class="fas fa-border-all"></i></span><span>All Category</span>
										</div>
									</div>
									<div class="col-md-6 text-right">
										<div class="panel_title">
											<button type="button"  style="margin: 5px;" class="btn btn-success" ><i class="fas fa-plus"></i> <a href="{{route('admin.category.create')}}" style="color: #fff;">Add Category</a></button>
										</div>
									</div>
								</div>

							</div>
							<form action="" method="post">
						     @csrf
							<!-- <button type="submit" style="margin: 5px;" class="btn btn-danger" ><i class="fa fa-trash"></i> Delete All</button> -->
							<div class="panel_body">
								<div class="table-responsive">
		                         <table id="dataTableExample1" class="table table-bordered table-striped table-hover mb-2">
		                              <thead>
		                                  <tr>
		                                      <th>
                      												<label class="chech_container mb-4">
                      													<input type="checkbox"  id="check_all">
                      													<span class="checkmark"></span>
                      												</label>
		                                      </th>
		                                      <th>#</th>
		                                      <th>Category Name</th>
		                                      <th>manage</th>
		                                  </tr>
		                              </thead>
		                              <tbody>
		          						@foreach($category as $key => $data)
		                                  <tr>
	                                  		  <td>
																						<label class="chech_container mb-4">
																							<input type="checkbox" name="delid[]" class="checkbox" value="{{$data->id}}">
																							<span class="checkmark"></span>
																						</label>
		                                      </td>
																					<td>{{++$key}}</td>
		                                      <td>{{$data->name}}</td>
		                                       <td>
		                                           <a href="{{url('admin/category/edit/'.$data->id)}}" class="btn btn-primary btn-sm text-white"  title="Edit"><i class="fas fa-pencil-alt"></i></a>
		                                           <a id="delete" href="{{url('admin/category/destroy/'.$data->id)}}" class="btn btn-danger btn-sm text-white" data-toggle="tooltip" data-placement="right" title="Delete" data-original-title="Delete"><i class="far fa-trash-alt"></i></a>
		                                       </td>
		                                  </tr>
		                    			@endforeach
		                              </tbody>
		                          </table>
		                      </div>
							</div>
						  </form>
						</div>
					</section>


@endsection
