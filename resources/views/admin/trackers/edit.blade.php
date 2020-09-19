@extends('layouts.dashboard')

@section('content')
<li>Editar Trackers</li>
                    
                    </ul>
                </div>
    
                <div class="separator-breadcrumb border-top"></div>
    <section class="content">
    <div class="row">
    <di class="col-12">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Editar Trackers</h3>
            <a href="{{url('admin/trackers')}}" style="max-width: 150px; float:right; display:inline;" class="btn btn-block btn-success">Lista de Trackers</a>
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
                            <div class="card-title mb-3">Editar Tracker</div>
                            <form method="post" action="{{ route('trackers.update',$tracker->tracker_id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                                    <div class="row">
                                    <div class="col-md-12 form-group mb-3">
                                        <label for="tracker_nome">Nome da tracker</label>
                                        <input type="text" class="form-control form-control-rounded" name="tracker_nome" id="tracker_nome" value="{{ $tracker->tracker_nome }}" id="tracker_nome" placeholder="Digite o nome da tracker" required="true">
                                    </div>

                                    <div class="col-md-12 form-group mb-3">
                                        <input type="file" class="custom-file-input" id="customFile" name="tracker_logo" value="{{ $tracker->tracker_logo }}" required="true">
                                        <label class="custom-file-label" for="customFile">Escolha o logo da Tracker</label>
                                    </div>

                                    <div class="col-md-12 form-group mb-3">
                                        <label for="tracker_email">Email da tracker</label>
                                        <input type="text" class="form-control form-control-rounded" name="tracker_email" value="{{ $tracker->tracker_email }}" id="tracker_email" placeholder="Digite o email da tracker" required="true">
                                    </div>

                                    

                                    <div class="col-md-12 form-group mb-3">
                                        <label for="tracker_contacto">Contacto do tracker</label>
                                        <input type="text" class="form-control form-control-rounded" name="tracker_contacto" id="tracker_contacto" value="{{ $tracker->tracker_contacto }}" placeholder="Digite o contacto da tracker" required="true">
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