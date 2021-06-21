@extends('layouts.app')

@section('content')

@include('layouts.navbar') <!--Mostrar el menú-->

<div class="container">
    <h2>Clientes</h2>
    <form class="form-inline mb-3">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    <div class="table-responsive-lg">
        <table class="table">
            <thead>
                <tr>
                  <th scope="col">#ID</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Apellidos</th>
                  <th scope="col">Correo</th>
                  <th scope="col">Dirección</th>                 
                </tr>
            </thead>
            <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>##########</td>
                  <td>##############</td>
                  <td>##############</td>
                    <td>##############</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>##########</td>
                    <td>##############</td>
                    <td>##############</td>
                    <td>##############</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>##########</td>
                    <td>##############</td>
                    <td>##############</td>
                    <td>##############</td>
                </tr>
              </tbody>
        </table>
      </div>
      
</div>

@endsection