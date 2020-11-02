@extends('layouts.teachersmaster')
@section('title','Grade HomeWork')
@push('css')
    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{asset('asset/css/teacher-homework-assign.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('asset/css/mdb.min.css')}}">
    <style>
        .nice-select.open .list {
            opacity: 1;
            pointer-events: auto;
            -webkit-transform: scale(1) translateY(0);
            -ms-transform: scale(1) translateY(0);
            transform: scale(1) translateY(-281px);
        }
        .stu-home-dash-head-div hr {
            border-top: 2px solid #036893 !important;
            margin-top: inherit;
            width: 278px;
        }
        #std-dashboard-left {
            background-color: #fff !important;
            padding-bottom: 31px;
            padding-top: 20px;
        }
        section.dashboard-section {
            background-color: #fff !important;
        }
        .stu-home-dash-head-head {
            font-weight: 700;
            color: #036893 !important;
            font-size: 22px;
            letter-spacing: 2px;
            text-align: center;
        }
        .stu-home-dash-head-div hr {
            border-top: 2px solid #036893 !important;
            margin-top: inherit;
            width: 278px;
        }
        #view-lesson-btn {
            font-weight: 600;
            letter-spacing: 1px;
            padding-top: 13px;
            padding-bottom: 13px;
            padding-left: 47px;
            padding-right: 46px;
        }
        select{
            display: inline-block !important;
            width: 146px !important;
            position: relative;
            top: 2px;
            height: 42px !important;
        }
        .nice-select {
            display: none !important;
        }
        .current{
            position: relative;
            bottom: 7px;
        }
    </style>
@endpush
@section('content')
    <section id="slider-part" class="slider-active">
        <div class="single-slider slider-4 bg_cover pt-150"
             style="background-repeat: no-repeat; background:linear-gradient( rgba(0, 0, 0, 0.5) 100%, rgba(0, 0, 0, 0.5)100%), url({{asset('asset/images/student-lesson-search/banner.jpg')}}">
            <div class="container">
                <div class="row" style="justify-content: center;">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont slider-cont-4 text-center">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="What are you looking for?">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->
    </section>
    <!-- Card -->
    <!--====== ABOUT PART ENDS ======-->

    <!--====== ADMISSION PART START ======-->


    <section class="dashboard-section">
        <div class="container">
            <div class="row d-flex justify-content-center text-center h-100">
                <div class="col-12" id="std-dashboard-left">
                    <div class="stu-home-dash-head-div">
                        <p class="stu-home-dash-head-head">GRADE HOMEWORK</p>
                        <hr>
                    </div>
                    @if(session()->has('message_home_work'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>Alert:</strong> {!! session('message_home_work') !!}
                        </div>
                    @endif
                    <div class="table-responsive table-home-assign">
                        <table class="table  customFieldStyling">
                            <thead>
                            <tr>
                                <th scope="col" class="table-heading">STUDENT</th>
                                <th scope="col" class="table-heading">TITLE</th>
                                <th scope="col" class="table-heading">SUBJECT</th>
                                <th scope="col"></th>
                                <th scope="col">PICK GRADE</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($grades as $grade)
                            <tr>
                                <th scope="row">{{$grade->student->fname}}-{{$grade->student->lname}}</th>
                                <td>{{$grade->lesson->title}}</td>
                                <td>{{$grade->subject->name}}</td>

                                <td colspan="3">
                                    <a href="{{route('addsubjecthomework', ['lesson' => $grade->id,'subject' => $grade->id])}}"><button
                                            type="button" class="btn btn-indigo ml-2 btn-sm m-0" id="upload-work-btn">SEE
                                            HOMEWORK</button></a>
                                    <select class="form-control" id="grade-{{$grade->id}}" onchange="selectGrade('{{$grade->id}}')" name="subject" required="true">
                                        <option value="">Select Grade</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                        <option value="E">E</option>
                                        <option value="F">F</option>
                                    </select>
                                    <a href="javascript:;" onclick="submitForm()" style="background-color: #ffc10e!important;" class="btn  ml-2 btn-indigo btn-sm m-0" id="view-lesson-btn">SAVE</a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <form style="display: none;" id="submitGradeForm" action="{{route('AssignGradeToHomeWork')}}" method="POST">
                            @csrf
                            <input type="hidden" id="grade_value" value="" name="grade" />
                            <input type="hidden" value="" id="homworkId" name="id" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script>
        function selectGrade(id){
            let grade = $('#grade-'+id).val();
            $('#grade_value').val(grade);
            $('#homworkId').val(id);
        }
        function submitForm(){
            let value = $('#grade_value').val();
            if(value) {
                $('#submitGradeForm').submit();
            } else {
                alert('please select grade first');
            }
        }
    </script>
@endsection
