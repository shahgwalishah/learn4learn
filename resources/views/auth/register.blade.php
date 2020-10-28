@extends('layouts.master')
@section('title','SignUp')
@push('css')
    <style>
        #customFooter{

        }
        .gray_font {
            color: #737171 !important;
            letter-spacing: 2px;
        }

        .text_gray {
            color: #737171 !important;
        }
        #submit-btn{
            justify-content: flex-end;
        }
        .customContainer{
            width:85%;
        }
        ._inputwidth{
            width: 100% !important;
        }
        .customForm{
            width: 100%;
        }


        @media (max-width: 991px) {
            #submit-btn {
                justify-content: flex-end;
                display: none !important;
            }
            .customWidthR{
                flex:100%;
                max-width: 100%;
            }
        }
        @media (max-width: 575px) {
            .main-cont .row {
                margin-right: 0px !important;
                box-shadow: 0px 0px 0px -3px black !important;
                background: white;
                margin-top: 154px !important;
                position: relative;
                margin-left: auto;
            }
            .customContainer{
                width:100%;
                padding-left: 0px !important;
                padding-right: 0px !important
            }
            .customForm{
                text-align: center;
                width: 100%;
                padding-left: 5px;
                padding-right: 5px;
            }
            .radioButtons{
                float: unset;
            }
            .level-heading{
                text-align: center !important;
            }
            .buttonClass{
                text-align: center;
                display: flex;
                justify-content: center;
                width: 100%;
            }
        }
        .customSFaE {
            position: absolute;
            right: 77px;
            cursor: pointer;
            margin-top: 10px;
        }
    </style>
    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{asset('asset/css/register2.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/mdb.min.css')}}">
@endpush
@section('content')
<section id="slider-part" class="slider-active">
    <div class="single-slider slider-4 bg_cover pt-150">
        <div class="container customContainer">
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
                <div class="col-md-6 d-flex align-items-center justify-content-center p-0 customWidthR">
                    <div class="form-parts">

                        <div style="display:flex;width:100%;">

                            <form method="post" action="{{url('/signup')}}" id="form" class="customForm">
                                @csrf
                                <div style="width:100%;" class="m-0">
                                    <h3 class="level-heading pb-2">GETTING STARTED</h3>
                                </div>
                                <div style="width:100%;">

                                    <a href="{{route('login')}}" id="alreasy-account" style="color:#212529">Already have
                                        an account?</a>

                                </div>
                                <div class="radioButtons">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" value="student"
                                            id="defaultUnchecked" name="type">
                                        <label class="custom-control-label gray_font" for="defaultUnchecked">I am a
                                            Student / Parent</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" value="teacher"
                                            id="defaultChecked" name="type" checked>
                                        <label class="custom-control-label gray_font" for="defaultChecked">I am a
                                            Teacher</label>
                                    </div>
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
                                    <input name="fname" id="fname" value="{{old('fname')}}" autofocus placeholder="First Name" required="true">
                                </div>
                                <div style="width:100%;">
                                    <input name="lname" id="lname" value="{{old('lname')}}" autofocus placeholder="Last Name" required="true">
                                </div>
                                <div style="width:100%;">
                                    <input type="email" name="email" id="email" placeholder="Email Address"
                                        required="true">
                                    <label class="email-error error"></label>
                                    @if($errors->has('email'))
                                    <div class="text-danger">{{$errors->first('email')}}</div>

                                    @endif
                                </div>

                                <div style="width:100%;">
                                    <input type="password" id="myInput" name="password" placeholder="Choose a Password"
                                        required="true">
                                    <i class="fa fa-eye customSFaE" id="show" onclick="hideShow('a')" aria-hidden="true"></i>
                                    <i class="fa fa-eye-slash customSFaE" id="hide" style="display: none;" onclick="hideShow('b')" aria-hidden="true"></i>
                                </div>
                                <div style="width:100%;">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                        required="true">
                                    <label class="form-check-label text_gray" for="invalidCheck2"
                                        style="height: unset!important;width: 75%;">
                                        By signing up, you agree to our <a
                                            href="{{route('page.show', 'terms-and-conditions')}}" id="alreasy-account"
                                            class="text_gray">Terms and Conditions</a> and <a
                                            href="{{route('page.show','privacy-policy')}}" id="alreasy-account"
                                            class="text_gray">Privacy Policy</a>
                                    </label>
                                </div>
                                <div style="width:100%;">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck"
                                        required="true" style="height: unset!important;width: 75%;">
                                    <label class="form-check-label text_gray" for="invalidCheck"
                                        style="height: unset!important;width: 75%;">
                                        Can we contact you about Learn 4 Learning?
                                    </label>
                                </div>
                                <div class="buttonClass">
                                    <button type="submit" id="submit-button" class="btn btn-primary active">SignUp</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 p-0">
                    <div class="d-flex align-items-center justify-content-center" id="submit-btn">
                        <img style="    height: 100%;
    object-fit: cover;" src="{{asset('asset/images/students/registration-banner.png')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('js')
<!--====== Validator js ======-->
<script src="{{asset('asset/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('asset/js/custom.js')}}"></script>
    <script>
        function hideShow(val) {
            var x = document.getElementById("myInput");
            if(val == 'a') {
                $('#hide').show();
                $('#show').hide();
                if (x.type === "password") {
                    x.type = "text";
                }
            }
            if(val == 'b') {
                $('#hide').hide();
                $('#show').show();
                if(x.type != "password"){
                        x.type = "password";
                }
            }
        }
    </script>
@endsection
