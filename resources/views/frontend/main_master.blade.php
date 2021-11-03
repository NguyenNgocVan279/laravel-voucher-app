<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Voucher | Home</title>
    <meta name="description" content="simple description for your site" />
    <meta name="keywords" content="keyword1, keyword2" />
    <meta name="author" content="Voucher" />

    <!-- twitter card starts from here, if you don't need remove this section -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@yourtwitterusername" />
    <meta name="twitter:creator" content="@yourtwitterusername" />
    <meta name="twitter:url" content="http://yourdomain.com/" />
    <meta name="twitter:title" content="Your home page title, max 140 char" /> <!-- maximum 140 char -->
    <meta name="twitter:description" content="Your site description, maximum 140 char " /> <!-- maximum 140 char -->
    <meta name="twitter:image" content="assets/img/twittercardimg/twittercard-144-144.png" />
    <!-- when you post this page url in twitter , this image will be shown -->
    <!-- twitter card ends here -->

    <!-- facebook open graph starts from here, if you don't need then delete open graph related  -->
    <meta property="og:title" content="Your home page title" />
    <meta property="og:url" content="http://your domain here.com" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:site_name" content="Your site name here" />
    <!--meta property="fb:admins" content="" /-->
    <!-- use this if you have  -->
    <meta property="og:type" content="website" /> <!-- 'article' for single page  -->
    <meta property="og:image" content="assets/img/opengraph/fbphoto-476-476.png" />
    <!-- when you post this page url in facebook , this image will be shown -->
    <!-- facebook open graph ends here -->

    <!-- desktop bookmark -->
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- icons & favicons -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />
    <!-- this icon shows in browser toolbar -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />
    <!-- this icon shows in browser toolbar -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/img/favicon/manifest.json">

    <!-- GOOGLE FONT -->
    <link href="http://fonts.googleapis.com/css?family=Cabin:400,700%7CUbuntu:300,400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" media="all" />

    <!--owl-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendor/owl-carousel/dist/assets/owl.carousel.min.css') }}" media="all" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendor/owl-carousel/dist/assets/owl.theme.default.min.css') }}" media="all" />

    <!-- FONT AWESOME CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendor/font-awesome/css/font-awesome.min.css') }}" media="all" />

    <!-- linearicons -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendor/linearicons/webfont/style.css') }}" media="all" />

    <!-- animate.css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendor/animate/animate.min.css') }}" media="all" />

    <!-- flatpickr -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendor/flatpickr/flatpickr.min.css') }}" media="all" />

    <!-- lity -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendor/lity/lity.min.css') }}" media="all" />

    <!-- Bootstrap Slider -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendor/bootstrap-slider/css/bootstrap-slider.min.css') }}" media="all" />

    <!-- CUSTOM  CSS  -->
    <link id="cbx-style" rel="stylesheet" href="{{ asset('frontend/assets/css/style-default.css') }}" media="all" />

    <!-- MODERNIZER  -->
    <script src="{{ asset('frontend/assets/vendor/modernizr/modernizr.min.js') }}"></script>


</head>

<body>
    <div class="cbx-container">
        <!-- SITE CONTENT -->

        <!-- Header Part Start -->
        @include('frontend.body.header')
        <!-- Header Part End -->

        <!-- Dynamic Section Content Start -->
        @yield('content')
        <!-- Dynamic Section Content End -->
        
        <!-- Footer Start -->
        @include('frontend.body.footer')        
        <!-- Footer End -->

        <!-- //SITE CONTENT END -->
    </div>

    <!-- SITE SCRIPT  -->

    <!-- jquery -->
    <script src="{{ asset('frontend/assets/vendor/jquery/jquery-1.11.3.min.js') }}"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- if load google maps then load this api -->
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyChihC--Jb_QURoXd2MugyC53cDQjrV2MY"></script>

    <!-- load if our contact form or email subscribe options is used -->
    <script src="{{ asset('frontend/assets/vendor/validation/jquery.validate.js') }}"></script>

    <!--owl-->
    <script src="{{ asset('frontend/assets/vendor/owl-carousel/dist/owl.carousel.min.js') }}"></script>

    <!-- clipboard.js -->
    <script src="{{ asset('frontend/assets/vendor/clipboard.js/clipboard.min.js') }}"></script>

    <!-- flatpickr -->
    <script src="{{ asset('frontend/assets/vendor/flatpickr/flatpickr.js') }}"></script>

    <!-- lity -->
    <script src="{{ asset('frontend/assets/vendor/lity/lity.min.js') }}"></script>

    <!-- Bootstrap Slider -->
    <script src="{{ asset('frontend/assets/vendor/bootstrap-slider/bootstrap-slider.min.js') }}"></script>

    <!-- THEME SCRIPT  -->
    <script src="{{ asset('frontend/assets/js/theme.js') }}"></script>

    <!-- CUSTOM SCRIPT  -->
    <script src="{{ asset('frontend/assets/js/custom.js') }}"></script>

</body>

</html>