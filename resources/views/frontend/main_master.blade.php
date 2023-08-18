<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title') | PixelDynamics</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <link rel="icon" type="image/x-icon" href="{{ asset('frontend') }}/assets/images/logo.png"/>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,400;0,6..12,500;0,6..12,600;0,6..12,700;0,6..12,800;0,6..12,900;1,6..12,400;1,6..12,500;1,6..12,600;1,6..12,700;1,6..12,800&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('frontend') }}/asset/css/owl.carousel.min.css"/>
        <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/animate.css"/>
        <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/owl.theme.default.min.css"/>
        <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/magnific-popup.css"/>
        <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/aos.css"/>
        <!-- FontAwesome Cnd Link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
        <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/style.css"/>
    </head>
    <body>
        <div id="page">
            <a href="#" class="js-nav-toggle nav-toggle"><i></i></a>
            @include('frontend.body.sidebar')
            <!-- END ASIDE -->
            <div id="main">

                @yield('content')

            </div>
            <!-- END MAIN -->
        </div>
        <!-- END PAGE -->

        <!-- loader -->
        <div id="ftco-loader" class="show fullscreen">
            <svg class="circular" width="48px" height="48px">
                <circle class="path-bg" cx="24" cy="24" r="22" fill="none"
                    stroke-width="4"
                    stroke="#eeeeee"/>
                <circle
                    class="path"
                    cx="24"
                    cy="24"
                    r="22"
                    fill="none"
                    stroke-width="4"
                    stroke-miterlimit="10"
                    stroke="#F96D00"/>
            </svg>
        </div>

        <script src="{{ asset('frontend') }}/assets/js/jquery.min.js"></script>
        <script src="{{ asset('frontend') }}/assets/js/jquery-migrate-3.0.1.min.js"></script>
        <script src="{{ asset('frontend') }}/assets/js/popper.min.js"></script>
        <script src="{{ asset('frontend') }}/assets/js/bootstrap.min.js"></script>
        <script src="{{ asset('frontend') }}/assets/js/owl.carousel.min.js"></script>
        <script src="{{ asset('frontend') }}/assets/js/jquery.stellar.min.js"></script>
        <script src="{{ asset('frontend') }}/assets/js/aos.js"></script>
        <script src="{{ asset('frontend') }}/assets/js/scrollax.min.js"></script>
        <script src="{{ asset('frontend') }}/assets/js/main.js"></script>

    </body>
</html>
