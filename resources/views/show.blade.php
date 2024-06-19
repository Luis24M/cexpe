@extends('layouts.layout')
@section('title','personas | ' . $persona->cPerApellido  )
@section('content')

<h2 class="text-3xl">Detalles de la persona</h2>
<section class="leading-8">
  <p><strong>Apellido:</strong> {{ $persona->cPerApellido }}</p>
  <p><strong>Nombre:</strong> {{ $persona->cPerNombre }}</p>
  <p><strong>Dirección:</strong> {{ $persona->cPerDireccion }}</p>
  <p><strong>Fecha de nacimiento:</strong> {{ $persona->dPerFecNac }}</p>
  <p><strong>Edad:</strong> {{ $persona->nPerEdad }}</p>
  <p><strong>Sexo:</strong> {{ $persona->cPerSexo }}</p>
  <p><strong>Sueldo:</strong> {{ $persona->nPerSueldo }}</p>
  <p><strong>RND:</strong> {{ $persona->cPerRnd }}</p>
  <p><strong>Estado:</strong> {{ $persona->nPerEstado }}</p>
</section>


@endsection