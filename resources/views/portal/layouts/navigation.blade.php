<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{route('portal.dashboard')}}"> <img alt="image" src="{{asset('/')}}portal-html/assets/img/logo.png" class="header-logo mr-2" /> <span
                class="logo-name">Humanra</span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="dropdown {{ Request::is('portal/dashboard') ? 'active' : '' }}">
                <a href="{{route('portal.dashboard')}}" class="nav-link"><i data-feather="monitor"></i><span class="text-capitalize">İdarəetmə Paneli</span></a>
            </li>
                       
            @if(Auth::guard('web')->user()->company_id != null)

                @php $query = DB::table('business_company_integrations')->where('company_id', Auth::guard('web')->user()->company_id )->first() @endphp

                @if($query)
                    @php $search_data = DB::table('business_areas')->where('id', $query->business_id )->where('status', 1)->first() @endphp
                
                    @if($search_data)
                        @php $filter_packages = DB::table('business_packages')->where('business_id', $search_data->id )->where('status', 0)->get() @endphp

                        @if($filter_packages->count() > 0)
                            @foreach($filter_packages as $filter_package)
                                @php $packages = DB::table('packages')->where('id', $filter_package->package_id )->where('status', 1)->first() @endphp
                                @if($packages)
                                    <li class="menu-header">{{$packages->package_name}}</li>

                                    @if($packages->seflink == 'human')
                                        <!-- Human Resource start -->
                                        <li class="dropdown {{ Request::is('portal/human-resource') ? 'active' : '' }}">
                                            <a href="#" class="menu-toggle nav-link has-dropdown text-capitalize"><i
                                                data-feather="users"></i><span>İnsan Resursları</span></a>
                                            <ul class="dropdown-menu">
                                                <li class="{{ Request::is('portal/human-resource') ? 'active' : '' }}">
                                                    <a class="nav-link {{ Request::is('portal/human-resource') ? 'toggled' : '' }}" href="{{route('portal.human.resource.index')}}">Ümumi Məlumat</a>
                                                </li>
                                                <li class="#">
                                                    <a class="nav-link text-capitalize" href="#">İstifadəçi yarat</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <!-- Human Resource end -->
                                    @endif
                                @endif
                            @endforeach
                        @endif

                    @endif

                @endif

            @endif            

        </ul>
    </aside>
</div>