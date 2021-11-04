@extends('frontend.main_master')
@section('content')

<!-- Slider Section Start -->
<div class="deal-coupon-slider-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-xs-12 no-padding-right no-padding-left">
                <div id="deal-coupon-slider" class="owl-carousel owl-theme slider-list">
                    <!-- Slider Single Item Start -->
                    <div class="item">
                        <div class="hero-area bg--img">
                            <div class="row">
                                <div class="col-xs-3 col-xs-offset-1">
                                    <div class="offer">
                                        <div class="overlay-dark">
                                            <img src="{{ asset('frontend/assets/img/slider/hero-image.jpg') }}" class="slider-img">
                                        </div>
                                        <div class="content">
                                            <h1>Deals & Coupons<br> Laravel Voucher App</h1>
                                            <p class="subtitle">Over 20 000+ deals. Grab one now!</p>
                                            <div class="hero-fields row">
                                                <div class="col-md-6">
                                                    <div class="searchform-wrapper">
                                                        <form action="" method="get">
                                                            <input type="text" name="deal_search"
                                                                placeholder="Search Deals">
                                                            <input type="hidden" name="search_type"
                                                                value="deal">
                                                            <button type="submit" id="searchsubmit"><i
                                                                    class="fa fa-arrow-right"></i></button>
                                                        </form>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Slider Single Item End -->

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Slider Section End -->

<!-- features start -->
<div class="mt-50">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="header-bar">
                    <div class="box-icon">
                        <span class="lnr lnr-mustache box-ico"></span>
                        <div class="box-icon-content">24/7 Support Satisfaction</div>
                    </div>
                    <div class="box-icon">
                        <span class="lnr lnr-gift box-ico ml-15"></span>
                        <div class="box-icon-content">Tell a Friend and Get 5% </div>
                    </div>
                    <div class="box-icon">
                        <i class="fa fa-money box-ico ml-25" aria-hidden="true"></i>
                        <div class="box-icon-content">Money Back Guarantee</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- features end -->

<!-- Slider offers Section Start -->

