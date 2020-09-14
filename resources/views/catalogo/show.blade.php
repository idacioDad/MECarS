@extends('layouts.front')

@section('content')

<div class="inner-head overlap">
            <div style="background: url('{{asset('assets/img/parallax1.jpg')}}') repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->	
            <div class="container">
                <div class="inner-content">
                    <span><i class="fa fa-bolt"></i></span>
                    <h2>VEHICULS - LIST STYLE 3 </h2>
                    <ul>
                        <li><a href="index.html" title="">HOME</a></li>
                        <li><a href="vehiculs3.html" title="">VEHICULS- LIST STYLE 3 </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- inner Head -->

        <section class="horizontal-search pm-extra ">
            <div class="container">
                
                   <h1 class="nocontent outline">--- Search form ---</h1>
                <div class=""> 
                    <div class="search-form"> 
                        <form action="vehiculs.html"  method="get" class="form-inline">   
                            <div class="search-form-content">
                                <div class="search-form-field">  
                                    <div class="form-group col-xs-12 col-sm-3 col-md-3">
                                        <div class="label-select">
                                            <select class="form-control" name="s_location">
                                                <option>Fabricante</option>
                                                <option>Audi</option>
                                                <option>Mercedes-Benz</option>
                                                <option>BMW</option>
                                                <option>Lexus</option>
                                                <option>Lincoln</option>
                                                <option>Ford</option>
                                                <option>Fiat</option>
                                                <option>Dodge</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-3 col-md-3">
                                        <div class="label-select">  
                                            <select class="form-control" name="anymodule">
                                                <option>Modelo </option>
                                                <option value="1">R8</option>
                                                <option value="2">S500</option>
                                                <option value="3">540i</option>
                                                <option value="4">RX300</option>
                                                <option value="5">Navigator</option>
                                                <option value="6">Taurus</option>
                                                <option value="7">Doblo</option>
                                                <option value="8">Viper</option>
                                            </select>
                                        </div>
                                    </div>  

                                    <div class="form-group col-xs-12 col-sm-3 col-md-3">
                                        <div class="label-select">
                                            <select class="form-control" name="s_location"> 
                                                <option>Any locations</option>
                                                <option>Central New York</option>
                                                <option>GreenVille</option>
                                                <option>Long Island</option>
                                                <option>New York City</option>
                                                <option>West Side</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-3 col-md-3">
                                        <div class="label-select"> 
                                            <select class="form-control" name="s_statu">
                                                <option>Any Status </option>
                                                <option value="Novo">Novo</option>
                                                <option value="new">New</option>
                                                <option value="semi-new">Semi-New</option>
                                                <option value="used">Used</option>
                                            </select>
                                        </div>
                                    </div> 

                                    <div class="form-group col-xs-12 col-sm-3 col-md-3">                                        
                                    </div>
                                    <div class="form-group col-xs-12 col-sm-3 col-md-3">
                                        <span class="gprice-label">Preço</span>
                                        <input type="text" class="span2" value="" data-slider-min="0" 
                                               data-slider-max="60000" data-slider-step="5" 
                                               data-slider-value="[0,60000]" id="price-range" >
                                    </div>
                                    <div class="form-group col-xs-12 col-sm-3 col-md-3">
                                        <span class="garea-label">Kilometragem</span> 
                                        <input type="text" class="span2" value="" data-slider-min="0" 
                                               data-slider-max="60000" data-slider-step="5" 
                                               data-slider-value="[50,60000]" id="vehicul-geo" >
                                    </div>  
                                    <div class="form-group col-xs-12 col-sm-3 col-md-3">                                        
                                    </div>                                          
                                </div> 
                            </div>
                            <div class="search-form-submit">
                                <button type="submit" class="btn-search">Search</button>
                            </div>
                        </form>
                    </div><!-- Services Sec -->

                </div>
            </div>
        </section>

        <section class="block">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">	
                        <div class="row">
                            <div class="col-md-12 column">                               
                                <div class="vehiculs-sec">
                                    <div class="vehiculs-list">
                                        <div class="vehiculs-content">                                            
                                            <div class="row">
                                                <div class="col-md-4 col-sm-6  col-xs-12">

                                                    <div class="vehiculs-box">
                                                        <div class="vehiculs-thumb">
                                                            <img src="{{asset('assets/img/demo/vehicul1.jpg')}}" alt="" /> 
                                                            <span class="spn-status"> Novo</span>
                                                            <span class="spn-save"> <i class="ti ti-heart"></i> </span>                                        
                                                            <div class="user-preview">
                                                                <a class="col" href="agent.html">
                                                                    <img alt="Camilė" class="avatar avatar-small" src="{{asset('assets/img/4.png')}}" title="Camilė">
                                                                </a> 
                                                            </div>
                                                            <a class="proeprty-sh-more" href="vehicul.html"><i class="fa fa-angle-double-right"> </i><i class="fa fa-angle-double-right"> </i></a>
                                                            <p class="car-info-smal">
                                                                Ano: 2010<br>
                                                                3.0 Diesel<br>
                                                                230 HP<br>
                                                                Body Coupe<br>
                                                                80 000 Km
                                                            </p>
                                                        </div>
                                                        <h3><a href="vehicul.html" title="Mercedes-Benz">Mercedes-Benz</a></h3>
                                                        <span class="price">340 000 MZN</span>
                                                    </div> 
                                                </div>
                                                <div class="col-md-4 col-sm-6  col-xs-12">

                                                    <div class="vehiculs-box">
                                                        <div class="vehiculs-thumb">
                                                            <img src="{{asset('assets/img/demo/vehicul1.jpg')}}" alt="" /> 
                                                            <span class="spn-status"> Novo</span>
                                                            <span class="spn-save"> <i class="ti ti-heart"></i> </span>                                        
                                                            <div class="user-preview">
                                                                <a class="col" href="agent.html">
                                                                    <img alt="Camilė" class="avatar avatar-small" src="{{asset('assets/img/4.png')}}" title="Camilė">
                                                                </a> 
                                                            </div>
                                                            <a class="proeprty-sh-more" href="vehicul.html"><i class="fa fa-angle-double-right"> </i><i class="fa fa-angle-double-right"> </i></a>
                                                            <p class="car-info-smal">
                                                                Ano: 2010<br>
                                                                3.0 Diesel<br>
                                                                230 HP<br>
                                                                Body Coupe<br>
                                                                80 000 Km
                                                            </p>
                                                        </div>
                                                        <h3><a href="vehicul.html" title="Mercedes-Benz">Mercedes-Benz</a></h3>
                                                        <span class="price">340 000 MZN</span>
                                                    </div> 
                                                </div>
                                                <div class="col-md-4 col-sm-6  col-xs-12">

                                                    <div class="vehiculs-box">
                                                        <div class="vehiculs-thumb">
                                                            <img src="{{asset('assets/img/demo/vehicul1.jpg')}}" alt="" /> 
                                                            <span class="spn-status"> Novo</span>
                                                            <span class="spn-save"> <i class="ti ti-heart"></i> </span>                                        
                                                            <div class="user-preview">
                                                                <a class="col" href="agent.html">
                                                                    <img alt="Camilė" class="avatar avatar-small" src="{{asset('assets/img/4.png')}}" title="Camilė">
                                                                </a> 
                                                            </div>
                                                            <a class="proeprty-sh-more" href="vehicul.html"><i class="fa fa-angle-double-right"> </i><i class="fa fa-angle-double-right"> </i></a>
                                                            <p class="car-info-smal">
                                                                Ano: 2010<br>
                                                                3.0 Diesel<br>
                                                                230 HP<br>
                                                                Body Coupe<br>
                                                                80 000 Km
                                                            </p>
                                                        </div>
                                                        <h3><a href="vehicul.html" title="Mercedes-Benz">Mercedes-Benz</a></h3>
                                                        <span class="price">340 000 MZN</span>
                                                    </div> 
                                                </div>
                                                <div class="col-md-4 col-sm-6  col-xs-12">

                                                    <div class="vehiculs-box">
                                                        <div class="vehiculs-thumb">
                                                            <img src="{{asset('assets/img/demo/vehicul1.jpg')}}" alt="" /> 
                                                            <span class="spn-status"> Novo</span>
                                                            <span class="spn-save"> <i class="ti ti-heart"></i> </span>                                        
                                                            <div class="user-preview">
                                                                <a class="col" href="agent.html">
                                                                    <img alt="Camilė" class="avatar avatar-small" src="{{asset('assets/img/4.png')}}" title="Camilė">
                                                                </a> 
                                                            </div>
                                                            <a class="proeprty-sh-more" href="vehicul.html"><i class="fa fa-angle-double-right"> </i><i class="fa fa-angle-double-right"> </i></a>
                                                            <p class="car-info-smal">
                                                                Ano: 2010<br>
                                                                3.0 Diesel<br>
                                                                230 HP<br>
                                                                Body Coupe<br>
                                                                80 000 Km
                                                            </p>
                                                        </div>
                                                        <h3><a href="vehicul.html" title="Mercedes-Benz">Mercedes-Benz</a></h3>
                                                        <span class="price">340 000 MZN</span>
                                                    </div> 
                                                </div>
                                                <div class="col-md-4 col-sm-6  col-xs-12">

                                                    <div class="vehiculs-box">
                                                        <div class="vehiculs-thumb">
                                                            <img src="{{asset('assets/img/demo/vehicul1.jpg')}}" alt="" /> 
                                                            <span class="spn-status"> Novo</span>
                                                            <span class="spn-save"> <i class="ti ti-heart"></i> </span>                                        
                                                            <div class="user-preview">
                                                                <a class="col" href="agent.html">
                                                                    <img alt="Camilė" class="avatar avatar-small" src="{{asset('assets/img/4.png')}}" title="Camilė">
                                                                </a> 
                                                            </div>
                                                            <a class="proeprty-sh-more" href="vehicul.html"><i class="fa fa-angle-double-right"> </i><i class="fa fa-angle-double-right"> </i></a>
                                                            <p class="car-info-smal">
                                                                Ano: 2010<br>
                                                                3.0 Diesel<br>
                                                                230 HP<br>
                                                                Body Coupe<br>
                                                                80 000 Km
                                                            </p>
                                                        </div>
                                                        <h3><a href="vehicul.html" title="Mercedes-Benz">Mercedes-Benz</a></h3>
                                                        <span class="price">340 000 MZN</span>
                                                    </div> 
                                                </div>
                                                <div class="col-md-4 col-sm-6  col-xs-12">

                                                    <div class="vehiculs-box">
                                                        <div class="vehiculs-thumb">
                                                            <img src="{{asset('assets/img/demo/vehicul1.jpg')}}" alt="" /> 
                                                            <span class="spn-status"> Novo</span>
                                                            <span class="spn-save"> <i class="ti ti-heart"></i> </span>                                        
                                                            <div class="user-preview">
                                                                <a class="col" href="agent.html">
                                                                    <img alt="Camilė" class="avatar avatar-small" src="{{asset('assets/img/4.png')}}" title="Camilė">
                                                                </a> 
                                                            </div>
                                                            <a class="proeprty-sh-more" href="vehicul.html"><i class="fa fa-angle-double-right"> </i><i class="fa fa-angle-double-right"> </i></a>
                                                            <p class="car-info-smal">
                                                                Ano: 2010<br>
                                                                3.0 Diesel<br>
                                                                230 HP<br>
                                                                Body Coupe<br>
                                                                80 000 Km
                                                            </p>
                                                        </div>
                                                        <h3><a href="vehicul.html" title="Mercedes-Benz">Mercedes-Benz</a></h3>
                                                        <span class="price">340 000 MZN</span>
                                                    </div> 
                                                </div>
                                                <div class="col-md-4 col-sm-6  col-xs-12">

                                                    <div class="vehiculs-box">
                                                        <div class="vehiculs-thumb">
                                                            <img src="{{asset('assets/img/demo/vehicul1.jpg')}}" alt="" /> 
                                                            <span class="spn-status"> Novo</span>
                                                            <span class="spn-save"> <i class="ti ti-heart"></i> </span>                                        
                                                            <div class="user-preview">
                                                                <a class="col" href="agent.html">
                                                                    <img alt="Camilė" class="avatar avatar-small" src="{{asset('assets/img/4.png')}}" title="Camilė">
                                                                </a> 
                                                            </div>
                                                            <a class="proeprty-sh-more" href="vehicul.html"><i class="fa fa-angle-double-right"> </i><i class="fa fa-angle-double-right"> </i></a>
                                                            <p class="car-info-smal">
                                                                Ano: 2010<br>
                                                                3.0 Diesel<br>
                                                                230 HP<br>
                                                                Body Coupe<br>
                                                                80 000 Km
                                                            </p>
                                                        </div>
                                                        <h3><a href="vehicul.html" title="Mercedes-Benz">Mercedes-Benz</a></h3>
                                                        <span class="price">340 000 MZN</span>
                                                    </div> 
                                                </div>
                                                <div class="col-md-4 col-sm-6  col-xs-12">

                                                    <div class="vehiculs-box">
                                                        <div class="vehiculs-thumb">
                                                            <img src="{{asset('assets/img/demo/vehicul1.jpg')}}" alt="" /> 
                                                            <span class="spn-status"> Novo</span>
                                                            <span class="spn-save"> <i class="ti ti-heart"></i> </span>                                        
                                                            <div class="user-preview">
                                                                <a class="col" href="agent.html">
                                                                    <img alt="Camilė" class="avatar avatar-small" src="{{asset('assets/img/4.png')}}" title="Camilė">
                                                                </a> 
                                                            </div>
                                                            <a class="proeprty-sh-more" href="vehicul.html"><i class="fa fa-angle-double-right"> </i><i class="fa fa-angle-double-right"> </i></a>
                                                            <p class="car-info-smal">
                                                                Ano: 2010<br>
                                                                3.0 Diesel<br>
                                                                230 HP<br>
                                                                Body Coupe<br>
                                                                80 000 Km
                                                            </p>
                                                        </div>
                                                        <h3><a href="vehicul.html" title="Mercedes-Benz">Mercedes-Benz</a></h3>
                                                        <span class="price">340 000 MZN</span>
                                                    </div> 
                                                </div>
                                                <div class="col-md-4 col-sm-6  col-xs-12">

                                                    <div class="vehiculs-box">
                                                        <div class="vehiculs-thumb">
                                                            <img src="{{asset('assets/img/demo/vehicul1.jpg')}}" alt="" /> 
                                                            <span class="spn-status"> Novo</span>
                                                            <span class="spn-save"> <i class="ti ti-heart"></i> </span>                                        
                                                            <div class="user-preview">
                                                                <a class="col" href="agent.html">
                                                                    <img alt="Camilė" class="avatar avatar-small" src="{{asset('assets/img/4.png')}}" title="Camilė">
                                                                </a> 
                                                            </div>
                                                            <a class="proeprty-sh-more" href="vehicul.html"><i class="fa fa-angle-double-right"> </i><i class="fa fa-angle-double-right"> </i></a>
                                                            <p class="car-info-smal">
                                                                Ano: 2010<br>
                                                                3.0 Diesel<br>
                                                                230 HP<br>
                                                                Body Coupe<br>
                                                                80 000 Km
                                                            </p>
                                                        </div>
                                                        <h3><a href="vehicul.html" title="Mercedes-Benz">Mercedes-Benz</a></h3>
                                                        <span class="price">340 000 MZN</span>
                                                    </div> 
                                                </div>
                                            </div>
                                            <ul class="pagination">
                                                <li class="disabled"><a href="#" title=""><span>ANT</span></a></li>
                                                <li><a href="#" title="">1</a></li>
                                                <li class="active"><a href="#" title="">2</a></li>
                                                <li><a href="#" title="">3</a></li>
                                                <li><a href="#" title=""><span>PROX</span></a></li>
                                            </ul>
                                        </div>
                                    </div><!-- Blog Post -->
                                </div><!-- Blog POst Sec -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

@endsection