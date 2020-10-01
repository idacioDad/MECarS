@extends('layouts.dashboard')

@section('content')

<li><a href="#">Documentos</a></li>
                    
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
            <h3 class="card-title">Lista de Documentos</h3>
            <a href="{{url('admin/documentos/create')}}" style="max-width: 150px; float:right; display:inline;" class="btn btn-block btn-success">Adicionar Documento</a>
        </div>
        <div class="card-body">
        <div class="">
                                    <div class="table-responsive">
                                        <table id="user_table" class="table  text-center">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Id</th>
                                                    <th scope="col">Nome do Documento</th>
                                                    <th scope="col">Instituição</th>
                                                    <th scope="col">Descrição</th>
                                                    <th scope="col">Acção</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($documentos as $documento)
                                                <tr>
                                                    <th scope="row">{{ $documento->documento_id }}</th>
                                                    <th scope="row">{{ $documento->documento_nome }}</th>
                                                    @if (isset($documento->seguradoras->seguradora_nome ))
                                                    <td>{{ $documento->seguradoras->seguradora_nome }}</td>
                                                    @elseif(isset($documento->parques->parque_nome ))
                                                    <td>{{ $documento->parques->parque_nome }}</td>
                                                    @elseid(isset($documento->trackrs->tracker_nome))
                                                    <td>{{ $documento->trackrs->tracker_nome }}</td>
                                                    @else
                                                    <td></td>
                                                    @endif
                                                    <th scope="row">{{ $documento->documento_descr }}</th>
                                                  
                                                    <td>
                                                        <a href="{{ route('documentos.edit',$documento->documento_id) }}" class="text-success mr-2">
                                                            <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                                        </a>
                                                        <a><form action="{{ route('documentos.destroy',$documento->documento_id) }}" method="POST" class="text-danger mr-2">
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