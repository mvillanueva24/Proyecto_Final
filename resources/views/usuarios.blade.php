@extends('layouts.app')

@section('content')

@include('layouts.navbar') <!--Mostrar el menú-->

<div class="container">
    <h2>Usuarios</h2>
    <form class="form-inline mb-3">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    <div class="table-responsive-lg">
        <table class="table">
            <thead>
                <tr>
                  <th scope="col">Nombre</th>
                  <th scope="col">Correo</th>                
                </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
              <tr>
                <th scope="col">{{ $user->name }}</th>
                <th scope="col">{{ $user->email }}</th>               
              </tr>
              @endforeach
              </tbody>
        </table>
      </div>
      
</div>

@endsection