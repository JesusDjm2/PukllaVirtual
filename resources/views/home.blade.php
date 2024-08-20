@extends('layouts.app')
@section('titulo', 'Inicio')
@section('contenido')
    <div class="row">
        <div class="col-lg-12">
            <h4 class="text-center mb-4 mt-3">Página principal Puklla Virtual</h4>
        </div>
        <div class="col-lg-3 p-3">
            <a href="{{route('libros.index')}}">
                <img src="{{ asset('img/Libros.webp') }}" width="100%" loading="lazy">
            </a>
        </div>
        <div class="col-lg-3 p-3">
            <a href="{{route('libros.index')}}">
                <img src="{{ asset('img/Sisichakuna.webp') }}" width="100%" loading="lazy">
            </a>
        </div>
        <div class="col-lg-3 p-3">
            <a href="{{route('libros.index')}}">
                <img src="{{ asset('img/Videos.webp') }}" width="100%" loading="lazy">
            </a>
        </div>
        <div class="col-lg-3 p-3">
            <a href="">
                <img src="{{ asset('img/Canciones.webp') }}" width="100%" loading="lazy">
            </a>
        </div>
    </div>
@endsection
