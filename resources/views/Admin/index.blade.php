@extends('layouts.app2')
@section('skilet')
    <div class="row pb-10">
        <a href="{{ route('users.index') }}" class="col-xl-3 col-lg-3 col-md-6 mb-20" style="cursor: pointer">
            <div class="card-box height-100-p widget-style3">
                <div class="d-flex flex-wrap">
                    <div class="widget-data">
                        <div class="weight-700 font-24 text-dark">{{ $userCount }}</div>
                        <div class="font-14 text-secondary weight-500">{{ __('Total') }} {{ __('Users') }}</div>
                    </div>
                    <div class="widget-icon">
                        <div class="icon">
                            <span class="icon-copy fa fa-users"></span>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="{{ route('authors.index') }}" class="col-xl-3 col-lg-3 col-md-6 mb-20" style="cursor: pointer">
            <div class="card-box height-100-p widget-style3">
                <div class="d-flex flex-wrap">
                    <div class="widget-data">
                        <div class="weight-700 font-24 text-dark">{{ $authorCount }}</div>
                        <div class="font-14 text-secondary weight-500">{{ __('Total') }} {{ __('Authors') }}</div>
                    </div>
                    <div class="widget-icon">
                        <div class="icon">
                            <i class="icon-copy dw dw-user2"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="{{ route('books.index') }}" class="col-xl-3 col-lg-3 col-md-6 mb-20" style="cursor: pointer">
            <div class="card-box height-100-p widget-style3">
                <div class="d-flex flex-wrap">
                    <div class="widget-data">
                        <div class="weight-700 font-24 text-dark">{{ $bookCount }}</div>
                        <div class="font-14 text-secondary weight-500">{{ __('Total') }} {{ __('Books') }}</div>
                    </div>
                    <div class="widget-icon">
                        <div class="icon">
                            <i class="icon-copy fa fa-book" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="{{ route('posts.index') }}" class="col-xl-3 col-lg-3 col-md-6 mb-20" style="cursor: pointer">
            <div class="card-box height-100-p widget-style3">
                <div class="d-flex flex-wrap">
                    <div class="widget-data">
                        <div class="weight-700 font-24 text-dark">{{ $postCount }}</div>
                        <div class="font-14 text-secondary weight-500">{{ __('Total') }} {{ __('Posts') }}</div>
                    </div>
                    <div class="widget-icon">
                        <div class="icon">
                            <i class="icon-copy fa fa-pencil-square-o" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="{{ route('podkasts.index') }}" class="col-xl-3 col-lg-3 col-md-6 mb-20" style="cursor: pointer">
            <div class="card-box height-100-p widget-style3">
                <div class="d-flex flex-wrap">
                    <div class="widget-data">
                        <div class="weight-700 font-24 text-dark">{{ $podcastCount }}</div>
                        <div class="font-14 text-secondary weight-500">{{ __('Total') }} {{ __('Podcasts') }}</div>
                    </div>
                    <div class="widget-icon">
                        <div class="icon">
                            <i class="icon-copy fa fa-podcast" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="{{ route('genres.index') }}" class="col-xl-3 col-lg-3 col-md-6 mb-20" style="cursor: pointer">
            <div class="card-box height-100-p widget-style3">
                <div class="d-flex flex-wrap">
                    <div class="widget-data">
                        <div class="weight-700 font-24 text-dark">{{ $genreCount }}</div>
                        <div class="font-14 text-secondary weight-500">{{ __('Total') }} {{ __('Genres') }}</div>
                    </div>
                    <div class="widget-icon">
                        <div class="icon">
                            <i class="icon-copy bi bi-pen" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="card-box pb-10">
        <div class="h5 pd-20 mb-0">Recent Patient</div>
        <table class="data-table table nowrap">
            <thead>
                <tr>
                    <th class="table-plus">Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Last seen</th>
                    <th>Online</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $item)
                    <tr>
                        <td class="table-plus">
                            <div class="name-avatar d-flex align-items-center">
                                <div class="txt">
                                    <div class="weight-600">{{ $item->name }}</div>
                                </div>
                            </div>
                        </td>
                        <td>{{ $item->email }}</td>
                        <td>
                            @if ($item->isAdmin)
                                Admin
                            @else
                                User
                            @endif
                        </td>
                        <td>{{ Carbon\Carbon::parse($item->last_seen)->diffForHumans() }}</td>
                        <td>
                            @if (Cache::has('user-is-online-' . $item->id))
                                <button type="button" class="btn btn-success btn-sm">Online</button>
                            @else
                                <button type="button" class="btn btn-danger btn-sm">Offline</button>
                            @endif

                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
