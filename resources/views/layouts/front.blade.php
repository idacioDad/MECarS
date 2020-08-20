<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MECARS </title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}" type="text/css" /><!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/fonts/font-awesome/css/font-awesome.min.css')}}" type="text/css" /><!-- Icons -->
    <link rel="stylesheet" href="{{asset('assets/fonts/themify-icons/themify-icons.css')}}" type="text/css" /><!-- Icons -->
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}" type="text/css')}}" /><!-- Owl Carousal-->
    <link rel="stylesheet" href="{{asset('assets/css/price-range.css')}}" type="text/css" /><!-- Owl Carousal -->

    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" type="text/css" /><!-- Style -->	
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}" type="text/css" /><!-- Responsive -->	
    <link rel="stylesheet" href="{{asset('assets/css/colors.css')}}" type="text/css" /><!-- color -->	

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/js/rs-plugin/css/settings.css')}}">

</head>
<body>

    <!-- /.preloader -->
    <div id="preloader"></div>
    <div class="theme-layout">
        
        <div class="account-popup-sec"> 
           
            <div class="account-popup-area">
                <div class="account-popup">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="account-user">
                                <div class="logo">
                                    <a href="#" title="">
                                        <!--i class="fa fa-get-pocket"></i-->
                                        <span><img src="{{asset('assets/img/logo.png')}}"></span>
                                        <strong>SELL VEHICULS</strong>
                                    </a>
                                </div><!-- LOGO -->
                                <form method="POST" action="{{ route('login') }}">
                                @csrf

                                    <h1>Login</h1>
                                    <div class="field">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <div class="field">

                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>
                                    <div class="field">
                                        <input type="submit" value="Submeter" class="flat-btn" />
                                    </div>
                                </form>
                                <i>OR</i>
                                <span>LOGIN WITH</span>
                                <ul class="social-btns">
                                    <li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" title=""><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="registration-sec">
                                <h1>Cadastrar-se</h1>
                                <form method="POST" action="{{ route('register') }}">
                                @csrf
                                
                                    <div class="field">
                                         <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="field">
                                        
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>
                                    <div class="field">

                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="field">
                                         <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>                                   
                                    <label>
                                        <input type="checkbox" /> By Clicking on this You are agree with our <a href="#" title="">Terms & Condition</a>
                                    </label>
                                    <input type="submit" value="Registar" class="flat-btn" />
                                </form>
                            </div><!-- Registration sec -->
                        </div>
                    </div>
                    <span class="close-popup"><i class="fa fa-close"></i></span>
                </div>
            </div>
        </div><!-- Account Popup Sec -->

         <header class="simple-header for-sticky white">
            <div class="top-bar">
                <div class="container">
                    <ul class="contact-item">
                        <li><i class="fa fa-envelope-o"></i>mecars@gmail.com</li>
                        <li><i class="fa fa-mobile"></i>+258 845334398 / +258 872149445</li>
                    </ul>
                    <div class="choose-language">
                        <a href="#" title="">FR</a>
                        <a href="#" title="">DE</a>
                        <a href="#" title="">EN</a>
                        <a href="#" title="">jp</a>
                    </div>
                </div>
            </div><!-- Top bar -->
            <div class="menu">
                <div class="container">
                    <div class="logo">
                        <a href="index.html" title="">
                            <span><img src="{{asset('assets/img/logo.png')}}" width="100px" height="50px" ></span>
                            <strong>FACILIDADE E RAPIDEZ</strong>
                        </a>
                    </div><!-- LOGO -->
                    <div class="popup-client">
                        <span><i class="fa fa-user"></i> /  Signup</span>
                    </div>
                    <span class="menu-toggle"><i class="fa fa-bars"></i></span>
                    <nav>
                        <h1 class="nocontent outline">--- Main Navigation ---</h1>
                        <ul>
                            <li class="menu-item-has-children">
                                <a href="#" title="">HOME</a>
                                <ul>
                                    <li><a href="index.html" title="">Home v1</a></li>
                                    <li><a href="index2.html" title="">Home v2</a></li>
                                    <li><a href="index3.html" title="">Home v3</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#" title="">VEHICULS</a>
                                <ul>
                                    <li><a href="vehiculs3.html" title="">vehiculs- Super </a></li>       
                                    <li><a href="vehiculs.html" title="">vehiculs- List</a></li>
                                    <li><a href="vehiculs2.html" title="">vehiculs- Grid</a></li>                             
                                    <li><a href="vehicul.html" title="">vehicul details</a></li>              
                                </ul>
                            </li>
                            <li><a href="vehicul.html" title="">VEHICUL</a></li>

                            <li class="menu-item-has-children mega">
                                <a href="#" title="">PAGES</a>
                                <ul>                                    
                                    <li><a href="comingsoon.html" title="">Coming Soon</a></li> 
                                    <li><a href="agents-listing.html" title="">Agent Listing </a></li> 
                                    <li><a href="terms-conditions.html" title="">Terms & conditions</a></li> 

                                    <li><a href="agent.html" title="">Agent page</a></li> 
                                    <li><a href="agent2.html" title="">Agent 2 page</a></li> 
                                    <li><a href="agent3.html" title="">Agent 3 page</a></li> 

                                    <li><a href="my-profile.html" title="">Profile page</a></li>
                                    <li><a href="submit.html" title="">Submit page</a></li>
                                    <li><a href="login.html" title="">Login page</a></li>

                                    <li><a href="contact.html" title="">Contact Us</a></li>
                                    <li><a href="404.html" title="">404 Error </a></li> 
                                    <li><a href="faq.html" title="">FAQ page</a></li>
                                    <li><a href="faq.html" title="">VEHICUL LEFT SIDE</a></li>
                                </ul>
                            </li>

                            <li class="menu-item-has-children">
                                <a href="#" title="">BLOG PAGES</a>
                                <ul>
                                    <li><a href="blog.html" title="">Blog Page</a></li>
                                    <li><a href="blog-sidebar.html" title="">Blog left Sidebar</a></li>
                                    <li><a href="single.html" title="">Single Post</a></li>
                                    <li><a href="single-left-sidebar.html" title="">Single Left sidebar</a></li>
                                    <li><a href="single-no-sidebar.html" title="">Single No Sidebar</a></li>
                                </ul>
                            </li>

                            <li><a href="contact.html" title="">CONTACT</a></li>
                        </ul>
                    </nav>

                </div>
            </div>
        </header>        

    

    @yield('content')       

        <footer class="light-footer">
            <section class="top-line">
                <div style="background: url(img/footer.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax whitish"></div><!-- PARALLAX BACKGROUND IMAGE -->	
                <div class="container">
                    <div class="row">   

                        <div class="col-md-3 column">
                            <div class="about_widget widget">
                                <div class="heading1">
                                    <h2><span>Useful</span> links</h2>
                                </div><!-- heading -->

                                <span><i class="fa fa-envelope"></i>yourcompany@gmail.com</span>
                                <span><i class="fa fa-phone"></i>0888 (29999996)</span>
                                <span><i class="fa fa-location-arrow"></i>1234 Tokyo shibuia , WI 54115</span>
                                <ul class="social-btns">
                                    <li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" title=""><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" title=""><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#" title=""><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" title=""><i class="fa fa-tumblr"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3 column">
                            <div class="links_widget widget">
                                <div class="heading1">
                                    <h2><span>Useful</span> links</h2>
                                </div><!-- heading -->
                                <ul>
                                    <li><a href="#" title=""><i class="fa fa-angle-right"></i> Home</a></li>
                                    <li><a href="#" title=""><i class="fa fa-angle-right"></i> About us</a></li>
                                    <li><a href="#" title=""><i class="fa fa-angle-right"></i> Services</a></li> 
                                    <li><a href="#" title=""><i class="fa fa-angle-right"></i> Services</a></li> 
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3 column">
                            <div class="links_widget widget">
                                <div class="heading1">
                                    <h2><span>Useful</span> Places</h2>
                                </div><!-- heading -->
                                <ul>
                                    <li><a href="#" title=""><i class="fa fa-angle-right"></i> Lorem ipsum </a></li>
                                    <li><a href="#" title=""><i class="fa fa-angle-right"></i> Closest ipsum </a></li>
                                    <li><a href="#" title=""><i class="fa fa-angle-right"></i> Lorem dolom </a></li>
                                    <li><a href="#" title=""><i class="fa fa-angle-right"></i> Positioned ipl</a></li> 
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3 column">
                            <div class="subscribe_widget widget">
                                <div class="heading1">
                                    <h2><span>Subscribe</span> Us</h2>
                                </div><!-- heading -->
                                <p>Positioning the closest positioned for abs positioning</p>
                                <form>
                                    <label><input type="text" placeholder="TYPE YOUR EMAIL" /></label>
                                    <button type="submit" class="flat-btn"><i class="ti ti-email"></i></button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <div class="bottom-line">
                <div class="container">
                    <span>Copyright All Right Reserved 2020 <a href="#" title="">MECarS</a></span>
                    <ul>
                        <li><a title="" href="#">HOME</a></li>
                        <li><a title="" href="#">ABOUT</a></li>
                        <li><a title="" href="#">VEHICULS</a></li>
                        <li><a title="" href="#">BLOG</a></li>
                        <li><a title="" href="#">CONTACT</a></li>
                    </ul>
                </div>
            </div>
            <a href="#" class="scrollToTop"><i class="ti ti-arrow-circle-up"></i></a>
        </footer>

    </div>

    <!-- Script -->
    <script type="text/javascript" src="{{asset('assets/js/modernizr.js')}}"></script><!-- Modernizer -->
    <script type="text/javascript" src="{{asset('assets/js/jquery-1.10.2.min.js')}}"></script><!-- Jquery -->
    <script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script><!-- Bootstrap -->
    <script type="text/javascript" src="{{asset('assets/js/owl.carousel.min.js')}}"></script><!-- Owl Carousal -->
    <script type="text/javascript" src="{{asset('assets/js/html5lightbox.js')}}"></script><!-- HTML -->
    <script type="text/javascript" src="{{asset('assets/js/scrolly.js')}}"></script><!-- Parallax -->
    <script type="text/javascript" src="{{asset('assets/js/price-range.js')}}"></script><!-- Parallax -->
    <script type="text/javascript" src="{{asset('assets/js/script.js')}}"></script><!-- Script -->

    <script src="{{asset('assets/js/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>   
    <script src="{{asset('assets/js/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            "use strict";
            jQuery('.tp-banner').show().revolution({
                dottedOverlay: "none",
                delay: 16000,
                startwidth: 1170,
                startheight: 700,
                hideThumbs: 200,
                thumbWidth: 100,
                thumbHeight: 50,
                thumbAmount: 5,
                navigationType: "bullet",
                navigationArrows: "solo",
                navigationStyle: "preview1",
                touchenabled: "on",
                onHoverStop: "on",
                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,
                parallax: "mouse",
                parallaxBgFreeze: "on",
                parallaxLevels: [7, 4, 3, 2, 5, 4, 3, 2, 1, 0],
                keyboardNavigation: "off",
                navigationHAlign: "center",
                navigationVAlign: "bottom",
                navigationHOffset: 0,
                navigationVOffset: 20,
                soloArrowLeftHalign: "left",
                soloArrowLeftValign: "center",
                soloArrowLeftHOffset: 20,
                soloArrowLeftVOffset: 0,
                soloArrowRightHalign: "right",
                soloArrowRightValign: "center",
                soloArrowRightHOffset: 20,
                soloArrowRightVOffset: 0,
                shadow: 0,
                fullWidth: "on",
                fullScreen: "off",
                spinner: "spinner4",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                forceFullWidth: "off",
                hideThumbsOnMobile: "off",
                hideNavDelayOnMobile: 1500,
                hideBulletsOnMobile: "off",
                hideArrowsOnMobile: "off",
                hideThumbsUnderResolution: 0,
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0,
                videoJsPath: "rs-plugin/videojs/",
                fullScreenOffsetContainer: ""
            });

            $(".carousel-prop").owlCarousel({
                autoplay: true,
                autoplayTimeout: 3000,
                smartSpeed: 2000,
                loop: true,
                dots: true,
                nav: false,
                items: 4,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    600: {
                        items: 2,
                        nav: false
                    },
                    1000: {
                        items: 3,
                        nav: true,
                        loop: false
                    }
                }
            });

            $(".carousel").owlCarousel({
                autoplay: true,
                autoplayTimeout: 3000,
                smartSpeed: 2000,
                loop: false,
                dots: false,
                nav: true,
                margin: 0,
                items: 3
            });

            $(".carousel-client").owlCarousel({
                autoplay: true,
                autoplayTimeout: 3000,
                smartSpeed: 2000,
                loop: false,
                dots: false,
                nav: true,
                margin: 30,
                items: 5,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 3,
                        nav: true
                    },
                    1000: {
                        items: 5,
                        nav: true,
                        loop: false
                    }
                }
            });

        });
    </script>
</body>
</html>