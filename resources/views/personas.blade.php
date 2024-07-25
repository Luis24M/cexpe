@extends('layouts.layout')

@section('title', 'Personas')

@section('content')
  <h1 class="text-center text-3xl">Personas</h1>
  @auth
  <a class="block text-center p-5 bg-sky-300 text-white font-bold" href="{{ route('personas.create') }}">Agregar Persona</a>
  @endauth
  <ul class="flex justify-center p-5">
    @if($personas)
      @foreach($personas as $persona)
        <a class="border-2 border-sky-300 w-48 m-4 p-5 text-center font-bold hover:scale-110 transition duration-300" href="{{ route('personas.show',$persona) }}">{{ $persona->cPerNombre }} {{$persona->cPerApellido}} <br> <p class="text-sm font-extralight">{{ $persona->nPerEdad }} años</p></a>
      @endforeach
  </ul>
  @else
    <p>No hay Personas disponibles</p>
  @endif
@endsection