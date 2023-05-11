<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="{{ route('campaign.index') }}">{{ Auth::user()->name }}</a>
    <span class="navbar-organizer w-100">Hội chữ thập đỏ Việt Nam</span>
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" id="logout" href="{{ route('logout') }}">Đăng xuất</a>
        </li>
    </ul>
</nav>