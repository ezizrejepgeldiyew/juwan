@extends('layouts.app2')
@section('skilet')
    <div class="min-height-200px">
        <x-breadcrumb title="Kitaplar" put="post_books"></x-breadcrumb>

        <div class="card-box mb-30">
            <div class="pd-20">
                <a href="{{ route('post_books.select_books') }}" class="btn btn-success"><i class="fa fa-plus"></i></a>
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
                            <th>{{ __('Photo') }}</th>
                            <th>{{ __('Name') }}</th>
                            <th>{{ __('Category') }}</th>
                            <th>{{ __('Author') }}</th>
                            <th>{{ __('Description') }}</th>
                            <th>{{ __('Created_at') }}</th>
                            <th class="datatable-nosort">{{ __('Action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($postBooks as $postBook)
                            <tr>
                                <td>{{ $postBook->id }}</td>
                                <td><img src="{{ asset($postBook->book->photo) }}" width="100px"></td>
                                <td>{{ $postBook->name }}</td>
                                <td>{{ $postBook->book->category->name }}</td>
                                <td>{{ $postBook->book->author->name }}</td>
                                <td>
                                    @if (strlen($postBook->description) > 50)
                                        {{ substr($postBook->description, 0, 50) }} ...
                                    @else
                                        {{ $postBook->description }}
                                    @endif
                                </td>
                                <td>{{ $postBook->created_at }}</td>
                                <td>
                                    <form action="{{ route('postbooks.destroy', $postBook->id) }}" method="POST">
                                        @csrf @method('DELETE')
                                        <button class="btn btn-danger" type="submit"><i class="bi bi-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>

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
            $.get('{{ route('post_books.select_delete') }}', data, function(response) {
                location.reload()
            })
        })
    </script>
@endsection
