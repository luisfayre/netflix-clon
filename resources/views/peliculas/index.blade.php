
@extends('layouts.app')

@section('titulo', 'Lista de peliculas')

@section('contenido')
    <a class="btn btn-primary" href="{{ route('pelicula.create')}}" role="button">Crear pelicula</a>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Titulo</th>
          <th scope="col">Descipcion</th>
          <th scope="col">Imagen</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">

        @foreach ($peliculas as $pelicula)
        <tr>
          <th scope="row">{{ $pelicula->id }}</th>
          <td>{{ $pelicula->nombre }}</td>
          <td>{{ $pelicula->descripcion }}</td>
          <td>{{ $pelicula->imagen }} </td>
          <td>
            <a class="btn btn-primary" href="{{ route('pelicula.edit',$pelicula->id)}}" role="button">Editar</a>
                <a class="btn btn-danger" href="#" 
                  onclick="event.preventDefault(); document.getElementById('delete-form{{$pelicula->id}}').submit();">
                  Eliminar
            </a>
     
            <form action="{{ route('pelicula.destroy',$pelicula->id)}}" method="POST" id="delete-form{{$pelicula->id}}" style="display: none;">
                @csrf
                @method('DELETE')
            </form>


          </td>
        </tr>
        @endforeach
      </tbody>
    </table>

    @endsection