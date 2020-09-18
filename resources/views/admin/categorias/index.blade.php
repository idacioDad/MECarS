@extends('layouts.dashboard')

@section('content')

<li><a href="#">Categorias de Viaturas</a></li>
                    
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
            <h3 class="card-title">Lista de Categorias</h3>
            <a href="{{url('admin/categorias/create')}}" style="max-width: 150px; float:right; display:inline;" class="btn btn-block btn-success">Adicionar categoria</a>
        </div>
        <div class="card-body">
        <div class="">
                                    <div class="table-responsive">
                                        <table id="user_table" class="table  text-center">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Id</th>
                                                    <th scope="col">Nome da Categoria</th>
                                                    <th scope="col">Acção</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($categorias as $categoria)
                                                <tr>
                                                    <th scope="row">{{ $categoria->categoria_id }}</th>
                                                    <td>{{ $categoria-> categoria_nome }}</td>
                                                    <td>
                                                        <a href="{{ route('categorias.edit',$categoria->categoria_id) }}" class="text-success mr-2">
                                                            <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                                        </a>
                                                        <a><form action="{{ route('categorias.destroy',$categoria->categoria_id) }}" method="POST" class="text-danger mr-2">
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