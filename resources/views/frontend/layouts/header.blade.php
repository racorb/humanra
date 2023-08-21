<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>

<header class="site-navbar js-sticky-header site-navbar-target" role="banner">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-2">
                <div class="mb-0 site-logo"><a href="{{route('index')}}" class="mb-0 text-uppercase"><span class="text-primary">Humanru</span> </a></div>
            </div>

            <div class="col-7 d-none d-xl-block">
                <nav class="site-navigation position-relative text-center" role="navigation">
                    <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                        <li><a href="#home-section" class="nav-link">Home</a></li>
                        <li class="has-children">
                        <a href="#features-section" class="nav-link">Features</a>
                        <ul class="dropdown">
                            <li><a href="#" class="nav-link">Money Saving</a></li>
                            <li><a href="#" class="nav-link">Powerful Apps</a></li>
                            <li><a href="#" class="nav-link">Efficient Support</a></li>
                            <li><a href="#" class="nav-link">Innovative Technologies</a></li>
                            <li><a href="#" class="nav-link">Corporate Solutions</a></li>
                            <li class="has-children">
                            <a href="#">More Links</a>
                            <ul class="dropdown">
                                <li><a href="#">Menu One</a></li>
                                <li><a href="#">Menu Two</a></li>
                                <li><a href="#">Menu Three</a></li>
                            </ul>
                            </li>
                        </ul>
                        </li>
                        <li><a href="#pricing-section" class="nav-link">Pricing</a></li>
                        <li><a href="#contact-section" class="nav-link">Contact</a></li>                        
                    </ul>
                </nav>
            </div>

            <div class="col-3 d-none d-xl-block">
                <nav class="site-navigation position-relative text-right" role="navigation">
                    <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                        <li>
                            <a href="{{route('portal.index')}}" class="btn btn-primary px-3 py-2" style="color:white !important">
                                Portala Giriş
                            </a>
                        </li>
                    </ul>
                </nav>                
            </div>

            <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3 text-black"></span></a></div>
        </div>
    </div>
</header>