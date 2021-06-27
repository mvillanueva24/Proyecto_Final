@extends('layouts.app')

@section('content')

@include('layouts.navbar') <!--Mostrar el menú-->

<div class="container">
    <h2>Libros</h2>
    <form class="form-inline mb-3">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
      <div >
       <a href="{{ url('/admin/libros/create') }}">
        <button type="button" class="float-right btn btn-light mb-1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="42" height="42"><path d="M12.75 7.75a.75.75 0 00-1.5 0v3.5h-3.5a.75.75 0 000 1.5h3.5v3.5a.75.75 0 001.5 0v-3.5h3.5a.75.75 0 000-1.5h-3.5v-3.5z"></path><path fill-rule="evenodd" d="M12 1C5.925 1 1 5.925 1 12s4.925 11 11 11 11-4.925 11-11S18.075 1 12 1zM2.5 12a9.5 9.5 0 1119 0 9.5 9.5 0 01-19 0z"></path></svg></button>
        </a>
      </div>
    <div class="table-responsive-lg">
        <table class="table">
            <thead>
                <tr>
                  <th scope="col">Título</th>
                  <th scope="col">Autor</th>
                  <th scope="col">Precio</th>
                  <th scope="col">Stock</th>
                  <th scope="col">Categoria</th>                
                  <th scope="col"></th>                
                  <th scope="col"></th>                
                </tr>
            </thead>
            <tbody>
              @foreach ($books as $book)
              <tr>
                <th scope="col">{{ $book->title }}</th>
                <th scope="col">{{ $book->author }}</th>
                <th scope="col">S/. {{ $book->precio}}</th>
                <th scope="col">{{ $book->stock }}</th>
                <th scope="col">{{ $book->category->genero['0'] }}</th>
                <th scope="col"><button type="button" class="btn btn-light"><i class="fas fa-trash" style="font-size: large;"></i></button></th>
                <th scope="col"><button type="button" class="btn btn-light"><i class="fas fa-edit" style="font-size: large;"></i></button></th>
              </tr>
              @endforeach
            </tbody>
        </table>
      </div>
      
</div>

@endsection