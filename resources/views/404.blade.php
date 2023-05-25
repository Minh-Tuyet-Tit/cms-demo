<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from pixner.net/golftio/main/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 May 2023 06:27:17 GMT -->

<head>
    <!-- required meta -->
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- #favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
    <!-- #title -->
    <title>Golf Club</title>
    <!-- #keywords -->
    <meta name="keywords" content="Golf, Golftio" />
    <!-- #description -->
    <meta name="description" content="Golftio" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />

    <!-- ==== css dependencies start ==== -->

    <!-- bootstrap five css -->
    <link rel="stylesheet" href="{{ asset('Frontend/vendor/bootstrap/css/bootstrap.min.css') }}" />
    <!-- font awesome six css -->
    <link rel="stylesheet" href="{{ asset('Frontend/vendor/font-awesome/css/all.min.css') }}" />
    <!-- glyphter css -->
    <link rel="stylesheet" href="{{ asset('Frontend/vendor/glyphter/css/golftio.css') }}" />
    <!-- nice select css -->
    <link rel="stylesheet" href="{{ asset('Frontend/vendor/nice-select/css/nice-select.css') }}" />
    <!-- magnific popup css -->
    <link rel="stylesheet" href="{{ asset('Frontend/vendor/magnific-popup/css/magnific-popup.css') }}" />
    <!-- slick css -->
    <link rel="stylesheet" href="{{ asset('Frontend/vendor/slick/css/slick.css') }}" />
    <!-- odometer css -->
    <link rel="stylesheet" href="{{ asset('Frontend/vendor/odometer/css/odometer.css') }}" />
    <!-- jquery ui css -->
    <link rel="stylesheet" href="{{ asset('Frontend/vendor/jquery-ui/jquery-ui.min.css') }}" />
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('Frontend/vendor/animate/animate.css') }}" />

    <!-- ==== / css dependencies end ==== -->

    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('Frontend/css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">

    <style>
        .grid-item {
            width: 200px;
        }



        .grid-item--width2 {
            width: 400px;
        }
    </style>
</head>




<body>

    <!-- ==== error section start ==== -->
    <section class="section error wow fadeInUp">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-10 col-xl-8">
                    <div class="error__inner">
                        <img src="{{asset('Frontend/images/404.png')}}" alt="Error">
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="error__inner-content text-center">
                        <h2>Oops! Page Not Found</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                        <div class="section__cta">
                            <a href="{{url('/')}}" class="cmn-button">Back to home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


 <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- ==== js dependencies start ==== -->

    <!-- jquery -->
    <script data-cfasync="false"
        src="{{ asset('Frontend/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script>
    <script src="{{ asset('Frontend/vendor/jquery/jquery-3.6.3.min.js') }}"></script>
    <!-- bootstrap five js -->
    <script src="{{ asset('Frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- nice select js -->
    <script src="{{ asset('Frontend/vendor/nice-select/js/jquery.nice-select.min.js') }}"></script>
    <!-- magnific popup js -->
    <script src="{{ asset('Frontend/vendor/magnific-popup/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- slick js -->
    <script src="{{ asset('Frontend/vendor/slick/js/slick.min.js') }}"></script>
    <!-- odometer js -->
    <script src="{{ asset('Frontend/vendor/odometer/js/odometer.min.js') }}"></script>
    <!-- viewport js -->
    <script src="{{ asset('Frontend/vendor/viewport/viewport.jquery.js') }}"></script>
    <!-- jquery ui js -->
    <script src="{{ asset('Frontend/vendor/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- wow js -->
    <script src="{{ asset('Frontend/vendor/wow/wow.min.js') }}"></script>

    <!-- ==== / js dependencies end ==== -->

    <!-- plugins js -->
    <script src="{{ asset('Frontend/js/plugins.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('Frontend/js/main.js') }}"></script>
    <script src="{{ asset('Frontend/js/gallery.js') }}"></script>
</body>
