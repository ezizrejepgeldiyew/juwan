@extends('layouts.app1')
@section('skilet1')
    <div class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-7">
                    <img src="{{ asset('vendors/images/register-page-img.png') }}" alt="" />
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="login-box bg-white box-shadow border-radius-10">
                        <div class="register-title">
                            <h2 class="text-center text-primary">Register To Juwan</h2>
                        </div>
                        <br>
                        <form action="{{ route('register') }}" method="POST"> @csrf
                            <div class="form-group custom">
                                <label class="col-sm-8 col-form-label">{{ __('Email Address') }}*</label>
                                <div class="col-sm-12">
                                    <input type="email" name="email" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group custom">
                                <label class="col-sm-6 col-form-label">{{ __('Username') }}*</label>
                                <div class="col-sm-12">
                                    <input type="text" name="name" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group custom">
                                <label class="col-sm-6 col-form-label">{{ __('Surname') }}*</label>
                                <div class="col-sm-12">
                                    <input type="text" name="surname" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group custom">
                                <label class="col-sm-6 col-form-label">{{ __('Password') }}*</label>
                                <div class="col-sm-12">
                                    <input type="password" name="password" id="password" class="form-control" />
                                    <div class="input-group-append custom mr-3">
                                        <span class="input-group-text">
                                            <i class="bi bi-eye-slash" id="togglePassword"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group custom">
                                <label class="col-sm-8 col-form-label">{{ __('Confirm Password') }}*</label>
                                <div class="col-sm-12">
                                    <input type="password" name="password_confirmation" id="confPassword"
                                        class="form-control" />
                                    <div class="input-group-append custom mr-3">
                                        <span class="input-group-text">
                                            <i class="bi bi-eye-slash" id="toggleConfPassword"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="input-group mb-0">
                                        <button type="submit"
                                            class="btn btn-primary btn-lg btn-block">{{ __('Register') }}</button>
                                    </div>
                                    <div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373">
                                        {{ __('or') }}
                                    </div>
                                    <div class="input-group mb-0">
                                        <a class="btn btn-outline-primary btn-lg btn-block"
                                            href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
