@extends('layouts.app2')
@section('skilet')
    <link href="https://vjs.zencdn.net/8.3.0/video-js.css" rel="stylesheet" />
    <div class="min-height-200px">
        <x-breadcrumb title="Wideolar" put="videos"></x-breadcrumb>

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
                            <th>Videos</th>
                            <th>Category</th>
                            <th>Description</th>
                            <th>Start date</th>
                            <th class="datatable-nosort">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($postVideos as $postVideo)
                            <tr>
                                <td>{{ $postVideo->id }}</td>
                                <td>{{$postVideo->video}}</td>
                                <td>{{ $postVideo->category->name }}</td>
                                <td>
                                    @if (strlen($postVideo->description) > 50)
                                        {{ substr($postVideo->description, 0, 50) }} ...
                                    @else
                                        {{ $postVideo->description }}
                                    @endif
                                </td>
                                <td>{{ $postVideo->created_at }}</td>
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
                                                data-target="#update{{ $postVideo->id }}" type="button" href="#"><i
                                                    class="dw dw-edit2"></i> Edit</a>

                                            <form action="{{ route('videos.destroy', $postVideo->id) }}" method="POST">
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
                        Create
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        ×
                    </button>
                </div>
                <div class="modal-body">

                    <form action="{{ route('videos.store') }}" method="POST" enctype="multipart/form-data"> @csrf
                        <div class="form-group">
                            <label>Category</label>
                            <select class="selectpicker form-control" name="category_id">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Videos</label>
                            <input class="form-control" type="file" name="video">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" class="form-control"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                Ýatyr
                            </button>
                            <button type="submit" class="btn btn-success">
                                Goş
                            </button>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
    {{-- Update --}}
    @foreach ($postVideos as $postVideo)
        <div class="modal fade bs-example-modal-lg" id="update{{ $postVideo->id }}" tabindex="-1" role="dialog"
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
                        <form action="{{ route('videos.update', $postVideo->id) }}" method="POST"
                            enctype="multipart/form-data"> @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Category</label>
                                <select class="selectpicker form-control" name="category_id">
                                    <option value="{{ $postVideo->category->id }}">{{ $postVideo->category->name }}
                                    </option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Videos</label>
                                <input class="form-control" type="file" name="videos">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" class="form-control">{{ $postVideo->description }}</textarea>
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
        $('#select-delete').click(function() {
            var arr_id = [];
            $(':checkbox:checked').each(function(i) {
                arr_id[i] = $(this).val();
            })
            data = {
                _token: "{{ csrf_token() }}",
                id: arr_id,
            }
            $.get('{{ route('selectDeletePostVideos') }}', data, function(response) {
                location.reload()
            })
        })
    </script>
    <script src="https://vjs.zencdn.net/8.3.0/video.min.js"></script>
@endsection
