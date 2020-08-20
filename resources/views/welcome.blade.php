@extends('layouts.front')

@section('content')

<!-- SLider -->
<div id="rev_slider-wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classicslider1" >
            <div class="tp-banner-container">
                <div class="tp-banner" >
                    <ul>                        
                        <li data-transition="fade" data-slotamount="7" data-masterspeed="2000" 
                            data-saveperformance="on"  data-title="Ken Burns Slide">
                            <!-- MAIN IMAGE -->
                            <img src="{{asset('assets/img/slides/home2.jpg')}}"  alt="2" data-lazyload="{{asset('assets/img/slides/home2.jpg')}}" 
                                 data-bgposition="right top" data-kenburns="off" data-duration="12000" 
                                 data-ease="Power0.easeInOut" data-bgfit="115" data-bgfitend="100" 
                                 data-bgpositionend="center bottom">
                            <div class="tp-caption tentered_white_huge lft tp-resizeme" 
                                 data-endspeed="300" data-easing="Power4.easeOut" data-start="400" data-speed="600"
                                 data-y="130" data-hoffset="0" data-x="center"
                                 style="">
                                <img alt="" src="{{asset('img/4.png')}}" style="width: 110px; height: 110px;">
                            </div>
                            <div class="tp-caption tentered_white_huge lft tp-resizeme" 
                                 data-endspeed="300" data-easing="Power4.easeOut" data-start="400" data-speed="600"
                                 data-y="272" data-hoffset="0" data-x="center"
                                 style="color: #fff; text-transform: uppercase; font-size: 40px; letter-spacing: 6px;
                                 font-weight: 400;">
                                Mercedes-Benz
                            </div>
                            <div class="tp-caption tentered_white_huge lfb tp-resizeme" data-endspeed="300" 
                                 data-easing="Power4.easeOut" data-start="800" data-speed="600" data-y="320" 
                                 data-hoffset="0" data-x="center"
                                 style="color: #fff; font-size: 13px; text-transform: uppercase; letter-spacing: 10px;">
                                <i class="fa fa-map-marker"> </i> Not caroliana 234 
                            </div>
                            <div class="tp-caption tentered_white_huge lft tp-resizeme" 
                                 data-endspeed="300" data-easing="Power4.easeOut" data-start="400" data-speed="600"
                                 data-y="365" data-hoffset="0" data-x="center"
                                 style="color: #fff; text-transform: uppercase; font-size: 40px; letter-spacing: 6px;
                                 font-family: Montserrat; font-weight: 400;">
                                345000 $
                            </div>
                            <a href="vehicul.html" class="pull-left tp-caption lfb tp-resizeme rs-parallaxlevel-0"
                               data-x="center"
                               data-y="420"
                               data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;
                               scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                               data-speed="500"
                               data-start="1200"
                               data-easing="Power3.easeInOut"
                               data-splitin="none"
                               data-splitout="none"
                               data-elementdelay="0.1"
                               data-endelementdelay="0.1"
                               data-linktoslide="next"
                               style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;padding:15px 28px;
                               color: #fff;text-transform: uppercase;
                               border: none; background:#000;
                               font-size: 12px; letter-spacing: 3px;
                               font-family: Montserrat; border-radius: 0px;
                               display: table; transition: .4s;">More Details</a>

                        </li> 


                        <li data-transition="fade" data-slotamount="7" data-masterspeed="2000" 
                            data-saveperformance="on"  data-title="Ken Burns Slide">
                            <!-- MAIN IMAGE -->
                            <img src="img/slides/home1.jpg"  alt="2" data-lazyload="img/slides/home1.jpg" 
                                 data-bgposition="right top" data-kenburns="off" data-duration="12000" 
                                 data-ease="Power0.easeInOut" data-bgfit="115" data-bgfitend="100" 
                                 data-bgpositionend="center bottom"> 
                            <div class="tp-caption tentered_white_huge lft tp-resizeme" 
                                 data-endspeed="300" data-easing="Power4.easeOut" data-start="400" data-speed="600"
                                 data-y="130" data-hoffset="0" data-x="center"
                                 style="">
                                <img alt="" src="img/3.png" style="width: 110px; height: 110px;">
                            </div>
                            <div class="tp-caption tentered_white_huge lft tp-resizeme" 
                                 data-endspeed="300" data-easing="Power4.easeOut" data-start="400" data-speed="600"
                                 data-y="272" data-hoffset="0" data-x="center"
                                 style="color: #fff; text-transform: uppercase; font-size: 40px; letter-spacing: 6px;
                                 font-weight: 400;">
                                Mercedes-Benz
                            </div>
                            <div class="tp-caption tentered_white_huge lfb tp-resizeme" data-endspeed="300" 
                                 data-easing="Power4.easeOut" data-start="800" data-speed="600" data-y="320" 
                                 data-hoffset="0" data-x="center"
                                 style="color: #fff; font-size: 13px; text-transform: uppercase; letter-spacing: 10px;">
                                <i class="fa fa-map-marker"> </i> Not caroliana 234 
                            </div>
                            <div class="tp-caption tentered_white_huge lft tp-resizeme" 
                                 data-endspeed="300" data-easing="Power4.easeOut" data-start="400" data-speed="600"
                                 data-y="365" data-hoffset="0" data-x="center"
                                 style="color: #fff; text-transform: uppercase; font-size: 40px; letter-spacing: 6px;
                                 font-family: Montserrat; font-weight: 400;">
                                345000 $
                            </div>
                            <a href="vehicul.html" class="pull-left tp-caption lfb tp-resizeme rs-parallaxlevel-0"
                               data-x="center"
                               data-y="420"
                               data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;
                               scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                               data-speed="500"
                               data-start="1200"
                               data-easing="Power3.easeInOut"
                               data-splitin="none"
                               data-splitout="none"
                               data-elementdelay="0.1"
                               data-endelementdelay="0.1"
                               data-linktoslide="next"
                               style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;padding:15px 28px;
                               color: #fff;text-transform: uppercase;
                               border: none; background:#000;
                               font-size: 12px; letter-spacing: 3px;
                               font-family: Montserrat; border-radius: 0px;
                               display: table; transition: .4s;">More Details</a>

                        </li> 



                        <li data-transition="fade" data-slotamount="7" data-masterspeed="2000" 
                            data-saveperformance="on"  data-title="Ken Burns Slide">
                            <!-- MAIN IMAGE -->
                            <img src="img/slides/home3.jpg"  alt="2" data-lazyload="img/slides/home3.jpg" 
                                 data-bgposition="right top" data-kenburns="off" data-duration="12000" 
                                 data-ease="Power0.easeInOut" data-bgfit="115" data-bgfitend="100" 
                                 data-bgpositionend="center bottom"> 
                            <div class="tp-caption tentered_white_huge lft tp-resizeme" 
                                 data-endspeed="300" data-easing="Power4.easeOut" data-start="400" data-speed="600"
                                 data-y="130" data-hoffset="0" data-x="center"
                                 style="">
                                <img alt=""  src="img/3.png" style="width: 110px; height: 110px;">
                            </div>
                            <div class="tp-caption tentered_white_huge lft tp-resizeme" 
                                 data-endspeed="300" data-easing="Power4.easeOut" data-start="400" data-speed="600"
                                 data-y="272" data-hoffset="0" data-x="center"
                                 style="color: #fff; text-transform: uppercase; font-size: 40px; letter-spacing: 6px;
                                 font-weight: 400;">
                                Mercedes-Benz
                            </div>
                            <div class="tp-caption tentered_white_huge lfb tp-resizeme" data-endspeed="300" 
                                 data-easing="Power4.easeOut" data-start="800" data-speed="600" data-y="320" 
                                 data-hoffset="0" data-x="center"
                                 style="color: #fff; font-size: 13px; text-transform: uppercase; letter-spacing: 10px;">
                                <i class="fa fa-map-marker"> </i> Not caroliana 234 
                            </div>
                            <div class="tp-caption tentered_white_huge lft tp-resizeme" 
                                 data-endspeed="300" data-easing="Power4.easeOut" data-start="400" data-speed="600"
                                 data-y="365" data-hoffset="0" data-x="center"
                                 style="color: #fff; text-transform: uppercase; font-size: 40px; letter-spacing: 6px;
                                 font-family: Montserrat; font-weight: 400;">
                                345000 $
                            </div>
                            <a href="vehicul.html" class="pull-left tp-caption lfb tp-resizeme rs-parallaxlevel-0"
                               data-x="center"
                               data-y="420"
                               data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;
                               scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                               data-speed="500"
                               data-start="1200"
                               data-easing="Power3.easeInOut"
                               data-splitin="none"
                               data-splitout="none"
                               data-elementdelay="0.1"
                               data-endelementdelay="0.1"
                               data-linktoslide="next"
                               style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;padding:15px 28px;
                               color: #fff;text-transform: uppercase;
                               border: none; background:#000;
                               font-size: 12px; letter-spacing: 3px;
                               font-family: Montserrat; border-radius: 0px;
                               display: table; transition: .4s;">More Details</a>

                        </li> 
                    </ul>
                    <div class="tp-bannertimer"></div>
                </div>
            </div>


       


        <section class="block">
            <div style="background: url(img/call-to-action-bg.jpg) repeat scroll 50% 422.28px transparent; background-attachment: fixed;" class="parallax scrolly-invisible  blackish"></div><!-- PARALLAX BACKGROUND IMAGE -->	
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="vehiculs-text-bar">
                            <h3>Compre já  <span> a sua Viatura </span>Sem Sair de Casa! </h3>
                            <p>Nós tratamos de toda a documentação que o seu carro precisa<br/> e fazemos a entrega a domicilio</p>
                            <a href="#" title="" class="flat-btn">Joing us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pequena Montra de Viaturas -->
        <section class="block">
            <div class="container">
                <div class="heading4">
                    <h2>FEATURED VEHICULS</h2>
                    <span>Lorem ipsum dolor consectetu</span>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="vehiculs-sec">
                            <div class="row">                                
                                <div class="col-md-4">
                                    <div class="vehiculs-box">
                                        <div class="vehiculs-thumb">
                                            <img src="img/demo/vehicul4.jpg" alt="" />
                                            <span class="spn-status"> Semi-New </span>
                                            <span class="spn-save"> <i class="ti ti-heart"></i> </span>

                                            <div class="user-preview">
                                                <a class="col" href="agent.html">
                                                    <img alt="Camilė" class="avatar avatar-small" src="img/4.png" title="Camilė">
                                                </a> 
                                            </div> 
                                            <a class="proeprty-sh-more" href="vehicul.html"><i class="fa fa-angle-double-right"> </i><i class="fa fa-angle-double-right"> </i></a>
                                            <p class="car-info-smal">
                                                Registration 2010<br>
                                                3.0 Diesel<br>
                                                230 HP<br>
                                                Body Coupe<br>
                                                80 000 Miles
                                            </p>
                                        </div>
                                        <h3><a href="vehicul.html" title="">Mercedes-Benz</a></h3>
                                        <span class="price">$444000</span>
                                        <span class="rate-it">
                                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star  star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star off star-off-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star off star-off-png"></i> 
                                        </span>
                                    </div><!-- prop Box -->
                                </div>                                
                                <div class="col-md-4">
                                    <div class="vehiculs-box">
                                        <div class="vehiculs-thumb">
                                            <img src="img/demo/vehicul3.jpg" alt="" />
                                            <span class="spn-status"> Damaged </span>
                                            <span class="spn-save"> <i class="ti ti-heart"></i> </span>

                                            <div class="user-preview">
                                                <a class="col" href="agent.html">
                                                    <img alt="Camilė" class="avatar avatar-small" src="img/1.png" title="Camilė">
                                                </a> 
                                            </div> 
                                            <a class="proeprty-sh-more" href="vehicul.html"><i class="fa fa-angle-double-right"> </i><i class="fa fa-angle-double-right"> </i></a>
                                            <p class="car-info-smal">
                                                Registration 2010<br>
                                                3.0 Diesel<br>
                                                230 HP<br>
                                                Body Coupe<br>
                                                80 000 Miles
                                            </p>
                                        </div>
                                        <h3><a href="vehicul.html" title="Mercedes-Benz">Mercedes-Benz</a></h3>
                                        <span class="price">$789000</span>
                                        <span class="rate-it">
                                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star  star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star off star-off-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star off star-off-png"></i> 
                                        </span>
                                    </div><!-- prop Box -->
                                </div>
                                <div class="col-md-4">
                                    <div class="vehiculs-box">
                                        <div class="vehiculs-thumb">
                                            <img src="img/demo/vehicul2.jpg" alt="" />
                                            <span class="spn-status"> Semi-New </span>
                                            <span class="spn-save"> <i class="ti ti-heart"></i> </span>

                                            <div class="user-preview">
                                                <a class="col" href="agent.html">
                                                    <img alt="Camilė" class="avatar avatar-small" src="img/2.png" title="Camilė">
                                                </a> 
                                            </div> 
                                            <a class="proeprty-sh-more" href="vehicul.html"><i class="fa fa-angle-double-right"> </i><i class="fa fa-angle-double-right"> </i></a>
                                            <p class="car-info-smal">
                                                Registration 2010<br>
                                                3.0 Diesel<br>
                                                230 HP<br>
                                                Body Coupe<br>
                                                80 000 Miles
                                            </p>
                                        </div>
                                        <h3><a href="vehicul.html" title="Mercedes-Benz">Mercedes-Benz</a></h3>
                                        <span class="price">$380000</span>
                                        <span class="rate-it">
                                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star  star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star off star-off-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star off star-off-png"></i> 
                                        </span>
                                    </div><!-- prop Box -->
                                </div>
                                <div class="col-md-4">
                                    <div class="vehiculs-box">
                                        <div class="vehiculs-thumb">
                                            <img src="img/demo/vehicul4.jpg" alt="" />
                                            <span class="spn-status"> Damaged </span>
                                            <span class="spn-save"> <i class="ti ti-heart"></i> </span>

                                            <div class="user-preview">
                                                <a class="col" href="agent.html">
                                                    <img alt="Camilė" class="avatar avatar-small" src="img/4.png" title="Camilė">
                                                </a> 
                                            </div> 
                                            <a class="proeprty-sh-more" href="vehicul.html"><i class="fa fa-angle-double-right"> </i><i class="fa fa-angle-double-right"> </i></a>
                                            <p class="car-info-smal">
                                                Registration 2010<br>
                                                3.0 Diesel<br>
                                                230 HP<br>
                                                Body Coupe<br>
                                                80 000 Miles
                                            </p>
                                        </div>
                                        <h3><a href="vehicul.html" title="Mercedes-Benz">Mercedes-Benz</a></h3>
                                        <span class="price">$1000000</span>
                                        <span class="rate-it">
                                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star  star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star off star-off-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star off star-off-png"></i> 
                                        </span>
                                    </div><!-- prop Box -->
                                </div>
                                <div class="col-md-4">
                                    <div class="vehiculs-box">
                                        <div class="vehiculs-thumb">
                                            <img src="img/demo/vehicul5.jpg" alt="" />
                                            <span class="spn-status"> Used </span>
                                            <span class="spn-save"> <i class="ti ti-heart"></i> </span>

                                            <div class="user-preview">
                                                <a class="col" href="agent.html">
                                                    <img alt="Camilė" class="avatar avatar-small" src="img/3.png" title="Camilė">
                                                </a> 
                                            </div> 
                                            <a class="proeprty-sh-more" href="vehicul.html"><i class="fa fa-angle-double-right"> </i><i class="fa fa-angle-double-right"> </i></a>
                                            <p class="car-info-smal">
                                                Registration 2010<br>
                                                3.0 Diesel<br>
                                                230 HP<br>
                                                Body Coupe<br>
                                                80 000 Miles
                                            </p>
                                        </div>
                                        <h3><a href="vehicul.html" title="Mercedes-Benz">Mercedes-Benz</a></h3>
                                        <span class="price">$500000</span>
                                        <span class="rate-it">
                                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star  star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star off star-off-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star off star-off-png"></i> 
                                        </span>
                                    </div><!-- prop Box -->
                                </div>
                                <div class="col-md-4">
                                    <div class="vehiculs-box">
                                        <div class="vehiculs-thumb">
                                            <img src="img/demo/vehicul3.jpg" alt="" />
                                            <span class="spn-status"> Damaged</span>
                                            <span class="spn-save"> <i class="ti ti-heart"></i> </span>

                                            <div class="user-preview">
                                                <a class="col" href="agent.html">
                                                    <img alt="Camilė" class="avatar avatar-small" src="img/2.png" title="Camilė">
                                                </a> 
                                            </div> 
                                            <a class="proeprty-sh-more" href="vehicul.html"><i class="fa fa-angle-double-right"> </i><i class="fa fa-angle-double-right"> </i></a>
                                            <p class="car-info-smal">
                                                Registration 2010<br>
                                                3.0 Diesel<br>
                                                230 HP<br>
                                                Body Coupe<br>
                                                80 000 Miles
                                            </p>
                                        </div>
                                        <h3><a href="vehicul.html" title="Mercedes-Benz">Mercedes-Benz</a></h3>
                                        <span class="price">$340000</span>
                                        <span class="rate-it">
                                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star  star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star off star-off-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star off star-off-png"></i> 
                                        </span>
                                    </div><!-- prop Box -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Galeria de Parques de Viaturas -->
        <section class="block">
            <div style="background: transparent url(&quot;img/call-to-action-big.jpg&quot;) repeat scroll 50% 0px; background-attachment: fixed;" class="parallax scrolly-invisible  blackish"></div>
            <div class="container">                
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading4">
                            <h2>Parques</h2>
                            <span>Lorem ipsum dolor</span>
                        </div>
                        <div class="agents-carousal-sec">
                            <ul class="carousel">
                                <li>
                                    <div class="agent-content">
                                        <a href="agent.html"><img src="img/agents/agent1.jpg" alt="" /></a>
                                        <h3>SUPER AGENT</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur <br> sed do eiusmod tempor incidid</p>

                                        <div class="agent-social-wrap">
                                            <div class="social-list agent-social">
                                                <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                                                <a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                                                <a href="#" title="Google +" target="_blank"><i class="fa fa-google-plus"></i></a>
                                                <a href="#" title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
                                                <a href="#" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="agent-content">
                                        <a href="agent.html"><img src="img/agents/agent3.jpg" alt="" /></a>
                                        <h3>SUPER AGENT</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur <br> sed do eiusmod tempor incidid</p>

                                        <div class="agent-social-wrap">
                                            <div class="social-list agent-social">
                                                <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                                                <a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                                                <a href="#" title="Google +" target="_blank"><i class="fa fa-google-plus"></i></a>
                                                <a href="#" title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
                                                <a href="#" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="agent-content">
                                        <a href="agent.html"><img src="img/agents/agent5.jpg" alt="" /></a>
                                        <h3>SUPER AGENT</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur <br> sed do eiusmod tempor incidid</p>

                                        <div class="agent-social-wrap">
                                            <div class="social-list agent-social">
                                                <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                                                <a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                                                <a href="#" title="Google +" target="_blank"><i class="fa fa-google-plus"></i></a>
                                                <a href="#" title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
                                                <a href="#" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="agent-content">
                                        <a href="agent.html"><img src="img/agents/agent4.jpg" alt="" /></a>
                                        <h3>SUPER AGENT</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur <br> sed do eiusmod tempor incidid</p>

                                        <div class="agent-social-wrap">
                                            <div class="social-list agent-social">
                                                <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                                                <a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                                                <a href="#" title="Google +" target="_blank"><i class="fa fa-google-plus"></i></a>
                                                <a href="#" title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
                                                <a href="#" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>                
            </div>            
        </section>

<!-- Exposicao Agencias Seguradoras -->
        <section class="block">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="agents-carousal-sec">
                            <div class="heading4">
                                <h2>Nossos Parceiros </h2>
                                <span>Lorem ipsum dolor</span>
                            </div>
                            <div class="our-clients-sec">
                                <ul class="carousel-client">
                                    <li>
                                        <a href="#" title=""><img src="img/clients/our-client1.jpg" alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="#" title=""><img src="img/clients/our-client2.jpg" alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="#" title=""><img src="img/clients/our-client3.jpg" alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="#" title=""><img src="img/clients/our-client4.jpg" alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="#" title=""><img src="img/clients/our-client5.jpg" alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="#" title=""><img src="img/clients/our-client1.jpg" alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="#" title=""><img src="img/clients/our-client3.jpg" alt="" /></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>    

@endsection