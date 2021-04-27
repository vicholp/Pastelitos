@extends('admin.template.main')

@section('title', 'Mis recetas')

@section('content')

<div class="container-xl">
  <div class="row mt-3">
    <div class="col">
      <a href="recipes/create" class="btn btn-secondary shadow-lg"> Agregar</a>
    </div>
  </div>
  <div class="row row-cols-1 row-cols-md-2 gy-3 mt-3">
    @forelse ($recipes as $recipe)
      <div class="col">
        <div class="card shadow">
          <img src="..." class="card-img-top" alt="..." hidden>
          <div class="card-body">
            <h5 class="card-title">{{$recipe->name}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">
              {{$recipe->quantity}}
              @isset ($recipe->estimated_time)
                ~ {{$recipe->estimated_time}} minutos
              @endisset
            </h6>
          </div>
          <a href="/admin/recipes/{{$recipe->id}}" class="stretched-link"></a>
        </div>
      </div>
    @empty
      <div class="col">
        <div class="card shadow">
          <div class="card-body">
            No has agregado ninguna receta
          </div>
        </div>
      </div>
    @endforelse
  </div>
</div>
@endsection
