@extends('layouts.app2')
@section('skilet')
    <div class="min-height-200px">
        <x-breadcrumb title="{{ __('Genres') }}" put="genres"></x-breadcrumb>

        <div class="card-box mb-30">
            <div class="pd-20">
                <button type="button" class="btn btn-success"data-toggle="modal" data-target="#create" type="button"><i
                        class="fa fa-plus"></i></button>
                <button type="button" id="select-delete" class="btn btn-danger"><i class="fa fa-trash"></i></button>
            </div>
            <div class="pb-20">
                <table class="checkbox-datatable  table nowrap">
                    <thead>
                        <tr>
                            <th>
                                <div class="dt-checkbox">
                                    <input type="checkbox" name="select_all" value="1" id="example-select-all" />
                                    <span class="dt-checkbox-label"></span>
                                </div>
                            </th>
                            <th>{{ __('Image') }}</th>
                            <th>{{ __('Name') }}</th>
                            <th>{{ __('Created_at') }}</th>
                            <th class="datatable-nosort">{{ __('Action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($genres as $genre)
                            <tr>
                                <td>{{ $genre->id }}</td>
                                <td><img src="{{ asset($genre->photo) }}" width="100" alt=""></td>
                                <td>{{ $genre->name }}</td>
                                <td>{{ $genre->created_at }}</td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                            href="#" role="button" data-toggle="dropdown">
                                            <i class="dw dw-more"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                            <a class="dropdown-item" data-toggle="modal" data-target="#bd-example-modal-lg"
                                                type="button" href="#"><i class="dw dw-eye"></i>
                                                {{ __('View') }}</a>
                                            <a class="dropdown-item" data-toggle="modal"
                                                data-target="#update{{ $genre->id }}" type="button" href="#"><i
                                                    class="dw dw-edit2"></i> {{ __('Edit') }}</a>

                                            <form action="{{ route('genres.destroy', $genre->id) }}" method="POST">
                                                @csrf @method('DELETE')
                                                <button class="dropdown-item" type="submit"><i class="dw dw-delete-3"></i>
                                                    {{ __('Delete') }}</button>
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
    </div>

    {{-- Create --}}
    <div class="modal fade bs-example-modal-lg" id="create" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">
                        {{ __('Add') }}
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        ×
                    </button>
                </div>
                <div class="modal-body">

                    <form action="{{ route('genres.store') }}" method="POST" enctype="multipart/form-data"> @csrf
                        <div class="form-group">
                            <label>{{ __('Image') }}</label>
                            <input type="file" class="form-control" name="photo" onchange="previewFile(this)">
                            <img id="previewImg" alt="profile image" src="{{ asset('images/default-image.jpg') }}"
                                style="max-width: 130px; margin-top: 20px;">
                        </div>
                        <div class="form-group">
                            <label>{{ __('Name') }}</label>
                            <input class="form-control" id="name" type="text" name="name">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                {{ __('Close') }}
                            </button>
                            <button type="submit" class="btn btn-success">
                                {{ __('Save') }}
                            </button>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
    {{-- Update --}}
    @foreach ($genres as $genre)
        <div class="modal fade bs-example-modal-lg" id="update{{ $genre->id }}" tabindex="-1" role="dialog"
            aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myLargeModalLabel">
                            {{ __('Edit') }}
                        </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            ×
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('genres.update', $genre->id) }}" method="POST"
                            enctype="multipart/form-data"> @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>{{ __('Image') }}</label>
                                <input type="file" class="form-control" name="photo">
                            </div>
                            <div class="form-group">
                                <label>{{ __('Name') }}</label>
                                <input class="form-control" type="text" name="name" value="{{ $genre->name }}">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                    {{ __('Close') }}
                                </button>
                                <button type="submit" class="btn btn-success">
                                    {{ __('Change') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <script>
        $('#select-delete').click(function() {
            var arr_id = [];
            $(':checkbox:checked').each(function(i) {
                arr_id[i] = $(this).val();
            })
            data = {
                _token: "{{ csrf_token() }}",
                id: arr_id
            }

            $.get('{{ route('selectDeleteGenres') }}', data, function(response) {
                location.reload()
            })
        })
    </script>
@endsection
