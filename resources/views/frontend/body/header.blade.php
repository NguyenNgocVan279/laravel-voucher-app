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
                                            <a href="{{ url('/') }}">TRANG CHỦ </a>
                                        </li>
                                        <li><a href="{{ route('all.voucher') }}">VOUCHERS</a></li>
                                        
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                                                DANH MỤC
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="margin-top:-20px; border:none;">
                                                <?php
                                                $categories = App\Models\Category::orderBy('id')->get();
                                                ?>
                                                @foreach ($categories as $category)
                                                <div style="padding-left: 15px; padding-bottom:3px; border-bottom: 1px solid #ccc;">
                                                    <a class="dropdown-item" href="{{ url('category/voucher/'.$category->id.'/'.$category->category_slug) }}">{{ $category->category_name }}</a>
                                                </div>
                                                @endforeach
                                            </div>
                                        </li>
                                        <li><a href="#">BLOG</a></li>
                                        <li><a href="#">LIÊN HỆ</a></li>
                                            @auth
                                            <li >
                                                <a href="{{ route('dashboard') }}"><i class="icon fa fa-user"></i>
                                                Xin chào {{ Auth::user()->name }}
                                                </a>
                                            </li>
                                            @else
                                            <li>
                                                <a href="{{ route('login') }}"><i class="icon fa fa-lock"></i>
                                                Đăng nhập
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('register') }}"><i class="icon fa fa-user"></i> Đăng ký</a>
                                            </li>
                                            @endauth
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