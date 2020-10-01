@extends('layouts.dashboard')

@section('content')

<li>Formulário Carros</li>
                    
                    </ul>
                </div>
    
                <div class="separator-breadcrumb border-top"></div>
    <section class="content">
    <div class="row">
    <di class="col-12">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Adicionar Carro</h3>
            <a href="{{url('admin/carros')}}" style="max-width: 150px; float:right; display:inline;" class="btn btn-block btn-success">Lista de Carros</a>
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
                            <div class="card-title mb-3">Registo de Carros</div>
                            <form method="post" action="{{ route('carros.store') }}" enctype="multipart/form-data">
                            @csrf
                                <div class="row">

                                <div class="btn form-group col-md-4 mb-3">
                                    <label for="inputState">Parque</label>
                                    <select id="id_parque" name="id_parque" class="form-control">
                                        <option selected value=''>Seleccionar um Parque...</option>

                                        @foreach($parques as $parque)
                                        <option value="{{ $parque->parque_id }}">{{ $parque-> parque_nome }}</option>
                                     @endforeach
                                    </select>
                                    </div>

                                <div class="btn form-group col-md-4 mb-3">
                                    <label for="inputState">Modelo</label>
                                    <select id="id_modelo" name="id_modelo" class="form-control">
                                        <option selected value=''>Seleccionar um modelo...</option>

                                        @foreach($modelos as $modelo)
                                        <option value="{{ $modelo->modelo_id }}">{{ $modelo-> modelo_nome }}</option>
                                     @endforeach
                                    </select>
                                    </div>


                                    <div class="btn form-group col-md-4 mb-3">
                                    <label for="inputState">Categoria</label>
                                    <select id="id_categoria" name="id_categoria" class="form-control">
                                        <option selected value=''>Seleccionar uma Categoria...</option>

                                        @foreach($categorias as $categoria)
                                        <option value="{{ $categoria->categoria_id }}">{{ $categoria-> categoria_nome }}</option>
                                     @endforeach
                                    </select>
                                    </div>

                                    <div class="col-md-4 form-group mb-3">
                                        <label for="carro_preco">Preço do Carro</label>
                                        <input type="number" step="0.01" class="form-control form-control-rounded" name="carro_preco" id="carro_preco" placeholder="Digite o Preço do carro" required="true">
                                    </div>

                                    <div class="col-md-4 form-group mb-3">
                                        <label for="carro_ano_fabrico">Ano de Fabrico do Carro</label>
                                        <input type="number" class="form-control form-control-rounded" name="carro_ano_fabrico" id="carro_ano_fabrico" placeholder="Digite o ano de fabrico do carro" required="true">
                                    </div>

                                    <div class="col-md-4 form-group mb-3">
                                        <label for="carro_Km">Quilometragem do Carro</label>
                                        <input type="number" class="form-control form-control-rounded" name="carro_Km" id="carro_Km" step="0.001" placeholder="Quilometragem do carro" required="true">
                                    </div>
                                    


                                    <div class="col-md-12 form-group mb-3">
                                        <input type="file" class="custom-file-input" id="customFile" name="carro_foto" required="true">
                                        <label class="custom-file-label" for="customFile">Escolha a foto principal do carro</label>
                                    </div>

                                    <div class="col-md-4 form-group mb-3">
                                        <label for="carro_motorSize">Tamanho do motor</label>
                                        <input type="text" class="form-control form-control-rounded" name="carro_motorSize" id="carro_motorSize" placeholder="Tamanho do Motor" required="true">
                                    </div>

                                    <div class="col-md-4 form-group mb-3">
                                        <label for="carro_motorCode">Codigo do motor</label>
                                        <input type="text" class="form-control form-control-rounded" name="carro_motorCode" id="carro_motorCode" placeholder="Codigo do Motor">
                                    </div>

                                    <div class="col-md-4 form-group mb-3">
                                        <label for="carro_conducao">Condução</label>
                                        <input type="text" class="form-control form-control-rounded" name="carro_conducao" id="carro_conducao" placeholder="Condução" required="true">
                                    </div>



                                    <div class="btn form-group col-md-4 mb-3">
                                    <label for="inputState">Caixa de velocidade</label>
                                    <select id="carro_caixa" name="carro_caixa" class="form-control" required="true">
                                        <option selected >Seleccionar Tipo de Caixa de Velocidade...</option>

                                        
                                        <option value="Manual">Manual</option>
                                        <option value="Automatica">Automática</option>
                                    
                                    </select>
                                    </div>

                                    <div class="col-md-4 form-group mb-3">
                                        <label for="carro_versaoClasse">Versão e/ou Classe Carro</label>
                                        <input type="text" class="form-control form-control-rounded" name="carro_versaoClasse" id="carro_versaoClasse" placeholder="Versão e/ou Classe carro" required="true">
                                    </div>

                                    <div class="btn form-group col-md-4 mb-3">
                                    <label for="inputState">Lado do Volante</label>
                                    <select id="carro_volante" name="carro_volante" class="form-control" required="true">
                                        <option selected >Seleccionar o Lado do Volante...</option>

                                        
                                        <option value="Direito">Direito</option>
                                        <option value="Esquerdo">Esquerdo</option>
                                        <option value="Bilateral">Bilateral</option>
                                    
                                    </select>
                                    </div>

                                    <div class="col-md-4 form-group mb-3">
                                        <label for="carro_corExterna">Cor Interna</label>
                                        <input type="text" class="form-control form-control-rounded" name="carro_corExterna" id="carro_corExterna" placeholder="Cor Interna do carro" required="true">
                                    </div>

                                    <div class="btn form-group col-md-4 mb-3">
                                    <label for="inputState">Combustível</label>
                                    <select id="carro_combustivel" name="carro_combustivel" class="form-control" required="true">
                                        <option selected >Seleccionar o fonte de Energia...</option>

                                        
                                        <option value="Gasolina">Gasolina</option>
                                        <option value="Diesel">Diesel</option>
                                        <option value="Gas Natural">Gás Natural</option>
                                        <option value="Electrico">Eléctrico</option>
                                    
                                    </select>
                                    </div>

                                    <div class="col-md-4 form-group mb-3">
                                        <label for="carro_assentos">Nº de Assentos do Carro</label>
                                        <input type="number" class="form-control form-control-rounded" name="carro_assentos" id="carro_assentos" placeholder="Nº de assentos carro" required="true">
                                    </div>

                                    <div class="col-md-4 form-group mb-3">
                                        <label for="carro_portas">Nº de Portas do Carro</label>
                                        <input type="number" class="form-control form-control-rounded" name="carro_portas" id="carro_portas" placeholder="Nº de assentos carro" required="true">
                                    </div>

                                    <div class="col-md-4 form-group mb-3">
                                        <label for="carro_peso">Peso do Carro</label>
                                        <input type="number" class="form-control form-control-rounded" name="carro_peso" step="0.01" id="carro_peso" placeholder="Peso carro" required="true">
                                    </div>

                                    <div class="col-md-4 form-group mb-3">
                                        <label for="carro_lotacao">Lotação do Carro</label>
                                        <input type="number" class="form-control form-control-rounded" name="carro_lotacao" id="carro_lotacao" placeholder="Peso carro" required="true">
                                    </div>

                                    <div class="col-md-12 form-group mb-3">
                                        <input type="file" class="custom-file-input" id="customFile" name="car_foto[]" multiple required="true">
                                        <label class="custom-file-label" for="customFile">Selecione fotos adicionais do carro</label>
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


    <script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>

@endsection