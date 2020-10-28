@extends('layouts.master', ['class' => 'login-page', 'page' => __('Reset password'), 'contentClass' => 'login-page'])

@section('content')
    <div class="col-lg-5 col-md-7 ml-auto mr-auto">
        <form class="form" method="post" action="{{ route('password.email') }}">
            @csrf

            <div class="card card-login card-white" style="    border: 1px solid #ffc10e !important;">
                <div class="card-header" style="background:#ffc10e;">
                    <h1 class="card-title">{{ __('Reset password') }}</h1>
                </div>
                <div class="card-body" style="align-items: center;
                display: flex;    flex-direction: column; justify-content:center;">
                    @include('alerts.success')
                    <div class="form-group" style="width: 100%;">
                        <label>Email Address:</label>
                        <div class="input-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                            <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}">
                            @include('alerts.feedback', ['field' => 'email'])
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" style="background-color: #045375" class="btn btn-primary btn-lg btn-block mb-3">{{ __('Send Password Reset Link') }}</button>
                </div>
            </div>
        </form>
    </div>
    <br>
@endsection
