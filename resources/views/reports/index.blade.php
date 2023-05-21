<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Báo cáo</title>

    <base href="../">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <!-- Custom styles -->
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">
</head>

<body>
@include('layouts.header')

<div class="container-fluid">
    <div class="row">
        @include('layouts.sidebar')

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class="border-bottom mb-3 pt-3 pb-2">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
                    <h1 class="h2">{{ $campaign->name }}</h1>
                </div>
                <span class="h6">{{ $campaign->date }}</span>
            </div>

            <div class="mb-3 pt-3 pb-2">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
                    <h2 class="h4">Sức chứa địa điểm</h2>
                </div>
            </div>

            <!-- TODO create chart here -->
            <canvas id="myChart" width="400" height="200"></canvas>
                <script src="{{asset('assets\js\Chart.bundle.min.js')}}"></script>
                {{-- <script>
                var ctx = document.getElementById('myChart');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: [
                            @foreach($campaign->getSes() as $ses)
                            '{{$ses->title}}',
                            @endforeach
                        ],
                        datasets: [{
                            label: 'Attendee',
                            data: [@foreach($campaign->getSes() as $ses)
                            '{{$ses->getAtte()}}',
                            @endforeach],
                            backgroundColor: [@foreach($campaign->getSes() as $ses)
                                @if($ses->getAtte() < $ses->place->capacity)
                                '#cce0ad',
                                @else
                                '#f1a89f',
                                @endif
                            @endforeach
                            ]
                        },
                        {
                            label: 'Capacity',
                            data: [
                                @foreach($campaign->getSes() as $ses)
                                '{{$ses->place->capacity}}',
                            @endforeach
                            ],
                            backgroundColor: [
                                @foreach($campaign->getSes() as $ses)
                                '#a3c8fc',
                            @endforeach
                            ]
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                },
                                gridLines:{
                                    display:false
                                },
                                scaleLabel: {
                                    display:true,
                                    labelString: "Capacity"
                                }
                            }],
                            xAxes: [{
                                ticks: {
                                    beginAtZero: true
                                },
                                scaleLabel: {
                                    display:true,
                                    labelString: "Sessions"
                                }
                            }]
                        },
                        legend:{
                            position: "right"
                        }
                    }
                });
                </script> --}}
        </main>
    </div>
</div>

</body>
</html>
