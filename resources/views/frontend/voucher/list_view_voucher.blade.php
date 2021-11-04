@extends('frontend.main_master')
@section('content')

<!-- banner start -->
@include('frontend.common.page_banner')
<!-- banner end -->

<!-- trending stores start -->
<div class="trending-stores-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-block-banner">
                    <h1 class="section-title"> All Vouchers</h1>

                    <div class="breadcrumbs">
                        <span class="first-item">
                            <a href="{{ url('/') }}">Home</a></span>
                        <span class="separator">&gt;</span>
                        <span class="last-item">Vouchers</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- New deal Section Start -->
            <div class="new-coupon-wrapper pad">
                <div class="container">
                    <div class="row">
                        <!-- Sidebar_right -->
                        <div class="col-md-3" style="float: right;">
                            <div class="sidebar">
                                <aside id="deal_filter-5" class="widget widget_deal_filter">
                                    <div class="deal-filter-widget-wrapper">
                                        <form class="form-deal-submit">
                                            <div class="dropdown">
                                                <button class="btn-dropdown m4" data-toggle="dropdown" aria-expanded="false">Danh mục</button>
                                                <ul class="dropdown-menu dropdown-menu-one-column ul-width cate_deal" aria-labelledby="categories-widget-dropdown" data-name="s_deal_category">
                                                    <li>
                                                        <a href="javascript:void(0)" data-value="" data-current="">None</a>
                                                    </li>
                                                    <li> <a href="javascript:void(0)" data-value="beauty" data-current="false"><span class="lnr lnr-store ico-dropdown"></span> Beauty</a></li>
                                                </ul>
                                            </div>
                                            <div class="dropdown">
                                                <button class="btn-dropdown is-city-deal-dropdown m7" data-toggle="dropdown">Thành phố</button>
                                                <ul class="dropdown-menu ul-width city_deal" aria-labelledby="cities-widget-dropdown" data-name="deal_city">
                                                    <li><a href="javascript:void(0)" data-value="" data-current="">None</a></li>
                                                    <li class="select-country-first"><a href="javascript:void(0)">Vui lòng chọn TP</a></li>
                                                </ul>
                                            </div>
                                            <button type="submit" class="sea">Filter Vouchers</button>

                                        </form>

                                    </div>
                                    <!-- end deal-filter-widget-wrapper -->
                                </aside>
                                <!-- search input -->
                                <aside class="widget widget_deal_search">
                                    <div class="deal-search-widget-wrapper">
                                        <h4 class="widget-title">Tìm kiếm</h4>
                                        <form>
                                            <div class="input-group">
                                                <input type="text" name="deal_search" class="form-control" placeholder="Nhập từ khoá ...">
                                                <input type="hidden" name="search_type" value="deal">
                                                <span class="input-group-btn">
                                                    <button type="submit" class="submitt"><i
                                                            class="fa fa-arrow-right"></i></button>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- end deal-search-widget-wrapper -->
                                </aside>
                                <!-- deal category -->
                                <aside class="widget widget_deal_categories">
                                    <div class="widget-bgimage">
                                    </div>
                                    <div class="overlay-darke"></div>
                                    <div class="deal-categories-widget-wrapper widget-list widget-has-bgimage">
                                        <h4 class="widget-title">Danh mục Voucher</h4>
                                        <div class="widget-deal-categories-content">
                                            <ul>
                                                @foreach ($categories as $category)
                                                <li><a href="#"><span
                                                    class="widget-list-number-counter">{{ count($category->posts) }}</span>{{ $category->category_name }}</a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <!-- end widget-deal-categories-content -->
                                    </div>
                                    <!-- end deal-categories-widget-wrapper -->
                                </aside>
                               
                                <!--Newsletter-->
                                <aside class="widget widget_ssd_mailchimp">
                                    <div class="mailchimp-widget-wrapper">
                                        <h4 class="widget-title">Newsletter</h4>
                                        <div class="mailchimp-widget-sub-text">Make sure you don't miss anything!
                                        </div>
                                        <form>
                                            <fieldset>
                                                <input type="email" name="email" placeholder="Your e-mail address" value="" class="mail">
                                                <input type="submit" value="Subscribe" class="subscrib">
                                            </fieldset>
                                        </form>
                                        <div class="mailchimp-widget-message"></div>

                                    </div>
                                    <!-- end mailchimp-widget-wrapper -->
                                </aside>
                                <!--End: Newsletter-->
                            </div>
                        </div>
                        <!-- End: Sidebar_right -->

                        <!--Show Voucher-->
                        <div class="col-md-9">
                            <ul class="nav nav-tabs sort-deals">
                                <li class="active"><a data-toggle="tab" href="#home">Mới nhất</a></li>
                                <li><a data-toggle="tab" href="#menu1">Đánh giá cao</a></li>
                                <li><a data-toggle="tab" href="#menu2">Sắp đến</a></li>
                                <li><a data-toggle="tab" href="#menu3">Xem nhiều nhất</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="home" class="tab-pane fade in active">
                                    @foreach ($vouchers as $voucher)
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="item coupon-item">
                                            <div class="coupon-thumb">
                                                <img src="{{ asset($voucher->post_image) }}" alt="" class="img-responsive">
                                                <div class="discount-deals-ribbon">30%</div>
                                                <a href="{{ url('voucher/details/'.$voucher->id.'/'.$voucher->post_slug) }}" class="btn btn-brand">Xem Voucher</a>
                                            </div>
                                            <div class="coupon-content">
                                                <div class="card-deal-info">
                                                    <h2 class="card-deal-title">
                                                        <a href="{{ url('voucher/details/'.$voucher->id.'/'.$voucher->post_slug) }}">
                                                            {{ $voucher->post_title }}
                                                        </a>
                                                    </h2>
                                                    <div class="card-deal-categories">
                                                        <p>
                                                            @foreach ($voucher->categories as $category)
                                                            <a href="#"><span class="badge badge-{{ $category->style }}">{{ $category->category_name }}</span></a>
                                                            @endforeach
                                                        </p>
                                                    </div>
                                                    <div class="card-deal-meta-rating">
                                                        <div class="post-star-rating">
                                                            <i class="rating-star fa fa-star" data-post-id="659" data-rating="1"></i>
                                                            <i class="rating-star fa fa-star" data-post-id="659" data-rating="2"></i>
                                                            <i class="rating-star fa fa-star" data-post-id="659" data-rating="3"></i>
                                                            <i class="rating-star fa fa-star" data-post-id="659" data-rating="4"></i>
                                                            <i class="rating-star fa fa-star-o" data-post-id="659" data-rating="5"></i>
                                                        </div>

                                                    </div>
                                                    <div class="deal-prices">
                                                        <div class="deal-old-price">
                                                            $240 </div>
                                                        <div class="deal-new-price">
                                                            $168 </div>
                                                        <div class="deal-save-price">
                                                            <span>You save:</span> 30% </div>
                                                    </div>
                                                    <div class="card-deal-meta-expiring">
                                                        <div class="card-deal-meta-title">Expires in</div>
                                                        <span class="jscountdown-wrap" data-time="2020/02/01" data-short="true">20
                                                            days</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    @endforeach
                                </div>

                                <div id="menu1" class="tab-pane fade">
                                        <!--foreach loop -->
                                        Đang cập nhật ...
                                </div>

                                <div id="menu2" class="tab-pane fade">
                                    <!--foreach loop -->
                                    Đang cập nhật ...
                                </div>

                                <div id="menu3" class="tab-pane fade">
                                    <!--foreach loop -->
                                    Đang cập nhật ...
                                </div>
                            </div>
                        </div>
                        <!--End: Show Voucher-->
                    </div>
                </div>
            </div>
            <!-- New deals Section End -->
        </div>
    </div>
</div>
<!-- trending stores end -->

@endsection