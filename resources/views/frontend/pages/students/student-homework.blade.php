@extends('layouts.masterStudent')
@section('title','Student Homework')
@push('css')
    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{asset('asset/css/student-homework.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('asset/css/mdb.min.css')}}">

    <style>
        #std-homework-find-lesson-sec{
            text-align: center;
            width: 100%;
        }
        .customSearch{
            display: inline-block;
            font-weight: 500;
            text-align: center;
            letter-spacing: 2px;
            white-space: nowrap;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            /* border: 1px solid #ffc600; */
            padding: 15 59px;
            font-size: 11px !important;
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            line-height: 20px;
            border-radius: 0px;
            color: #ffffff;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            z-index: 5;
        }
        .customTableSetting{
            text-align: center;
            width: 100%;
        }
        .customStudent{
            text-align: -webkit-center;
            width: 100%;
        }
        #footer-part{
            padding-top: 100px;
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
        .customSearching{
            justify-content: center;
        }
    </style>
@endpush
@section('content')
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
        <div class="container customClass">
            <div class="row justify-content-center">
                <form class="search_form" action="{{route('SearchStudentHomeworks')}}" method="get">
                    <div class="row">
                        <div class="col-md-3" style="padding: 18px;">
                            <select class="selectpicker" name="date_id">
                                <optgroup label="Picnic">
                                    <?php
                                    if(@$Date){
                                    $aray1=[];
                                    $arraytypes=[];  ?>
                                    <?php foreach (@$Date as $key => $Date) {
                                        if(count($aray1)==0){
                                            array_push($aray1,$Date);
                                            array_push($arraytypes,$Date->date);

                                        }else{
                                            if(!in_array($Date->date, $arraytypes)){
                                                array_push($aray1,$Date);
                                                array_push($arraytypes,$Date->date);
                                                $cc=count($arraytypes);

                                            }
                                        }

                                    }
                                    ?>

                                    <option value="">Find Date</option>

                                    @foreach($aray1 as $Date)
                                        <option value="{{$Date->id}}">{{$Date->date}}</option>
                                    @endforeach
                                    <?php      }       ?>
                                </optgroup>
                            </select>

                        </div>

                        <div class="col-md-3"  style="padding: 18px;">
                            <select class="selectpicker" name="subject_id">
                                <optgroup label="Picnic">
                                    <?php
                                    if(@$subjects){
                                    $aray1=[];
                                    $arraytypes=[];  ?>
                                    <?php foreach (@$subjects as $key => $subjects) {
                                        if(count($aray1)==0){
                                            array_push($aray1,$subjects);
                                            array_push($arraytypes,$subjects->name);

                                        }else{
                                            if(!in_array($subjects->name, $arraytypes)){
                                                array_push($aray1,$subjects);
                                                array_push($arraytypes,$subjects->name);
                                                $cc=count($arraytypes);

                                            }
                                        }


                                    }
                                    ?>

                                    <option value="">Find Subjects</option>

                                    @foreach($aray1 as $subjects)
                                        <option value="{{$subjects->id}}">{{$subjects->name}}</option>
                                    @endforeach
                                    <?php      }       ?>
                                </optgroup>
                            </select>

                        </div>

                        <div class="col-md-3"  style="padding: 18px;">
                            <select class="selectpicker" name="title_id">
                                <optgroup label="Picnic">
                                    <?php
                                    if(@$Title){
                                    $aray1=[];
                                    $arraytypes=[];  ?>
                                    <?php foreach (@$Title as $key => $Title) {
                                        if(count($aray1)==0){
                                            array_push($aray1,$Title);
                                            array_push($arraytypes,$Title->title);

                                        }else{
                                            if(!in_array($Title->title, $arraytypes)){
                                                array_push($aray1,$Title);
                                                array_push($arraytypes,$Title->title);
                                                $cc=count($arraytypes);

                                            }
                                        }


                                    }
                                    ?>

                                    <option value="">Find Title</option>

                                    @foreach($aray1 as $Title)
                                        <option value="{{$Title->id}}">{{$Title->title}}</option>
                                @endforeach
                                <?php      }       ?>
                            </select>
                        </div>

                        <div class="col-md-3"  style="padding: 18px;">
                            <button type="submit"  class="customSearch main-slider-btn2 btn btn-warning" value="" style="background-color: #FDBF11;color:white">SEARCH</button>
                        </div>
                    </div>

                </form>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>


    <section class="admission-row pb-120" id="std-homework-table-sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="table-responsive customTableSetting">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col" class="table-heading">SUBJECT</th>
                            <th scope="col" class="table-heading">TITLE</th>
                            <th scope="col" class="table-heading">DUE DATE</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($teacherhomeworkdetail) == 0)
                            <tbody>
                            <tr>
                                <td></td>
                                <td width="80%">
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
                            @foreach($teacherhomeworkdetail as $homework)
                                <tr>
                                    <th scope="row">{{$homework->subject->name}}</th>
                                    <td>{{$homework->lesson->title}}</td>
                                    <td>{{$homework->lesson->date}}</td>
                                    <td>
                                        <a href="{{ url('/view/'.$homework->id)}}">
                                            <button type="button" class="btn btn-indigo btn-sm m-0" id="upload-work-btn">View HOMEWORK</button>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                                </tbody>
                    </table>
                </div>
            </div> <!-- row -->
            @if(count($teacherhomeworkdetail) > 5)
            <div class="col-12 col-12 justify-content-center" id="donate-register-btn-div">
                <a data-animation="fadeInUp" data-delay="2s" class="main-slider-btn2" href="#" id="donate-register-btn">SEE ALL</a>
            </div>
            @endif
        </div> <!-- container -->
    </section>

@endsection
