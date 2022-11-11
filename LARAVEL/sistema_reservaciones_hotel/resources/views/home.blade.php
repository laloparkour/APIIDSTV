@extends('layouts.app')
@section('contenido')

    <h1>Hola {{ Auth::user()->name }}</h1>

        
    <form action="{{ url('logout') }}" method="POST">
        @csrf


        <a href="{{ url('users/') }}">Ir a usuarios</a>


        <button type="submit">Salir</button>

    </form>
    
@endsection