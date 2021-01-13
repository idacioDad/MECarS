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
        @if(Session::has('error_message'))
        <div class="alert alert-danger" role="alert">
        {{Session::get('error_message')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>
        @endif

        @if(Session::has('messagem_sucesso'))
        <div class="alert alert-sucess" role="alert" style="margin-top: 10px";>
        {{Session::get('messagem_sucesso')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>
        @endif

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
                                        <div class="row">
                                        
                                            <form action="{{ route('carrinho.store') }}"  method="POST" class="form-inline">
                                                    @csrf
                                                    <div class="col-md-5">
                                                    <label for="example-number-input" class="col-3 col-form-label">Quantidade</label>
                                                <input value="1" type="number" name="quantity" class="form-control col-md-5" />
                                                <input type="hidden" name="carro_id" value="{{$carro->carro_id}}"/></div>
                                                <div class="col-md-7"><button type="submit" class="flat-btn ">Adicionar ao carrinho</button></div>
                                            

                                            </form>
                                     </div>
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

                            </aside>
                        </div>

                        <div class="related-vehiculs-">
                            <div class="heading3">
                                <h3>Carros Relacionados</h3>
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

