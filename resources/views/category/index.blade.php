@extends('layouts.app')

@section('content')

@include('layouts.navbar') <!--Mostrar el menú-->

<div class="container">
    <h2>Categorias</h2>
      <div class="card mt-4">
        <div class="card-header" style="text-align: center;font-size:25px">
            List Category
        </div>
        <div class="card-body">

        <a class="text-white btn btn-success my-2" href="/crearcategoria"><i class="fa fa-plus"></i> Create Category</a>
            

            <table class="table">
                <thead>
                    <tr>
                       
                        <th>Category Name</th>
                        <th>Date of Creation</th>
                        <th>Date of Update</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($categories as $category)
                        <tr>
                           
                            <td>{{ $category-> genero}}</td>
                            <td>{{ $category->created_at->format('d-m-Y') }}</td>
                            <td>{{ $category->updated_at->format('d-m-Y') }}</td>
                            <td>
                                <a class="btn btn-sm btn-success" href="{{ route('category.create', $category->_id) }}"><i
                                        class="fa fa-edit text-white"></i></a>
                                <a data-id="{{ $category->_id }}" data-title="{{ $category->title }}" class="btn btn-sm btn-danger"
                                    href="#" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>






    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar: <span></span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    ¿Seguro que quieres eliminar el registro seleccionado?

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <a href={{ url('admin/category/' . $category->id) }}>
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                    </a>


                </div>
            </div>
        </div>
    </div>
       </div>
       
</div>

@endsection