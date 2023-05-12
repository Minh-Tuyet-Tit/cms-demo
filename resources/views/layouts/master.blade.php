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
    <title>GOLFTIO | Golf Club</title>
    <!-- #keywords -->
    <meta name="keywords" content="Golf, Golftio" />
    <!-- #description -->
    <meta name="description" content="Golftio" />

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
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">

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
    {{-- <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="L" class="letters-loading">
                        L
                    </span>

                    <span data-text-preloader="O" class="letters-loading">
                        O
                    </span>

                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>

                    <span data-text-preloader="D" class="letters-loading">
                        D
                    </span>

                    <span data-text-preloader="I" class="letters-loading">
                        I
                    </span>

                    <span data-text-preloader="N" class="letters-loading">
                        N
                    </span>

                    <span data-text-preloader="G" class="letters-loading">
                        G
                    </span>
                </div>
            </div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
    </div> --}}

    <header class="header {{$request->is('/')? '':'header--secondary'}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="nav">
                        <div class="nav__content">
                            <div class="nav__logo">
                                <a href="{{ url('/') }}">
                                    <img src="{{ asset('Frontend/images/logo.png') }}" alt="Logo" />
                                </a>
                            </div>
                            <div class="nav__menu">
                                <div class="nav__menu-logo d-flex d-xl-none">
                                    <a href="index.html" class="text-center hide-nav">
                                        <img src="{{ asset('Frontend/images/logo.png') }}" alt="Logo" />
                                    </a>
                                    <a href="javascript:void(0)" class="nav__menu-close">
                                        <i class="fa-solid fa-xmark"></i>
                                    </a>
                                </div>

                                <ul class="nav__menu-items">
                                    <li class="nav__menu-item nav__menu-item--dropdown">
                                        <a href="{{url('/')}}" class="nav__menu-link nav__menu-link">
                                            Home
                                        </a>
                                    </li>
                                    <li class="nav__menu-item nav__menu-item--dropdown">
                                        <a href="javascript:void(0)" class="nav__menu-link nav__menu-link">
                                            About us
                                        </a>
                                        {{-- <ul class="nav__dropdown">
                                            <li>
                                                <a class="nav__dropdown-item hide-nav" href="facility.html">Facility</a>
                                            </li>
                                            <li>
                                                <a class="nav__dropdown-item hide-nav"
                                                    href="facility-details.html">Facility Details</a>
                                            </li>
                                        </ul> --}}
                                    </li>
                                    <li class="nav__menu-item nav__menu-item--dropdown">
                                        <a href="{{ url('blog') }}" class="nav__menu-link nav__menu-link">
                                            Blog
                                        </a>
                                    </li>
                                    <li class="nav__menu-item nav__menu-item--dropdown">
                                        <a href="javascript:void(0)" class="nav__menu-link nav__menu-link">
                                            Members
                                        </a>
                                    </li>
                                    <li class="nav__menu-item nav__menu-item--dropdown">
                                        <a href="javascript:void(0)" class="nav__menu-link nav__menu-link">
                                            Event
                                        </a>
                                    </li>
                                    <li class="nav__menu-item nav__menu-item--dropdown">
                                        <a href="" class="nav__menu-link nav__menu-link">
                                            Gallery
                                        </a>
                                    </li>
                                    {{-- <li class="nav__menu-item nav__menu-item--dropdown">
                                        <a href="javascript:void(0)" class="nav__menu-link nav__menu-link--dropdown">
                                            Pages
                                        </a>
                                        <ul class="nav__dropdown">
                                            <li>
                                                <a class="nav__dropdown-item hide-nav" href="about-us.html">About
                                                    Us</a>
                                            </li>
                                            <li>
                                                <a class="nav__dropdown-item hide-nav" href="pricing.html">Pricing
                                                    Plan</a>
                                            </li>
                                            <li>
                                                <a class="nav__dropdown-item hide-nav" href="event.html">Event</a>
                                            </li>
                                            <li>
                                                <a class="nav__dropdown-item hide-nav" href="faq.html">FAQ</a>
                                            </li>
                                            <li>
                                                <a class="nav__dropdown-item hide-nav" href="gallery.html">Gallery</a>
                                            </li>

                                            <li class="nav__menu-link-child">
                                                <a class="nav__dropdown-item nav__menu-link--dropdown nav__menu-link-childr"
                                                    href="javascript:void(0)">Blog</a>
                                                <ul class="nav__dropdown-child">
                                                    <li>
                                                        <a class="nav__dropdown-item hide-nav" href="blog.html">Blog
                                                            Grid</a>
                                                    </li>
                                                    <li>
                                                        <a class="nav__dropdown-item hide-nav"
                                                            href="blog-list.html">Blog List</a>
                                                    </li>
                                                    <li>
                                                        <a class="nav__dropdown-item hide-nav"
                                                            href="blog-details.html">Blog Details</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="nav__dropdown-item hide-nav" href="contact-us.html">Contact
                                                    Us</a>
                                            </li>
                                            <li>
                                                <a class="nav__dropdown-item hide-nav" href="join-club.html">Join
                                                    Club</a>
                                            </li>
                                            <li>
                                                <a class="nav__dropdown-item hide-nav" href="support.html">Support</a>
                                            </li>
                                            <li>
                                                <a class="nav__dropdown-item hide-nav"
                                                    href="privacy-policy.html">Privacy Policy</a>
                                            </li>
                                            <li>
                                                <a class="nav__dropdown-item hide-nav" href="404.html">Error</a>
                                            </li>
                                        </ul>
                                    </li> --}}
                                    <li class="nav__menu-item d-block d-md-none">
                                        <a href="sign-in.html" class="cmn-button cmn-button--secondary">Sign In</a>
                                        <a href="sign-up.html" class="cmn-button">Sign Up</a>
                                    </li>
                                </ul>
                                <div class="social">
                                    <a href="#">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-brands fa-square-instagram"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="nav__uncollapsed">
                                <div class="nav__uncollapsed-item d-none d-md-flex">
                                    {{-- <a href="sign-in.html" class="cmn-button cmn-button--secondary">Sign In</a> --}}
                                    <a href="sign-up.html" class="cmn-button">Sign Up</a>
                                </div>
                                <button class="nav__bar d-block d-xl-none">
                                    <span class="icon-bar top-bar"></span>
                                    <span class="icon-bar middle-bar"></span>
                                    <span class="icon-bar bottom-bar"></span>
                                </button>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="backdrop"></div>
    </header>

    @yield('main')



    <!-- ==== footer start ==== -->
    <footer class="footer">
        <div class="container">
            <div class="row section__row">
                <div class="col-md-6 col-lg-4 col-xl-3 section__col">
                    <div class="footer__single">
                        <a href="index.html" class="footer__single-logo">
                            <img src="{{asset('Frontend/images/logo-light.png')}}" alt="Logo" />
                        </a>
                        <div class="footer__single-content">
                            <p>
                                Lorem Ipsum is simply dummy text of the
                                printing and typesetting industry. Lorem
                                Ipsum has been the industry...
                            </p>
                            <div class="social">
                                <a href="#">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                                <a href="#">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fa-brands fa-square-instagram"></i>
                                </a>
                                <a href="#">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2 col-xl-3 section__col">
                    <div class="footer__single">
                        <h5>Quick Links</h5>
                        <div class="footer__single-content">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>
                                    <a href="about-us.html">About Us</a>
                                </li>
                                <li>
                                    <a href="facility.html">Facility</a>
                                </li>
                                <li><a href="shop.html">Shop</a></li>
                                <li>
                                    <a href="contact-us.html">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-xl-3 section__col">
                    <div class="footer__single">
                        <h5>Address</h5>
                        <div class="footer__single-content">
                            <div class="footer__single-content__group">
                                <p>(480) 555-0103</p>
                                <p>(406) 555-0120</p>
                            </div>
                            <div class="footer__single-content__group">
                                <p>
                                    <a href="https://pixner.net/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="721617131c1c135c110700061b0132170a131f021e175c111d1f">[email&#160;protected]</a>
                                </p>
                                <p>
                                    <a href="https://pixner.net/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="1c78797e6e7d32747370685c79647d716c7079327f7371">[email&#160;protected]</a>
                                </p>
                            </div>
                            <div class="footer__single-content__group">
                                <p>
                                    285 Great North Road, Grey Lynn,
                                    Auckland 1021
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-xl-3 section__col">
                    <h5>Newsletter</h5>
                    <div class="footer__single">
                        <div class="footer__single-content">
                            <p>
                                Subscribe our newsletter to get our latest
                                update & news
                            </p>
                            <form action="#" method="post" name="newsletterForm">
                                <div class="newsletter">
                                    <input type="email" name="news-mail" id="newsMail"
                                        placeholder="Your email address" required />
                                    <button type="submit">
                                        <i class="golftio-paper-plane"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-12">
                    <div class="copyright">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <p>
                                    Copyright &copy;
                                    <span id="copyYear"></span> Golftio. All
                                    Rights Reserved
                                </p>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li>
                                        <a href="support.html">Support</a>
                                    </li>
                                    <li>
                                        <a href="terms-conditions.html">Terms of Use</a>
                                    </li>
                                    <li>
                                        <a href="privacy-policy.html">Privacy Policy</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ==== / footer end ==== -->

    <!-- scroll to top -->
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
    <script>
        $('.grid').masonry({
            // options
            itemSelector: '.grid-item',
            columnWidth: 200
        });
    </script>
</body>



</html>
