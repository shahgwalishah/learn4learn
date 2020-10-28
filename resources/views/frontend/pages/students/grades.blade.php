@extends('layouts.masterStudent')
@section('title','level')
@section('content')


@include('frontend.search')
<!-- Card -->
<section id="course-part" class=" bg_cover gray-bg">
    <section id="course-part" class=" bg_cover gray-bg"
        style="background-image: url({{asset('asset/images/teacher-homepage/grades-carousel-bgimg.png')}}">
        <div class="container">
            <div class="teacher-grade-dash-head-div">
                <p class="teacher-grade-dash-head">MY GRADES</p>
            </div>
            <div class="row">
                <div class="col-3"></div>
                <div class="col-lg-6 col-md-6 col-sm-6 item">
                    <div class="pad15">
                        <div class="card box-shadow">
                            <p data-animation="fadeInUp" data-delay="2s" class="main-slider-btn2 grades-details"
                                id="grade-btn-teach">Grades</p>
                            @foreach ($grades as $grade)
                            <p class="grades-details">{{$grade->Subject_name}}
                                <span>{{$grade->grade == '' ? 'Not Graded Yet' : $grade->grade}}</span></p>
                            @endforeach
                            {{-- <div class="col-12 col-12 justify-content-center" id="donate-register-btn-div">
                                <a data-animation="fadeInUp" data-delay="2s" class="main-slider-btn2 grades-details"
                                    href="#" id="donate-register-btn">SEE ALL</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>


@endsection

@push('css')
<!--====== Bootstrap css ======-->
<link rel="stylesheet" href="{{asset('asset/css/student-homepage.css')}}">
<link rel="stylesheet" href="{{asset('asset/css/teacher-homepage.css')}}">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('asset/css/mdb.min.css')}}">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<style type="text/css">
    .schedules .card {
        height: auto;
    }

    .spacing-top {
        margin-top: 20px;
    }

    .card-img-top {
        height: 111px;
        width: 144px;
    }

    #donate-register-btn-div {
        display: block !important;
    }

    .image-card {
        max-width: 400px;
    }
</style>
@endpush
