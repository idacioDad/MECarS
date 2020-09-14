@extends('layouts.dashboard')

@section('content')

<li><a href="#">Fabricantes de Viaturas</a></li>
                    
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
            <h3 class="card-title">Lista de Fabricantes</h3>
            <a href="{{url('admin/fabricantes/create')}}" style="max-width: 150px; float:right; display:inline;" class="btn btn-block btn-success">Adicionar Fabricante</a>
        </div>
        <div class="card-body">
        <div class="">
                                    <div class="table-responsive">
                                        <table id="user_table" class="table  text-center">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Id</th>
                                                    <th scope="col">Nome do Fabricante</th>
                                                    <th scope="col">Acção</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($fabricantes as $fabricante)
                                                <tr>
                                                    <th scope="row">{{ $fabricante->fabricante_id }}</th>
                                                    <td>{{ $fabricante-> fabricante_nome }}</td>
                                                    <td>
                                                        <a href="{{ route('fabricantes.edit',$fabricante->fabricante_id) }}" class="text-success mr-2">
                                                            <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                                        </a>
                                                        <a href="{{ route('fabricantes.destroy',$fabricante->fabricante_id) }}" class="text-danger mr-2">
                                                            <i class="nav-icon i-Close-Window font-weight-bold"></i>
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