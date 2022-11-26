
@extends('layouts.app')

@section('titulo', 'Editar peliculas: ' . $pelicula->nombre)

@section('contenido')
<form action="{{ route('pelicula.update',$pelicula)}}" method="post">
  @csrf
  @method('PUT')

  <div class="mb-3">
    <label class="form-label">Nombre pelicula</label>
    <input type="text" class="form-control"name="nombre" value="{{ $pelicula->nombre}}">
  </div>
  <div class="mb-3">
    <label  class="form-label">Imagen</label>
    <input type="text" class="form-control" name="imagen"  value="{{ $pelicula->imagen}}" >
  </div>
  <div class="mb-3">
    <label lass="form-label">descripcion</label>
    <input type="text" class="form-control"name="descripcion"  value="{{ $pelicula->descripcion}}">
  </div>
  <div class="mb-3">
    <label class="form-label">Trailer</label>
    <input type="text" class="form-control"name="trailer"  value="{{ $pelicula->trailer}}">
  </div>

  <button type="submit">Guardar</button>
</form>

@endsection