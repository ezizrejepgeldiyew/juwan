@extends('layouts.app2')
@section('skilet')
    <div class="min-height-200px">
        
        <x-breadcrumb title="{{ __('Profile')}}" put="profile"></x-breadcrumb>

        <div class="row">
            <div class="col-6">
                <div class="card-box height-100-p overflow-hidden">
                    <div class="profile-setting">
                        <form action="{{ route('profile.update_account_info', Auth::user()->id) }}" method="POST">
                            @csrf @method('PUT')
                            <ul class="profile-edit-list">
                                <li class="weight-500 col-12">
                                    <h4 class="text-blue h5 mb-20">
                                        {{ __('Update Account Info')}}
                                    </h4>
                                    <div class="form-group">
                                        <label>{{ __('Name')}}</label>
                                        <input class="form-control form-control-lg" type="text" name="name"
                                            value="{{ Auth::user()->name }}" required />
                                    </div>

                                    <div class="form-group">
                                        <label>{{ __('Surname')}}</label>
                                        <input class="form-control form-control-lg" type="text" name="surname"
                                            value="{{ Auth::user()->surname }}" required />
                                    </div>

                                    <div class="form-group">
                                        <label>{{ __('Email')}}</label>
                                        <input class="form-control form-control-lg" type="email" name="email"
                                            value="{{ Auth::user()->email }}" />
                                    </div>
                                    <div class="form-group mb-0">
                                        <button type="submit" class="btn btn-primary">{{ __('Save')}}</button>
                                    </div>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="card-box height-100-p overflow-hidden">
                    <div class="profile-setting">
                        <form action="{{ route('profile.change_password') }}" method="POST">@csrf
                            <ul class="profile-edit-list">
                                <li class="weight-500 col-12">
                                    <h4 class="text-blue h5 mb-20">
                                        {{ __('Change password')}}
                                    </h4>
                                    <div class="form-group">
                                        <label>{{ __('Old')}} {{ __('Password')}}</label>
                                        <input class="form-control form-control-lg" type="password" name="old_password" />
                                        @error('old_password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>{{ __('New')}} {{ __('Password')}}</label>
                                        <input class="form-control form-control-lg" type="password" name="new_password" />
                                        @error('new_password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>{{ __('Confirmation')}} {{ __('Password')}}</label>
                                        <input class="form-control form-control-lg" type="password"
                                            name="new_password_confirmation" />
                                    </div>
                                    <div class="form-group mb-0">
                                        <button type="submit" class="btn btn-primary">{{ __('Change')}}</button>
                                    </div>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
