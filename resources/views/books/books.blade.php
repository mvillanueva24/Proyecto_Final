@extends('layouts.app')

@section('content')

@include('layouts.navbar') <!--Mostrar el menú-->

<div class="container">
    <h2>Libros</h2>
      <div class='card mt-4'>
        <div class="card-header" style="text-align: center;font-size:25px">
            List Books
        </div>
      <div class="card-body">
      
       <a class="text-white btn btn-success my-2" href="{{ route('books.create') }}"><i class="fa fa-plus"></i> Create Book</a>
      
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
                <th scope="col">{{ $book->category->genero }}</th>
                <th scope="col">
                  <a class="btn btn-sm btn-success" href="{{ route('books.edit', $book->id) }}"><i class="fas fa-edit text-white" style="font-size: large;"></i></a>
                </th>
                <th scope="col">
                  <a class="btn btn-sm btn-danger" href="{{ url('admin/libros/', $book->id) }}">
                  <i class="fas fa-trash text-white" style="font-size: large;"></i>
                  </a>
                </th>
              </tr>
              @endforeach
            </tbody>
        </table>
      </div>
      </div>
      </div>
</div>

@endsection