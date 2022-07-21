@extends('layouts.app')

@section('content')

<div class="panel panel-default">

                <div class="card-body">

                    <h3><div class="panel-heading" style="width: auto; height: auto ; text-align:center ; margin-top: 15px;">{{ __('Administración de proyectos') }}</h3></div>

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

                    <form action="" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label for="email">Nombre del Proyecto</label>
                            <input type="text" name="name" class="form-control" value="{{old('name', $project->name)}}">
                        </div>

                        <div class="form-group">
                            <label for="description">Descripción</label>
                            <input type="text" name="description" class="form-control" value="{{old('description', $project->description)}}">
                        </div>

                        <div class="form-group">
                            <label for="email">Fecha de inicio</label>
                            <input type="date" name="start" class="form-control" value="{{old('start', $project->start)}}">
                        </div>

                        <div class="form-group" style="margin-top: 15px">
                            <button class="btn btn-primary">Guardar Proyectos</button>
                       </div>
                    </form>  

                    <div class="row">
                        <div class="col-md-6">
                            <p style="margin-top:10px" >Categoría</p>
                            <form action="/categorias" method="POST">
                                <div class="form-group">
                                      <input type="text" placeholder="Ingrese nombre" class="form-control">
                                  </div>
                                <div class="form-group">
                                    <button style="margin-top:10px" class="btn btn-primary">Añadir</button>
                                </div>
                            </form>
                        


                            <table style="margin-top:10px" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Opciones</th>
                                    </tr>        
                                </thead> 
                                <tbody>
                                    <tr>
                                        <td>Proyecto A</td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-primary" title="Editar"> 
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                              </svg>
                                            </a>
        
                                            <a href="" class="btn btn-sm btn-danger" title="Dar de baja"> 
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-x" viewBox="0 0 16 16">
                                                    <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                                                    <path fill-rule="evenodd" d="M12.146 5.146a.5.5 0 0 1 .708 0L14 6.293l1.146-1.147a.5.5 0 0 1 .708.708L14.707 7l1.147 1.146a.5.5 0 0 1-.708.708L14 7.707l-1.146 1.147a.5.5 0 0 1-.708-.708L13.293 7l-1.147-1.146a.5.5 0 0 1 0-.708z"/>
                                                  </svg>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                   
                        

                        <div class="col-md-6">
                            <p style="margin-top:10px" >Niveles</p>
                        <form action="/niveles" method="POST">
                            <div class="form-group">
                                <input type="text" placeholder="Ingrese nombre" class="form-control">
                            </div>
                          <div class="form-group">
                              <button style="margin-top:10px" class="btn btn-primary">Añadir</button>
                          </div>
                        </form>


                            <table style="margin-top:10px" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nivel</th>
                                        <th>Opciones</th>
                                    </tr>        
                                </thead> 
                                <tbody>
                                    <tr>
                                        <td>N1</td>
                                        <td>Atención Basica</td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-primary" title="Editar"> 
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                              </svg>
                                            </a>
        
                                            <a href="" class="btn btn-sm btn-danger" title="Dar de baja"> 
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-x" viewBox="0 0 16 16">
                                                    <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                                                    <path fill-rule="evenodd" d="M12.146 5.146a.5.5 0 0 1 .708 0L14 6.293l1.146-1.147a.5.5 0 0 1 .708.708L14.707 7l1.147 1.146a.5.5 0 0 1-.708.708L14 7.707l-1.146 1.147a.5.5 0 0 1-.708-.708L13.293 7l-1.147-1.146a.5.5 0 0 1 0-.708z"/>
                                                  </svg>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>



                        </div>


                    </div>
                   




                </div>
            </div>
@endsection
