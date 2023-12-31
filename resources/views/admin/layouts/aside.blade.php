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
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Business Packages</span>
        </li>
        <li class="menu-item {{ (Request::is('admin/business-area*')) ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-business"></i>
                <div data-i18n="Banks">Business Area</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ (Request::is('admin/business-area')) ? 'active' : '' }}">
                    <a href="{{route('admin.business.area.index')}}" class="menu-link">
                    <div data-i18n="Basic Inputs">Overview</div>
                    </a>
                </li>
                <li class="menu-item {{ (Request::is('admin/business-area/create')) ? 'active' : '' }}">
                    <a href="{{route('admin.business.area.create')}}" class="menu-link">
                    <div data-i18n="Basic Inputs">Create Business Area</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item {{ (Request::is('admin/packages*')) ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-package"></i>
                <div data-i18n="Banks">Package</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ (Request::is('admin/packages')) ? 'active' : '' }}">
                    <a href="{{route('admin.package.index')}}" class="menu-link">
                    <div data-i18n="Basic Inputs">Overview</div>
                    </a>
                </li>
                <li class="menu-item {{ (Request::is('admin/packages/create')) ? 'active' : '' }}">
                    <a href="{{route('admin.package.create')}}" class="menu-link">
                    <div data-i18n="Basic Inputs">Create Package</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item {{ Request::is('admin/business-package') ? 'active' : '' }}">
            <a href="{{route('admin.business.package.index')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-git-merge"></i>
                <div data-i18n="Analytics">Business Packages</div>
            </a>
        </li>
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Site Configuration</span>
        </li>
    </ul>
</aside>