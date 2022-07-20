@extends('layouts.app')

@section('content')

<div class="card border-secondary mb-3" alight="" style="max-width: auto; margin-top: 15px;">
  <div class="card-header" style="text-align:center">Bienvenido</div>
  <div class="card-body">
    <h4 class="card-title" style="text-align:center">Sistema de gestión de incidencias</h4>
    <p class="card-text" style="text-align: center">Cosa que se produce en el transcurso de un asunto, un relato, etc., y que repercute en él alterándolo o interrumpiéndolo.</p>
  </div>
</div>

<div class="card-group">
  <div class="card">
    <img src="{{ asset('img/como-gestionar-incidencias.png') }}" style="height: 175px" class="card-img-top" alt="">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Fotografia: Luis Diaz</small>
    </div>
  </div>
  <div class="card">
    <img src="{{ asset('img/gestion-de-incidencias.png') }}" style="height: 175px" class="card-img-top" alt="">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Fotografia: Luis Diaz</small>
    </div>
  </div>
  <div class="card">
    <img src="{{ asset('img/timeline_proideac_02.jpg') }}"  style="height: 175px" class="card-img-top" alt="">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Fotografia: Luis Diaz</small>
    </div>
  </div>
</div>

@endsection