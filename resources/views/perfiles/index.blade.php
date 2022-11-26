@extends('layouts.user')


@section('contenido')
<div class="container">
        <h1>Quien esta viendo?</h1>

        <div class="card-users">

            @foreach ($perfiles as $perfil)
            <div class="card">
                <a href="home-user.html">
                 
                    <img src="{{ $perfil->tipo == 0 ? './assets/img/perfil01.png' : './assets/img/perfil02.png' }}  ">
                    <p>{{ $perfil->nombre }}</p>
                </a>
            </div>
            @endforeach

            <div class="card">
                <a href="{{ route('usuarios.create')}}">
                    <img src="./assets/img/perfil03.png">
                    Adicionar perfil
                </a>
            </div> 
        </div>

        <a href="">Administrar Perfiles</a>
</div>
@endsection
