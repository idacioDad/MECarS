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
                                <img alt="" src="{{asset('assets/img/4.png')}}" style="width: 110px; height: 110px;">
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
                            <img src="{{asset('assets/img/slides/home1.jpg')}}"  alt="2" data-lazyload="{{asset('assets/img/slides/home1.jpg')}}" 
                                 data-bgposition="right top" data-kenburns="off" data-duration="12000" 
                                 data-ease="Power0.easeInOut" data-bgfit="115" data-bgfitend="100" 
                                 data-bgpositionend="center bottom"> 
                            <div class="tp-caption tentered_white_huge lft tp-resizeme" 
                                 data-endspeed="300" data-easing="Power4.easeOut" data-start="400" data-speed="600"
                                 data-y="130" data-hoffset="0" data-x="center"
                                 style="">
                                <img alt="" src="{{asset('assets/img/3.png')}}" style="width: 110px; height: 110px;">
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
                            <img src="{{asset('assets/img/slides/home3.jpg')}}"  alt="2" data-lazyload="{{asset('assets/img/slides/home3.jpg')}}" 
                                 data-bgposition="right top" data-kenburns="off" data-duration="12000" 
                                 data-ease="Power0.easeInOut" data-bgfit="115" data-bgfitend="100" 
                                 data-bgpositionend="center bottom"> 
                            <div class="tp-caption tentered_white_huge lft tp-resizeme" 
                                 data-endspeed="300" data-easing="Power4.easeOut" data-start="400" data-speed="600"
                                 data-y="130" data-hoffset="0" data-x="center"
                                 style="">
                                <img alt=""  src="{{asset('assets/img/3.png')}}" style="width: 110px; height: 110px;">
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
        </div>


       


        <section class="block">
            <!--div style="background: url('{{asset('assets/img/call-to-action-bg.jpg')}}') repeat scroll 50% 422.28px transparent; background-attachment: fixed;" class="parallax scrolly-invisible  blackish"></div--><!-- PARALLAX BACKGROUND IMAGE -->	
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
        <div style="background: transparent url(&quot;{{asset('assets/img/call-to-action-big.jpg')}}&quot;) repeat scroll 50% 0px; background-attachment: fixed;" class="parallax scrolly-invisible  blackish"></div>
            <div class="container">
                <div class="heading4">
                    <h2>Serviços</h2>
                    <span>A MECarS está focada em garantir a segurança, dinamismo, comodidade e satisfação aos seus clientes<br></span>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="vehiculs-sec">
                            <div class="row">                                
                                <div class="col-md-4">
                                    <div class="vehiculs-box">
                                        <div class="vehiculs-thumb">
                                            <img src="{{asset('assets/img/services/venda.png')}}" alt="" />

                                                        <p class="car-info-smal">
                                                Venda de Viaturas dos Parques Nacionais<br>
                                                Receba  carro em sua casa<br>
                                                
                                            </p>
                                        </div>
                                        
                                    </div><!-- prop Box -->
                                </div>                                
                                <div class="col-md-4">
                                    <div class="vehiculs-box">
                                        <div class="vehiculs-thumb">
                                            <img src="{{asset('assets/img/services/seguro.png')}}" alt="" />

                                            <p class="car-info-smal">
                                                Tratamento de apólices de seguros<br>
                                                No acto da compra<br>
                                                A par<br>
                                                
                                            </p>
                                        </div>
                                      
                                    </div><!-- prop Box -->
                                </div>
                                <div class="col-md-4">
                                    <div class="vehiculs-box">
                                        <div class="vehiculs-thumb">
                                            <img src="{{asset('assets/img/services/assistencia.png')}}" alt="" />
                                            
                                            </div> 
                                            <p class="car-info-smal">
                                                Assisteência Técnica <br>
                                                Prestação de Socorros a viaturas avariadas<br>
                                                
                                            </p>
                                        </div>
                                        
                                    </div><!-- prop Box -->
                                </div>
                               
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


@endsection