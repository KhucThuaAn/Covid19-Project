<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Chỉnh sửa chiến dịch</title> 

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
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link" href="{{ route('campaign.index') }}">Quản lý chiến dịch</a></li>
                </ul>

                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>{{ $campaign->name }}</span>
                </h6>
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link active" href="{{ route('campaign.show',$campaign)}}">Thống kê</a></li>
                </ul>

                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Báo cáo</span>
                </h6>
                <ul class="nav flex-column mb-2">
                    <li class="nav-item"><a class="nav-link" href="">Sức chứa địa điểm</a></li>
                </ul>
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class="border-bottom mb-3 pt-3 pb-2">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
                    <h1 class="h2">{{ $campaign->name }}</h1>
                </div>
            </div>

            <form class="needs-validation" novalidate action="{{ route('campaign.update', $campaign)}}" method="POST">
                @method('PUT')
                @csrf
                <div class="row">
                    <div class="col-12 col-lg-4 mb-3">
                        <label for="name">Tên</label>
                        <!-- adding the class is-invalid to the input, shows the invalid feedback below -->
                        <input type="text" class="form-control {{ $errors->first('name') ? 'is-invalid' : ''}}" id="name" placeholder="" value="{{ $campaign->name }}" name="name">
                        <div class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-4 mb-3">
                        <label for="slug">Slug</label>
                        <input type="text" class="form-control" id="slug" placeholder="" value="{{ $campaign->slug }}" readonly name="slug">
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-4 mb-3">
                        <label for="inputDate">Thời gian</label>
                        <input type="text" class="form-control" id="inputDate" placeholder="yyyy-mm-dd" value="{{ $campaign->date }}" name="date">
                    </div>
                </div>

                <hr class="mb-4">
                <button class="btn btn-primary" type="submit">Cập nhật</button>
                <a href="{{ route('campaign.show', $campaign)}}" class="btn btn-link">Quay lại</a>
            </form>

        </main>
    </div>
</div>
<script>
    var titleInput = document.getElementById('name');
    var slugInput = document.getElementById('slug');
    
    titleInput.addEventListener('keyup', function() {
      var title = titleInput.value;
      var slug = slugify(title);
      slugInput.value = slug;
    });
    
    function slugify(text) {
      return text.toString().toLowerCase()
        .replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a')
        .replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e')
        .replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i')
        .replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o')
        .replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u')
        .replace(/đ/, 'd')         
        .replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y')         
        .replace(/\s+/g, '-')         
        .replace(/[^\w\-]+/g, '')    
        .replace(/\-\-+/g, '-')       
        .replace(/^-+/, '')           
        .replace(/-+$/, '');
    }
    </script>
</body>
</html>
