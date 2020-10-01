@extends('layouts.dashboard')

@section('content')

<li>Formulário de Parques</li>
                    
                    </ul>
                </div>
    
                <div class="separator-breadcrumb border-top"></div>
    <section class="content">
    <div class="row">
    <di class="col-12">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Adicionar Parque</h3>
            <a href="{{url('admin/parquess')}}" style="max-width: 150px; float:right; display:inline;" class="btn btn-block btn-success">Lista de Parques</a>
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
                            <div class="card-title mb-3">Registo de Parques</div>
                            <form method="post" action="{{ route('parques.store') }}" enctype="multipart/form-data">
                            @csrf
                                <div class="row">
                                    <div class="col-md-12 form-group mb-3">
                                        <label for="parque_nome">Nome do parque</label>
                                        <input type="text" class="form-control form-control-rounded" name="parque_nome" id="parque_nome" placeholder="Digite o nome do parque" required="true">
                                    </div>

                                    <div class="col-md-12 form-group mb-3">
                                        <input type="file" class="custom-file-input" id="customFile" name="parque_logo" required="true">
                                        <label class="custom-file-label" for="customFile">Escolha o logo do parque</label>
                                    </div>

                                    <div class="col-md-12 form-group mb-3">
                                        <label for="parque_email">Email do parque</label>
                                        <input type="text" class="form-control form-control-rounded" name="parque_email" id="parque_email" placeholder="Digite o email do parque" required="true">
                                    </div>

                                    

                                    <div class="col-md-12 form-group mb-3">
                                        <label for="parque_contacto">Contacto do parque</label>
                                        <input type="text" class="form-control form-control-rounded" name="parque_contacto" id="parque_contacto" placeholder="Digite o contacto do parque" required="true">
                                    </div>
                                   
                                    <div class="col-md-12 form-group mb-3">
                                        <label for="ender_provincia">Provincia</label>
                                        <input type="text" class="form-control form-control-rounded" name="ender_provincia" id="ender_provincia" placeholder="Provincia do Parque" required="true">
                                    </div>

                                    <div class="col-md-12 form-group mb-3">
                                        <label for="ender_distrito">Distrito</label>
                                        <input type="text" class="form-control form-control-rounded" name="ender_distrito" id="ender_distrito" placeholder="Distrito do Parque" required="true">
                                    </div>
                                   
                                    <div class="col-md-12 form-group mb-3">
                                        <label for="ender_avenida">Avenidida/Rua</label>
                                        <input type="text" class="form-control form-control-rounded" name="ender_avenida" id="ender_avenida" placeholder="Avenida do Parque" required="true">
                                    </div>

                                    <div class="col-md-6">
                                         <button class="btn btn-primary">Adicionar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

    </div>


    <script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>

@endsection