@extends('admin.master')
@section('contents')

        <section>
            <div class="mailbox">
                <div class="mailbox-header">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="inbox-avatar"><img src="{{asset('public/adminpanel/assets/images/admin.jpg')}}" class="img-circle border-green" alt="img">
                                <div class="inbox-avatar-text">
                                    <div class="avatar-name">JH Ripon</div>
                                    <div><small>Mailbox</small></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8 float-right">
                            <div class="inbox-toolbar btn-toolbar text-right">
                                <div class="btn-group">
                                    <a href="{{route('admin.compose.create')}}" class="btn btn-blue"><i class="far fa-edit"></i> Compose Email</a>
                                </div>
                                <div class="btn-group ml-1">
                                    <a href="#" onclick="
                                            event.preventDefault();
                                            document.getElementById('draftDeleteForm').submit();
                                        " class="btn btn-danger"><span class="fa fa-trash"></span> Delete
                                    </a>
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
                                        <li class="active"><a  href="{{route('admin.contactmessage.index')}}"><i class="fa fa-inbox"></i><span class="pl-2">Inbox</span><small class="float-right label p-1 rounded bg-danger text-white"></small></a></li>
                                        <li><a href="{{route('admin.compose.create')}}"><i class="far fa-paper-plane"></i><span class="pl-2">Send Mail</span></a></li>
                                        <li><a href=""><i class="fa fa-archive"></i><span class="pl-2">Drafts</span></a></li>
                                        <!-- <li><a href=""><i class="fa fa-trash"></i><span class="pl-2">Tresh</span></a></li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 border border-right-0 border-top-0 border-bottom-0 pl-md-0">
                        <div class="p-0 inbox-mail">
                            <div class="mailbox-content">
                            <form action="" method="POST" id="draftDeleteForm">
                                @csrf
                                @foreach ($drafts as $draft)
                                <div class="mailbox_inner">
                                    <div class="i-check mail-check">
                                        <div class="pl-0 checkbox checkbox-success">
                                        <input id="delId" name="draftDeleteId[]" value="{{ $draft->id }}" type="checkbox">
                                            <label for="mailid2"></label>
                                        </div>
                                    </div>
                                <a href="" class="inbox_item unread">
                                        <div class="inbox-avatar">
                                            <div class="inbox-avatar-text">
                                            <div class="avatar-name"></div>
                                            <div>
                                                <small>
                                                    <span>
                                                        <strong>Name: {{$draft->name}} </strong>
                                                        <span>  </span>
                                                    </span>
                                                </small>
                                            </div>
                                            </div>
                                                <div class="inbox-date d-none d-lg-block">
                                                    <div><small>Writter At: {{$draft->created_at}}</small></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                                </form>
                                </div>
                                <div class="d-flex justify-content-end m-2">
                                    <ul class="pagination">
                                      {{$drafts->links()}}
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>


@endsection
