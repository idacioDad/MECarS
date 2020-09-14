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
    

         <header class="simple-header for-sticky white">
            <div class="top-bar">
                <div class="container">
                    <ul class="contact-item">
                        <li><i class="fa fa-envelope-o"></i>mecarsmz@gmail.com</li>
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
                        <a href="{{url('/')}}" title="">
                            <span><img src="{{asset('assets/img/logo.png')}}" width="100px" height="30px" ></span>
                            <strong>FACILIDADE E RAPIDEZ</strong>
                        </a>
                    </div><!-- LOGO -->
            
                    <span class="menu-toggle"><i class="fa fa-bars"></i></span>
                    <nav>
                        <h1 class="nocontent outline">--- Main Navigation ---</h1>
                        <ul>
                        
                            <li>
                                <a href="{{ url('/catalogo/show') }}" title="Loja de Carros">CARROS</a>
                                
                            </li>
                           

                            <li class="menu-item-has-children mega">
                                <a href="#" title="">PAGINAS</a>
                                <ul>                                    
                                    <li><a href="comingsoon.html" title="">Brevemente</a></li> 
                                    <li><a href="agents-listing.html" title="">Parques </a></li> 
                                    <li><a href="{{ url('/pages/terms-condition') }}" title="">Termos & condições</a></li> 

                                    <li><a href="agent.html" title="">Agent page</a></li> 
                                    <li><a href="agent2.html" title="">Agent 2 page</a></li> 
                                    <li><a href="agent3.html" title="">Agent 3 page</a></li> 

                                    <li><a href="my-profile.html" title="">Perfil</a></li>
                                    <li><a href="submit.html" title="">Submit page</a></li>
                                    <li><a href="login.html" title="">Login page</a></li>

                                    <li><a href="{{ url('/pages/contacto') }}" title="">Contacte-nos</a></li>
                                    <li><a href="404.html" title="">404 Error </a></li> 
                                    <li><a href="{{ url('/pages/faq') }}" title="">FAQ </a></li>
                                    <li><a href="faq.html" title="">VEHICUL LEFT SIDE</a></li>
                                </ul>
                            </li>

                           

                            <li><a href="{{ url('/pages/contacto') }}" title="">CONTACTO</a></li>
                            @guest
                            <li>
                                <a href="{{ route('login') }}"><i class="fa fa-user"></i> / LOGIN</a>
                        </li>
                        @if (Route::has('register'))
                                <li>
                                   <a href="{{ route('register') }}">{{ __('CADASTRAR-SE') }}</a>
                                </li>
                            @endif
                            @else<li >
                                <a id="navbarDropdown"  href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                </li>
                                <li>
                                    <a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('SAIR') }}
                                    </a>
                                    </li>
                    

                         @endguest
                        </ul>
                    </nav>

                </div>
            </div>
        </header>        

    

    @yield('content')       

        <footer class="light-footer">
            <section class="top-line">
                <div style="background: url('{{asset('assets/img/ftr-bg.jpg')}}') repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax whitish"></div><!-- PARALLAX BACKGROUND IMAGE -->	
                <div class="container">
                    <div class="row">   

                        <div class="col-md-3 column">
                            <div class="about_widget widget">
                                <div class="heading1">
                                    <h2><span>Nossos</span> Contactos</h2>
                                </div><!-- heading -->

                                <span><i class="fa fa-envelope"></i>mecarsmz@gmail.com</span>
                                <span><i class="fa fa-phone"></i>+258 845334398</span>
                                <span><i class="fa fa-location-arrow"></i>1112 Maputo Bairro Central , Av. 25 Setembro N.º 1011</span>
                                <ul class="social-btns">
                                    <li><a href="https://web.facebook.com/MECarS-103718001442279" title=""><i class="fa fa-facebook"></i></a></li>
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
                                    <h2><span>Ligações</span> Rápidas</h2>
                                </div><!-- heading -->
                                <ul>
                                    <li><a href="#" title=""><i class="fa fa-angle-right"></i> Página Inicial</a></li>
                                    <li><a href="#" title=""><i class="fa fa-angle-right"></i> Sobre Nós</a></li>
                                    <li><a href="#" title=""><i class="fa fa-angle-right"></i> FAQ</a></li> 
                                    <li><a href="#" title=""><i class="fa fa-angle-right"></i> Termos e Condições</a></li> 
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
                                    <h2><span>Subscreva-</span> Te</h2>
                                </div><!-- heading -->
                                <p>Fique a par de todas as novidades.</p>
                                <form>
                                    <label><input type="text" placeholder="ESCREVA O TEU EMAIL" /></label>
                                    <button type="submit" class="flat-btn"><i class="ti ti-email"></i></button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <div class="bottom-line">
                <div class="container">
                    <span> MECarS © 2020-<?php echo date("Y"); ?> <a href="#" title="">MECarS</a></span>
                    <ul>
                        <li><a title="" href="#">PÁGINA INICIAL</a></li>
                        <li><a title="" href="#">SOBRE NÓS</a></li>
                        <li><a title="" href="#">LOJA</a></li>
                        <li><a title="" href="#">CONTACTOS</a></li>
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

@yield('content') 
</body>
</html>