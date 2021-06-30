@extends('layouts.app')

@section('content')

@include('layouts.navbar') <!--Mostrar el menú-->
<div class="container">
    <h2>Categorias</h2>
      <div class="card mt-4">
        <div class="card-header" style="text-align: center;font-size:25px">
            Agregar Categoria
        </div>
        <div class="card-body">
    <div class="card mt-4">
        <div class="card-header">
            Create Category
        </div>
        <div class="card-body">



            <form action="{{ route('category.store') }}" method="post">
                @csrf
                <input id="categoria" type="text" class="form-control" name="categoria" required autocomplete="categoria" autofocus>
                <a>
                    <button type="submit" class="mt-3 btn btn-success">Crear</button>
                </a>
                <a>
                    <button type="button" class="mt-3 btn btn-danger">Cancelar</button>
                </a>
            </form>
        </div>
    </div>

@endsection