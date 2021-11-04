@extends('frontend.main_master')
@section('content')


<!-- voucher details start -->
<div class="trending-stores-wrapper m-100">
    <div class="container mb-100">
        <div class="row">
            <div class="single-deal-header-wrapper single-deal-header-1-wrapper">
                <div class="single-deal-header">
                    <div class="bg-image-banner"></div>
                    <div class="col-sm-12 -col-xs-12 single-deal-header-content">
                        <h1 class="single-deal-title">{{ $voucher->post_title }}</h1>
                        <div class="single-deal-rating">
                            <div class="card-deal-meta-rating">
                                <div class="rate">
                                    <input type="radio" id="star5" name="rate" value="5" />
                                    <label for="star5" title="text">5 stars</label>
                                    <input type="radio" id="star4" name="rate" value="4" />
                                    <label for="star4" title="text">4 stars</label>
                                    <input type="radio" id="star3" name="rate" value="3" />
                                    <label for="star3" title="text">3 stars</label>
                                    <input type="radio" id="star2" name="rate" value="2" />
                                    <label for="star2" title="text">2 stars</label>
                                    <input type="radio" id="star1" name="rate" value="1" />
                                    <label for="star1" title="text">1 star</label>
                                </div>
                            </div>
                            <span class="rating-text"> (<span class="rating-count">121</span> <span class="rates">reviews</span>)</span>
                        </div><!-- end single-deal-rating -->
                    </div>
                    <div class="single-deal-box">
                        <div class="single-deal-box-inner">
                            <div class="single-deal-countdown">
                                <p class="single-deal-expires-text">Hết hạn trong</p>
                                <div class="single-deal-time">
                                    <span class="lnr lnr-clock clock"></span>
                                    <div class="jscountdown-wrap">
                                        <p id="time" class="time"></p>
                                    </div>
                                </div><!-- end single-deal-countdown -->
                                <div class="single-deal-summary">
                                    <p class="text">
                                        {!! Str::limit($voucher->post_content,250)  !!}
                                    </p>
                                </div><!-- end single-deal-summary -->
                                <!-- Pricing -->
                                <div class="deal-prices">
                                    <div class="deal-old-price">
                                        $110 </div>
                                    <div class="deal-new-price">
                                        $66 </div>
                                    <div class="deal-save-price">
                                        <span>You save:</span>
                                        40% </div>
                                </div>
                                <div>
                                    <button type="submit" class="sea" data-toggle="modal" data-target="#exampleModal">Get Your Voucher Code</button>
                                </div>
                                <div class="discount-ribbon">
                                    40% </div>
                            </div><!-- end single-deal-box-inner -->
                        </div><!-- end single-deal-box -->
                    </div>
                    <!-- end single-deal-header -->
                </div>
            </div>
            <!-- New deals Section End -->
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-9">
                <div class="single-deal-content">
                    <div class="deal-stats">
                        <div class="deal-stat">
                            <span class="deal-stat-number">{{ $voucher->read_count }}</span>
                            <span class="deal-stat-text">Views</span>
                        </div>
                        <div class="deal-stat">
                            <span class="deal-stat-number">2.500</span>
                            <span class="deal-stat-text">Reading Users</span>
                        </div>
                    </div><!-- end deal-stats -->
                    <p>{{ $voucher->post_content }}</p>
                    <div class="single-deal-share mb-100">
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
                    </div><!-- end single-deal-share -->
                    <!-- comments section -->
                    <div class="comments-container" id="recent-comment">
                        <h3>Recent Comments</h3>
                        <ul class="commentlist">
                            <li class="comment even thread-even depth-1">
                                <article class="comment-content">
                                    <div class="media">
                                        <div class="media-left">
                                            <figure class="comment-avatar">
                                                <img alt="" src="assets/img/blog/avatar.png"
                                                    height="50" width="50">
                                            </figure>
                                        </div><!-- end media-left -->
                                        <div class="media-body comment-body">
                                            <header class="comment-header">
                                                <h5 class="comment-author"><a href=""
                                                        class="url">Dina Mohamed</a></h5>
                                                <span class="comment-meta"><a href="">January
                                                        23, 2020 - 8:46 pm</a>
                                                    <input type="submit" id="sub-com"
                                                        class="comment-reply-link"
                                                        value="reply"></input>
                                                </span>
                                            </header>
                                            <div class="comment-main-content">
                                                <p>It's very useful article i really liked it.
                                                </p>
                                            </div>
                                        </div><!-- end media-body -->
                                        <div id="hidden" class="comment-respond">
                                            <h3 id="reply-title" class="comment-reply-title">
                                                Leave a Comment <a id="cancle-reply"
                                                    class="cancle-reply">Cancle Reply</a> </h3>
                                            <form>
                                                <div class="form-row">
                                                    <div
                                                        class="col-md-12 col-sm-12 col-xs-12 mb-20 border-top">
                                                        <textarea type="text"
                                                            class="form-control" cols="45"
                                                            rows="4"
                                                            placeholder="Leave Comment"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div
                                                        class="col-md-4 col-sm-12 col-xs-12 mb-20">
                                                        <input type="text"
                                                            class="form-control padding-none"
                                                            placeholder="Name">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div
                                                        class="col-md-4 col-sm-12 col-xs-12 mb-20">
                                                        <input type="email"
                                                            class="form-control padding-none"
                                                            placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div
                                                        class="col-md-4 col-sm-12 col-xs-12 mb-20">
                                                        <input type="text"
                                                            class="form-control padding-none"
                                                            placeholder="Website">
                                                    </div>
                                                </div>
                                                <input name="submit" type="submit"
                                                    class="submit" value="Post Comment"
                                                    style="cursor: pointer;"></input>
                                            </form>
                                        </div>
                                    </div><!-- end media -->
                                </article>
                            </li><!-- #comment-## -->
                        </ul>
                    </div>

                    <div class="comments-container" id="leave-com">
                        <h3>Leave a Comment</h3>
                        <div class="form-row">
                            <div class="col-md-12 col-sm-12 col-xs-12 mb-20 border-top">
                                <textarea type="text" class="form-control" cols="45" rows="4"
                                    placeholder="Leave Comment"></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4 col-sm-12 col-xs-12 mb-20">
                                <input type="text" class="form-control padding-none"
                                    placeholder="Name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4 col-sm-12 col-xs-12 mb-20">
                                <input type="email" class="form-control padding-none"
                                    placeholder="Email">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4 col-sm-12 col-xs-12 mb-20">
                                <input type="text" class="form-control padding-none"
                                    placeholder="Website">
                            </div>
                        </div>
                        <input name="submit" id="submitt" class="submit" value="Post Comment"
                            style="cursor: pointer;"></input>
                    </div>
                </div>
            </div><!-- end col-sm-8 col-md-9 -->

            <div class="col-sm-4 col-md-3">
                <!--Track the read User -->
                <div class="widget" style="width: 100%">
                    <h2 class="widget-title">Track User Online</h2>
                    <table class="table" >
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td style="font-size: 10px;">{{ $user->name }}</td>
                                <td style="font-size: 10px;">{{ $user->email }}</td>
                                <td style="font-size: 11px;">
                                    @if ($user->isOnline())
                                    <li class="text-danger" style="list-style-type: circle; font-family: bold;">Online</li>
                                    @else
                                    <li class="text-muted" style="list-style-type: circle;">Offline</li>
                                    @endif
                                </td>
                              </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div><!-- end single-deal-company -->
                <!--End: Track the read User -->
                
                <div class="widget">
                    <h2 class="widget-title">Company</h2>
                    <a href="#">
                        <img width="300" height="150" src="{{ asset($voucher->post_image) }}" alt="">
                    </a>
                    <h5><a href="#" class="h-store"><span>Nature</span></a></h5>
                    <p class="text">
                        {!! Str::limit($voucher->post_content,250)  !!} 
                    </p>
                </div><!-- end single-deal-company -->
                <div class="widget">
                    <h2 class="widget-title">Location</h2>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d125425.66447719141!2d106.70718398320312!3d10.768967733249761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1635933373375!5m2!1svi!2s" frameborder="0" style="border:0;" allowfullscreen="" class="deal-map" loading="lazy"></iframe>
                </div>
            </div><!-- col-sm-4 col-md-3 -->
        </div><!-- end row -->
    </div>
</div>
<!-- voucher details end -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">{{ $voucher->post_title }}</h4>
                <div class="bg-image modal-deal-image"></div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="modal-deal-code">
                    N37FPWVG4U					
                </div>
            </div>
            <div class="modal-footer is-clipboard-success" style="display: block;">
                <p>Copy Code</p>                   
                <a href="https://www.google.com/" target="_blank" class="btn btn-color">Visit Voucher</a>
            </div>
        </div>
    </div>
</div>

@endsection
