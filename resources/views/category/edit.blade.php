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



            <form  method="post">

                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"  required autocomplete="name" autofocus>
                <input type="submit" value="Send" class="mt-3 btn btn-success">
                <input type="button" class="mt-3 btn btn-danger" onclick="history.back()" name="volver atrás" value="Go Back">

            </form>

        </div>
    </div>

@endsection