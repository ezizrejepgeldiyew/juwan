@extends('layouts.app2')
@section('skilet')

    <div class="min-height-200px">
        <x-breadcrumb title="Postlar" put="posts"></x-breadcrumb>

        <div class="card-box mb-30">
            <div class="pd-20">
                <a href="{{ route('photos.index') }}" class="btn btn-success"><i class="icon-copy bi bi-images"></i></a>
                <a href="{{ route('videos.index') }}" class="btn btn-success"><i class="icon-copy fa fa-video-camera" aria-hidden="true"></i></a>
                <a href="{{ route('postbooks.index') }}" class="btn btn-success"><i class="icon-copy bi bi-book-half"></i></a>
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
                            <th>Type</th>
                            <th>Id</th>
                            <th>Start date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->relationable_type }}</td>
                                <td>{{ $post->relationable_id }}</td>
                                <td>{{ $post->created_at }}</td>
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
                id: arr_id
            }

            $.get('{{ route('selectDeletePosts') }}', data, function(response) {
                location.reload()
            })
        })
    </script>
@endsection
