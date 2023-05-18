<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tạo mới chiến dịch</title>

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
                    <li class="nav-item"><a class="nav-link active" href="campaigns/index.html">Manage Campaigns</a></li>
                </ul>
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Quản lý chiến dịch</h1>
            </div>

            <div class="mb-3 pt-3 pb-2">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
                    <h2 class="h4">Tạo mới chiến dịch</h2>
                </div>
            </div>
            {{-- @dd($errors->all()[0]) --}}

            <form class="needs-validation" novalidate action="{{ route('campaign.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-12 col-lg-4 mb-3">
                        <label for="name">Tên chiến dịch</label>
                        <!-- adding the class is-invalid to the input, shows the invalid feedback below -->
                        <input type="text" class="form-control  {{ $errors->first('name') ? 'is-invalid' : ''}}" id="name" name="name" placeholder="" value="">
                        <div class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-4 mb-3">
                        <label for="slug">Slug</label>
                        <input type="text" class="form-control" id="slug" name="slug" placeholder="" value="" readonly>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-4 mb-3">
                        <label for="inputDate">Thời gian</label>
                        <input type="text" class="form-control {{ $errors->first('date') ? 'is-invalid' : ''}}" id="inputDate" name="date" placeholder="yyyy-mm-dd" value="">
                        <div class="invalid-feedback">
                            {{ $errors->first('date') }} 
                        </div>
                    </div>
                </div>

                <hr class="mb-4">
                <button class="btn btn-primary" type="submit">Lưu chiến dịch</button>
                <a href="{{ route('campaign.index') }}" class="btn btn-link">Quay lại</a>
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
    .replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y')         // Loại bỏ dấu gạch ngang ở cuối chuỗi
    .replace(/\s+/g, '-')         // Thay thế khoảng trắng bằng dấu gạch ngang
    .replace(/[^\w\-]+/g, '')    // Loại bỏ tất cả các ký tự không phải chữ cái, số, dấu gạch ngang
    .replace(/\-\-+/g, '-')       // Thay thế 2 dấu gạch ngang liên tiếp bằng 1 dấu gạch ngang
    .replace(/^-+/, '')           // Loại bỏ dấu gạch ngang ở đầu chuỗi
    .replace(/-+$/, '');
}
</script>
</body>
</html>
