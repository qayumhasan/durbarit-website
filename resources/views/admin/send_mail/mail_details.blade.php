@extends('admin.master')
@section('contents')

<link rel="stylesheet" href="{{ asset('public/adminpanel/assets/css/bootstrap-select.min.css') }}">
<!-- content wrpper -->

        <section>
            <div class="mailbox">
                <div class="mailbox-header">
                    <div class="row">
                      <div class="col-sm-4">
                          <div class="inbox-avatar"><img src="{{asset('public/images/user/'.Auth::user()->image)}}" class="img-circle border-green" alt="img">
                              <div class="inbox-avatar-text">
                                  <div class="avatar-name">{{Auth::user()->name}}</div>
                                  <div><small>Mailbox</small></div>
                              </div>
                          </div>
                      </div>
                        <div class="col-sm-8 float-right">
                            <div class="inbox-toolbar btn-toolbar text-right">
                                <div class="btn-group">
                                    <a href="" class="btn btn-blue"><i class="far fa-edit"></i> Compose
                                        Email</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 pr-md-0">
                        <div class="p-0 inbox-nav">
                            <div class="mailbox-sideber">
                                <div class="profile-usermenu">
                                    <h6>Mailbox</h6>
                                    <ul class="nav">
                                      <li><a href="{{route('admin.contactmessage.index')}}"><i class="fa fa-inbox"></i><span class="pl-2">Inbox</span><small class="float-right label p-1 rounded bg-danger text-white"></small></a></li>
                                      <li><a href="{{route('admin.compose.create')}}"><i class="far fa-paper-plane"></i><span class="pl-2">Send Mail</span></a></li>
                                      <li><a href=""><i class="fa fa-archive"></i><span class="pl-2">Drafts</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 border border-right-0 border-top-0 border-bottom-0 pl-md-0">
                        <div class="inbox-mail">
                            <div class="inbox-avatar p-3 border-top-0 border-left-0 border-right-0 border">


                                <div class="inbox-avatar-text">
                                    <div class="avatar-name"><strong>From: </strong>
                                        {{ $mail->name }} - <em> </em>
                                    </div>
                                    <div><small><strong>email: {{ $mail->email }} </strong></small></div>
                                </div>
                                <div class=" text-right">
                                    <div><span class="bg-green badge"><small>OPPORTUNITIES</small></span></div>
                                    <div><small>{{ $mail->created_at }}</small></div>
                                </div>
                            </div>
                            <div class="inbox-mail-details fs-13 p-3">
                                <div>
                                    {!! $mail->message  !!}
                                </div>


                                <div class="mt-3 border p-3 text-right">
                                <p class="pb-3 fs-13">click here to <a href="">Reply</a> or <a
                                href="">Forward</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>


@endsection
