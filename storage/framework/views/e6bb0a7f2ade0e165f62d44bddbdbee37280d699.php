<?php $__env->startSection('title','level'); ?>
<?php $__env->startPush('css'); ?>
<style>
    .customSetStyle {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    #donate-register-btn-div{
        margin-bottom: 12px;
    }
    @media (max-width:575px) {
        .col-md-9.col-sm-12.col-xs-12 .row .col-md-5 {
            margin-top: auto;
            margin-bottom: auto;
            padding: 0px;
            text-align: center;
        }
        p {
            font-size: 16px;
            font-weight: 400;
            line-height: 28px;
            color: #505050;
            margin: 0px;
            text-align: center;
        }
        h4 {
            font-size: 22px;
            text-align: center;
        }
        .customSetResSt{
            display: flex;
            flex-direction: column;
        }
        .imageCustomStyle{
            text-align: center;
        }
    }
</style>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="<?php echo e(asset('asset/css/student-lesson-page.css')); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


    <section class="main-section">
        <div class="container">
            <div class="row">
                
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-12 media">
                            <iframe width="100%" height="345" src="https://www.youtube.com/embed/<?php echo e($lesssonDetail->lessons[0]['link']); ?>" allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-md-9 col-sm-12 col-xs-12">
                            <h4><?php echo e($lesssonDetail->lessons[0]['title']); ?></h4>
                            <p>Live Date:<?php echo e($lesssonDetail->lessons[0]['date']); ?><br>
                                Time:<?php echo e($lesssonDetail->lessons[0]['time']); ?></p>
                            <div class="row">
                                <div class="col-md-2 customSetStyle">
                                    <img style="border-radius: 100px;" onerror="this.src='/asset/images/logo1.png'" src="<?php echo e(url('/storage/images/'.$lesssonDetail->thumbnail)); ?>">
                                </div>
                                <div class="col-md-5">
                                    <p style="margin: 8px;word-wrap: break-word;"><?php echo e($lesssonDetail->fname); ?>-<?php echo e($lesssonDetail->lname); ?></p>
                                </div>
                                <div class="col-md-5">
                                    <a href="<?php echo e(route('teacherProfile',$lesssonDetail->id)); ?>" class="profile-btn" style="">VIEW PROFILE</a>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-12 col-xs-12 imageCustomStyle">
                            <img src="<?php echo e(asset('asset/images/student-lesson-page/geography.jpg')); ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 customSetResSt">
                            <p data-animation="fadeInUp" style="word-wrap: break-word;" data-delay="1.5s"><?php echo e($lesssonDetail->lessons[0]['description']); ?></p>
                            <a data-animation="fadeInUp" data-delay="2s" class="main-slider-btn" href="#" id="addtocalen-btn">ADD TO CALENDAR</a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    
    <div class="container"><hr></div>


    

    <section class="documents-sec">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <p style="font-weight: 700">Documents attached to the lesson</p>
                    <div class="row">
                        <div class="col-6">
                            <div class="row">

                                <div class="col-6">
                                    Document2.pdf
                                </div>
                                <div class="col-6">
                                    <a href="#"><img src="<?php echo e(asset('asset/images/student-lesson-page/lessson-download-pic.jpg')); ?>"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row">

                                <div class="col-6">
                                    Document2.pdf
                                </div>
                                <div class="col-6">
                                    <a href="#"><img src="<?php echo e(asset('asset/images/student-lesson-page/lessson-download-pic.jpg')); ?>"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p style="font-weight: 700">Documents attached to the lesson</p>
                    <div class="row">
                        <div class="col-6">
                            <div class="row">

                                <div class="col-6">
                                    Document2.pdf
                                </div>
                                <div class="col-6">
                                    <a href="#"><img src="<?php echo e(asset('asset/images/student-lesson-page/lessson-download-pic.jpg')); ?>"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row">

                                <div class="col-6">
                                    Document2.pdf
                                </div>
                                <div class="col-6">
                                    <a href="#"><img src="<?php echo e(asset('asset/images/student-lesson-page/lessson-download-pic.jpg')); ?>"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">

                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <h3 class="level-heading">Ask a question</h3>
            <form action="" method="GET">
                <div class="row">
                    <div class="col-12">
                        <textarea class="form-control" id="exampleFormControlTextarea3" rows="7"></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary active" >SEND</button>
                    </div>
                </div>
            </form>
        </div>

    </section>


    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-6"><h5>User Reviews</h5></div>
                <div class="col-6"><h5>User Reviews</h5></div>
            </div>

            <hr>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">
                            <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"/>
                            <p class="text-secondary text-center">15 Minutes Ago</p>
                        </div>
                        <div class="col-md-10">
                            <p>
                                <a class="float-left" href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>Maniruzzaman Akash</strong></a>
                                <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                <span class="float-right"><i class="text-warning fa fa-star"></i></span>

                            </p>
                            <div class="clearfix"></div>
                            <p>Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <p>
                                <a class="float-right btn btn-outline-primary ml-2"> <i class="fa fa-reply"></i> Reply</a>
                                <a class="float-right btn text-white btn-danger"> <i class="fa fa-heart"></i> Like</a>
                            </p>
                        </div>
                    </div>
                    <div class="card card-inner">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"/>
                                    <p class="text-secondary text-center">15 Minutes Ago</p>
                                </div>
                                <div class="col-md-10">
                                    <p><a href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>Maniruzzaman Akash</strong></a></p>
                                    <p>Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <p>
                                        <a class="float-right btn btn-outline-primary ml-2">  <i class="fa fa-reply"></i> Reply</a>
                                        <a class="float-right btn text-white btn-danger"> <i class="fa fa-heart"></i> Like</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="course-part" class="pt-115 pb-115 bg_cover gray-bg" style="background-image: url(images/course/course-shape.png)"> <section id="course-part" class="pt-115 pb-115 bg_cover gray-bg" style="background-image: url(images/course/course-shape.png)">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="level-heading-courses">SIMILAR LESSONS</h3>
                    </div>
                </div> <!-- row -->
                <div class="row">
                    <?php $__currentLoopData = $similarLessons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($k < 6): ?>
                        <div class="col-lg-4">
                            <div class="single-course-2 mt-30">
                                <div class="thum">
                                    <div class="image">
                                        <img style="height:350px;object-fit: cover;" src="<?php echo e(url('/storage/images/'.$data->thumbnail)); ?>" onerror="this.src='/asset/images/course/cu-1.jpg'" alt="Course">
                                    </div>
                                    <div class="price">
                                        <span>Free</span>
                                    </div>
                                    <div class="course-teacher d-flex align-items-center">
                                        <div class="thum">
                                            <a href="courses-single.html">
                                                <img style="border-radius: 100px;width: 50px;height:50px;object-fit: cover;" alt="teacher" onerror="this.src='/asset/images/logo1.png'" src="<?php echo e(url('/storage/images/'.$lesssonDetail->thumbnail)); ?>">
                                            </a>
                                        </div>
                                        <div class="teacher ml-10">
                                            <div class="name">
                                                <a href="#"><h6><?php echo e($data->teacher->fname); ?>-<?php echo e($data->teacher->lname); ?></h6></a>
                                            </div>
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
                                <div class="cont">
                                    <a data-animation="fadeInUp" data-delay="2s" class="main-slider-btn" href="#" style="background: #818181;color: white;font-weight: 500;display: block;">I AM A STUDENT/PARENT</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a data-animation="fadeInUp" data-delay="2s" class="main-slider-btn" href="#" style="background: #7acdf0;color: white;font-weight: 500;display: block;">ADD TO CALENDAR</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </div>
                            </div> <!-- single course -->
                        </div>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-12 col-12 justify-content-center" id="donate-register-btn-div">
                        <a data-animation="fadeInUp" data-delay="2s" class="main-slider-btn2" href="#" id="donate-register-btn">VIEW MORE</a>
                    </div>
                </div> <!-- course slide -->
            </div> <!-- container -->
        </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mahad/Desktop/rixtexh/learn4learn/resources/views/frontend/pages/lesson-detail.blade.php ENDPATH**/ ?>