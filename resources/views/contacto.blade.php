@extends('layouts.layout')

@section('title', 'Contacto')

@section('content')
  <h1 class="text-center text-3xl">Contacto</h1>
  @if(session('estado'))
    <h2 class="text-2xl text-center text-green-500">{{ session('estado') }}</h2>
  @else
  <form action="{{ route('contacto') }}" method="post">
    @csrf
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" class="block w-full" value="{{ old('nombre') }}">
    {{ $errors->first('nombre') }}
    <label for="email">Email:</label>
    <input type="email" name="email" class="block w-full" value="{{ old('email') }}">
    {{ $errors->first('email') }}
    <label for="asunto">Asunto:</label>
    <input type="text" name="asunto" class="block w-full" value="{{ old('asunto') }}">
    {{ $errors->first('asunto') }}
    <label for="mensaje">Mensaje:</label>
    <textarea name="mensaje" class="block w-full" value="{{ old('mensaje') }}"></textarea>
    {{ $errors->first('mensaje') }}
    <button type="submit" class="block w-full bg-blue-500 text-white p-3 rounded mt-4">Enviar</button>
  </form>
  @endif
@endsection