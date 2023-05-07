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
                    <span>Chiến dịch tiêm chủng Covid19</span>
                </h6>
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link" href="campaigns/detail.html">Tổng quan</a></li>
                </ul>

                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Báo cáo</span>
                </h6>
                <ul class="nav flex-column mb-2">
                    <li class="nav-item"><a class="nav-link" href="reports/index.html">Sức chứa địa điểm</a></li>
                </ul>
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class="border-bottom mb-3 pt-3 pb-2">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
                    <h1 class="h2">Chiến dịch tiêm chủng Covid19</h1>
                </div>
                <span class="h6">Ngày 24/04/2023</span>
            </div>

            <div class="mb-3 pt-3 pb-2">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
                    <h2 class="h4">Tạo vé mới</h2>
                </div>
            </div>

            <form class="needs-validation" novalidate action="{{ route('ticket.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-12 col-lg-4 mb-3">
                        <label for="inputName">Tên</label>
                        <!-- adding the class is-invalid to the input, shows the invalid feedback below -->
                        <input type="text" class="form-control  is-invalid " id="inputName" name="name" placeholder="" value="">
                        <div class="invalid-feedback">
                            Tên là trường bắt buộc
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-4 mb-3">
                        <label for="inputCost">Giá</label>
                        <input type="number" class="form-control" id="inputCost" name="price" placeholder="" value="0">
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-4 mb-3">
                        <label for="selectSpecialValidity">Hiệu lực đặc biệt</label>
                        <select class="form-control" id="selectSpecialValidity" name="validity">
                            <option value="0" selected>Không</option>
                            <option value="1">Số lượng giới hạn</option>
                            <option value="2">Có thể mua cho đến nay</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-4 mb-3">
                        <label for="inputAmount">Số lượng vé tối đa được bán</label>
                        <input type="number" class="form-control" id="inputAmount" name="amount" placeholder="" value="0">
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-4 mb-3">
                        <label for="inputValidTill">Vé có thể được bán cho đến khi</label>
                        <input type="text" class="form-control" id="inputValidTill" name="valid_until" placeholder="yyyy-mm-dd HH:MM" value="">
                    </div>
                </div>

                <hr class="mb-4">
                <button class="btn btn-primary" type="submit">Lưu vé</button>
                <a href="{{ route('campaign.index')}}" class="btn btn-link">Quay lại</a>
            </form>

        </main>
    </div>
</div>

</body>
</html>
