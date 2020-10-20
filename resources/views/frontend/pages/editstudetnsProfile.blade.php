@extends('layouts.master')
@section('title','Edit Student Profile')
@section('content')

<!--====== Bootstrap css ======-->
<link rel="stylesheet" href="{{asset('asset/css/register2.css')}}">
<link rel="stylesheet" href="{{asset('asset/css/mdb.min.css')}}">
<style>
    .customContainer{
        width:85%;
    }
    .customPE{
        padding: 0px !important;
    }
    #submit-btn{
        justify-content: flex-end;
    }
    .editSP{
        height: 100%;
        object-fit: cover;
    }
    @media (max-width: 991px) {
        #submit-btn {
            justify-content: flex-end;
            display: none !important;
        }
    }
    @media (max-width: 575px) {
        .main-cont .row {
            margin-right: 0px !important;
            box-shadow: 0px 0px 0px -3px black !important;
            background: white;
            margin-top: 0px !important;
            position: relative;
            margin-left: auto;
        }
        .customContainer{
            width:100%;
            padding-left: 0px !important;
            padding-right: 0px !important
        }
        .customForm{
            width: 100%;
            padding-left: 5px;
            padding-right: 5px;
        }
    }
</style>
<section id="slider-part" class="slider-active">
    <div class="single-slider slider-4 bg_cover pt-150">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9">
                    <div class="slider-cont slider-cont-4 text-center">
                        <h1 data-animation="fadeInUp" data-delay="1s">REGISTER</h1>
                        <p data-animation="fadeInUp" data-delay="1.5s">Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.</p>
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- single slider -->
</section>


<section class="main-section">
    <div class="container customContainer">
        <div class="main-cont">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center justify-content-center">
                    <div class="form-parts">


                        <div style="display:flex;width:100%;">

                            <form method="post" action="{{route ('editstudenterprofile')}}" id="form">
                                @csrf
                                <div style="width:100%;">
                                    <h3 class="level-heading">Edit Profile</h3>
                                </div>


                                @if(count($errors))
                                <div class="form-group">
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                @endif
                                <div style="width:100%;">
                                    <input name="fname" autofocus placeholder="First Name"
                                        value="{{$getrecord->fname}}" required="true">
                                </div>
                                <div style="width:100%;">
                                    <input name="lname" autofocus placeholder="Last Name"
                                        value="{{$getrecord->lname}}" required="true">
                                </div>
                                <div style="width:100%;">
                                    <input type="email" name="email" placeholder="Email Address"
                                        value="{{$getrecord->email}}" required="true">

                                </div>
                                <div style="width:100%;">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                        required="true">
                                    <label class="form-check-label" for="invalidCheck2">
                                        By signing up, you agree to our <a href="#" id="alreasy-account">Terms and
                                            Conditions</a> and <a href="#" id="alreasy-account">Privacy Policy</a>
                                    </label>
                                </div>
                                <div style="width:100%;">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck"
                                        required="true">
                                    <label class="form-check-label" for="invalidCheck">
                                        Can we contact you about Learn 4 Learning?
                                    </label>
                                </div>
                                <button type="submit" id="submit" name="submit"
                                    class="btn btn-primary active">Update</button>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 customPE">
                    <div class="d-flex align-items-center justify-content-center" id="submit-btn">
                        <img class="editSP" src="{{asset('asset/images/students/registration-banner.png')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script>
    $(document).ready(function(){
        $("#submit").on("click", function(){
            var radioSelected = $("input[name=op1]").val();
            if(radioSelected == "1"){
               alert('op1')
            }else if(radioSelected == "2"){
                alert('op2')
            }
        });
        });
</script>
@endsection
