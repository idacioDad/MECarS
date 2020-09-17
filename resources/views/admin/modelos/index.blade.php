@extends('layouts.dashboard')

@section('content')

<li><a href="#">Modelos de Viaturas</a></li>
                    
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
            <h3 class="card-title">Lista de Modelos de Viaturas</h3>
            <a href="{{url('admin/modelos/create')}}" style="max-width: 150px; float:right; display:inline;" class="btn btn-block btn-success">Adicionar Modelo</a>
        </div>
        <div class="card-body">
        <div class="">
                                    <div class="table-responsive">
                                        <table id="user_table" class="table  text-center">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Id</th>
                                                    <th scope="col">Nome do Modelo</th>
                                                    <th scope="col">Fabricante</th>
                                                    <th scope="col">Acção</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($modelos as $modelo)
                                                <tr>
                                                    <th scope="row">{{ $modelo->modelo_id }}</th>
                                                    <th scope="row">{{ $modelo->modelo_nome }}</th>
                                                    <td>{{ $modelo->fabricantes->fabricante_nome }}</td>
                                                    <td>
                                                        <a href="{{ route('modelos.edit',$modelo->modelo_id) }}" class="text-success mr-2">
                                                            <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                                        </a>
                                                        <a><form action="{{ route('modelos.destroy',$modelo->modelo_id) }}" method="POST" class="text-danger mr-2">
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