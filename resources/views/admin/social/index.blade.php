@extends('admin.master')
@section('contents')

    <section class="page_area">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="panel">
                    <div class="panel_header">
                        <div class="panel_title"><span>Add Social Link</span></div>
                    </div>



                    <div class="panel_body">
                        <div class="col-md-10 offset-md-1">

                            <form class="py-2" action="{{route('admin.social.update')}}" method="post">
                                @csrf

                            <div class="form-group row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-12">
                                     <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text" id=""><i class="fab fa-facebook"></i></span>
                                      </div>
                                      <input type="hidden" name="id" class="form-control" value="{{$data->id}}">
                                      <input type="text" name="facebook" class="form-control" placeholder="Facebook" value="{{$data->facebook}}">
                                      <br>
                                      @error('facebook')
                                      <div class="text-danger">
                                        <span>{{$message}}</span>
                                      </div>
                                      @enderror
                                    </div>

                                </div>
                            </div>

                             <div class="form-group row">
                              <div class="col-sm-2"></div>
                                <div class="col-sm-12">
                                     <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fab fa-twitter"></i></span>
                                      </div>
                                      <input type="text" name="twitter" class="form-control"  placeholder="Twitter" value="{{$data->twitter}}"><br>
                                      @error('twitter')
                                      <div class="text-danger">
                                        <span>{{$message}}</span>
                                      </div>
                                      @enderror
                                    </div>

                                </div>
                            </div>
                             <div class="form-group row">
                              <div class="col-sm-2"></div>
                                <div class="col-sm-12">
                                     <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fab fa-youtube"></i></span>
                                      </div>
                                      <input type="text" name="youtube" class="form-control" placeholder="Youtube" value="{{$data->youtube}}"><br>
                                      @error('youtube')
                                      <div class="text-danger">
                                        <span>{{$message}}</span>
                                      </div>
                                      @enderror
                                    </div>

                                </div>
                            </div>
                             <div class="form-group row">
                              <div class="col-sm-2"></div>
                                <div class="col-sm-12">
                                     <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fab fa-instagram"></i></span>
                                      </div>
                                      <input type="text" name="instragram" class="form-control" placeholder="Instragram" value="{{$data->instragram}}"><br>
                                      @error('instagram')
                                      <div class="text-danger">
                                        <span>{{$message}}</span>
                                      </div>
                                      @enderror
                                    </div>

                                </div>
                            </div>
                            <div class="form-group row">
                             <div class="col-sm-2"></div>
                               <div class="col-sm-12">
                                    <div class="input-group mb-3">
                                     <div class="input-group-prepend">
                                       <span class="input-group-text" id="basic-addon1"><i class="fab fa-linkedin-in"></i></span>
                                     </div>
                                     <input type="text" name="linkend" class="form-control" placeholder="linkend" value="{{$data->linkend}}"><br>
                                     @error('linkend')
                                     <div class="text-danger">
                                       <span>{{$message}}</span>
                                     </div>
                                     @enderror
                                   </div>

                               </div>
                           </div>

                            <div class="form-group row ">
                              <div class="col-sm-2"></div>
                                <div class="col-sm-12">
                                     <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fab fa-google-plus"></i></span>
                                      </div>
                                      <input type="text" name="google" class="form-control" placeholder="Goole plus" value="{{$data->google}}"><br>
                                      @error('google')
                                        <span class="text-danger">{{$message}}</span>
                                      @enderror
                                    </div>

                                </div>
                            </div>
                            <div class="form-group row ">
                              <div class="col-sm-2"></div>
                                <div class="col-sm-12">
                                     <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-rss"></i></span>
                                      </div>
                                      <input type="text" name="feed" class="form-control" placeholder="" value="{{$data->feed}}"><br>
                                      @error('google')
                                        <span class="text-danger">{{$message}}</span>
                                      @enderror
                                    </div>

                                </div>
                            </div>





                          <div class="form-group row text-center">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-12">
                                    <input class="btn btn-primary" type="submit" value="Update Social Link">
                                </div>
                            </div>
                            </form>
                        </div>
                        <!-- end panel -->
                    </div>
                </div>
            </div>

        </div><!-- /row -->
    </section>

@endsection
