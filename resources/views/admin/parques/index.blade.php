@extends('layouts.dashboard')

@section('content')

<li><a href="#">Parques de Viaturas</a></li>
                    
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
            <h3 class="card-title">Lista de Parques</h3>
            <a href="{{url('admin/parques/create')}}" style="max-width: 150px; float:right; display:inline;" class="btn btn-block btn-success">Adicionar Parques</a>
        </div>
        <div class="card-body">
        <div class="">
                                    <div class="table-responsive">
                                        <table id="user_table" class="table  text-center">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Id</th>
                                                    <th scope="col">Logo</th>
                                                    <th scope="col">Nome do Parque</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Contacto</th>
                                                    <th scope="col">Acção</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($parques as $parque)
                                                <tr>
                                                    <th scope="row">{{ $parque->parque_id }}</th>
                                                    <td><img src="{{asset ('images_upload/$parque-> parque_logo') }}"></td>
                                                    <td>{{ $parque-> parque_nome }}</td>
                                                    <td>{{ $parque-> parque_email }}</td>
                                                    <td>{{ $parque-> parque_contacto }}</td>
                                                    <td>
                                                        <a href="{{ route('parques.edit',$parque->parque_id) }}" class="text-success mr-2">
                                                            <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                                        </a>
                                                        <a><form action="{{ route('parques.destroy',$parque->parque_id) }}" method="POST" class="text-danger mr-2">
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