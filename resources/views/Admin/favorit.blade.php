@extends('layouts.app2')
@section('skilet')
    <div class="min-height-200px">
        <x-breadcrumb title="{{ __('Favorites') }}" put="favorites"></x-breadcrumb>

        <div class="pd-20 card-box">
            <h5 class="h4 text-blue mb-20">{{ __('Favorites') }}</h5>
            <div class="tab">
                <ul class="nav nav-tabs customtab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#book" role="tab"
                            aria-selected="true">{{ __('Books') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#podcast" role="tab"
                            aria-selected="false">{{ __('Podcasts') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#postPhotos" role="tab"
                            aria-selected="false">{{ __('Post') }} {{ __('Photos') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#postVideo" role="tab"
                            aria-selected="false">{{ __('Post') }} {{ __('Video') }}</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="book" role="tabpanel">
                        <br>
                        <div class="pb-20">
                            <table class="data-table table stripe hover nowrap">
                                <thead>
                                    <tr>
                                        <th class="table-plus datatable-nosort">{{ __('Name') }}</th>
                                        <th>{{ __('Category') }}</th>
                                        <th>{{ __('Quantity') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($books as $book)
                                        <tr>
                                            <td class="table-plus">{{ $book->favorit->name }}</td>
                                            <td>{{ $book->favorit->category->name }}</td>
                                            <td>{{ $book->quantity }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="podcast" role="tabpanel">
                        <br>
                        <div class="pb-20">
                            <table class="data-table table stripe hover nowrap">
                                <thead>
                                    <tr>
                                        <th class="table-plus datatable-nosort">{{ __('Name') }}</th>
                                        <th>{{ __('Genre') }}</th>
                                        <th>{{ __('Quantity') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($podcasts as $podcast)
                                        <tr>
                                            <td class="table-plus">{{ $podcast->favorit->title }}</td>
                                            <td>{{ $podcast->favorit->genre->name }}</td>
                                            <td>{{ $podcast->quantity }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="postPhotos" role="tabpanel">
                        <br>
                        <div class="pb-20">
                            <table class="data-table table stripe hover nowrap">
                                <thead>
                                    <tr>
                                        <th class="table-plus datatable-nosort">{{ __('Name') }}</th>
                                        <th>{{ __('Category') }}</th>
                                        <th>{{ __('Quantity') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($postPhotos as $postPhoto)
                                        <tr>
                                            <td class="table-plus">{{ $postPhoto->favorit->name }}</td>
                                            <td>{{ $postPhoto->favorit->category->name }}</td>
                                            <td>{{ $postPhoto->quantity }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="postVideo" role="tabpanel">
                        <br>
                        <div class="pb-20">
                            <table class="data-table table stripe hover nowrap">
                                <thead>
                                    <tr>
                                        <th class="table-plus datatable-nosort">{{ __('Name') }}</th>
                                        <th>{{ __('Category') }}</th>
                                        <th>{{ __('Quantity') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($postVideos as $postVideo)
                                        <tr>
                                            <td class="table-plus">{{ $postVideo->name }}</td>
                                            <td>{{ $postVideo->category->name }}</td>
                                            <td>{{ $postVideoFavorites[$postVideo->id] }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
