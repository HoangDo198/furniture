<div class="sidebar-menu">
    <div class="sidebar-header">
        <div class="logo">
            <a href="index.html"><img src="{{asset('adminui/assets/images/icon/logo.png')}}" alt="logo"></a>
        </div>
    </div>
    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">
                    <li class="">
                        <a href="{{ route('dashboard.getIndex') }}" aria-expanded="true">
                            <i class="ti-dashboard"></i><span>Dashboard</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{ route('category.index') }}" aria-expanded="true">
                            <i class="ti-view-list"></i><span>Category</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
