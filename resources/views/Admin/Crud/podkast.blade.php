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
                        <th>{{ __('Title') }}</th>
                        <th>{{ __('Author') }}</th>
                        <th>{{ __('Category') }}</th>
                        <th>{{ __('Audio') }}</th>
                        <th>{{ __('Description') }}</th>
                        <th>{{ __('Created_at') }}</th>
                        <th class="datatable-nosort">{{ __('Action') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($podkasts as $podkast)
                        <tr>
                            <td>{{ $podkast->id }}</td>
                            <td>{{ $podkast->title }}</td>
                            <td>{{ $podkast->author->name }}</td>
                            <td>{{ $podkast->category->name }}</td>
                            <td>
                                <audio controls onplay="pauseOthers(this);">
                                    <source src="{{ asset($podkast->audio) }}" type="audio/ogg">
                                </audio>
                            </td>
                            <td>
                                @if (strlen($podkast->text) > 50)
                                    {{ substr($podkast->text, 0, 50) }}
                                    <span class="read-more-show hide_content">...</span>
                                @else
                                    {{ $podkast->text }}
                                @endif
                            </td>
                            <td>{{ $podkast->created_at }}</td>
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
                                            data-target="#update{{ $podkast->id }}" type="button" href="#"><i
                                                class="dw dw-edit2"></i> Edit</a>

                                        <form action="{{ route('podkasts.destroy', $podkast->id) }}" method="POST">
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
                            <label>{{ __('Title') }}</label>
                            <input class="form-control" id="title" type="text" name="title" >
                        </div>
                        <div class="form-group">
                            <label>{{ __('Author') }}</label>
                            <select class="selectpicker form-control" name="author_id">
                                @foreach ($authors as $author)
                                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>{{ __('Category') }}</label>
                            <select class="selectpicker form-control" name="category_id">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>{{ __('Audio') }}</label>
                            <input class="form-control" id="audio" type="file" name="audio" >
                        </div>
                        <div class="form-group">
                            <label>{{ __('Description') }}</label>
                            <textarea class="form-control" id="text" name="text"></textarea>
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
    @foreach ($podkasts as $podkast)
        <div class="modal fade bs-example-modal-lg" id="update{{ $podkast->id }}" tabindex="-1" role="dialog"
            aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myLargeModalLabel">
                            {{ __('Update') }}
                        </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            ×
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('podkasts.update', $podkast->id) }}" enctype="multipart/form-data"
                            method="POST"> @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" id="title" type="text" name="title"
                                    value="{{ $podkast->title }}" >
                            </div>
                            <div class="form-group">
                                <label>Author</label>
                                <select class="selectpicker form-control" name="author_id">
                                    <option value="{{ $podkast->author_id }}">{{ $podkast->author->name }}</option>
                                    @foreach ($authors as $author)
                                        <option value="{{ $author->id }}">{{ $author->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Category</label>
                                <select class="selectpicker form-control" name="category_id">
                                    <option value="{{ $podkast->category_id }}">{{ $podkast->category->name }}</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Audio</label>
                                <input class="form-control" id="audio" type="file" name="audio"
                                    value="{{ $podkast->audio }}">
                            </div>
                            <div class="form-group">
                                <label>Text</label>
                                <textarea class="form-control" id="text" name="text">{{ $podkast->text }}</textarea>
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