<div class="deal-coupon-slider-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-xs-12 no-padding-right flo-right">
                <div id="small-deal-coupon-slider" class="owl-carousel owl-theme slider-list slider-wi">
                    <!-- Slider Single Item Start -->
                    <div class="item ">
                        <div class="hero-area bg--img"
                            style="background-image: url('{{ asset('frontend/assets/img/slider/slider1.jpg') }}');">
                            <div class="discount-ribbon">75%</div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="offer-content owl-fadeIn">
                                        <div class="deal-slide-categories">Travel</div>
                                        <h2 class="deal-slide-title">[Limited Deal] Spa and<br> Restaurant at
                                            the Beach</h2>
                                        <div class="deal-slide-meta-rating">
                                            <div class="card-deal-meta-rating">
                                                <div class="post-star-rating">
                                                    <i class="rating-star fa fa-star" data-post-id="663"
                                                        data-rating="1"></i>
                                                    <i class="rating-star fa fa-star" data-post-id="663"
                                                        data-rating="2"></i>
                                                    <i class="rating-star fa fa-star" data-post-id="663"
                                                        data-rating="3"></i>
                                                    <i class="rating-star fa fa-star" data-post-id="663"
                                                        data-rating="4"></i>
                                                    <i class="rating-star fa fa-star-o" data-post-id="663"
                                                        data-rating="5"></i>
                                                </div>
                                                <div class="deal-slide-meta-expiring">
                                                    <div class="deal-slide-meta-title">Expires in</div>
                                                    <span class="jscountdown-wrap" data-time="2020/01/18"
                                                        data-short="true">7 days</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slider Single Item End -->

                    <!-- Slider Single Item Start -->
                    <div class="item">
                        <div class="hero-area bg--img"
                            style="background-image: url('{{ asset('frontend/assets/img/slider/slider2.jpg') }}');">
                            <div class="discount-ribbon">75%</div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="offer-content owl-fadeIn">
                                        <div class="deal-slide-categories">Beauty</div>
                                        <h2 class="deal-slide-title">Bags and Boots Sale</h2>
                                        <div class="deal-slide-meta-rating">
                                            <div class="card-deal-meta-rating">
                                                <div class="post-star-rating">
                                                    <i class="rating-star fa fa-star" data-post-id="663"
                                                        data-rating="1"></i>
                                                    <i class="rating-star fa fa-star" data-post-id="663"
                                                        data-rating="2"></i>
                                                    <i class="rating-star fa fa-star" data-post-id="663"
                                                        data-rating="3"></i>
                                                    <i class="rating-star fa fa-star" data-post-id="663"
                                                        data-rating="4"></i>
                                                    <i class="rating-star fa fa-star-o" data-post-id="663"
                                                        data-rating="5"></i>
                                                </div>
                                                <div class="deal-slide-meta-expiring">
                                                    <div class="deal-slide-meta-title">Expires in</div>
                                                    <span class="jscountdown-wrap" data-time="2020/01/18"
                                                        data-short="true">14 Hours</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slider Single Item End -->

                    <!-- Slider Single Item Start -->
                    <div class="item">
                        <div class="hero-area bg--img"
                            style="background-image: url('{{ asset('frontend/assets/img/slider/slider3.jpg') }}');">
                            <div class="discount-ribbon">75%</div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="offer-content owl-fadeIn">
                                        <div class="deal-slide-categories">Beauty</div>
                                        <h2 class="deal-slide-title">[[WooCommerce] Luxury Hotel Vacation</h2>
                                        <div class="deal-slide-meta-rating">
                                            <div class="card-deal-meta-rating">
                                                <div class="post-star-rating">
                                                    <i class="rating-star fa fa-star" data-post-id="663"
                                                        data-rating="1"></i>
                                                    <i class="rating-star fa fa-star" data-post-id="663"
                                                        data-rating="2"></i>
                                                    <i class="rating-star fa fa-star" data-post-id="663"
                                                        data-rating="3"></i>
                                                    <i class="rating-star fa fa-star" data-post-id="663"
                                                        data-rating="4"></i>
                                                    <i class="rating-star fa fa-star-o" data-post-id="663"
                                                        data-rating="5"></i>
                                                </div>
                                                <div class="deal-slide-meta-expiring">
                                                    <div class="deal-slide-meta-title">Expires in</div>
                                                    <span class="jscountdown-wrap" data-time="2020/01/18"
                                                        data-short="true">8 days</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slider Single Item End -->
                </div>
            </div>
            <!--End: Slider -->

            <!--Left Sidebar -->
            <div class="col-md-3 col-xs-12 no-padding-left col-width">
                <div class="row">
                    <div class="col-md-12 col-xs-12 no-padding-right-sm">
                        <h4 class="list-menu-title">Danh mục<span class="cate-icon"><i
                                    class="fa fa-angle-down" aria-hidden="true"></i></span>
                        </h4>
                        <ul class="nav nav-stacked list-menu">
                            @foreach ($categories as $category)
                            <li><a href="{{ url('category/voucher/'.$category->id.'/'.$category->category_slug) }}"><span
                                class="lnr lnr-store ico"></span><span>{{ $category->category_name }}</span><span
                                class="number-counter">{{ count($category->posts) }}</span></span></a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <!--End: Left Sidebar -->
        </div>
    </div>
</div>
<!-- Slider offers Section End -->

<!-- New Coupon Section Start -->
<div class="new-coupon-wrapper">
    <div class="container">
        <div class="row section-title-block">
            <div class="col-md-10">
                <h2 class="section-heading"> MỚI NHẤT</h2>
            </div>
            <div class="col-md-2">
                <div class="view-all pull-right">
                    <a href="{{ route('all.voucher') }}" class="see-more"><span>Xem tất cả</span><i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($vouchers as $voucher)
            <div class="col-md-3 col-sm-3 col-xs-12">
                <!-- Coupon Single Item Start -->
                <div class="item coupon-item">
                    <div class="coupon-thumb">
                        <img src="{{ asset($voucher->post_image) }}" alt="" class="img-responsive">
                        <div class="discount-deals-ribbon">30%</div>
                        <a href="{{ url('voucher/details/'.$voucher->id.'/'.$voucher->post_slug) }}" class="btn btn-brand">Xem Voucher</a>
                    </div>
                    <div class="coupon-content">
                        <div class="card-deal-info">
                            <!-- Title -->
                            <h2 class="card-deal-title"><a href="{{ url('voucher/details/'.$voucher->id.'/'.$voucher->post_slug) }}">{{ $voucher->post_title }}</a></h2>
                            <!-- Category -->
                            <div class="card-deal-categories ">
                                <p>
                                    @foreach ($voucher->categories as $category)
                                    <a href="#"><span class="badge badge-{{ $category->style }}">{{ $category->category_name }}</span></a>
                                    @endforeach
                                </p>
                            </div>
                            <!-- Rating -->
                            <div class="card-deal-meta-rating">
                                <div class="post-star-rating">
                                    <i class="rating-star fa fa-star" data-post-id="659" data-rating="1"></i>
                                    <i class="rating-star fa fa-star" data-post-id="659" data-rating="2"></i>
                                    <i class="rating-star fa fa-star" data-post-id="659" data-rating="3"></i>
                                    <i class="rating-star fa fa-star" data-post-id="659" data-rating="4"></i>
                                    <i class="rating-star fa fa-star-o" data-post-id="659" data-rating="5"></i>
                                </div>
                            </div>

                            <!-- Pricing -->
                            <div class="deal-prices">
                                <div class="deal-old-price">
                                    $240 </div>
                                <div class="deal-new-price">
                                    $168 </div>
                                <div class="deal-save-price">
                                    <span>You save:</span>
                                    30% </div>
                            </div>
                            <!-- Expiring -->
                            <div class="card-deal-meta-expiring">
                                <div class="card-deal-meta-title">Expires in</div>
                                <span class="jscountdown-wrap" data-time="2020/02/01" data-short="true">20
                                    days</span>
                            </div>
                        </div><!-- end card-deal-info -->
                    </div>
                </div>
                <!-- Coupon Single Item End -->
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- New Coupon Section End -->

<!-- Download app  start -->
<div class="call-to-action-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="call-to-action-content">
                    <p>Download <a href="#">Voucher</a> Apps For <br>
                        Get Voucher Everywhere!</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="call-to-action-button text-center">
                    <ul>
                        <li class="apple-store">
                            <a href="#">
                                <i class="fa fa-apple"></i>
                                <div class="cta-btn-content">
                                    Download <span>From App Store</span>
                                </div>
                            </a>
                        </li>
                        <li class="google-play">
                            <a href="#">
                                <i class="fa fa-android"></i>
                                <div class="cta-btn-content">
                                    Download <span>From Play Store</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Download app end -->

<!-- News Section Start -->
<div class="new-coupon-wrapper">
    <div class="container">
        <div class="row section-title-block">
            <div class="col-md-10">
                <h2 class="section-heading"> LATEST News</h2>
            </div>
            <div class="col-md-2">
                <div class="view-all pull-right">
                    <a href="blog.html" class="see-more"><span>All News</span><i
                            class="fa fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <!-- Coupon Single Item Start -->
                <div class="item coupon-item">
                    <div class="coupon-thumbb">
                        <img src="assets/img/blog/blog01.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="coupon-content">
                        <div class="card-deal-info">
                            <!-- Title -->
                            <h2 class="card-deal-title"><a href="blog-details.html">15 Great Pizza Restaurants
                                    That You Must Visit</a></h2>
                            <div class="post-meta-date">
                                <span class="lnr lnr-calendar-full calender-icon"></span>
                                September 4, 2015
                            </div>
                        </div><!-- end card-deal-info -->
                    </div>
                </div>
                <!-- Coupon Single Item End -->
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <!-- Coupon Single Item Start -->
                <div class="item coupon-item">
                    <div class="coupon-thumbb">
                        <img src="assets/img/blog/blog02.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="coupon-content">
                        <div class="card-deal-info">
                            <!-- Title -->
                            <h2 class="card-deal-title"><a href="blog-details.html">Makeup and Styling Tips You
                                    Wish Knew Earlier</a></h2>
                            <div class="post-meta-date">
                                <span class="lnr lnr-calendar-full calender-icon"></span>
                                September 4, 2015
                            </div>
                        </div><!-- end card-deal-info -->
                    </div>
                </div>
                <!-- Coupon Single Item End -->
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <!-- Coupon Single Item Start -->
                <div class="item coupon-item">
                    <div class="coupon-thumbb">
                        <img src="assets/img/blog/blog7.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="coupon-content">
                        <div class="card-deal-info">
                            <!-- Title -->
                            <h2 class="card-deal-title"><a href="blog-details.html">10 Modern Fashion Trends and
                                    How To Pull Them Off</a></h2>
                            <div class="post-meta-date">
                                <span class="lnr lnr-calendar-full calender-icon"></span>
                                September 4, 2015
                            </div>
                        </div><!-- end card-deal-info -->
                    </div>
                </div>
                <!-- Coupon Single Item End -->
            </div>
        </div>
    </div>
</div>
<!-- News Section End -->
    
@endsection