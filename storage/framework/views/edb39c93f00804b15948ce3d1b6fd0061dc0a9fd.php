<!--====== HEADER PART ENDS ======-->

<!--====== SEARCH BOX PART START ======-->
<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('asset/css/responsive/home-responsive.css')); ?>">
    <style>
        .card-img-overlay {
            background-color: rgba(#000, 0.4);
        }

        .main-slider-btn2 {
            background-color: #ffc10e;
        }

        div#donate-register-btn-div {
            display: flex;
            padding-bottom: 3%;
            /* padding-top: 20px; */
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
        .slider-cont.slider-cont-4.text-center .input-group .form-control {
            height: 57px;
        }
        .btn-secondary {
            color: #000;
            background-color: #fff !important;
            width: 90px;
            border: 0px;
            border-left: 1px solid #efefef;
        }
    </style>

    <div class="search-box">
        <div class="search-form">
            <div class="closebtn">
                <span></span>
                <span></span>
            </div>
            <form action="#">
                <input type="text" placeholder="Search by keyword">
                <button><i class="fa fa-search"></i></button>
            </form>
        </div> <!-- search form -->
    </div>

    <!--====== SEARCH BOX PART ENDS ======-->

    <!--====== SLIDER PART START ======-->

    <section id="slider-part" class="slider-active">
        <div class="single-slider slider-4 bg_cover pt-150"
             style="background-repeat: no-repeat; background:linear-gradient(rgb(0 0 0 / 23%) 100%, rgba(0, 0, 0, 0.5) 100%), url(<?php echo e(asset('asset/images/student-lesson-search/banner.jpg')); ?>">

            <div class="container">
                <div class="row justify-content-center customSearchField">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont slider-cont-4 text-center">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="What are you looking for?" tabindex="0">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary" type="button" tabindex="0">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- row -->
            </div>

        </div> <!-- single slider -->
    </section>
    <section id="about-part" class="about-tow pt-65">
        <div class="about-shape">
        </div>
        <h5 style="text-align: center;color: #006796;font-size: 28px;letter-spacing: 5px;"><?php echo app('translator')->get('welcome.Find_A_Course'); ?>
        </h5>
        <!-- container -->
    </section>

    <!--====== ABOUT PART ENDS ======-->

    <!--====== ADMISSION PART START ======-->

    <section class="admission-row pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <?php if(session()->has('message.level')): ?>

                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <?php echo session('message.content'); ?>

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
                <form id="submitSearch" class="search_form" action="<?php echo e(route('searchSubForSubjectHome')); ?>" method="get">
                    <input type="hidden" name="see_all" id="see_all" value="" />
                    <div class="row">
                        <div class="col-md-3" style="padding: 18px;">
                            <select class="selectpicker" name="level_id" required="true">
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


                                    <option value=""><?php echo app('translator')->get('welcome.Find_A_Course'); ?></option>
                                    <?php $__currentLoopData = $aray1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $level): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($level->id); ?>"><?php echo e($level->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    <?php      }       ?>
                                </optgroup>
                            </select>

                        </div>

                        <div class="col-md-3" style="padding: 18px;">
                            <select class="selectpicker" name="subject_id" required="true">
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

                                    <?php $__currentLoopData = $aray1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subjects): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($subjects->id); ?>"><?php echo e($subjects->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php      }       ?>

                                </optgroup>
                            </select>

                        </div>

                        <div class="col-md-3" style="padding: 18px;">
                            <select class="selectpicker" name="date_id" required="true">
                                <optgroup label="Picnic">
                                    <option value="">Find Date</option>
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
                                    <?php $__currentLoopData = $aray1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Date): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <option value="<?php echo e($Date->id); ?>"><?php echo e($Date->date); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    <?php      }       ?>

                                </optgroup>
                            </select>

                        </div>

                        <div class="col-md-3" style="padding: 18px;">
                            <button type="submit" class="main-slider-btn2 btn btn-warning" value=""
                                    style="background-color: #FDBF11;color:white">SEARCH</button>
                        </div>
                    </div>

                </form>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>





    <!--====== ADMISSION PART ENDS ======-->

    <!--====== COURSE PART START ======-->
    <section id="course-part" class="pt-115 pb-115 bg_cover gray-bg"
             style="background-image: url(images/course/course-shape.png)">
        <div class="container home-page-lessons">
            <div class="section-title pb-45">
                <h2>UPCOMING CLASSES</h2>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <!-- section title -->
                </div>
            </div> <!-- row -->


            <?php if(session('status')): ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <?php echo e(session('status')); ?>


                </div>

            <?php endif; ?>
            <div class="row">
                <?php if(count($getuserimg) == 0): ?>
                    <div class="alert alert-danger customDanger">
                        <div class="container customDangerContainer">
                            <div class="alert-icon">
                                <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                            </div>&nbsp;&nbsp;&nbsp;No Data Found
                        </div>
                    </div>
                <?php else: ?>
                    <?php $__currentLoopData = $getuserimg; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $leson): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 home-lessons-bot">
                            <div class="single-course-2 mt-30">
                                <div class="row d-flex justify-content-center">
                                    <div class="column d-flex justify-content-center">
                                        <div class="price">
                                            <img src="<?php echo e(url('/storage/images/'.$leson->userthamnail)); ?>" class="course-profile-pic" onerror="this.src='/images/default.png'">
                                        </div>
                                    </div>
                                </div>
                                <div class="thum">
                                <div class="card" style="cursor: pointer;" onclick="window.location.href='/lesson-details/<?php echo e($leson->lessonsId); ?>/<?php echo e($leson->teacher_id); ?>'">

                                        <img src="<?php echo e(url('/storage/images/'.$leson->thumbnail)); ?>" class="leasson-thumnail">
                                        <div class="card-img-overlay text-white d-flex flex-column justify-content-center">

                                            <h4 class="card-title subject-name"><?php echo e($leson->subjectname); ?>


                                            </h4>
                                            <h6 class="card-subtitle mb-2 subject-title"><?php echo e($leson->title); ?></h6>
                                            <div class="link d-flex">
                                            </div>
                                            <div class="row" id="rating-date-lesson">
                                                <div class="col-6">
                                                    <h4 class="card-title lessone-date"><?php echo e($leson->date); ?><br>
                                                        <?php echo e($leson->time); ?></h4>
                                                </div>
                                                <div class="col-6">
                                                    <div class="review">
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cont">

                                    <?php if(!Auth::check()): ?>

                                        <a data-animation="fadeInUp" data-delay="2s" class="main-slider-btn" href="<?php echo e(route('login')); ?>"
                                           style="background: #818181;color: white;font-weight: 500;display: block;">I AM A
                                            STUDENT/PARENT</a>

                                        <a data-animation="fadeInUp" data-delay="2s" class="main-slider-btn" href="<?php echo e(route('login')); ?>"
                                           style="background: #7acdf0;color: white;font-weight: 500;display: block;">ADD TO
                                            CALENDAR</a>
                                    <?php endif; ?>
                                    <?php if(Auth::check()): ?>


                                        <?php
                                        $authId=Auth::User()->id;

                                        $getrecords=DB::table('users')->where('users.id', $authId)->where('users.type', 'student', 'users.id')->select('id', 'type')->get();
                                        $getstu=count($getrecords);

                                        if($getstu >=1){
                                        ?>




                                        <a data-animation="fadeInUp" data-delay="2s" class="main-slider-btn"
                                           href="<?php echo e(route('addToCalender', [$leson->lessonsId, $leson->teacher_id, $leson->subjects_id])); ?>"
                                           style="background: #7acdf0;color: white;font-weight: 500;display: block;">ADD TO
                                            CALENDAR</a>


                                        <?php } else{ ?>


                                        <a data-animation="fadeInUp" data-delay="2s" class="main-slider-btn" href="#"
                                           style="background: #818181;color: white;font-weight: 500;display: block;">LEARN MORE</a>
                                        <a data-animation="fadeInUp" data-delay="2s" class="main-slider-btn" onclick="Buttoncl();"
                                           style="background: #7acdf0;color: white;font-weight: 500;display: block;">ADD TO
                                            CALENDAR</a>


                                        <?php  }  ?>
                                    <?php endif; ?>
                                </div>
                            </div> <!-- single course -->
                        </div> <!-- single course -->
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>


        </div> <!-- course slide -->

        <div class="col-12 col-12 justify-content-center" id="donate-register-btn-div">
            <a data-animation="fadeInUp" data-delay="2s" class="main-slider-btn2" href="javascript:;" onclick="seeAllBtn()">SEE
                ALL</a>
        </div>
        </div> <!-- container -->
    </section>




    <style type="text/css">
        .thum img.card-img {
            margin-bottom: -76px;
            height: 472px;
        }
    </style>


    <script type="text/javascript">
        function Buttoncl(){
            alert('You have to register as a Student..');
        }
        function seeAllBtn(){
            $('#see_all').val('see_all');
            $('#submitSearch').submit();
        }
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mahad/Desktop/rixtexh/learn4learn/resources/views/frontend/pages/homepagesearch.blade.php ENDPATH**/ ?>