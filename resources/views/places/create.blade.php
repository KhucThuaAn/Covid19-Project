<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tạo mới địa điểm</title>

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
                    <h1 class="h2">{{ $campaign->name}}</h1>
                </div>
                <span class="h6">{{ $campaign->date}}</span>
            </div>

            <div class="mb-3 pt-3 pb-2">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
                    <h2 class="h4">Tạo mới địa điểm</h2>
                </div>
            </div>

            <form class="needs-validation" novalidate action="{{ route('place.store')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-12 col-lg-4 mb-3">
                        <label for="inputName">Tên địa điểm</label>
                        <!-- adding the class is-invalid to the input, shows the invalid feedback below -->
                        <input type="text" class="form-control {{ $errors->first('name') ? 'is-invalid' : ''}}" id="inputName" name="name" placeholder="" value="">
                        <div class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-4 mb-3">
                        <label for="selectChannel">Vùng</label>
                        <select class="form-control" id="selectChannel" name="area_id">
                            @foreach ($campaign->areas as $area)
                            <option value="{{ $area->id }}">{{ $area->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-4 mb-3">
                        <label for="inputCapacity">Sức chứa</label>
                        <input type="number" class="form-control {{ $errors->first('capacity') ? 'is-invalid' : ''}}" id="inputCapacity" name="capacity" placeholder="" value="">
                        <div class="invalid-feedback">
                            {{ $errors->first('capacity') }}
                        </div>
                        <input type="number"  name="campaign_id" value="{{ $campaign->id}}" hidden>
                        <input type="text"  name="campaign_slug" value="{{ $campaign->slug}}" hidden>
                    </div>
                </div>

                <hr class="mb-4">
                <button class="btn btn-primary" type="submit">Lưu</button>
                <a href="{{ route('campaign.show', $campaign->slug)}}" class="btn btn-link">Quay lại</a>
            </form>

        </main>
    </div>
</div>

</body>
</html>
