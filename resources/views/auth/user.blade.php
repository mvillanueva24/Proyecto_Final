@extends('layouts.app')

@section('content')

@include('layouts.navbar') <!--Mostrar el menú-->

<div class="container">
    <h2>Administradores</h2>
      <a href="{{ route('users.store') }}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="42" height="42" class="float-right mr-4"><path d="M12.75 7.75a.75.75 0 00-1.5 0v3.5h-3.5a.75.75 0 000 1.5h3.5v3.5a.75.75 0 001.5 0v-3.5h3.5a.75.75 0 000-1.5h-3.5v-3.5z"></path><path fill-rule="evenodd" d="M12 1C5.925 1 1 5.925 1 12s4.925 11 11 11 11-4.925 11-11S18.075 1 12 1zM2.5 12a9.5 9.5 0 1119 0 9.5 9.5 0 01-19 0z"></path></svg></a>
    <div class="table-responsive-lg">
        <table class="table">
            <thead>
                <tr>
                  <th scope="col">Nombre</th>
                  <th scope="col">Correo electrónico</th>
                  <th scope="col">Acciones</th>               
                </tr>
              </thead>
	  <tbody>
		  @foreach ($users as $user)
                <tr>
                <th scope="col">{{$user -> name}}</th>
                <th scope="col">{{$user -> email}}</th>
                <th scope="col">
                  <a href="{{ route('users.edit', $user->id) }}"><button type="button" class="btn btn-light"><i class="fas fa-edit" style="font-size: large;"></i></button></a>
                  <a href="{{ route('users.delete', $user->id) }}"><button type="button" class="btn btn-light"><i class="fas fa-trash" style="font-size: large;"></i></button></a></th>
                <th scope="col"></th>
                </tr>
                
		  @endforeach

            </tbody>
        </table>
      </div>
      
</div>

@endsection