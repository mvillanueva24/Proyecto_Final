@extends('layouts.app')

@section('content')

@include('layouts.navbar') <!--Mostrar el menú-->

<div class="container">
    <h2>Administradores</h2>
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