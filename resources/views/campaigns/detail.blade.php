<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Chi tiết chiến dịch</title>

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
                            <a href="{{ route('ticket.create', $campaign) }}" class="btn btn-sm btn-outline-secondary">
                                Tạo mới vé
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row tickets">
                @if($campaign->tickets->count()===0)
                <div class="col-md-4">
                    <h6>Chưa có vé được tạo</h6>
                </div>
                @endif
                @foreach ($campaign->tickets as $ticket)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">{{ $ticket->name }}</h5>
                            <p class="card-text">Giá vé: {{ number_format($ticket->cost, 0, ',', '.') }} vnđ</p>
                            @if ( $ticket->amount>0 )
                            <p class="card-text">Còn {{ $ticket->amount }} vé</p>
                            @else
                            <p class="card-text">{{ $ticket->until ? 'Bán đến ngày: '.$ticket->until : "Số lượng không giới hạn"}}</p>
                            @endif
                            
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
                            <a href="{{ route('session.create', $campaign) }}" class="btn btn-sm btn-outline-secondary">
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
                        <th>Thời gian</th>
                        <th width="10%">Loại</th>
                        <th width="70%">Tiêu đề</th>
                        <th width="25%">Người tham gia</th>
                        <th>Vùng</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($campaign->areas as $area)
                        @foreach ($area->places as $place)
                            @foreach ($place->sessions as $session)
                            <tr>
                                <td class="text-nowrap">{{substr($session->start, 0, 5).' - '.substr($session->end, 0, 5)}}</td>
                                <td>{{ $session->type==0 ? 'Bình thường' : 'Dịch vụ' }}</td>
                                <td><a href="{{ route('session.edit', ['campaign' => $campaign, 'session' => $session])}}">{{ $session->title }}</a></td>
                                <td class="text-nowrap">{{ $session->vaccinator }}</td>
                                <td class="text-nowrap">{{ $session->place->name. ' / '.$session->place->area->name }}</td>
                            </tr>
                            @endforeach 
                        @endforeach   
                    @endforeach     
                   
                    </tbody>
                </table>
            </div>

            <!-- Areas -->
            <div id="channels" class="mb-3 pt-3 pb-2">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
                    <h2 class="h4">Vùng</h2>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">
                            <a href="{{ route('area.create', $campaign->id) }}" class="btn btn-sm btn-outline-secondary">
                                Tạo mới vùng
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row channels">
                @foreach ($campaign->areas as $area)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">{{ $area->name }}</h5>
                            <p class="card-text">{{ $area->places->count() }} địa điểm</p>
                        </div>
                    </div>
                </div>
                @endforeach
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
                    @foreach ($campaign->areas as $area)
                        @foreach ($area->places as $place)
                            <tr>
                                <td>{{ $place->name}}</td>
                                <td>{{ $place->capacity}}</td>
                            </tr>
                        @endforeach   
                    @endforeach  
                    </tbody>
                </table>
            </div>

        </main>
    </div>
</div>

</body>
</html>
