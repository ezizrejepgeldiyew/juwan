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
                        <div class="login-title">
                            <h2 class="text-center text-primary">{{ __('Reset Password') }}</h2>
                        </div>
                        <form action="{{ route('reset.password.post') }}" method="POST"> @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="form-group custom">
                                <label class="col-sm-8 col-form-label">{{ __('Email Address') }}*</label>
                                <div class="col-sm-12">
                                    <input type="email" name="email" class="form-control" value="{{ $email }}" readonly/>
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
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">{{ __('Reset Password') }}</button>
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
