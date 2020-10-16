@extends('layouts.dashboard')

@section('content')

<li><a href="#">Carros</a></li>
                    
                    </ul>
                </div>
    
                <div class="separator-breadcrumb border-top"></div>
    <section class="content">
    <div class="row">
    <di class="col-12">
    @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Lista de Carros</h3>
            <a href="{{url('admin/carros/create')}}" style="max-width: 150px; float:right; display:inline;" class="btn btn-block btn-success">Adicionar Carro</a>
        </div>
        <div class="card-body">
        <div class="">
                                    <div class="table-responsive">
                                        <table id="user_table" class="table  text-center">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Id</th>
                                                    <th scope="col">Parque</th>
                                                    <th scope="col">Fabricante</th>
                                                    <th scope="col">Modelo do Carro</th>
                                                    <th scope="col">Categoria</th>
                                                    <th scope="col">Preco</th>
                                                    <th scope="col">Acção</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            
                                            @foreach($carros as $carro)
                                                <tr>
                                                    <th scope="row">{{ $carro->carro_id }}</th>
                                                    <td>{{ $carro->parque->parque_nome }}</td>
                                                    <td>{{ $carro->modelo->fabricantes->fabricante_nome }}</td>
                                                    <td>{{ $carro->modelo-> modelo_nome }}</td>
                                                    <th scope="row">{{ $carro->categoria->categoria_nome }}</th>
                                                    <td>{{ $carro->carro_preco }}</td>
                                                  
                                                    <td>
                                                        <a href="{{ route('carros.edit',$carro->carro_id) }}" class="text-success mr-2">
                                                            <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                                        </a>
                                                        <a><form action="{{ route('carros.destroy',$carro->carro_id) }}" method="POST" class="text-danger mr-2">
                                                        @csrf
                                                        @method('DELETE')
                                                           <i > <button class="nav-icon i-Close-Window font-weight-bold" type="submit"></button></i></form>
                                                        </a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                </div>


@endsection