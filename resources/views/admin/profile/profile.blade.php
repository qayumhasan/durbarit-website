@extends('admin.master')
@section('contents')
<div class="content_wrapper">
     <div class="row">
     	<div class="col-lg-3"></div>
     	<div class="col-lg-6">
     		<div class="card mt-4" style="width: 18rem;">
     		  <img src="{{asset('public/images/user')}}/{{$admin->image}}" class="card-img-top" alt="...">
     		  <div class="card-body">
     		    <h5 class="card-title">{{$admin->name}}</h5>
     		  </div>
     		  <ul class="list-group list-group-flush">
     		    <li class="list-group-item">{{$admin->phone}}</li>
     		    <li class="list-group-item">{{$admin->email}}</li>
     		  </ul>
     		  <div class="card-body">
     		    <a href="{{route('admin.profile.edit',auth()->user()->id)}}" class="card-link">Edit Profile</a>
     		    <a href="{{route('admin.profile.password.page',auth()->user()->id)}}" class="card-link">Password Change</a>
     		  </div>
     		</div>
     	</div>
     </div>
</div>
@endsection