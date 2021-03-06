@extends('layouts.dashboard')

@section('content')

<li>Formulário de Modelos de Viaturas</li>
                    
                    </ul>
                </div>
    
                <div class="separator-breadcrumb border-top"></div>
    <section class="content">
    <div class="row">
    <di class="col-12">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Adicionar Modelo</h3>
            <a href="{{url('admin/modelos')}}" style="max-width: 150px; float:right; display:inline;" class="btn btn-block btn-success">Lista de Modelos</a>
        </div>
        <div class="card-body">
        <div class="">

    <div class="col-md-12">

    <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                        @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
                            <div class="card-title mb-3">Registo de Modelo de Viaturas</div>
                            <form method="post" action="{{ route('modelos.store') }}">
                            @csrf
                                <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="modelo_nome">Nome do Modelo</label>
                                        <input type="text" class="form-control form-control-rounded" name="modelo_nome" id="modelo_nome" placeholder="Digite o nome do modelo" required="true">
                                    </div>
                                    <div class="btn form-group col-md-6 mb-3">
                                    <label for="inputState">Fabricante</label>
                                    <select id="id_fabricante" name="id_fabricante" class="form-control">
                                        <option selected>Seleccionar um Fabricante...</option>

                                        @foreach($fabricantes as $fabricante)
                                        <option value="{{ $fabricante->fabricante_id }}">{{ $fabricante-> fabricante_nome }}</option>
                                     @endforeach
                                    </select>
                                    </div>

                                    <div class="col-md-12">
                                         <button class="btn btn-primary">Adicionar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

    </div>



@endsection