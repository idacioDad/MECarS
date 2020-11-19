@extends('layouts.front')

@section('content')

<div class="inner-head overlap">
            <div style="background: url('{{asset('assets/img/parallax1.jpg')}}') repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible"></div><!-- PARALLAX BACKGROUND IMAGE -->	
            <div class="container">
                <div class="inner-content">
                    <span><i class="ti ti-home"></i></span>
                    <h2>Mercedes-Benz</h2>
                    <ul>
                        <li><a href="#" title="">HOME</a></li>
                        <li><a href="#" title="">Mercedes-Benz</a></li>
                    </ul>
                </div>
            </div>
        </div><!-- inner Head -->

        <section class="block">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">	
                        <div class="row">
                            <div class="col-md-8 column">
                                <div class="single-post-sec">
                                    <div class="blog-post vehicul-post">
                                        <div class="vehicul-gallery"> 
                                            <div class="light-slide-item">  
                                                <div class="favorite-and-print"> 
                                                    <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                                                    <li data-thumb="{{asset ('images_upload/carros_Banner/'.$carro-> carro_foto) }}"> 
                                                            <img src="{{asset ('images_upload/carros_Banner/'.$carro-> carro_foto) }}" alt="KwitaraCars" />
                                                        </li>
                                                        @foreach($carro->carphotos as $carphoto)
                                                        <li data-thumb="{{asset ('images_upload/carros/'.$carphoto->car_foto) }}"> 
                                                            <img src="{{asset ('images_upload/carros/'.$carphoto->car_foto) }}" alt="KwitaraCars" />
                                                        </li>
                                                        @endforeach
                                                       
                                                    </ul>
                                                </div>
                                            </div>
                                        </div> 

                                        <h1>Preço :  {{$carro->carro_preco}} MZN</h1>

                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="vehicul-detail">

                                                    <div class="detail-field row" >
                                                        <span class="col-xs-6 col-md-5 detail-field-label">Fabricante</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value"><a href="#" rel="tag">{{$carro->modelo->fabricantes->fabricante_nome}}</a></span>
                                                        <span class="col-xs-6 col-md-5 detail-field-label">Modelo</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value"><a href="#" rel="tag">{{$carro->modelo->modelo_nome}}</a></span>
                                                        <span class="col-xs-6 col-md-5 detail-field-label">Tipo de Veículo</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value"><a href="#" rel="tag">{{$carro->categoria->categoria_nome}}</a></span>
                                                        <span class="col-xs-6 col-md-5 detail-field-label">Cor do carro</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value">
                                                            <span class="amount">{{$carro->carro_corExterna}}</span> 
                                                        </span>
                                                        <span class="col-xs-6 col-md-5 detail-field-label">Kilometragem</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value">{{$carro->carro_Km}}</span>
                                                        
                                                        
                                                        <span class="col-xs-6 col-md-5 detail-field-label">Tipo de Combustivel</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value">{{$carro->carro_combustivel}}</span>
                                                        
                                                        <span class="col-xs-6 col-md-5 detail-field-label">Lotação</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value">{{$carro->carro_lotacao}}</span>                                                        
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <p>Lorem ipsum dolor sit amet, ssa quis mauris sollicitudin commodo venenatis ligula commodo. Sed blandit convallis dignissim. Pellentesque pharetra velit eu velit elementum et convallis erat vulputate. Sed in nulla ut elit mporta nibh leo a massa. Sed quam nunc, vulputate vel imperdiet vel, aliquet sit amet risus. Maecenas nec tempus velit. Praesent gravida mi et mauris sollicitudin ultricies. Duis molestie quam sem, ac faucibus velit. Curabitur dolor dolor, fringilla vel fringilla tempor, ultricies sed tellus. </p>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                        <div class="col-md-4"></div>
                                        <form action="url('add-to-cart')"  method="POST" class="form-inline">
                                            @csrf
                                        <input type="hidden" name="carro_id" value="{{$carro->carro_id}}"/>
                                        <br><div class="col-md-5"><button type="submit" class="flat-btn ">Adicionar ao carrinho</button></div></div>

                                        </form>

                                        <div class="send-email-to-agent">
                                            <div class="comment-form">
                                                <div class="heading3">
                                                    <h2>Send Message to Agent</h2> 
                                                </div>
                                                <form>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label>
                                                                <i class="fa fa-user"></i>
                                                                <input type="text" placeholder="Name" />
                                                            </label>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label>
                                                                <i class="fa fa-at"></i>
                                                                <input type="text" placeholder="Email Id" />
                                                            </label>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label>
                                                                <i class="fa fa-phone"></i>
                                                                <input type="text" placeholder="Phone Number" />
                                                            </label>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label>
                                                                <i class="fa fa-pencil"></i>
                                                                <textarea placeholder="Your Message"></textarea>
                                                            </label>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <button type="submit" class="flat-btn">SEND MESSAGE</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                    </div><!-- Blog Post -->
                                </div><!-- Blog POst Sec -->
                            </div>
                            <aside class="col-md-4 column">
                                <div class="agent_bg_widget widget"> 
                                    <div class="agent_widget">
                                        <div class="agent_pic">
                                            <a href="#" title="">
                                                <img src="{{asset ('images_upload/parques/'.$carro-> parque->parque_logo) }}" alt="" />
                                                <h3 class="nocontent outline">--- document outline needed 3 ---</h3>
                                                <h4>{{$carro->parque->parque_nome}}</h4> 
                                            </a>
                                        </div>   
                                        <div class="agent_social">
                                            <a href="#" title=""><i class="fa fa-facebook"></i></a>
                                            <a href="#" title=""><i class="fa fa-google-plus"></i></a>
                                            <a href="#" title=""><i class="fa fa-twitter"></i></a>
                                            <a href="#" title=""><i class="fa fa-tumblr"></i></a>
                                        </div>
                                        <span>
                                            <i class="fa fa-phone"> </i> {{$carro->parque->parque_contacto}} 
                                        </span>
                                        <span>
                                            <i class="fa fa-envelope"> </i> {{$carro->parque->parque_email}}
                                        </span>
                                        <a href="agent.html"  title="" class="btn contact-agent">Find more</a>                                        
                                    </div>
                                </div><!-- Follow Widget -->

                                <div class="search_widget widget">
                                    <div class="heading2">
                                        <h3>SEARCH VEHICULS</h3>
                                    </div>
                                    <div class="search-form"> 
                                        <form action="vehiculs.html"  method="get" class="form-inline">   
                                            <div class="search-form-content">
                                                <div class="search-form-field">  
                                                    <div class="form-group col-md-12">
                                                        <div class="label-select">
                                                            <select class="form-control" name="s_location">
                                                                <option>Any Manufacturer</option>
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

                                                    <div class="form-group col-md-12">
                                                        <div class="label-select">  
                                                            <select class="form-control" name="anymodule">
                                                                <option>Any Model </option>
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

                                                    <div class="form-group col-md-12">
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

                                                    <div class="form-group col-md-12">
                                                        <div class="label-select"> 
                                                            <select class="form-control" name="s_statu">
                                                                <option>Any Status </option>
                                                                <option value="damaged">Damaged</option>
                                                                <option value="new">New</option>
                                                                <option value="semi-new">Semi-New</option>
                                                                <option value="used">Used</option>
                                                            </select>
                                                        </div>
                                                    </div> 

                                                    <div class="form-group col-md-12">
                                                        <span class="gprice-label">Price Range</span>
                                                        <input type="text" class="span2" value="" data-slider-min="0" 
                                                               data-slider-max="60000" data-slider-step="5" 
                                                               data-slider-value="[0,60000]" id="price-range" >
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <span class="garea-label">Mileage Range</span> 
                                                        <input type="text" class="span2" value="" data-slider-min="0" 
                                                               data-slider-max="60000" data-slider-step="5" 
                                                               data-slider-value="[50,60000]" id="vehicul-geo" >
                                                    </div>                                            
                                                </div> 
                                            </div>
                                            <div class="search-form-submit">
                                                <button type="submit" class="btn-search">Search</button>
                                            </div>
                                        </form>
                                    </div><!-- Services Sec -->
                                </div><!-- Category Widget -->
                            </aside>
                        </div>

                        <div class="related-vehiculs-">
                            <div class="heading3">
                                <h3>RELATED VEHICULS</h3>
                                <span>Lorem ipsum dolor amet</span>
                            </div>
                            <div class="related">
                                <div class="related-vehiculs-items"> 
                                    <div class="item">
                                        <div class="vehiculs-box">
                                            <div class="vehiculs-thumb">
                                                <img src="img/demo/vehicul1.jpg" alt="" /> 
                                                <span class="spn-status"> Damaged</span>
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
                                            <span class="price">$340000</span>
                                        </div>
                                    </div> 
                                    <div class="item">
                                        <div class="vehiculs-box">
                                            <div class="vehiculs-thumb">
                                                <img src="img/demo/vehicul1.jpg" alt="" /> 
                                                <span class="spn-status"> Damaged</span>
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
                                            <span class="price">$340000</span>
                                        </div>
                                    </div> 
                                    <div class="item">
                                        <div class="vehiculs-box">
                                            <div class="vehiculs-thumb">
                                                <img src="img/demo/vehicul1.jpg" alt="" /> 
                                                <span class="spn-status"> Damaged</span>
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
                                            <span class="price">$340000</span>
                                        </div>
                                    </div> 
                                    <div class="item">
                                        <div class="vehiculs-box">
                                            <div class="vehiculs-thumb">
                                                <img src="img/demo/vehicul1.jpg" alt="" /> 
                                                <span class="spn-status"> Damaged</span>
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
                                            <span class="price">$340000</span>
                                        </div>
                                    </div> 
                                    <div class="item">
                                        <div class="vehiculs-box">
                                            <div class="vehiculs-thumb">
                                                <img src="img/demo/vehicul1.jpg" alt="" /> 
                                                <span class="spn-status"> Damaged</span>
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
                                            <span class="price">$340000</span>
                                        </div>
                                    </div> 
                                    <div class="item">
                                        <div class="vehiculs-box">
                                            <div class="vehiculs-thumb">
                                                <img src="img/demo/vehicul1.jpg" alt="" /> 
                                                <span class="spn-status"> Damaged</span>
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
                                            <span class="price">$340000</span>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div><!-- Related Posts -->

                    </div>
                </div>
            </div>
        </section>
@endsection

