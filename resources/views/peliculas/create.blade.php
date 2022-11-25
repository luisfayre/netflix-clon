
@extends('layouts.app')

@section('contenido')
<form action="{{ route('pelicula.store')}}" method="post">
  @csrf

  <div class="mb-3">
    <label class="form-label">Nombre pelicula</label>
    <input type="text" class="form-control"name="nombre">
  </div>
  <div class="mb-3">
    <label  class="form-label">Imagen</label>
    <input type="text" class="form-control" name="imagen">
  </div>
  <div class="mb-3">
    <label lass="form-label">descripcion</label>
    <input type="text" class="form-control"name="descripcion">
  </div>
  <div class="mb-3">
    <label class="form-label">Trailer</label>
    <input type="text" class="form-control"name="trailer">
  </div>

  <button type="submit">Guardar</button>
</form>

@endsection