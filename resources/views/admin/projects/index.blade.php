@extends('layouts.app')

@section('content')

<div class="panel panel-default">

                <div class="card-body">

                    <h3><div class="panel-heading" style="width: auto; height: auto ; text-align:center ; margin-top: 15px;">{{ __('Proyectos') }}</h3></div>

                @if (session('notification'))
                    <div class="alert alert-success">
                        {{session('notification')}}
                @endif

                @if (count($errors)>0)

                        <div class="alert alert-danger">
    
                            <ul>
                                @foreach ($errors->all() as $error)
    
                                <li>{{$error}}</li>
    
                                @endforeach
    
                            </ul>
                    </div>

                @endif



                </div>


                <div class="card-body">
                    <form action="" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label for="email">Nombre del Proyecto</label>
                            <input type="text" name="name" class="form-control" value="{{old('name')}}">
                        </div>

                        <div class="form-group">
                            <label for="description">Descripción</label>
                            <input type="text" name="description" class="form-control" value="{{old('description')}}">
                        </div>

                        <div class="form-group">
                            <label for="email">Fecha de inicio</label>
                            <input type="date" name="start" class="form-control" value="{{old('start', date('Y-m-d'))}}">
                        </div>

                        <div class="form-group" style="margin-top: 15px">
                            <button class="btn btn-primary">Registrar Proyectos</button>
                       </div>
                    </form>  
                    
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Fecha de inicio</th>
                                <th>Opciones</th>
                            </tr>        
                        </thead> 
                        <tbody>
                    @foreach ($projects as $project)
                            <tr>
                                <td>{{$project->name}}</td>
                                <td>{{$project->description}}</td>
                                <td>{{$project->start ?: 'No se ha indicado'}}</td>


                                <td>
                                    <a href="/proyecto/{{$project->id}}" class="btn btn-sm btn-primary" title="Editar"> 
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                      </svg>
                                    </a>

                            @if ($project->trashed())

                                    <a href="/proyecto/{{$project->id}}/restaurar" class="btn btn-sm btn-success" title="Restaurar"> 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-repeat" viewBox="0 0 16 16">
                                            <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z"/>
                                            <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z"/>
                                          </svg>   
                                    </a>
                            @else

                                <a href="/proyecto/{{$project->id}}/eliminar" class="btn btn-sm btn-danger" title="Dar de baja"> 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-x" viewBox="0 0 16 16">
                                            <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                                            <path fill-rule="evenodd" d="M12.146 5.146a.5.5 0 0 1 .708 0L14 6.293l1.146-1.147a.5.5 0 0 1 .708.708L14.707 7l1.147 1.146a.5.5 0 0 1-.708.708L14 7.707l-1.146 1.147a.5.5 0 0 1-.708-.708L13.293 7l-1.147-1.146a.5.5 0 0 1 0-.708z"/>
                                          </svg>
                                </a>
                            @endif

                                </td>
                            </tr>
                    @endforeach
                        
                        </tbody>








                </div>
            </div>
@endsection
