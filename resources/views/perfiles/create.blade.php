
@extends('layouts.app')

@section('contenido')
<div class="container-login">

  <h1>Nuevo perfil</h1>
  <form action="{{ route('usuarios.store')}}" method="post">
    @csrf
    <input type="text" placeholder="Ingresa el nuevo nombre" name="nombre">
    <label for="" style="color: white">Es infantil</label>
    <input type="checkbox" placeholder="Ingresa el nuevo nombre" name="tipo">

    <button type="submit">Guardar</button>
  </form>

</div>

@endsection