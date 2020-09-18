@extends('layouts.dashboard')

@section('content')
<li>Editar Categorias de Viaturas</li>
                    
                    </ul>
                </div>
    
                <div class="separator-breadcrumb border-top"></div>
    <section class="content">
    <div class="row">
    <di class="col-12">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Editar Categorias</h3>
            <a href="{{url('admin/categorias')}}" style="max-width: 150px; float:right; display:inline;" class="btn btn-block btn-success">Lista de categoria</a>
        </div>
        <div class="card-body">
        <div class="">

        <div class="col-md-12">

    <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                        @if ($errors->any())
      <div class="alert alert-danger">
      <strong>Whoops!</strong> Ocorreu algum problema.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
                            <div class="card-title mb-3">Editar Categorias</div>
                            <form method="post" action="{{ route('categorias.update',$categoria->categoria_id) }}">
                            @csrf
                            @method('PUT')
                                <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="categoria_nome">Nome do categoria</label>
                                        <input type="text" class="form-control form-control-rounded" name="categoria_nome" id="categoria_nome" value="{{ $categoria->categoria_nome }}" placeholder="Digite o nome do categoria">
                                    </div>

                                   

                                    <div class="col-md-12">
                                         <button class="btn btn-primary">Editar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

    </div>

        @endsection