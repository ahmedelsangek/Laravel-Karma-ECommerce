<!-- Start Header Area -->
<header class="header_area sticky-header">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light main_box">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="{{ url('/') }}"><img src="{{ url('../resources/img/logo.png') }}" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto" style="margin-left: 75px;">
                        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/GetProducts/4') }}">Men</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/GetProducts/16') }}">Women</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/GetProducts/12') }}">food</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.html">Elctronics</a></li>

                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">All Categories</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="{{ url('/GetProducts/2') }}">footwear</a></li>
                                <li class="nav-item"><a class="nav-link" href="">Cooking</a></li>
                                <li class="nav-item"><a class="nav-link" href="">Beverages</a></li>
                                <li class="nav-item"><a class="nav-link" href="">Pest Control</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right ml-auto">
                        <li class="nav-item"><a href="{{ url('/cart') }}" class="cart"><span class="ti-bag"></span></a></li>
                        <li class="nav-item">
                            <button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
                        </li>
                        <li class="nav-item d-flex align-items-center">
                            <button class="primary-btn d-flex align-items-center" style="border-radius: 5%; height: 60%; border: none;">
                                @if(auth('web')->check())
                                <a class="nav-link" href="{{ url('/logout') }}" style="color: white;">Sign Out</a>
                                @else
                                <a class="nav-link" href="{{ url('/login') }}" style="color: white;">Sign In</a>
                                @endif
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="search_input" id="search_input_box">
        <div class="container">
            <form class="d-flex justify-content-between">
                <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                <button type="submit" class="btn"></button>
                <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
            </form>
        </div>
    </div>
</header>
<!-- End Header Area -->
