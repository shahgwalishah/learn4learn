@extends('layouts.masterStudent')
@section('title','Student Homepage')
@push('css')
    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{asset('asset/css/student-homepage.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/teacher-homepage.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('asset/css/mdb.min.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
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
    <style>
        .customClassMySch{
            margin-bottom: 10px;
        }
        .customFaCheck{
            font-size: 173px;
            color: #fff;
            margin-bottom: 10px;
        }
        #achieve-div{
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
        }
        @media (max-width: 991px) {
            #achieve-div{
                display: flex;
                align-items: center;
                flex-direction: column;
                justify-content: center;
                flex: 100%;
                max-width: 100%;
            }
            div#std-dashboard-right{
                flex: 100%;
                max-width: 100%;
            }
            #std-dashboard-left{
                flex: 100%;
                max-width: 100%;
            }
            #schedule-div{
                display: flex;
                align-items: center;
                flex-direction: column;
                justify-content: center;
                flex: 100%;
                max-width: 100%;
            }
            #grades-div{
                display: flex;
                align-items: center;
                flex-direction: column;
                justify-content: center;
                flex: 100%;
                max-width: 100%;
            }
            #homework-div{
                display: flex;
                align-items: center;
                flex-direction: column;
                justify-content: center;
                flex: 100%;
                max-width: 100%;
            }

        }
        @media (max-width: 575px) {
            .customFieldSearch{
                padding: 0px;
                max-width: 100%;
                margin: 0px !important;
                width: 100%;
                flex: 100%;
                padding: 0px !important;
            }
            .customClassMySch{
                flex:100%;
                max-width: 100%;
                width: 100%;
                margin-bottom: 5px;
            }
        }
        .customStyleImage{
            width: 140px;
            height: 140px;
        }
        .customAlertDAngerContainer{
            display: flex;
            justify-content: center;
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
        .std-welcome-msg {
            color: #020101;
            line-height: 40px;
            text-align: center;
            padding-bottom: 23px;
            letter-spacing: 2px;
            margin-left: 0px;
        }

        #grade-register-div{
            display: flex;
            align-items: baseline;
            min-height: 86px;
            max-height: 100px;
        }
        #repl1{
            color: rgb(214, 27, 27);
            border: 1px solid red;
        }

        .MultiCarousel .leftLst, .MultiCarousel .rightLst {
            position: absolute;
            border-radius: 50%;
            top: calc(50% - 20px);
            /* width: 34px; */
            /* min-width: 10px; */
            /* max-width: 14px; */
            /* height: 68px; */
            padding: 9px 15px;
        }

        @media (max-width:575px) {
            .customStyle{
                width: 200px;
                height: 200px;
                margin-bottom: 15px;
            }
        }
    </style>
