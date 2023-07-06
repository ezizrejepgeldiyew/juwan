@extends('layouts.app2')
@section('skilet')
    <div class="min-height-200px">
        <x-breadcrumb title="{{ __('Podcasts') }}" put='podkasts'></x-breadcrumb>
        <div class="card-box mb-30">
            <div class="pd-20">
                <button type="button" class="btn btn-success"data-toggle="modal" data-target="#create" type="button"><i
                        class="fa fa-plus"></i></button>
                <button type="button" id="select-delete" class="btn btn-danger"><i class="fa fa-trash"></i></button>
            </div>
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
                        <th>{{ __('Title') }}</th>
                        <th>{{ __('Genre') }}</th>
                        <th>{{ __('Audio') }}</th>
                        <th>{{ __('Description') }}</th>
                        <th>{{ __('Created_at') }}</th>
                        <th class="datatable-nosort">{{ __('Action') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($podcasts as $podcast)
                        <tr>
                            <td>{{ $podcast->id }}</td>
                            <td><img src="{{ asset($podcast->photo) }}" width="100" alt=""></td>
                            <td>{{ $podcast->title }}</td>
                            <td>{{ $podcast->genre->name }}</td>
                            <td>
                                <audio controls onplay="pauseOthers(this);">
                                    <source src="{{ asset($podcast->audio) }}" onclick="pauseOthers(this)"
                                        type="audio/mp3">
                                </audio>
                            </td>
                            <td>{{ $podcast->description }}</td>
                            <td>{{ $podcast->created_at }}</td>
                            <td>
                                <div class="dropdown">
                                    <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                        href="#" role="button" data-toggle="dropdown">
                                        <i class="dw dw-more"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                        <a class="dropdown-item" data-toggle="modal" data-target="#bd-example-modal-lg"
                                            type="button" href="#"><i class="dw dw-eye"></i> {{ __('View') }}</a>
                                        <a class="dropdown-item" data-toggle="modal"
                                            data-target="#update{{ $podcast->id }}" type="button" href="#"><i
                                                class="dw dw-edit2"></i> {{ __('Edit') }}</a>

                                        <form action="{{ route('podkasts.destroy', $podcast->id) }}" method="POST">
                                            @csrf @method('DELETE')
                                            <button class="dropdown-item" type="submit"><i
                                                    class="dw dw-delete-3"></i>{{ __('Delete') }}</button>
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
                        {{ __('Create') }}
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        ×
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('podkasts.store') }}" method="POST" enctype="multipart/form-data"> @csrf
                        <div class="form-group">
                            <label>{{ __('Image') }}</label>
                            <input type="file" class="form-control" name="photo" onchange="previewFile(this)">
                            <img id="previewImg" alt="profile image" src="{{ asset('images/default-image.jpg') }}"
                                style="max-width: 130px; margin-top: 20px;">
                        </div>

                        <div class="form-group">
                            <label>{{ __('Title') }}</label>
                            <input class="form-control" id="title" type="text" name="title">
                        </div>

                        <div class="form-group">
                            <label>{{ __('Genre') }}</label>
                            <select class="selectpicker form-control" name="genre_id">
                                @foreach ($genres as $genre)
                                    <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>{{ __('Audio') }}</label>
                            <input class="form-control" id="audio" type="file" name="audio">
                        </div>

                        <div class="form-group">
                            <label>{{ __('Description') }}</label>
                            <input class="form-control" type="text" name="description">
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
    @foreach ($podcasts as $podcast)
        <div class="modal fade bs-example-modal-lg" id="update{{ $podcast->id }}" tabindex="-1" role="dialog"
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
                        <form action="{{ route('podkasts.update', $podcast->id) }}" enctype="multipart/form-data"
                            method="POST"> @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label>{{ __('Image') }}</label>
                                <input type="file" class="form-control" name="photo">
                            </div>

                            <div class="form-group">
                                <label>{{ __('Title') }}</label>
                                <input class="form-control" id="title" type="text" name="title"
                                    value="{{ $podcast->title }}">
                            </div>
                            <div class="form-group">
                                <label>{{ __('Genre') }}</label>
<<<<<<< HEAD
                                <select class="selectpicker form-control" name="author_id">
=======
                                <select class="selectpicker form-control" name="genre_id">
>>>>>>> 67235890e50a68e654dd1b0542e2f12b7fc23700
                                    <option value="{{ $podcast->genre_id }}">{{ $podcast->genre->name }}</option>
                                    @foreach ($genres as $genre)
                                        <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>{{ __('Audio') }}</label>
                                <input class="form-control" id="audio" type="file" name="audio">
                            </div>

                            <div class="form-group">
                                <label>{{ __('Description') }}</label>
                                <input class="form-control" type="text" name="description"
                                    value="{{ $podcast->description }}">
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                    Ýatyr
                                </button>
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

    <script>
        function pauseOthers(element) {
            $("audio").not(element).each(function(index, audio) {
                audio.pause();
            })
        }
        $('#select-delete').click(function() {
            var arr_id = [];
            $(':checkbox:checked').each(function(i) {
                arr_id[i] = $(this).val();
            })
            data = {
                _token: "{{ csrf_token() }}",
                id: arr_id
            }

            $.get('{{ route('selectDeletePodkasts') }}', data, function(response) {
                location.reload()
            })
        })
    </script>
@endsection
