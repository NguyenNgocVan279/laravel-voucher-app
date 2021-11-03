<footer class="footer">
    <div class="bg-image parallax" data-bgimage=""></div>
    <div class="overlay-dark"></div>

    <div class="container footer-wrapper">
        <div class="row">

            <div class="col-md-3 col-sm-12">
                <div id="image-3" class="widget clearfix widget_image">
                    <div class="image-widget-wrapper widget-list"> <img width="175" height="38"
                            src="{{ asset('assets/img/logo/logo-light.png') }}"
                            class="attachment-ssd_widget-bgimage size-ssd_widget-bgimage" alt=""> </div>
                    <!-- end image-widget-wrapper -->
                </div>
                <div id="text-2" class="widget clearfix widget_text">
                    <div class="textwidget">VoucherApp is a premium Laravel Deals and Coupons Website. Purple
                        emerald the bulldogs, south of the river bespectacled girls ticket inspector footy.
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div id="deal_categories-3" class="widget clearfix widget_deal_categories">
                    <div class="overlay-color"></div>
                    <div class="deal-categories-widget-wrapper widget-list">
                        <h4 class="widget-title">Danh mục Voucher</h4>
                        <div class="widget-deal-categories-content">
                            <ul>
                                @php
                                    $categories = App\Models\Category::orderBy('id','ASC')->get();
                                @endphp
                                @foreach ($categories as $category)
                                <li>
                                    <a href="#"><span class="widget-list-number-counter">{{ count($category->posts) }}</span>
                                    {{ $category->category_name }}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div id="twitter-2" class="widget clearfix widget_twitter">
                    <div class="twitter-widget-wrapper">
                        <h4 class="widget-title">Nổi bật</h4>
                        <ul class="list-unstyled">
                            @php
                                $vouchers = App\Models\Post::latest()->get();
                            @endphp
                            @foreach ($vouchers as $voucher)
                            <li>
                                <div class="tweet-content">
                                    <a href="" class="twitter-user">{{ $voucher->post_title }}</a>
                                </div> 
                                <p class="tweet-time">{{ $voucher->created_at }}</p>
                            </li>
                            @endforeach
                        </ul>
                    </div><!-- end twitter-widget-wrapper -->
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div id="ssd_social-2" class="widget clearfix widget_ssd_social">
                    <div class="social-widget-wrapper">
                        <h4 class="widget-title">Follow Us</h4>
                        <div class="share-buttons">
                            <a href="#" class="facebook" target="_blank">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="google-plus" target="_blank">
                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="twitter" target="_blank">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="instagram" target="_blank">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </div><!-- end share-buttons -->
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <section class="copyright">
                    © 2021 VoucherApp. All rights reserved. 
                </section>
            </div>
        </div>
    </div><!-- end container -->
</footer>