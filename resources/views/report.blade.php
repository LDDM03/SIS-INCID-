@extends('layouts.app')

@section('content')

<div class="panel panel-default">
               <h3><div class="panel-heading" style="width: auto; height: auto ; text-align:center ; margin-top: 15px;">{{ __('Reporte de incidencias') }}</h3></div>

                <div class="panel-body">
                    <form action="">
                        <div class="form-group">
                            <label for="category_id">Categoria</label>
                            <select name="category_id" class="form-select">
                    
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="severity">Severidad</label>
                            <select name="severity" class="form-select">
                                <option value="M">Menor</option>
                                <option value="N">Normal</option>
                                <option value="N">Alta</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="title">Título</label>
                            <input type="text" name="title" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="description">Descripción</label>
                            <textarea name="descripción" class="form-control"></textarea>
                        </div>

                        <div class="form-group" style="margin-top: 15px">
                            <button class="btn btn-primary">Registrar incidecias</button>
                        </div>
                    </form>    
                </div>
            </div>
@endsection
