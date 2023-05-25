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
    {{-- <script src='https://cdn.plot.ly/plotly-2.20.0.min.js'></script> --}}
    <script src="{{asset('assets\js\Chart.bundle.min.js')}}"></script>
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
            <canvas id="sessionChart" style="width:400px !important; max-width:1200px"></canvas>
            {{-- <div class="mb-3 pt-3 pb-2">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
                    <h2 class="h5">Các phiên</h2>
                </div>
            </div> --}}
            <script>
                var chartData = {!! json_encode($chartData) !!};

                var labels = chartData.map(function(item) {
                    return item.session_name;
                });

                var capacityData = chartData.map(function(item) {
                    return item.capacity;
                });

                var registeredData = chartData.map(function(item) {
                    return item.registered;
                });

                var ctx = document.getElementById('sessionChart').getContext('2d');

                var chart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: labels,
                        datasets: [
                            {
                                label: 'Sức chứa',
                                data: capacityData,
                                backgroundColor: 'rgba(54, 162, 235, 0.5)',
                                borderColor: 'rgba(54, 162, 235, 1)',
                                borderWidth: 1
                            },
                            {
                                label: 'Lượt đăng ký',
                                data: registeredData,
                                backgroundColor: registeredData.map((value, index) => value > capacityData[index] ? '#dc3545b3' : '#28a745b8'),
                                borderColor: registeredData.map((value, index) => value > capacityData[index] ? '#dc3545' : '#28a745'),
                                borderWidth: 1
                            }
                        ]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero:true
                                }
                            }],
                            x: {
                                stacked: true
                            }
                        }
                    }
                });
            </script>
        </main>
    </div>
</div>

</body>
</html>
