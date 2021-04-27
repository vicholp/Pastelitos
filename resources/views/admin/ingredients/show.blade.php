@extends('admin.template.main')

@section('title', 'Joink')

@section('content')

<div class="container-xl">
  <div class="row mt-3">
    <div class="col">
      <a href="/admin/ingredients/{{$ingredient->id}}/edit" class="btn btn-outline-secondary"><span class="iconify" data-icon="mdi:pencil"></span> Editar</a>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col">
      <div class="card shadow">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="/src/ingredient.jpg" class="card-img" alt="Aqui iria la foto" style="max-height: 15vh; object-fit: cover;">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">{{$ingredient->name}}</h5>
              <h6 class="card-subtitle mb-2 text-muted">{{$ingredient->type}}</h6>
              <p class="card-text">${{$ingredient->unit_price}} por paquete de {{$ingredient->unit_quantity}} [{{$ingredient->unit}}]</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col ">
      <div class="card shadow">
        <div class="card-body">
          <h5 class="card-title">Inventario</h5>
          <p class="card-text">{{$ingredient->remaining_quantity}}[{{$ingredient->unit}}] restantes</p>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col">
      <div class="card shadow">
        <div class="card-header">
          Recetas
        </div>
        <ul class="list-group list-group-flush">
          @forelse ($ingredient->recipes as $recipe)
            <li class="list-group-item">{{$recipe->name}}
              <a class="stretched-link" href="/admin/recipes/{{$recipe->id}}" ></a>
            </li>
          @empty
            <li class="list-group-item"><i>Este ingrediente no tiene ninguna receta</i></li>
          @endforelse
        </ul>
      </div>
    </div>
  </div>
</div>


@endsection
