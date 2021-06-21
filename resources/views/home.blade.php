@extends('layouts.app')

@section('content')

@include('layouts.navbar') <!--Mostrar el menú-->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-group">
                <div class="card">
                    <!--<img class="card-img-top" src="img/bolsa.PNG" alt="Card image cap">-->
                    
                    <div class="card-body">
                    <h5 class="card-title">Realizar Venta</h5>
                    </div>
                </div>
                <div class="card">
                    
                    <div class="card-body">
                    <h5 class="card-title">Inventario</h5>
                    </div>
                </div>
                <div class="card">
                    
                    <div class="card-body">
                    <h5 class="card-title">Clientes</h5>
                    </div>
                </div>
                <div class="card">
                    
                    <div class="card-body">
                    <h5 class="card-title">Usuarios</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
