@extends('layouts.app')

@section('content')

<div class="panel panel-default">
               <h3><div class="panel-heading" style="width: auto; height: auto ; text-align:center ; margin-top: 15px;">{{ __('Reporte de incidencias') }}</h3></div>

                <div class="card-body">

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
                            <label for="category_id">Categoria</label>
                            <select name="category_id" class="form-select">
                                <option value="">...</option>

                                @foreach ($categories as $category)

                                    <option value="{{ $category->id }}"> {{ $category->name }} </option>

                                @endforeach    
                    
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="severity">Severidad</label>
                            <select name="severity" class="form-select">
                                <option value="M">Menor</option>
                                <option value="N">Normal</option>
                                <option value="A">Alta</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="title">Título</label>
                            <input type="text" name="title" class="form-control" value="{{old('title')}}">
                        </div>

                        <div class="form-group">
                            <label for="description">Descripción</label>
                            <textarea name="description" class="form-control">{{old('description')}}</textarea>
                        </div>

                        <div class="form-group" style="margin-top: 15px">
                            <button class="btn btn-primary">Registrar incidecias</button>
                       </div>
                    </form>     
                </div>
            </div>
@endsection
