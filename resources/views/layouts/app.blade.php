<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- favicoan -->
    <link rel="icon" type="image/png" href="/assets/images/favicon.png" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/vendors/bootstrap/css/bootstrap.min.css" media="all" />
    <!-- Fonts Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="/assets/vendors/fontawesome/css/all.min.css" />
    <!-- jquery-ui css -->
    <link rel="stylesheet" type="text/css" href="/assets/vendors/jquery-ui/jquery-ui.min.css" />
    <!-- modal video css -->
    <link rel="stylesheet" type="text/css" href="/assets/vendors/modal-video/modal-video.min.css" />
    <!-- light box css -->
    <link rel="stylesheet" type="text/css" href="/assets/vendors/lightbox/dist/css/lightbox.min.css" />
    <!-- slick slider css -->
    <link rel="stylesheet" type="text/css" href="/assets/vendors/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="/assets/vendors/slick/slick-theme.css" />
    <!-- google fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap"
        rel="stylesheet" />
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="/assets/css/app.css" />
    <title>Travele | Travel & Tour HTML5 template</title>
</head>

<body class="home">
    <div id="siteLoader" class="site-loader">
        <div class="preloader-content">
            <img src="/assets/images/loader1.gif" alt="" />
        </div>
    </div>
    <div id="page" class="full-page">
        <x-partials.header />
        <main id="content" class="site-main">
            @yield('content')
        </main>
        <x-partials.footer />
        <a id="backTotop" href="#" class="to-top-icon">
            <i class="fas fa-chevron-up"></i>
        </a>
        <x-partials.header-search />
    </div>

    <!-- JavaScript -->
    <script src="/assets/js/jquery.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="/assets/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/vendors/jquery-ui/jquery-ui.min.js"></script>
    <script src="/assets/vendors/countdown-date-loop-counter/loopcounter.js"></script>
    <script src="/assets/js/jquery.counterup.js"></script>
    <script src="/assets/vendors/modal-video/jquery-modal-video.min.js"></script>
    <script src="/assets/vendors/masonry/masonry.pkgd.min.js"></script>
    <script src="/assets/vendors/lightbox/dist/js/lightbox.min.js"></script>
    <script src="/assets/vendors/slick/slick.min.js"></script>
    <script src="/assets/js/jquery.slicknav.js"></script>
    <script src="/assets/js/custom.min.js"></script>
</body>

</html>
