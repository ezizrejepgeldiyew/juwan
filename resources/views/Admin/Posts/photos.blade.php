@extends('layouts.app2')
@section('skilet')
    <div class="min-height-200px">
        <x-breadcrumb title="Suratlar" put="photos"></x-breadcrumb>

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
                            <th>Photos</th>
                            <th>Category</th>
                            <th>Description</th>
                            <th>Start date</th>
                            <th class="datatable-nosort">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($postPhotos as $postPhoto)
                            <tr>
                                <td>{{ $postPhoto->id }}</td>
                                <td>
                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            @php
                                                $a = 0;
                                            @endphp
                                            @foreach (json_decode($postPhoto->photos) as $photo)
                                                <div class="carousel-item @if ($a == 0) active @endif">
                                                    @php
                                                        $a++;
                                                    @endphp
                                                    <img class="d-block" style="width: 150px" src="{{ asset($photo) }}"
                                                        alt="First slide">
                                                </div>
                                            @endforeach
                                        </div>

                                    </div>
                                </td>
                                <td>{{ $postPhoto->category->name }}</td>
                                <td>
                                    @if (strlen($postPhoto->description) > 50)
                                        {{ substr($postPhoto->description, 0, 50) }} ...
                                    @else
                                     {{ $postPhoto->description }}
                                    @endif
                                </td>
                                <td>{{ $postPhoto->created_at }}</td>
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
                                                data-target="#update{{ $postPhoto->id }}" type="button" href="#"><i
                                                    class="dw dw-edit2"></i> Edit</a>

                                            <form action="{{ route('photos.destroy', $postPhoto->id) }}" method="POST">
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

                    <form action="{{ route('photos.store') }}" method="POST" enctype="multipart/form-data"> @csrf
                        <div class="form-group">
                            <label>Category</label>
                            <select class="selectpicker form-control" name="category_id">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Photos</label>
                            <input class="form-control" type="file" name="photos[]" multiple>
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
    @foreach ($postPhotos as $postPhoto)
        <div class="modal fade bs-example-modal-lg" id="update{{ $postPhoto->id }}" tabindex="-1" role="dialog"
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
                        <form action="{{ route('photos.update', $postPhoto->id) }}" method="POST" enctype="multipart/form-data"> @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Category</label>
                                <select class="selectpicker form-control" name="category_id">
                                    <option value="{{ $postPhoto->category->id }}">{{ $postPhoto->category->name }}</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Photos</label>
                                <input class="form-control" type="file" name="photos[]" multiple>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" class="form-control">{{ $postPhoto->description }}</textarea>
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
            $.get('{{ route('selectDeletePostPhotos') }}', data, function(response) {
                location.reload()
            })
        })
    </script>
@endsection
