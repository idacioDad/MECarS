@extends('layouts.front')

@section('content')


<div class="container bootstrap snippets bootdey">
    <div class="col-md-12 col-sm-8 content">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                  <li><a href="#">Home</a></li>
                  <li class="active">Cart</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-info panel-shadow">
                    <div class="panel-heading">
                        <h3>
                            <img class="img-circle img-thumbnail" src="https://bootdey.com/img/Content/user_3.jpg">
                           <!-- Auth::user()->name-->
                        </h3>
                    </div>
                    <div class="panel-body"> 
                        <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Carro</th>
                                <th>Descrição</th>
                                <th>Qtd</th>
                                <th>Preço</th>
                                <th>Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($carts as $cart)
                                <tr>
                                    
                                    <td><img src="{{asset ('images_upload/carros_Banner/'.$cart-> carro-> carro_foto) }}" class="img-cart"></td>
                                    <td><strong>{{$cart -> carro->modelo->fabricantes->fabricante_nome}}</strong><p>{{$cart-> carro->modelo->modelo_nome}}</p></td>
                                    <td>
                                    <form class="form-inline">
                                        <input class="form-control" type="number" value="1">
                                        <button rel="tooltip" class="btn btn-default"><i class="fa fa-pencil"></i></button>
                                        <a href="#" class="btn btn-primary"><i class="fa fa-trash-o"></i></a>
                                    </form>
                                    </td>
                                    <td>$54.00</td>
                                    <td>$54.00</td>
                                </tr>
                              @endforeach
                                <tr>
                                    <td colspan="6">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="text-right">Preço Total</td>
                                    <td>$86.00</td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="text-right">Total Adicional</td>
                                    <td>$2.00</td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="text-right"><strong>Total a ser Pago</strong></td>
                                    <td>$88.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
                <a href="#" class="btn btn-success"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Escolher mais Carros</a>
                <a href="#" class="btn btn-primary pull-right">Efectuar Pagamento<span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
    </div>
</div>

@endsection