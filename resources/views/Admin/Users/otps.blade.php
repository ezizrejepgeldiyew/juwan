@extends('layouts.app2')
@section('skilet')
    <div class="min-height-200px">
        <x-breadcrumb title="Otpler" put="otps"></x-breadcrumb>


        <div class="card-box pb-10 pd-5">
            <table class="data-table table nowrap">
                <thead>
                    <tr>
                        <th class="table-plus">Login</th>
                        <th>Otp</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>Created</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($otps as $otp)
                        <tr>
                            <td class="table-plus">
                                <div class="name-avatar d-flex align-items-center">
                                    <div class="txt">
                                        <div class="weight-600">{{ $otp->login }}</div>
                                    </div>
                                </div>
                            </td>
                            <td>{{ $otp->otp }}</td>
                            <td>
                                {{ $otp->type }}
                            </td>
                            <td>{{ $otp->status }}</td>
                            <td>
                                {{ $otp->created_at }}
                            </td>
                            <td>
                                <div class="dropdown">
                                    <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                        href="#" role="button" data-toggle="dropdown">
                                        <i class="dw dw-more"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                        <a class="dropdown-item" data-toggle="modal" data-target="#bd-example-modal-lg"
                                            type="button" href="#"><i class="dw dw-eye"></i> View</a>
                                        <a class="dropdown-item" data-toggle="modal"
                                            data-target="#update{{ $otp->id }}" type="button" href="#"><i
                                                class="dw dw-edit2"></i> Edit</a>

                                        <form action="{{ route('users.destroy', $otp->id) }}" method="POST">
                                            @csrf @method('DELETE')
                                            <button class="dropdown-item" type="submit"><i
                                                    class="dw dw-delete-3"></i>Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>


    {{-- Update --}}
    @foreach ($otps as $otp)
        <div class="modal fade bs-example-modal-lg" id="update{{ $otp->id }}" tabindex="-1" role="dialog"
            aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myLargeModalLabel">
                            Update
                        </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            ×
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('users.update', $otp->id) }}" method="POST"> @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Login</label>
                                <input class="form-control" type="number" name="login" value="{{ $otp->login }}">
                            </div>
                            <div class="form-group">
                                <label>Otp</label>
                                <input class="form-control" type="number" name="otp" value="{{ $otp->otp }}">
                            </div>
                            <div class="form-group">
                                <label>Type</label>
                                <input class="form-control" type="text" name="otp" value="{{ $otp->type }}">
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <input class="form-control" type="text" name="otp" value="{{ $otp->status }}">
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success">
                                    Üýtget
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
