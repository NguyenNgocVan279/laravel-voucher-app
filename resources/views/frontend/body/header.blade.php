<header class="cbx-header">
    <!-- Header Top Part Start -->
    <div class="cbx-header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-4 flo-right-mob">
                    <!-- Header Top Brand Part Start -->
                    <div class="cbx-brand">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('assets/img/logo/logo-dark.png') }}" alt="VoucherApp" class="img-responsive"
                                width="164" />
                        </a>
                    </div><!-- Header Top Brand Part End -->
                </div>
                <div class="col-md-8 col-sm-10 col-xs-8 pull-right">
                    <!----------- Top Menu -------->
                    <div class="top-bar animate-dropdown">
                        <div class="container" >
                        <div class="header-top-inner" >
                            <div class="cnt-account" >
                            <ul class="list-unstyled">
                                <li >
                                @auth
                                    <a href="{{ route('dashboard') }}"><i class="icon fa fa-user"></i>
                                    Xin chào {{ Auth::user()->name }}
                                    </a>
                                @else
                                    <a href="{{ route('login') }}"><i class="icon fa fa-lock"></i>
                                    Đăng nhập
                                    </a>
                                    <a href="{{ route('register') }}"><i class="icon fa fa-user"></i> Đăng ký</a>
                                @endauth
                                </li>
                            </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div><!-- /.header-top-inner --> 
                        </div><!-- /.container --> 
                    </div><!-- /.header-top --> 

                    <!-- Header Bottom Part Start -->
                    <div class="cbx-header-bottom">
                        <div class="row">
                            <nav class="navbar navbar-default">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed pull-left"
                                        data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                                        aria-expanded="false">
                                        Menu
                                    </button>
                                </div>
                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav">
                                        <li class="active">
                                            <a href="{{ url('/') }}">Trang chủ </a>
                                        </li>
                                        <li><a href="{{ route('all.voucher') }}">Vouchers</a></li>
                                        <li><a href="#">Danh mục</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Liên hệ</a></li>
                                        <li><a href="#">Đăng Voucher</a> </li>
                                    </ul>
                                </div><!-- /.navbar-collapse -->
                            </nav>
                        </div>
                    </div>
                    <!-- Header Bottom Part End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Header Top Part End -->
</header>