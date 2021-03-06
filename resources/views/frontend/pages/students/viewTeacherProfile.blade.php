@extends('layouts.masterStudent')
@section('title','Teacher Profile')
@section('content')

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{asset('asset/css/teacher-profile.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('asset/css/mdb.min-for-teacher-homepage.css')}}">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    
    <section id="slider-part" class="slider-active">
        <div class="single-slider slider-4 bg_cover pt-150" style="background-repeat: no-repeat; background:linear-gradient( rgba(0, 0, 0, 0.5) 100%, rgba(0, 0, 0, 0.5)100%), url({{asset('asset/images/teacher-homepage/teaching_banner.jpg')}}">
            <div class="container" >
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-9">                        
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->
    </section>
<!-- Card -->

{{-- dashboard section --}}
<style>
    #stud-profile-pic{
        border-radius: 110px;
        max-height: 200px;
        min-width: 200px;
    }
    @media(max-width:575px)
    {
        .customPadding{
            width: 100%;
            padding-right: 0px;
            padding-left: 0px;
            margin-right: auto;
            margin-left: auto;
        }
    }
</style>

<section class="dashboard-section">
    <div class="container customPadding">
        <div class="row d-flex justify-content-center text-center h-100">
            <div class="col-12" id="std-dashboard-left">
                <div class="stu-home-dash-head-div">
                    <p class="stu-home-dash-head-head">TEACHER PROFILE</p>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12 justify-content-center text-center">
                        <img src="{{asset('asset/images/teachers/t-1.jpg')}}" alt="" id="stud-profile-pic">
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-12 justify-content-center text-center">
                        <p class="stud-name">Name: {{$db[0]->fname}}</p><br>
                        <p class="stud-date"><b>Country</b>{{$db[0]->country}}</p><br>                      
                        <p class="stud-date"><b>Education:</b> Master Degree</p><br>   
                        <p class="stud-date"><b>Experience</b></p>
                        <p class="stud-date">Year</p>                      
                        <p class="stud-date">Location</p>                
                        <p class="stud-date">Title</p>    <br>            
                        <p class="stud-date"><b>Description: </b> ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p><br>
                        <p class="stud-date">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p><br>
                        <p class="stud-date"><b>Available for 1:1: </b> Yes</p>    <br>

                        <div class="col-12 col-12" id="donate-register-btn-div">
                            <a data-animation="fadeInUp" data-delay="2s" class="main-slider-btn2" href="{{route('viewMessages', [$db[0]->id])}}" id="donate-register-btn">CONTACT</a>
                        </div>
                    </div>
                </div>                
            </div>            
        </div>
    </div>
</section>


<!--Carousel Wrapper-->

{{-- end-dashboard section --}}



    @endsection