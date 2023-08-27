<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-text demo menu-text fw-bolder ms-2 text-capitalize">Admin Panel</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ Request::is('admin/dashboard') ? 'active' : '' }}">
            <a href="{{route('admin.dashboard')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>
        <li class="menu-item {{ (Request::is('admin/bank*')) ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-bank"></i>
                <div data-i18n="Banks">Banks</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ (Request::is('admin/bank')) ? 'active' : '' }}">
                    <a href="{{route('admin.bank.index')}}" class="menu-link">
                    <div data-i18n="Basic Inputs">Overview</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('admin/bank/create') ? 'active' : '' }}">
                    <a href="{{route('admin.bank.create')}}" class="menu-link">
                    <div data-i18n="Input groups">Create Bank</div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</aside>