@endpush
@section('content')
    @php
        $user = Auth::user();
    @endphp
   @include('frontend.search')
    <!-- Card -->
    {{-- dashboard section --}}
    <section class="dashboard-section" style="margin-top: -10%;">
        <div class="container">
            <div class="row d-flex justify-content-center text-center h-100">
                <div class="col-6 " id="std-dashboard-left">
                    <div class="stu-home-dash-head-div">
                        <p class="stu-home-dash-head-head">MY DASHBOARD</p>
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-sm-12 col-xs-12">
                            @php
                                $usersimgg = $user;
                            @endphp
                            <img src="/{{$usersimgg->thumbnail}}" onerror="this.src='/images/default.png'"
                                 alt="stud-profile-pic" class="customStyleImage">
                        </div>
                        <div class="col-lg-8 col-sm-12 col-xs-12">
                            <p class="stud-name">Hi-{{$user->fname}}</p>
                            <p class="stud-date">23/01/2012</p><br><br>
                            <a href="#" class="stu-fav-subj-link w-100 text-left" style="">My Favourite
                                Subjects</a>
                            <p class="stu-fav-subj-list w-100 text-left">{{$user->favorite_subject}}</p>
                            <p class="points-para w-100 text-left">5000 points</p>
                        </div>
                    </div>
                </div>
                <div class="col-6" id="std-dashboard-right">
                    <div class="row">
                        <div class="col-6 p-3" id="achieve-div">
                            <img style="width:155px;" src="{{asset('asset/images/student-homepage/achievement.png')}}" alt="">
                            <p style="font-weight: 600;
                            color: #909090;">MY<br>ACHIEVEMENTS</p>
                        </div>
                        <div class="col-6 p-3" id="schedule-div">
                            <a href="{{ route('student_schedule') }}">
                                <img src="{{asset('asset/images/student-homepage/schedule.png')}}" alt="">
                                <p>MY<br>SCHEDULE</p>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 p-3" id="grades-div">
                            <a href="{{ route('grade.index') }}">
                                <img src="{{asset('asset/images/student-homepage/grades.png')}}" alt="">
                                <p>MY<br>GRADES</p>
                            </a>
                        </div>
                        <div class="col-6 p-3" id="homework-div">
                            <a href="{{ route('studetnsHomeWork') }}">
                                <img src="{{asset('asset/images/student-homepage/homework.png')}}" alt="">
                                <p>MY<br>HOMEWORK</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="carousel-achieve">
        <div class="container">
            <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
                <!--Indicators-->
                <ol class="carousel-indicators">
                    <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                    <li data-target="#multi-item-example" data-slide-to="1"></li>
                    <li data-target="#multi-item-example" data-slide-to="2"></li>
                </ol>
                <!--/.Indicators-->
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                @foreach($MyAchivment as $Achivment)
                    <!--First slide-->
                        <div class="carousel-item active">
                            <div class="col-md-2">
                                <img class="card-img-top" src="{{url('/storage/images/'.$Achivment->img)}}"
                                     alt="Card image cap">
                            </div>
                        </div>
                        <!--/.Third slide-->
                    @endforeach
                </div>
                <!--/.Slides-->
            </div>
            <!--/.Carousel Wrapper-->
        </div>
    </section>
    <!--Carousel Wrapper-->
    <section class="schedules">
        <div class="container">
            <h5 class="schedule-heading-teacher-homepage">My Schedule</h5>
            <hr class="teacher-home-schedule-hr">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-12 col-md-8 text-center mb-2 mt-2">
                    <div class="row">
                        @if(count($Book) == 0)
                            <div class="alert alert-danger customDanger">
                                <div class="container customDangerContainer">
                                    <div class="alert-icon">
                                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                                    </div>&nbsp;&nbsp;&nbsp;No Schedule Found
                                </div>
                            </div>
                                @else
                                    @foreach ($Book as $book)
                                        <div class="col-4 customClassMySch">
                                            <!-- Card -->
                                            <div class="card">
                                                <!-- Card image -->
                                                <a href="#">
                                                    <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
                                                        <h4 class="card-title">{{date('l d/m',strtotime($book->date))}}</h4>
                                                    </div>
                                                </a>
                                                <!-- Card content -->
                                                <div class="card-body">
                                                    <!-- Title -->
                                                    <p class="teach-shed-card-content">
                                                        {{date('h:i ',strtotime($book->time))}} {{$book->subject->name}}
                                                    </p>
                                                    <br>
                                                </div>
                                                <!-- Card footer -->
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                    </div>
                    @if(count($Book) != 0)
                        <div class="col-12 col-12 justify-content-center text-center" id="donate-register-btn-div"
                             style="margin-top: 10px">
                            <a data-animation="fadeInUp" data-delay="2s" class="main-slider-btn2"
                               href="{{route('student_schedule')}}" id="donate-register-btn">SEE
                                ALL</a>
                        </div>
                    @endif
                </div>

            </div>
    </section>
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
                                   id="grade-btn-teach">REPORT CARD MARCH</p>
                                @if(count($MyAchivment) == 0)
                                    <div class="alert alert-danger customAlertDAnger">
                                        <div class="container customAlertDAngerContainer">
                                            <div class="alert-icon">
                                                <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                                            </div>
                                            &nbsp;&nbsp;&nbsp;No Schedule Found
                                        </div>
                                    </div>
                                @else
                                    @foreach ($MyAchivment as $item)
                                        <p class="grades-details">{{$item->Subject_name}}
                                            <span>{{$item->grade == '' ? 'Not Graded Yet' : $item->grade}}</span></p>
                                    @endforeach
                                @endif
                                @if(count($MyAchivment) != 0)
                                    <div class="col-12 col-12 justify-content-center" id="donate-register-btn-div">
                                        <a data-animation="fadeInUp" data-delay="2s" class="main-slider-btn2 grades-details"
                                           href="{{route('grade.index')}}" id="donate-register-btn">SEE ALL</a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <section id="course-part" class="pt-115 pb-115 bg_cover gray-bg"
             style="background-image: url(images/course/course-shape.png)">
        <section id="course-part" class="pt-115 pb-115 bg_cover gray-bg"
                 style="background-image: url(images/course/course-shape.png)">
            <div class="container">
                <div class="teacher-homework-dash-head-div">
                    <p class="teacher-homework-dash-head">@lang('teacherhome.MY_HOMEWORK')</p>
                    <hr>
                </div>
                <div class="row text-center">
                    <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel" data-interval="1000">
                        <div class="MultiCarousel-inner">
                            @foreach($studentHomeworks as $homework)
                                @php
                                    $date = strtotime(date('Y-m-d'));
                                    $due = strtotime($homework->date);
                                    $type = 'Submiited';
                                    $status = '';

                                    if($date == $due)
                                    {
                                    $type = 'fa-exclamation';
                                    $styles = "background-color: #ff0000;padding: 20px 27px;border-radius: 33px;";
                                    $status = 'Due Today ' .' '. date('m/d', strtotime($homework->date));
                                    }
                                    else if($date < $due) { $type='' ; $status='Due' . date('m/d', strtotime($homework->date));
                                        $styles = "";
                                        }else{
                                        $styles = "background-color: green;
                                        padding: 20px 27px;
                                        border-radius: 33px;";
                                        $type = 'fa-check';
                                        }
                                @endphp
                                <div class="item">
                                    <div class="pad15">
                                        <div class="card postion-relative">
                                            <img src="{{url('/storage/images/'.$homework->thumbnail)}}" class="image-card"
                                                 alt="Bologna">
                                            <div
                                                class="card-img-overlay text-white d-flex flex-column justify-content-center">
                                                <div class="topright">
                                                    <i class="fa {{$status}}" aria-hidden="true"></i>
                                                    <i class="fa {{$type}}" aria-hidden="true" style="{{$styles}}"></i>
                                                </div>
                                                <div style="margin-bottom: 217px;">
                                                    <h6 class="card-subtitle mb-2">{{$homework->subject->name}}</h6>
                                                    <p class="card-subtitle mb-3">{{$homework->teacher->fname}}</p>
                                                </div>
                                            </div>
                                            <a data-animation="fadeInUp" data-delay="2s"
                                               class="main-slider-btn2 postion-absolute" id="schedule-btn-teach" href="#"
                                               style="bottom:0px;width: 100%;position:absolute;">@lang('teacherhome.LEARN_MORE')</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <button class="btn btn-primary leftLst">
                            <</button> <button class="btn btn-primary rightLst">>
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <br>

    <section id="course-part" class="pt-115 pb-115 bg_cover gray-bg" style="position: relative;  background:url(/asset/images/teacher-homepage/bgimage.png) no-repeat ; background-size:cover; background-color: #fff;">
        <div class="container">
        <div class="teacher-grade-dash-head-div">
        <p class="teacher-grade-dash-head">MY GRADES</p>
        <hr>
        </div>
        <div class="row">
        <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel" data-interval="1000">
        <div class="MultiCarousel-inner">
        <div class="col-lg-6 col-md-6 col-sm-6 item">
        <div class="pad15">
        <div class="card box-shadow">
        <p data-animation="fadeInUp"  data-delay="2s" class="main-slider-btn2 grades-details" id="grade-btn-teach">REPORT CARD MARCH</p>
        <p class="grades-details">Geography <span id="repl1">A+</span></p>
        <p class="grades-details">Maths     <span id="repl1">B</span></p>
        <p class="grades-details">Physics   <span id="repl1">C+</span></p>
        <p class="grades-details">English   <span id="repl1">A+</span></p>
        <div class="col-12 col-12 justify-content-center" id="grade-register-div">
        <a data-animation="fadeInUp" data-delay="2s" class="main-slider-btn2 grades-details" href="#" id="donate-register-btn">SEE ALL</a>
        </div> </div>
        </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 item">
        <div class="pad15">
        <div class="card box-shadow">
        <p data-animation="fadeInUp" data-delay="2s" class="main-slider-btn2 grades-details" id="grade-btn-teach">REPORT CARD MARCH</p>
        <p class="grades-details">Geography <span id="repl1">A+</span></p>
        <p class="grades-details">Maths     <span id="repl1">B</span></p>
        <p class="grades-details">Physics   <span id="repl1">C+</span></p>
        <p class="grades-details">English   <span id="repl1">A+</span></p>
        <div class="col-12 col-12 justify-content-center" id="grade-register-div">
        <a data-animation="fadeInUp" data-delay="2s" class="main-slider-btn2 grades-details" href="#" id="donate-register-btn">SEE ALL</a>
        </div>
        </div>
        </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 item">
        <div class="pad15">
        <div class="card box-shadow">
        <p data-animation="fadeInUp" data-delay="2s" class="main-slider-btn2 grades-details" id="grade-btn-teach">REPORT CARD MARCH</p>
        <p class="grades-details">Geography <span id="repl1">A+</span></p>
        <p class="grades-details">Maths     <span id="repl1">B</span></p>
        <p class="grades-details">Physics   <span id="repl1">C+</span></p>
        <p class="grades-details">English   <span id="repl1">A+</span></p>
        <div class="col-12 col-12 justify-content-center" id="grade-register-div">
        <a data-animation="fadeInUp" data-delay="2s" class="main-slider-btn2 grades-details" href="#" id="donate-register-btn">SEE ALL</a>
        </div>
        </div>
        </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 item">
        <div class="pad15">
        <div class="card box-shadow">
        <p data-animation="fadeInUp" data-delay="2s" class="main-slider-btn2 grades-details" id="grade-btn-teach">REPORT CARD MARCH</p>
        <p class="grades-details">Geography <span id="repl1">A+</span></p>
        <p class="grades-details">Maths     <span id="repl1">B</span></p>
        <p class="grades-details">Physics   <span id="repl1">C+</span></p>
        <p class="grades-details">English   <span id="repl1">A+</span></p>
        <div class="col-12 col-12 justify-content-center" id="grade-register-div">
        <a data-animation="fadeInUp" data-delay="2s" class="main-slider-btn2 grades-details" href="#" id="donate-register-btn">SEE ALL</a>
        </div>
        </div>
        </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 item">
        <div class="pad15">
        <div class="card box-shadow">
        <p data-animation="fadeInUp" data-delay="2s" class="main-slider-btn2 grades-details" id="grade-btn-teach">REPORT CARD MARCH</p>
        <p class="grades-details">Geography <span id="repl1">A+</span></p>
        <p class="grades-details">Maths     <span id="repl1">B</span></p>
        <p class="grades-details">Physics   <span id="repl1">C+</span></p>
        <p class="grades-details">English   <span id="repl1">A+</span></p>
        <div class="col-12 col-12 justify-content-center" id="grade-register-div">
        <a data-animation="fadeInUp" data-delay="2s" class="main-slider-btn2 grades-details" href="#" id="donate-register-btn">SEE ALL</a>
        </div>
        </div>
        </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 item">
        <div class="pad15">
        <div class="card box-shadow">
        <p data-animation="fadeInUp" data-delay="2s" class="main-slider-btn2 grades-details" id="grade-btn-teach">REPORT CARD MARCH</p>
        <p class="grades-details">Geography <span id="repl1">A+</span></p>
        <p class="grades-details">Maths     <span id="repl1">B</span></p>
        <p class="grades-details">Physics   <span id="repl1">C+</span></p>
        <p class="grades-details">English   <span id="repl1">A+</span></p>
        <div class="col-12 col-12 justify-content-center" id="grade-register-div">
        <a data-animation="fadeInUp" data-delay="2s" class="main-slider-btn2 grades-details" href="#" id="donate-register-btn">SEE ALL</a>
        </div>
        </div>
        </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 item">
        <div class="pad15">
        <div class="card box-shadow">
        <p data-animation="fadeInUp"  data-delay="2s" class="main-slider-btn2 grades-details" id="grade-btn-teach">REPORT CARD MARCH</p>
        <p class="grades-details">Geography <span id="repl1">A+</span></p>
        <p class="grades-details">Maths     <span id="repl1">B</span></p>
        <p class="grades-details">Physics   <span id="repl1">C+</span></p>
        <p class="grades-details">English   <span id="repl1">A+</span></p>
        <div class="col-12 col-12 justify-content-center" id="grade-register-div">
        <a data-animation="fadeInUp" data-delay="2s" class="main-slider-btn2 grades-details" href="#" id="donate-register-btn">SEE ALL</a>
        </div>
        </div>
        </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 item">
        <div class="pad15">
        <div class="card box-shadow">
        <p data-animation="fadeInUp" data-delay="2s" class="main-slider-btn2 grades-details" id="grade-btn-teach">REPORT CARD MARCH</p>
        <p class="grades-details">Geography <span id="repl1">A+</span></p>
        <p class="grades-details">Maths     <span id="repl1">B</span></p>
        <p class="grades-details">Physics   <span id="repl1">C+</span></p>
        <p class="grades-details">English   <span id="repl1">A+</span></p>
        <div class="col-12 col-12 justify-content-center" id="grade-register-div">
        <a data-animation="fadeInUp" data-delay="2s" class="main-slider-btn2 grades-details" href="#" id="donate-register-btn">SEE ALL</a>
        </div>
        </div>
        </div>
        </div>
        
        </div>
        <button class="btn btn-primary leftLst"><</button>
        <button class="btn btn-primary rightLst">></button>
        </div>
        </div>
        </div>
        </section>

    <br>
