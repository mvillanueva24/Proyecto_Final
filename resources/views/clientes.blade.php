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
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="42" height="42" class="float-right mr-4"><path d="M12.75 7.75a.75.75 0 00-1.5 0v3.5h-3.5a.75.75 0 000 1.5h3.5v3.5a.75.75 0 001.5 0v-3.5h3.5a.75.75 0 000-1.5h-3.5v-3.5z"></path><path fill-rule="evenodd" d="M12 1C5.925 1 1 5.925 1 12s4.925 11 11 11 11-4.925 11-11S18.075 1 12 1zM2.5 12a9.5 9.5 0 1119 0 9.5 9.5 0 01-19 0z"></path></svg>
</div>

@endsection