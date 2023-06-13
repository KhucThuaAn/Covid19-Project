<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tạo mới phiên</title>

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
                    <h2 class="h4">Tạo mới phiên</h2>
                </div>
            </div>

            <form class="needs-validation" novalidate action="{{ route('session.store')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-12 col-lg-4 mb-3">
                        <label for="selectType">Kiểu</label>
                        <select class="form-control" id="selectType" name="type">
                            <option value="0" selected>Bình thường</option>
                            <option value="1">Dịch vụ</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-4 mb-3">
                        <label for="inputTitle">Tiêu đề</label>
                        <!-- adding the class is-invalid to the input, shows the invalid feedback below -->
                        <input type="text" class="form-control {{ $errors->first('title') ? 'is-invalid' : ''}}" id="inputTitle" name="title" >
                        <div class="invalid-feedback">
                            {{ $errors->first('title') }}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-4 mb-3">
                        <label for="inputParticipant">Bác sĩ tiêm</label>
                        <input type="text" class="form-control {{ $errors->first('vaccinator') ? 'is-invalid' : ''}}" id="inputParticipant" name="vaccinator" >
                        <div class="invalid-feedback">
                            {{ $errors->first('vaccinator') }}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-4 mb-3">
                        <label for="selectPlace">Địa điểm</label>
                        <select class="form-control" id="selectPlace" name="place_id">
                            @foreach ($campaign->areas as $area)
                                @foreach ($area->places as $place)
                                <option value="{{ $place->id }}">{{ $place->name.' / '.$place->area->name }}</option>
                                @endforeach   
                            @endforeach  
                            
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-4 mb-3">
                        <label for="inputCost">Giá</label>
                        <input type="number" class="form-control" id="inputCost" name="cost"  value="0">
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-6 mb-3">
                        <label for="inputStart">Start</label>
                        <input type="time" class="form-control" id="inputStart" name="start" placeholder="yyyy-mm-dd HH:MM">
                    </div>
                    <div class="col-12 col-lg-6 mb-3">
                        <label for="inputEnd">End</label>
                        <input type="time" class="form-control" id="inputEnd" name="end" placeholder="yyyy-mm-dd HH:MM">
                        <input type="number"  name="campaign_id" value="{{$campaign->id}}" hidden>
                        <input type="text"  name="campaign_slug" value="{{$campaign->slug}}" hidden>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="textareaDescription">Mô tả</label>
                        <textarea class="form-control {{ $errors->first('description') ? 'is-invalid' : ''}}" id="textareaDescription" name="description" placeholder="" rows="5"></textarea>
                        <div class="invalid-feedback">
                            {{ $errors->first('description') }}
                        </div>
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