@endsection
@section('js')
    <script>
        $(document).ready(function () {
            var itemsMainDiv = ('.MultiCarousel');
            var itemsDiv = ('.MultiCarousel-inner');
            var itemWidth = "";

            $('.leftLst, .rightLst').click(function () {
                var condition = $(this).hasClass("leftLst");
                if (condition)
                    click(0, this);
                else
                    click(1, this)
            });

            ResCarouselSize();




            $(window).resize(function () {
                ResCarouselSize();
            });

            //this function define the size of the items
            function ResCarouselSize() {
                var incno = 0;
                var dataItems = ("data-items");
                var itemClass = ('.item');
                var id = 0;
                var btnParentSb = '';
                var itemsSplit = '';
                var sampwidth = $(itemsMainDiv).width();
                var bodyWidth = $('body').width();
                $(itemsDiv).each(function () {
                    id = id + 1;
                    var itemNumbers = $(this).find(itemClass).length;
                    btnParentSb = $(this).parent().attr(dataItems);
                    itemsSplit = btnParentSb.split(',');
                    $(this).parent().attr("id", "MultiCarousel" + id);


                    if (bodyWidth >= 1200) {
                        incno = itemsSplit[1];
                        itemWidth = sampwidth / incno;
                    }
                    else if (bodyWidth >= 992) {
                        incno = itemsSplit[2];
                        itemWidth = sampwidth / incno;
                    }
                    else if (bodyWidth >= 768) {
                        incno = itemsSplit[1];
                        itemWidth = sampwidth / incno;
                    }
                    else {
                        incno = itemsSplit[0];
                        itemWidth = sampwidth / incno;
                    }
                    $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
                    $(this).find(itemClass).each(function () {
                        $(this).outerWidth(itemWidth);
                    });

                    $(".leftLst").addClass("over");
                    $(".rightLst").removeClass("over");

                });
            }


            //this function used to move the items
            function ResCarousel(e, el, s) {
                var leftBtn = ('.leftLst');
                var rightBtn = ('.rightLst');
                var translateXval = '';
                var divStyle = $(el + ' ' + itemsDiv).css('transform');
                var values = divStyle.match(/-?[\d\.]+/g);
                var xds = Math.abs(values[4]);
                if (e == 0) {
                    translateXval = parseInt(xds) - parseInt(itemWidth * s);
                    $(el + ' ' + rightBtn).removeClass("over");

                    if (translateXval <= itemWidth / 2) {
                        translateXval = 0;
                        $(el + ' ' + leftBtn).addClass("over");
                    }
                }
                else if (e == 1) {
                    var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
                    translateXval = parseInt(xds) + parseInt(itemWidth * s);
                    $(el + ' ' + leftBtn).removeClass("over");

                    if (translateXval >= itemsCondition - itemWidth / 2) {
                        translateXval = itemsCondition;
                        $(el + ' ' + rightBtn).addClass("over");
                    }
                }
                $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
            }

            //It is used to get some elements from btn
            function click(ell, ee) {
                var Parent = "#" + $(ee).parent().attr("id");
                var slide = $(Parent).attr("data-slide");
                ResCarousel(ell, Parent, slide);
            }
        });
    </script>
@endsection
