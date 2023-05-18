<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CVC Backend</title>

    <base href="../">
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles -->
    <link href="assets/css/custom.css" rel="stylesheet">
</head>

<body>
@include('layouts.header')

<div class="container-fluid">
    <div class="row">
        @include('layouts.sidebar')

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class="border-bottom mb-3 pt-3 pb-2 event-title">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
                    <h1 class="h2">{{ $campaign->name }}</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">
                            <a href="{{ route('campaign.edit', $campaign)}}" class="btn btn-sm btn-outline-secondary">Chỉnh sửa chiến dịch</a>
                        </div>
                    </div>
                </div>
                <span class="h6">{{ $campaign->date }}</span>
            </div>

            <!-- Tickets -->
            <div id="tickets" class="mb-3 pt-3 pb-2">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
                    <h2 class="h4">Vé</h2>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">
                            <a href="{{ route('ticket.create') }}" class="btn btn-sm btn-outline-secondary">
                                Tạo mới vé
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row tickets">
                @foreach ($tickets as $ticket)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">{{ $ticket->name }}</h5>
                            <p class="card-text">Giá vé: {{ $ticket->cost }} vnđ</p>
                            <p class="card-text">{{ $ticket->until }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>

            <!-- Sessions -->
            <div id="sessions" class="mb-3 pt-3 pb-2">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
                    <h2 class="h4">Phiên</h2>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">
                            <a href="{{ route('session.create') }}" class="btn btn-sm btn-outline-secondary">
                                Tạo mới phiên
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="table-responsive sessions">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Time</th>
                        <th>Type</th>
                        <th class="w-100">Title</th>
                        <th>Participant</th>
                        <th>Area</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-nowrap">08:30 - 10:00</td>
                        <td>Normal</td>
                        <td><a href="sessions/edit.html">Keynote</a></td>
                        <td class="text-nowrap">An important person</td>
                        <td class="text-nowrap">Main / Place A</td>
                    </tr>
                    <tr>
                        <td class="text-nowrap">10:15 - 11:00</td>
                        <td>Normal</td>
                        <td><a href="sessions/edit.html">What's new in X?</a></td>
                        <td class="text-nowrap">Another person</td>
                        <td class="text-nowrap">Main / Place A</td>
                    </tr>
                    <tr>
                        <td class="text-nowrap">10:15 - 11:00</td>
                        <td>Service</td>
                        <td><a href="sessions/edit.html">Hands-on with Y</a></td>
                        <td class="text-nowrap">Another person</td>
                        <td class="text-nowrap">Side / Place C</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <!-- Areas -->
            <div id="channels" class="mb-3 pt-3 pb-2">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
                    <h2 class="h4">Vùng</h2>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">
                            <a href="{{ route('areas.create') }}" class="btn btn-sm btn-outline-secondary">
                                Tạo mới vùng
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row channels">
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Main</h5>
                            <p class="card-text">3 sessions, 1 palce</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Side</h5>
                            <p class="card-text">15 sessions, 2 places</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Palces -->
            <div id="rooms" class="mb-3 pt-3 pb-2">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
                    <h2 class="h4">Địa điểm</h2>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">
                            <a href="{{ route('place.create', $campaign) }}" class="btn btn-sm btn-outline-secondary">
                                Tạo mới địa điểm
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="table-responsive rooms">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Capacity</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Place A</td>
                        <td>1,000</td>
                    </tr>
                    <tr>
                        <td>Place B</td>
                        <td>100</td>
                    </tr>
                    <tr>
                        <td>Place C</td>
                        <td>100</td>
                    </tr>
                    <tr>
                        <td>Place D</td>
                        <td>250</td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </main>
    </div>
</div>

</body>
</html>
