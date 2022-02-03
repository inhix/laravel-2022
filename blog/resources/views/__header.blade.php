<section id="top">
    <header style="height: 300px">
        <div class="container">
            <div class="header-top">
                <div class="row">
                    <div class="col-md-6">
                        <div class="full">
                            <div class="logo">
                                <a href="/"><img src="/images/logo.png" alt="#"/></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="right_top_section">
                            <x-social-icons/>
                            <!-- button section -->
                            @guest()
                                <ul class="login">
                                    <li class="login-modal">
                                        <a href="{{ route('login') }}" class="login"><i class="fa fa-sign-in"></i>Login</a>
                                    </li>
                                    <li>
                                        <div class="cart-option">
                                            <a href="{{ route('register') }}"><i class="fa fa-user-plus"></i>Register</a>
                                        </div>
                                    </li>
                                </ul>
                            @endguest
                            @auth()
                                <ul class="login">
                                    <li>
                                        <div class="cart-option">
                                            <a href="/profile"><i class="fa fa-user"></i>Profile</a>
                                        </div>
                                    </li>
                                    <li class="login-modal">
                                        <a onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="logout"><i class="fa fa-sign-out"></i>Logout</a>
                                    </li>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </ul>
                            @endauth

                        <!-- end button section -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="row">
                    <div class="col-md-12">
                        <div class="full">
                            <div class="main-menu-section">
                                <div class="menu">
                                    <nav class="navbar navbar-inverse">
                                        <div class="navbar-header">
                                            <button class="navbar-toggle" type="button" data-toggle="collapse"
                                                    data-target=".js-navbar-collapse">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                            <a class="navbar-brand" href="#">Menu</a>
                                        </div>
                                        <div class="collapse navbar-collapse js-navbar-collapse">
                                            <ul class="nav navbar-nav">
                                                <li class="active"><a href="{{ route('home') }}">Home</a></li>
                                                <li><a href="{{ route('about') }}">About</a></li>
                                                <li><a href="{{ route('team') }}">Team</a></li>
                                                <li class="dropdown mega-dropdown">
                                                    <a href="{{ route('matches.index') }}" class="dropdown-toggle"
                                                       data-toggle="dropdown">Match<span
                                                            class="caret"></span></a>
                                                    <ul class="dropdown-menu mega-dropdown-menu">
                                                        <li class="col-sm-8">
                                                            <ul>
                                                                <li class="dropdown-header">Men Collection</li>
                                                                <div id="menCollection" class="carousel slide"
                                                                     data-ride="carousel">
                                                                    <div class="carousel-inner">
                                                                        <div class="item active">
                                                                            <div class="banner-for-match"><a
                                                                                    href="#"><img class="img-responsive"
                                                                                                  src="/images/match-banner1.jpg"
                                                                                                  alt="#"/></a></div>
                                                                        </div>
                                                                        <!-- End Item -->
                                                                        <div class="item">
                                                                            <div class="banner-for-match"><a
                                                                                    href="#"><img class="img-responsive"
                                                                                                  src="/images/match-banner1.jpg"
                                                                                                  alt="#"/></a></div>
                                                                        </div>
                                                                        <!-- End Item -->
                                                                        <div class="item">
                                                                            <div class="banner-for-match"><a
                                                                                    href="#"><img class="img-responsive"
                                                                                                  src="/images/match-banner1.jpg"
                                                                                                  alt="#"/></a></div>
                                                                        </div>
                                                                        <!-- End Item -->
                                                                    </div>
                                                                    <!-- End Carousel Inner -->
                                                                    <!-- Controls -->
                                                                    <a class="left carousel-control"
                                                                       href="#menCollection" role="button"
                                                                       data-slide="prev">
                                                                        <span class="glyphicon glyphicon-chevron-left"
                                                                              aria-hidden="true"></span>
                                                                        <span class="sr-only">Previous</span>
                                                                    </a>
                                                                    <a class="right carousel-control"
                                                                       href="#menCollection" role="button"
                                                                       data-slide="next">
                                                                        <span class="glyphicon glyphicon-chevron-right"
                                                                              aria-hidden="true"></span>
                                                                        <span class="sr-only">Next</span>
                                                                    </a>
                                                                </div>
                                                                <!-- /.carousel -->
                                                            </ul>
                                                        </li>
                                                        <li class="col-sm-4">
                                                            <ul class="menu-inner">
                                                                <li class="dropdown-header">Next Matchs</li>
                                                                <li><a href="#">Contrary vs classical</a></li>
                                                                <li><a href="#">Discovered vs undoubtable</a></li>
                                                                <li><a href="#">Contrary vs classical</a></li>
                                                                <li><a href="#">Discovered vs undoubtable</a></li>
                                                                <li><a href="#">Contrary vs classical</a></li>
                                                                <li><a href="#">Discovered vs undoubtable</a></li>
                                                                <li><a href="#">Contrary vs classical</a></li>
                                                                <li><a href="#">Discovered vs undoubtable</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="{{ route('posts.index') }}">News</a></li>
                                                <li><a href="{{ route('contact') }}">Contact</a></li>
                                            </ul>
                                        </div>
                                        <!-- /.nav-collapse -->
                                    </nav>
                                    <x-search-bar/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</section>
