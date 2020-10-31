@extends('layouts.website')
@section('content')
<section id="career">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="career_header">
                        <h3>{{$pagedetails->title}}</h3>
                        <span class="triangle_career"></span>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <div id="career_post">
        <div class="container">

            <div class="row">
                <div class="col-sm-12">
                    <div class="para_career wow animate__animated animate__fadeIn animate__delay-0.7s text-center ">
                        <p>{!! $pagedetails->description !!}</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!--- career part end -->
@endsection