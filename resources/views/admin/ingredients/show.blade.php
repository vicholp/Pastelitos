@extends('admin.template.main')

@section('title', 'Joink')

@section('content')
<div class="container-fluid mt-4 px-0 px-md-2">
  <div class="container-xl">
    <div class="row">
      <div class="col px-1 px-md-2">
        <a href="" class="btn btn-outline-secondary mdi mdi-pencil">Editar</a>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col px-1 px-md-2">
        <div class="card shadow">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="/src/ingredient.jpg" class="card-img" alt="Aqui iria la foto" style="max-height: 15vh; object-fit: cover;">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">{{$ingredient->name}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{$ingredient->type}}</h6>
                <p class="card-text">{{$ingredient->unit_quantity}}[{{$ingredient->unit}}] por paquete</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col px-1 px-md-2">
        <div class="card shadow">
          <div class="card-body">
            <h5 class="card-title">Inventario</h5>
            <p class="card-text">{{$ingredient->remaining_quantity}}[{{$ingredient->unit}}] restantes</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col px-1 px-md-2">
        <div class="card shadow">
          <div class="card-header">
            Recetas
          </div>
          <ul class="list-group list-group-flush">

          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
