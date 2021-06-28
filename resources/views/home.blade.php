@extends('layouts.app')

@section('content')

@include('layouts.navbar') <!--Mostrar el menú-->

<div class="container">
    <!--
    foreach($photosArray as $photos)
      <div class="col-md-6">
        <ul class="list group mt-2 mb-4">
            <li class="list-group-item active"> $photos['name']*/</li>
            <li class="list-group-item"> $photos['email']</li>
            <li class="list-group-item"> $photos['phone']</li>
      </div>
    endforeach
  -->
</div>

@endsection
