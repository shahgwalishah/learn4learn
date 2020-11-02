@extends('layouts.teachersmaster')
@section('title','level')
@section('content')
<style>
    #img_url {
        background: #ddd;
        width: 50px;
        height: 50px;
        display: block;
    }


    input[type=file] {
        padding: 10px;
        background: #2d2d2d;
    }

    .gray_font {
        color: #737171 !important;
        letter-spacing: 2px;
    }

    .text_gray {
        color: #737171 !important;
    }

    ._skip_btn {
        background-color: #ff000000 !important;
        color: gray;
        box-shadow: unset;
        text-decoration: underline;
    }

    .current {
        color: #858585;
        font-size: 16px;
    }
    #submit-btn{
        justify-content: flex-end;
    }
    .customContainer{
        width:85%;
    }
    .main-cont .row {
        margin-right: 0px !important;
        background: white;
        margin-top: -150px;
        position: relative;
        margin-left: auto;
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
    .sutomFormP{
        padding-bottom: 0px !important;
    }
    .customSetting{
        cursor: pointer;
        font-weight: 900;
        font-size: 2rem;
        border-radius: -6px;
        margin-left: 173px;
        background-color: #f1be05;
        border-color: white;
        border-style: none;
        padding-left: 4px;
        padding-right: 4px;
        position: relative;
        top: 34px;
    }
    .fa-plus:before {
        content: "\f067";
        color: white;
        font-size: 25px;
    }
    
</style>

<!--====== Bootstrap css ======-->
<link rel="stylesheet" href="{{asset('asset/css/teachers-profile.css')}}">
<link rel="stylesheet" href="{{asset('asset/css/mdb.min.css')}}">

<section id="slider-part" class="slider-active">
    <div class="single-slider slider-4 bg_cover pt-150">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9">
                    <div class="slider-cont slider-cont-4 text-center">
                        <h1 data-animation="fadeInUp" data-delay="1s">UPDATE PROFILE</h1>
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
{{----}}
{{----}}

<section class="main-section">
    <div class="container customContainer">
        <div class="main-cont">
            <div class="row">
                <div class="col-lg-6 d-flex align-items-center justify-content-center p-5">
                    <div class="form-parts">
                        <h3 class="level-heading">Let's Build your Profile</h3>
                        <div style="display:flex;width:100%;">
                            <form action="{{url('update/profile')}}" method="post" class="sutomFormP" enctype="multipart/form-data">
                                @csrf

                                <div style="padding-right: 50px">
                                    <p class="gray_font">Profile Picture</p>
                                </div>

                                <div class="file-field">

                                    <div class="btn btn-unique btn-sm float-left"
                                        style="background-color: #fff!important;border-radius: 100px;padding: 5px;">
                                        <input type="file" name="thumbnail" onchange="readURL(this);"
                                            accept="image/x-png,image/gif,image/jpeg">
                                        <div id="blah">
                                            @if( !empty($teacherdata->thumbnail) )
                                            <img src="/storage/images/{{ $teacherdata->thumbnail }}"
                                                style="width: 100px;height: 100px;border-radius: 50px;" alt="your image" onerror="this.src='/images/default.png'" />
                                            @endif

                                        </div>
                                    </div>


                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text"
                                            placeholder="Upload one or more files">
                                    </div>
                                </div>

                                <div style="width:100%;">
                                    <input class="_inputwidth" value="{{$teacherdata->description}}" name="description"
                                        autofocus placeholder="Description">
                                </div>
                                <div style="width:100%;">
                                    <input class="_inputwidth" name="educational_level" value="{{$teacherdata->educational_level}}" placeholder="Educational Level">
                                </div>
                                <div style="width:100%;">
                                    <select class="mdb-select _inputwidth" name="country" searchable="Search here.."
                                        required="true">
                                        <option value="" disabled selected>Country</option>
                                        <option {{ $teacherdata->country == "USA" ? 'selected' : "" }} value="USA">USA
                                        </option>
                                        <option {{ $teacherdata->country == "Germany" ? 'selected' : "" }}
                                            value="Germany">Germany</option>
                                        <option {{ $teacherdata->country == "France" ? 'selected' : "" }}
                                            value="France">France</option>
                                        <option {{ $teacherdata->country == "Poland" ? 'selected' : "" }}
                                            value="Poland">Poland</option>
                                        <option {{ $teacherdata->country == "Japan" ? 'selected' : "" }} value="Japan">
                                            Japan</option>
                                    </select>
                                </div>
                                <div style="width:100%;">
                                    <input class="_inputwidth" value="{{$teacherdata->profession}}" name="profession"
                                        placeholder="Profession">
                                </div>
                                <div style="width:100%;">
                                    <input class="_inputwidth" value="{{$teacherdata->experience}}" name="experience"
                                        placeholder="Experience">
                                </div>
                                <div style="width:100%;">
                                    <div>
                                        <a href="{{route('verifiedSuccess')}}" type="submit" class="fas fa-plus customSetting"></a>
                                    </div>
                                    <input class="_inputwidth" value="{{$teacherdata->subject}}" name="subject"
                                        placeholder="Subject">
                                </div>

                                <div class="d-flex" style="width: 100%">
                                    <p class="gray_font">Open 1:1 Tuition </p>
                                    <div class="custom-control custom-radio ml-3">
                                        <input type="radio" class="custom-control-input" value="1" id="defaultUnchecked"
                                            name="fof_session" {{$teacherdata->fof_session==1?'checked' : ''}}>
                                        <label class="custom-control-label gray_font" for="defaultUnchecked">Yes</label>
                                    </div>
                                    <div class="custom-control custom-radio ml-2">
                                        <input type="radio" class="custom-control-input" value="0" id="defaultChecked"
                                            name="fof_session" {{$teacherdata->fof_session==0?'checked' : ''}}>
                                        <label class="custom-control-label gray_font" for="defaultChecked">No</label>
                                    </div>
                                </div>

                                <div class="customBtn">
                                    <button type="submit" class="btn btn-primary active"
                                            style="box-shadow: unset;">SAVE</button>
                                </div>

                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            </form>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 p-0">
                    <div class="d-flex align-items-center justify-content-center" id="submit-btn">
                        <img src="{{asset('asset/images/students/registration-banner.png')}}" style="height: 100%;object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection



<script>
    function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').html('<img id="blah" src="'+e.target.result+'" style="height:100px;width:100px;border-radius: 100px;" alt="your image" />')
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>
