@extends('layouts.dashboard')

@section('content')

<li>Formulário Documentos</li>
                    
                    </ul>
                </div>
    
                <div class="separator-breadcrumb border-top"></div>
    <section class="content">
    <div class="row">
    <di class="col-12">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Adicionar Documento</h3>
            <a href="{{url('admin/documentos')}}" style="max-width: 150px; float:right; display:inline;" class="btn btn-block btn-success">Lista de Documentos</a>
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
                            <div class="card-title mb-3">Registo de Documentos</div>
                            <form method="post" action="{{ route('documentos.store') }}">
                            @csrf
                                <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="documento_nome">Nome do Documento</label>
                                        <input type="text" class="form-control form-control-rounded" name="documento_nome" id="documento_nome" placeholder="Digite o nome do documento" required="true">
                                    </div>
                                    <div class="btn form-group col-md-6 mb-3">
                                    <label for="inputState">Seguradora</label>
                                    <select id="id_seguradora" name="id_seguradora" class="form-control">
                                        <option selected value=''>Seleccionar uma Seguradora...</option>

                                        @foreach($seguradoras as $seguradora)
                                        <option value="{{ $seguradora->seguradora_id }}">{{ $seguradora-> seguradora_nome }}</option>
                                     @endforeach
                                    </select>
                                    </div>

                                    <div class="btn form-group col-md-6 mb-3">
                                    <label for="inputState">Tracker</label>
                                    <select id="id_tracker" name="id_tracker" class="form-control">
                                        <option selected value=''>Seleccionar uma Tracker...</option>

                                        @foreach($trackers as $tracker)
                                        <option value="{{ $tracker->tracker_id }}">{{ $tracker-> tracker_nome }}</option>
                                     @endforeach
                                    </select>
                                    </div>

                                    <div class="col-md-6 form-group mb-3">
                                        <label for="documento_descr">Descricao do Documento</label>
                                        <input type="textarea" class="form-control form-control-rounded" name="documento_descr" id="documento_descr" placeholder="Digite o nome do documento" required="true">
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