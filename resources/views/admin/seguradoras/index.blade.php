@extends('layouts.dashboard')

@section('content')

<li><a href="#">Seguradoras</a></li>
                    
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
            <h3 class="card-title">Lista de Seguradora</h3>
            <a href="{{url('admin/seguradoras/create')}}" style="max-width: 150px; float:right; display:inline;" class="btn btn-block btn-success">Adicionar Seguradora</a>
        </div>
        <div class="card-body">
        <div class="">
                                    <div class="table-responsive">
                                        <table id="user_table" class="table  text-center">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Id</th>
                                                    <th scope="col">Logo</th>
                                                    <th scope="col">Nome da Seguradora</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Contacto</th>
                                                    <th scope="col">Acção</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($seguradoras as $seguradora)
                                                <tr>
                                                    <th scope="row">{{ $seguradora->seguradora_id }}</th>
                                                    <td><img src="{{asset ('images_upload/$seguradora-> seguradora_logo') }}"></td>
                                                    <td>{{ $seguradora-> seguradora_nome }}</td>
                                                    <td>{{ $seguradora-> seguradora_email }}</td>
                                                    <td>{{ $seguradora-> seguradora_contacto }}</td>
                                                    <td>
                                                        <a href="{{ route('seguradoras.edit',$seguradora->seguradora_id) }}" class="text-success mr-2">
                                                            <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                                        </a>
                                                        <a><form action="{{ route('seguradoras.destroy',$seguradora->seguradora_id) }}" method="POST" class="text-danger mr-2">
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