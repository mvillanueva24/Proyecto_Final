@extends('layouts.app')

@section('content')

@include('layouts.navbar') 

    <div class="container">
        <div class="row justify-content-center">
            <h2>Nuevo Libro</h2>
        </div>
        <div class="row justify-content-center"> 
            @if (count($errors) > 0) 
                <div class="row alert alert-danger">
                    <p>!Opss¡ Hubo problemas con los datos proporcionados</p>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ url('/admin/libros/store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title" class="col-sm-12 col-form-label">
                        Título
                    </label>
                    <div class="col-sm-12">
                        <input type="text" id="title" name="title" class="form-control 
                        {{$errors->has('title') ? ' is-invalid' : ''}}" value="{{ old('title') }}" autofocus>
                        @if ($errors->has('title'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>
                <div class="form-group">
                    <label for="autor" class="col-sm-12 col-form-label">Autor</label>
                    <div class="col-sm-12">
                        <input type="text" id="author" name="author" class="form-control 
                        {{$errors->has('author') ? ' is-invalid' : ''}}" value="{{ old('author') }}">
                        @if ($errors->has('author'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('author') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
		        <div class="form-group">
                    <label for="precio" class="col-sm-12 col-form-label">Precio</label>
                    <div class="col-sm-12">
                        <input type="number" id="precio" name="precio" class="form-control 
                        {{$errors->has('precio') ? ' is-invalid' : ''}}" value="{{ old('precio') }}">
                        @if ($errors->has('precio'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('precio') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <div class="custom-file">
                            <input type="file" id="image" name="image" class="custom-file-input{{ $errors->has('image') ? ' is-invalid' : ''}}">
                            <label for="customFile" class="custom-file-label">{{ __('Choose image') }}</label>
                            @if ($errors->has('image'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('image') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="stock" class="col-sm-12 col-form-label">Stock</label>
                    <div class="col-sm-12">
                        <input type="number" id="stock" name="stock" class="form-control
                        {{$errors->has('stock') ? ' is-invalid' : ''}}" value="{{ old('stock') }}"> 
                        @if ($errors->has('stock'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('stock') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="categoria" class="col-sm-12 col-form-label">Género</label>
                    <div class="col-sm-12">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="categoria">Options</label>
                            </div>
                            <select class="custom-select" id="categoria" name="categoria">
                                <option selected>Choose...</option>
                                @foreach ($books as $book)
                                <option name="categoria">{{ $book->genero }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                </div>

                <div class="form-group">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Create') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection