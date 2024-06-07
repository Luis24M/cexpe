@extends('layouts.layout')

@section('title', 'Personas')

@section('content')
  <h1 class="text-center text-3xl">Personas</h1>
  <ul class="flex justify-center p-5">
    @if($personas)
      @foreach($personas as $persona)
        <li class="border-2 border-sky-300 w-48 m-4 p-5 text-center font-bold">{{ $persona->cPerNombre }} {{$persona->cPerApellido}} <br> <p class="text-sm font-extralight">{{ $persona->nPerEdad }} años</p></li>
      @endforeach
  </ul>
  @else
    <p>No hay Personas disponibles</p>
  @endif
@endsection