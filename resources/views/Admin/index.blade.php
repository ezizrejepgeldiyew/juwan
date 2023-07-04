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

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Device Name', 'Device count'],
                <?php echo $chartData; ?>
            ]);


            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data);
        }
    </script>

    <div class="col-md-6 mb-30">
        <div class="pd-20 card-box height-100-p">
            <div id="piechart" style=""></div>
        </div>
    </div>


@endsection
