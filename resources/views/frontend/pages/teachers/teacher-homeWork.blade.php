@extends('layouts.teachersmaster')

@section('title','Student Homework')
@section('content')
<style>
    @media( max-width: 377px)
    {
        #std-homework-table-sec{
            width: 100%;
        }
    }
    #std-homework-find-lesson-sec{
        text-align: center;
        width: 100%;
    }
    .customFieldStyling{
        text-align: center;
        max-width: 100%;
    }
    .customHomeSetting{
        text-align: -webkit-center;
        width: 100%;
    }
    .customSearchField{
            text-align: -webkit-center;
            width: 100%;
        }
        .customDanger{
        background-color: #ffc10e;
        color: #fff;
        width: 100%;
        font-size: 1rem;
        padding: .75rem 1.25rem;
        border: 1px solid transparent;
    }
    .customAlertDAnger{
        background-color: #ffc10e;
        color: #fff;
        width: 100%;
        font-size: 1rem;
        padding: .75rem 1.25rem;
        border: 1px solid transparent;
    }
    .customDangerContainer{
        display: flex;
        justify-content: center;
    }
</style>
@include('frontend.search')
<!-- Card -->

<section id="about-part" class="about-tow pt-65">
    <div class="about-shape">
    </div>
    <h5 style="text-align: center;color: #006796;font-size: 28px;letter-spacing: 5px;">Find A Lesson</h5>
    <!-- container -->
</section>

<!--====== ABOUT PART ENDS ======-->

<!--====== ADMISSION PART START ======-->

<section class="admission-row pb-120" id="std-homework-find-lesson-sec">
    <div class="container">
        <div class="row justify-content-center">
            <form class="search_form" action="{{ route('SearchHomeworks') }}" method="get">
                @csrf
                <div class="row">
                    <div class="col-md-3" style="padding: 18px;">
                        <select class="selectpicker" name="subject_id">
                            <optgroup label="Picnic">
                                <option value="">Find Subjects</option>

                                @foreach($subjects as $subject)
                                <option value="{{$subject->id}}">{{$subject->name}}</option>
                                @endforeach
                            </optgroup>
                        </select>

                    </div>

                    <div class="col-md-3" style="padding: 18px;">
                        <select class="selectpicker" name="title_id">
                            <optgroup label="Picnic">
                                <option value="">Find Subjects</option>

                                @foreach($Title as $Title)
                                <option value="{{$Title->title}}">{{$Title->title}}</option>
                                @endforeach
                        </select>

                    </div>

                    <div class="col-md-3" style="padding: 18px;">
                        <select class="selectpicker" name="date_id">
                            <optgroup label="Picnic">

                                <option value="">Find Subjects</option>

                                @foreach($Date as $Date)
                                <option value="{{$Date->date}}">{{$Date->date}}</option>
                                @endforeach
                            </optgroup>
                        </select>

                    </div>

                    <div class="col-md-3" style="padding: 18px;">
                        <button type="submit" class="main-slider-btn2 btn btn-warning" value=""
                            style="background-color: #FDBF11;color:white;padding:0 23px;">SEARCH</button>
                    </div>
                </div>

            </form>
        </div> <!-- row -->
    </div> <!-- container -->
</section>


<section class="admission-row pb-120" id="std-homework-table-sec">
    <div class="container">
        <div class="row justify-content-center">
            <div class="table-responsive table-home-assign">
                <table class="table  customFieldStyling">
                    <thead>
                        <tr>
                            <th scope="col" class="table-heading">SUBJECT</th>
                            <th scope="col" class="table-heading">TITLE</th>
                            <th scope="col" class="table-heading">DATE</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                    @if(count($Lessonss) == 0)
                    <tbody>
                            <tr>
                                <td></td>
                                <td width="100%">
                                <div class="alert alert-danger customDanger">
                                    <div class="container customDangerContainer">
                                        <div class="alert-icon">
                                            <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                                        </div>&nbsp;&nbsp;&nbsp;No Data Found
                                    </div>
                                </div>
                                </td>
                                <td></td>
                            </tr>
                        </tbody>
                    @else
                        @foreach($Lessonss as $lesson)
                        <tr>
                            <th scope="row">{{$lesson->sub_name}}</th>
                            <td>{{$lesson->title}}</td>
                            <td>{{$lesson->date}}</td>

                            <td colspan="3">
                                <a href="{{route('addsubjecthomework', ['lesson' => $lesson->id,'subject' => $lesson->id])}}"><button
                                        type="button" class="btn btn-indigo ml-2 btn-sm m-0" id="upload-work-btn">ASSIGN
                                        HOMEWORK</button></a>

                                <a href="{{route('addsubjecthomework', ['lesson' => $lesson->id,'subject' => $lesson->id])}}"><button
                                        type="button" class="btn btn-indigo ml-2 btn-sm m-0"
                                        style="background-color: #ffc10e !important;" id="upload-work-btn">DOWNLOAD
                                        HOMEWORK</button></a>
                                <a href="{{route('assignGradeToHomeWork',[$lesson->id])}}" class="btn  ml-2 btn-indigo btn-sm m-0" id="view-lesson-btn">Grade</a>
                            </td>
                        </tr>

                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

@endsection

@push('css')
<!--====== Bootstrap css ======-->
<link rel="stylesheet" href="{{asset('asset/css/teacher-homework-assign.css')}}">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('asset/css/mdb.min.css')}}">

<style>
    .nice-select.selectpicker {
        width: 100% !important;
    }

    .single-slider.slider-4.bg_cover.pt-150.slick-slide.slick-current.slick-active {
        background-position: unset !important;
    }

    .single-slider {
        padding-bottom: 110px !important;
    }

    ._profile_image {
        display: inline-block;
        border: 2px solid gray;
        height: 80px;
        width: 80px;
        border-radius: 50%;
        position: absolute;
        z-index: 999;
        background: white;
    }

    @media (max-width: 1440px) {
        .ccontainer {
            max-width: 1074px;
            padding-left: 0px !important;
        }
    }

    @media (max-width: 1440px) {
        .cfiltercontainer {
            max-width: 1250px;
            padding-left: 0px !important;
        }
    }

    @media (max-width: 767.98px) and (min-width: 576px) {
        .about-tow {
            padding: 45px 0px 15px 0px !important;
        }
    }

    @media only screen and (max-width: 575.98px) {
        .admission-row {
            padding-bottom: 14px;
            width: 100%;
            margin: 0 auto;
        }
    }
</style>
@endpush
