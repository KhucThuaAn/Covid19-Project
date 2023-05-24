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
            <div id="container" style="width: 75%;">
                <canvas id="canvas"></canvas>
            </div>
            <script>
            var barChartData = {
                labels: [
                    "Absence of OB",
                    "Closeness",
                    "Credibility",
                    "Heritage",
                    "M Disclosure",
                    "Provenance",
                    "Reliability",
                    "Transparency"
                ],
                datasets: [
                    {
                    label: "American Express",
                    backgroundColor: "#20c997",
                    borderColor: "#28a745",
                    borderWidth: 1,
                    data: [3, 5, 6, 7,3, 5, 6, 7]
                    },
                    {
                    label: "Visa",
                    backgroundColor: "#17a2b8",
                    borderColor: "#007bff",
                    borderWidth: 1,
                    data: [6,9,7,3,10,7,4,6]
                    }
                ]
                };

                var chartOptions = {
                responsive: true,
                legend: {
                    position: "top"
                },
                title: {
                    display: true,
                    text: "Chart.js Bar Chart"
                },
                scales: {
                    yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                    }]
                }
                }

                window.onload = function() {
                var ctx = document.getElementById("canvas").getContext("2d");
                window.myBar = new Chart(ctx, {
                    type: "bar",
                    data: barChartData,
                    options: chartOptions
                });
                };

            </script>
        </main>
    </div>
</div>

</body>
</html>
