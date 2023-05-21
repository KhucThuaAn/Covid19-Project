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
            <li class="nav-item"><a class="nav-link" href="{{ route('campaign.capacity', $campaign->slug) }}">Sức chứa địa điểm</a></li>
        </ul>
    </div>
</nav>