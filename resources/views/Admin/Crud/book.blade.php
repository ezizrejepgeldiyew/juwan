@extends('layouts.app2')
@section('skilet')
    <div class="min-height-200px">
        <x-breadcrumb title="Kitaplar" put="books"></x-breadcrumb>
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
                            <th>Image</th>
                            <th>Name</th>
                            <th>Category Name</th>
                            <th>Start date</th>
                            <th class="datatable-nosort">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $book)
                            <tr>
                                <td>{{ $book->id }}</td>
                                <td><img src="{{ asset($book->photo) }}" width="100" alt=""></td>
                                <td>{{ $book->name }}</td>
                                <td>{{ $book->category->name }}</td>
                                <td>{{ $book->created_at }}</td>
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
                                                data-target="#update{{ $book->id }}" type="button" href="#"><i
                                                    class="dw dw-edit2"></i> Edit</a>

                                            <a class="dropdown-item" href="{{ route('books.destroy', $book->id) }}"><i
                                                    class="dw dw-delete-3"></i>
                                                Delete</a>
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
                    <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data"> @csrf

                        <div class="form-group">
                            <label>Photo</label>
                            <input type="file" class="form-control" name="photo" onchange="previewFile(this)">
                            <img id="previewImg" alt="profile image" src="{{ asset('images/default-image.jpg') }}"
                                style="max-width: 130px; margin-top: 20px;">
                        </div>
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" id="name" type="text" name="name">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Category</label>
                            <select class="selectpicker form-control" name="category_id" style="width: 100%">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Author</label>
                            <select class="selectpicker form-control" name="author_id" style="width: 100%">
                                @foreach ($authors as $author)
                                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Ganre</label>
                            <select class="selectpicker form-control" name="ganre_id" style="width: 100%">
                                @foreach ($genres as $genre)
                                    <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="from-group mb-3">
                            <label>Audio</label>
                            <input class="form-control" type="file" name="audio">
                        </div>
                        <div class="from-group mb-3">
                            <label>File</label>
                            <input class="form-control" type="file" name="file">
                        </div>
                        <div class="from-group">
                            <label>Description</label>
                            <textarea name="description" class="form-control" cols="30" rows="10"></textarea>
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
    @foreach ($books as $book)
        <div class="modal fade bs-example-modal-lg" id="update{{ $book->id }}" tabindex="-1" role="dialog"
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
                        <form action="{{ route('books.update', $book->id) }}" enctype="multipart/form-data"
                            method="POST"> @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Photo</label>
                                <input type="file" class="form-control" name="photo" onchange="previewFile(this)">
                                <img id="previewImg" alt="profile image" style="max-width: 130px; margin-top: 20px;">
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" id="name" type="text" name="name"
                                    value="{{ $book->name }}">
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Category</label>
                                <select class="selectpicker form-control" name="category_id" style="width: 100%">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Author</label>
                                <select class="selectpicker form-control" name="author_id" style="width: 100%">
                                    @foreach ($authors as $author)
                                        <option value="{{ $author->id }}">{{ $author->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Ganre</label>
                                <select class="selectpicker form-control" name="ganre_id" style="width: 100%">
                                    @foreach ($genres as $genre)
                                        <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="from-group mb-3">
                                <label>Audio</label>
                                <input class="form-control" type="file" name="audio">
                            </div>
                            <div class="from-group mb-3">
                                <label>File</label>
                                <input class="form-control" type="file" name="file">
                            </div>
                            <div class="from-group">
                                <label>Description</label>
                                <textarea name="description" class="form-control" cols="30" rows="10"></textarea>
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

    <script src="{{ asset('js/previewImg.js') }}"></script>
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

            $.get('{{ route('selectDeleteBooks') }}', data, function(response) {
                location.reload()
            })
        })
    </script>
@endsection
