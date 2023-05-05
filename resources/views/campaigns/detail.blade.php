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
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link" href="campaigns/index.html">Manage Campaigns</a></li>
                </ul>

                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>{insert campaign name}</span>
                </h6>
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link active" href="campaigns/detail.html">Overview</a></li>
                </ul>

                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Reports</span>
                </h6>
                <ul class="nav flex-column mb-2">
                    <li class="nav-item"><a class="nav-link" href="reports/index.html">Palce capacity</a></li>
                </ul>
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class="border-bottom mb-3 pt-3 pb-2 event-title">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
                    <h1 class="h2">{insert campaign name}</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">
                            <a href="campaigns/edit.html" class="btn btn-sm btn-outline-secondary">Edit campaign</a>
                        </div>
                    </div>
                </div>
                <span class="h6">{insert campaign date}</span>
            </div>

            <!-- Tickets -->
            <div id="tickets" class="mb-3 pt-3 pb-2">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
                    <h2 class="h4">Tickets</h2>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">
                            <a href="{{ route('ticket.create') }}" class="btn btn-sm btn-outline-secondary">
                                Create new ticket
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row tickets">
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Normal</h5>
                            <p class="card-text">200.-</p>
                            <p class="card-text">&nbsp;</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Early Bird</h5>
                            <p class="card-text">120.-</p>
                            <p class="card-text">Available until September 12, 2021</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">VIP</h5>
                            <p class="card-text">400.-</p>
                            <p class="card-text">100 tickets available</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sessions -->
            <div id="sessions" class="mb-3 pt-3 pb-2">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
                    <h2 class="h4">Sessions</h2>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">
                            <a href="{{ route('session.create') }}" class="btn btn-sm btn-outline-secondary">
                                Create new session
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
                    <h2 class="h4">Areas</h2>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">
                            <a href="{{ route('areas.create') }}" class="btn btn-sm btn-outline-secondary">
                                Create new area
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
                    <h2 class="h4">Places</h2>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">
                            <a href="{{ route('place.create') }}" class="btn btn-sm btn-outline-secondary">
                                Create new place
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
