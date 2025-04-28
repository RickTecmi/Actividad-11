{{-- Hereda la estructura del layout app.blade.php --}}
@extends('layouts.app')

{{-- Define el título específico para esta página --}}
@section('title', 'Página Principal')

{{-- Define el contenido principal para esta página --}}
@section('content')
    <h1>Bienvenido a la Página de Inicio</h1>
    <p>Este es el contenido principal de la sección de inicio.</p>
    <p>Aquí podrías mostrar noticias, un resumen general, etc.</p>
@endsection
