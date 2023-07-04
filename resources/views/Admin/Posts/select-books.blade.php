@extends('layouts.app2')
@section('skilet')
    <div class="min-height-200px">
        <x-breadcrumb title="Kitaplary Goşmak" put="select_store_post_books"></x-breadcrumb>
        <div class="card-box mb-30">
            <div class="pd-20">
                <button type="button" id="select-books" class="btn btn-success"><i class="icon-copy fa fa-share-square-o" aria-hidden="true"></i></button>
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
                            <th>Category</th>
                            <th>Create date</th>
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
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/previewImg.js') }}"></script>
    <script>
        $('#select-books').click(function() {
            var arr_id = [];
            $(':checkbox:checked').each(function(i) {
                arr_id[i] = $(this).val();
            })
            data = {
                _token: "{{ csrf_token() }}",
                id: arr_id
            }
            console.log(data);
            $.get('{{ route('post_books.select_store_books') }}', data, function(response) {
                location.reload()
            })
        })
    </script>
@endsection
