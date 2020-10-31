@extends('layouts.website')
@section('content')
    <!--- team part start -->
    <section id="team">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="team_header">
                        <h3>Team</h3>
                        <span class="triangle_team"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="team_member_sec">
        <div class="container wow animate__animated animate__fadeIn animate__delay-0.9s">
            <div class="row">
            @foreach($team as $allteam)
                <div class="col-sm-4">
                    <div class="staff-member my-lg-3 my-md-3 my-sm-0">
                        <div class="card gray-light-bg text-center border-0 ">
                            <img src="{{asset('public/images/team/'.$allteam->image)}}" alt="team image" class="card-img-top w-100" style="height:320px;">
                            <div class="card-body">
                                <h5 class="teacher mb-0">{{$allteam->name}}</h5>
                                <span>{{$allteam->designation}}</span>
                                <ul class="list-inline pt-2 social">
                                    <li class="list-inline-item"><a href="{{$allteam->facebook}}" target="_blank"><i
                                                class="fab fa-facebook-f"></i></a></li>
                                    <li class="list-inline-item"><a href="{{$allteam->twitter}}" target="_blank"><i
                                                class="fab fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="{{$allteam->linkedin}}" target="_blank"><i
                                                class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <p class="teacher-quote">"{{$allteam->details}}" </p><a href="#" class="teacher-name">
                                    <h5 class="mb-0 teacher text-white">{{$allteam->name}}</h5>
                                </a>
                                <span class="teacher-field text-white">{{$allteam->designation}}</span>
                                <ul class="list-inline py-4 social">
                                    <li class="list-inline-item"><a href="{{$allteam->facebook}}" target="_blank"><i
                                                class="fab fa-facebook-f"></i></a></li>
                                    <li class="list-inline-item"><a href="{{$allteam->twitter}}" target="_blank"><i
                                                class="fab fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="{{$allteam->linkedin}}" target="_blank"><i
                                                class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
  
        
   
       
                  
                
            </div>
        </div>

    </section>
    <!--- team part end -->


@endsection