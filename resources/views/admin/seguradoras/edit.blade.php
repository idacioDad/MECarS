@extends('layouts.dashboard')

@section('content')
<li>Editar Seguradoras</li>
                    
                    </ul>
                </div>
    
                <div class="separator-breadcrumb border-top"></div>
    <section class="content">
    <div class="row">
    <di class="col-12">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Editar Seguradoras</h3>
            <a href="{{url('admin/seguradoras')}}" style="max-width: 150px; float:right; display:inline;" class="btn btn-block btn-success">Lista de Seguradoras</a>
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
                            <div class="card-title mb-3">Editar Seguradora</div>
                            <form method="post" action="{{ route('seguradoras.update',$seguradora->seguradora_id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                                    <div class="row">
                                    <div class="col-md-12 form-group mb-3">
                                        <label for="seguradora_nome">Nome da seguradora</label>
                                        <input type="text" class="form-control form-control-rounded" name="seguradora_nome" id="seguradora_nome" value="{{ $seguradora->seguradora_nome }}" id="seguradora_nome" placeholder="Digite o nome da seguradora" required="true">
                                    </div>

                                    <div class="col-md-12 form-group mb-3">
                                        <input type="file" class="custom-file-input" id="customFile" name="seguradora_logo" value="{{ $seguradora->seguradora_logo }}" required="true">
                                        <label class="custom-file-label" for="customFile">Escolha o logo da Seguradora</label>
                                    </div>

                                    <div class="col-md-12 form-group mb-3">
                                        <label for="seguradora_email">Email da seguradora</label>
                                        <input type="text" class="form-control form-control-rounded" name="seguradora_email" value="{{ $seguradora->seguradora_email }}" id="seguradora_email" placeholder="Digite o email da seguradora" required="true">
                                    </div>

                                    

                                    <div class="col-md-12 form-group mb-3">
                                        <label for="seguradora_contacto">Contacto do seguradora</label>
                                        <input type="text" class="form-control form-control-rounded" name="seguradora_contacto" id="seguradora_contacto" value="{{ $seguradora->seguradora_contacto }}" placeholder="Digite o contacto da seguradora" required="true">
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