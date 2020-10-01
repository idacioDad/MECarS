@extends('layouts.dashboard')

@section('content')

<li><a href="#">Trackers</a></li>
                    
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
            <h3 class="card-title">Lista de Trackers</h3>
            <a href="{{url('admin/trackers/create')}}" style="max-width: 150px; float:right; display:inline;" class="btn btn-block btn-success">Adicionar Tracker</a>
        </div>
        <div class="card-body">
        <div class="">
                                    <div class="table-responsive">
                                        <table id="user_table" class="table  text-center">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Id</th>
                                                    <th scope="col">Logo</th>
                                                    <th scope="col">Nome da Tracker</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Contacto</th>
                                                    <th scope="col">Província</th>
                                                    <th scope="col">Cidade/Distrito</th>
                                                    <th scope="col">Avenida/Rua</th>
                                                    <th scope="col">Acção</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($trackers as $tracker)
                                                <tr>
                                                    <th scope="row">{{ $tracker->tracker_id }}</th>
                                                    <td><img src="{{asset ('images_upload/trackers/$tracker-> tracker_logo') }}"></td>
                                                    <td>{{ $tracker-> tracker_nome }}</td>
                                                    <td>{{ $tracker-> tracker_email }}</td>
                                                    <td>{{ $tracker-> tracker_contacto }}</td>
                                                    <td>{{ $tracker-> endereco-> ender_provincia  }}</td>
                                                    <td>{{ $tracker-> endereco-> distrito_cidade }}</td>
                                                    <td>{{ $tracker-> endereco-> ender_rua_Av }}</td>
                                                    <td>
                                                        <a href="{{ route('trackers.edit',$tracker->tracker_id) }}" class="text-success mr-2">
                                                            <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                                        </a>
                                                        <a><form action="{{ route('trackers.destroy',$tracker->tracker_id) }}" method="POST" class="text-danger mr-2">
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