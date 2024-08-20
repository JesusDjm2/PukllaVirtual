@extends('layouts.app')
@section('titulo', 'Crear nuevo Libro')
@section('contenido')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h3>Crear Nuevo Libro
                <a href="{{ route('libros.index') }}" class="btn btn-danger btn-sm float-right">Volver</a>
            </h3>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('libros.store') }}" method="POST">
                @csrf
                <div class="form-group mt-3">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" class="form-control form-control-sm rounded-pill" value="{{ old('nombre') }}" required>
                </div>
                <div class="form-group">
                    <label for="autor">Autor:</label>
                    <input type="text" name="autor" id="autor" class="form-control form-control-sm rounded-pill" value="{{ old('autor') }}" required>
                </div>
                <div class="form-group">
                    <label for="identificador">Identificador:</label>
                    <input type="text" name="identificador" id="identificador" class="form-control form-control-sm rounded-pill" value="{{ old('identificador') }}" required>
                </div>
                <div class="form-group">
                    <label>Categorías:</label>
                    <div class="d-flex flex-wrap">
                        @foreach ($categorias as $categoria)
                            <div class="form-check mr-3 mb-2">
                                <input class="form-check-input" type="checkbox" name="categorias[]" id="categoria_{{ $categoria->id }}" value="{{ $categoria->id }}" {{ (is_array(old('categorias')) && in_array($categoria->id, old('categorias'))) ? 'checked' : '' }}>
                                <label class="form-check-label" for="categoria_{{ $categoria->id }}">
                                    {{ $categoria->nombre }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
                <button type="submit" class="btn btn-sm btn-primary">Guardar</button>
            </form>
        </div>
    </div>
@endsection
