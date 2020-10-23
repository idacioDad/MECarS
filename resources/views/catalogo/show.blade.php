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
                                             @foreach($carros as $carro) 
                                                <div class="col-md-4 col-sm-6  col-xs-12">
                                                
                                                    <div class="vehiculs-box">
                                                        <div class="vehiculs-thumb">
                                                            <img src="{{asset ('images_upload/carros_Banner/'.$carro-> carro_foto) }}" alt="" /> 
                                                            <span class="spn-status"> Novo</span>
                                                            <span class="spn-save"> <i class="ti ti-heart"></i> </span>                                        
                                                            <div class="user-preview">
                                                                <a class="col" href="agent.html">
                                                                    <img alt="Camilė" class="avatar avatar-small" src="{{asset ('images_upload/parques/'.$carro->parque->parque_logo) }}" title="Camilė">
                                                                </a> 
                                                            </div>
                                                            <a class="proeprty-sh-more" href="{{url('/catalogo/viatura/'.$carro->carro_id)}}"><i class="fa fa-angle-double-right"> </i><i class="fa fa-angle-double-right"> </i></a>
                                                            <p class="car-info-smal">
                                                            {{ $carro->carro_ano_fabrico }}<br>
                                                            {{ $carro->carro_combustivel}}<br>
                                                            {{ $carro->carro_motorSize }}<br>
                                                            {{ $carro->categoria->categoria_nome }}<br>
                                                            {{ $carro->carro_Km }} KM
                                                            </p>
                                                        </div>
                                                        <h3><a href="vehicul.html" title="{{$carro->modelo->fabricantes->fabricante_nome}}">{{$carro->modelo->fabricantes->fabricante_nome}}</a></h3>
                                                        <h4><a href="vehicul.html" title="{{$carro->modelo->modelo_nome}}">{{$carro->modelo->modelo_nome}}</a></h4>
                                                        <span class="price">{{$carro->carro_preco}} MZN</span>
                                                    </div>  
                                                </div>
                                           
                     
                                                @endforeach
                                            </div>
                                            
                                            <div class="pagination">
                                             
                                               {{ $carros->appends(['sort' => 'votes'])->links() }}
                                            </div>
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

