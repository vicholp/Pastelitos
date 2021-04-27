@extends('admin.template.main')

@section('title', 'Ingredientes')

@section('content')

<div class="container-xl">
  <div class="row mt-3">
    <div class="col">
      <a href="ingredients/create" class="btn btn-secondary shadow-lg"> Agregar</a>
    </div>
  </div>
  <div class="row row-cols-1 row-cols-md-2 gy-3 mt-3">
    @forelse ($ingredients as $ingredient)
      <div class="col">
        <div class="card shadow">
          <img src="..." class="card-img-top" alt="..." hidden>
          <div class="card-body">
            <h5 class="card-title">{{$ingredient->name}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">
              {{$ingredient->type}} ~ quedan {{$ingredient->remaining_quantity}} [{{$ingredient->unit}}]
            </h6>
          </div>
        </div>
        <a class="stretched-link" href="/admin/ingredients/{{$ingredient->id}}"></a>
      </div>
    @empty
      <div class="col">
        <div class="card shadow">
          <div class="card-body">
            No has agregado ningun ingrediente
          </div>
        </div>
      </div>
    @endforelse
  </div>
</div>

@endsection
