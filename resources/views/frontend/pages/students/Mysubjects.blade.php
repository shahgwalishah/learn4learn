@extends('layouts.masterStudent')
@section('title','Student Homework')
@section('content')

<style>
  @media (max-width: 991px)
    {
        #std-homework-find-lesson-sec
        {
            width: 100%;
        }
    }
    #std-homework-find-lesson-sec{
        text-align: center;
        width: 100%;
    }
    .customTableSetting{
        text-align: center;
        width: 100%;
    }
    .customClasSearch{
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
        padding: 0 59px;
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
    .customClass{
        text-align: -webkit-center;
        width: 100%;
    }
</style>

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{asset('asset/css/student-homework.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('asset/css/mdb.min.css')}}">

    @include('frontend.search')

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
            <form class="search_form" action="{{route('SearchStudentHomeworks')}}" method="post">
            @csrf
                <div class="row">
                  <div class="col-md-3" style="padding: 18px;">
                  <select class="selectpicker" name="level_id">
                        <optgroup label="Picnic">
                        <?php
                                                         if(@$level){
                                                        $aray1=[];
                                                        $arraytypes=[];  ?>
                                                        <?php foreach (@$level as $key => $level) {
                                                        if(count($aray1)==0){
                                                        array_push($aray1,$level);
                                                        array_push($arraytypes,$level->name);

                                                        }else{
                                                            if(!in_array($level->name, $arraytypes)){
                                                            array_push($aray1,$level);
                                                            array_push($arraytypes,$level->name);
                                                            $cc=count($arraytypes);

                                                        }
                                                        }


                                                        }
                                                        ?>

                                <option value="">Find Date</option>

                                @foreach($aray1 as $Date)
                                   <option value="{{$Date->id}}">{{$Date->name}}</option>
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
                                                        array_push($arraytypes,$subjects->sub_name);

                                                        }else{
                                                            if(!in_array($subjects->sub_name, $arraytypes)){
                                                            array_push($aray1,$subjects);
                                                            array_push($arraytypes,$subjects->sub_name);
                                                            $cc=count($arraytypes);

                                                        }
                                                        }


                                                        }
                                                        ?>

                                <option value="">Find Subjects</option>

                                @foreach($aray1 as $subjects)
                                   <option value="{{$subjects->sub_id}}">{{$subjects->sub_name}}</option>
                                   @endforeach
                                   <?php      }       ?>
                        </optgroup>
                    </select>

                  </div>

                  <div class="col-md-3"  style="padding: 18px;">
                  <select class="selectpicker" name="teacher_id">
                        <optgroup label="Picnic">
                        <?php
                                                         if(@$Teacher){
                                                        $aray1=[];
                                                        $arraytypes=[];  ?>
                                                        <?php foreach (@$Teacher as $key => $Teacher) {
                                                        if(count($aray1)==0){
                                                        array_push($aray1,$Teacher);
                                                        array_push($arraytypes,$Teacher->fname);

                                                        }else{
                                                            if(!in_array($Teacher->fname, $arraytypes)){
                                                            array_push($aray1,$Teacher);
                                                            array_push($arraytypes,$Teacher->fname);
                                                            $cc=count($arraytypes);

                                                        }
                                                        }


                                                        }
                                                        ?>

                                <option value="">Find teacher</option>

                                @foreach($aray1 as $Title)
                                   <option value="{{$Title->U_id}}">{{$Title->fname}}</option>
                                   @endforeach
                                   <?php      }       ?>
                      </select>
                  </div>

                  <div class="col-md-3"  style="padding: 18px;">
                  <button type="submit"  class="customClasSearch  main-slider-btn2 btn btn-warning" value="" style="background-color: #FDBF11;color:white">SEARCH</button>
                  </div>
                </div>

            </form>
        </div> <!-- row -->
    </div> <!-- container -->
</section>


    <section class="admission-row pb-120" id="std-homework-table-sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="table-responsive">
                    <table class="table customTableSetting">
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
                        @foreach($subjects1 as $teacherhomeworkdetail)
                        <tr>

                          <th scope="row">{{$teacherhomeworkdetail->sub_name}}</th>
                          <td>{{$teacherhomeworkdetail->fname}}</td>


                          <form action="{{route('viewteacherdashboard')}}" method="post">
                         @csrf

                          <td>
                           <input type="hidden" name="teacher_id" value="{{$teacherhomeworkdetail->U_id}}">
                           <button type="submit" class="btn btn-indigo btn-sm m-0" id="upload-work-btn">View  TEACHER</button>     </a></td>
                           </form>


                        </tr>
                        @endforeach






                      </tbody>
                    </table>
                  </div>
            </div> <!-- row -->
            @if(count($subjects1) > 5)
            <div class="col-12 col-12 justify-content-center" id="donate-register-btn-div">
                <a data-animation="fadeInUp" data-delay="2s" class="main-slider-btn2" href="#" id="donate-register-btn">SEE ALL</a>
            </div>
            @endif
        </div> <!-- container -->
    </section>

@endsection
