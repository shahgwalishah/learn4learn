@extends('layouts.master')
@section('title','Edit Profile')
@section('content')

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{asset('asset/css/register2.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/mdb.min.css')}}">

    <section id="slider-part" class="slider-active">
        <div class="single-slider slider-4 bg_cover pt-150">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont slider-cont-4 text-center">
                            <h1 data-animation="fadeInUp" data-delay="1s">REGISTER</h1>
                            <p data-animation="fadeInUp" data-delay="1.5s">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->
    </section>


    <section class="main-section">
        <div class="container">
            <div class="main-cont">
                <div class="row">
                    <div class="col-md-6 d-flex align-items-center justify-content-center">
                        <div class="form-parts">


                            <div style="display:flex;width:100%;">

                                <form  method="post" action="{{url('signup')}}" id="form">
                                    @csrf
                                    <div style="width:100%;">
                                        <h3 class="level-heading" >GETTING STARTED</h3>
                                    </div>
                                    <div style="width:100%;">
                                        <a href="#" id="alreasy-account">Already have an account?</a>
                                    </div>
                                    <div style="width:50%;">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" value="student"  id="defaultUnchecked" name="type">
                                            <label class="custom-control-label" for="defaultUnchecked">I am a Student / Parent</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" value="teacher" id="defaultChecked" name="type" checked>
                                            <label class="custom-control-label" for="defaultChecked">I am a Teacher</label>
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
                                        <input name="fname" autofocus placeholder="First Name">
                                    </div>
                                    <div style="width:100%;">
                                        <input name="lname" autofocus placeholder="Last Name">
                                    </div>
                                    <div style="width:100%;">
                                        <input type = "email" name="email" placeholder="Email Address">
                                        @if($errors->has('email'))
                                            <div class="text-danger">{{$errors->first('email')}}</div>

                                        @endif
                                    </div>

                                    <div style="width:100%;">
                                        <input type = "password" name="password" placeholder="Choose a Password">
                                    </div>
                                    <div style="width:100%;">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2">
                                        <label class="form-check-label" for="invalidCheck2">
                                            By signing up, you agree to our <a href="#" id="alreasy-account">Terms and Conditions</a> and <a href="#" id="alreasy-account">Privacy Policy</a>
                                        </label>
                                    </div>
                                    <div style="width:100%;">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck">
                                        <label class="form-check-label" for="invalidCheck">
                                            Can we contact you about Learn 4 Learning?
                                        </label>
                                    </div>
                                    <button type="submit" id="submit" name="submit" class="btn btn-primary active" >SignUp</button>
                                </form>
                            </div>
                        </div>

                    </div>
                         </div>
            </div>
        </div>
    </section>
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
@section('js')
{{----}}
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
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
       <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
   <script>
    $(document).ready(function () {
    $('#form').validate({ // initialize the plugin
        rules: {
            fname: {
                required: true
                 range: ['A', 'Z']
            },
            email: {
                required: true,
                email: true
            },
            lname: {
                required: true,
                digits: true

            },
              password: {
                required: true,
                digits: true

            },


        }
    });
});
</script>
       <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
       <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
