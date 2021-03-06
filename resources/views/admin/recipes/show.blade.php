@extends('admin.template.main')

@section('title', 'Joink')

@section('content')

<div class="container-xl">
  <div class="row mt-3">
    <div class="col">
      <a href="" class="btn btn-primary"><span class="iconify" data-icon="mdi:pot-mix-outline"></span> Cocinar</a>
      <a href="/admin/recipes/{{$recipe->id}}/edit" class="btn btn-outline-secondary"><span class="iconify" data-icon="mdi:pencil"></span> Editar</a>
      <a href="/admin/recipe/{{$recipe->id}}/ingredients" class="btn btn-outline-secondary"> <span class="iconify" data-icon="mdi:pencil"></span> Ingredientes</a>
      <div class="card shadow mt-4">
        <div class="card-body">
          <h1 class="display-3">{{$recipe->name}}</h1>
          <h6 class="card-subtitle mb-2 text-muted">
            {{$recipe->quantity}}
            @isset ($recipe->estimated_time)
              ~ {{$recipe->estimated_time}} minutos
            @endisset
          </h6>
          <p class="card-text">
            <small class="text-muted"> {{$recipe->detail}} </small>
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col">
      <div class="card shadow">
        <div class="card-body">
          <h1 class="display-4">Valor: ${{$recipe->min_value() * $recipe->factor}}</h1>
          <p class="card-text"><small class="text-muted">${{$recipe->min_value()}} x {{$recipe->factor}}</small> </p>
        </div>
      </div>
    </div>

  </div>
  <div class="row mt-3">
    <div class="col">
      <div class="card shadow">
        <div class="card-header">
          Ingredientes
        </div>
        <ul class="list-group list-group-flush ">
          @forelse ($recipe->ingredients as $ingredient)
            <li class="list-group-item">
              {{$ingredient->name}} ({{$ingredient->pivot->quantity}} {{$ingredient->unit}})
              <a class="stretched-link" href="/admin/ingredients/{{$ingredient->id}}"></a>
            </li>

          @empty
            <li class="list-group-item"><i>Aun no has agregado ingredientes</i></li>
          @endforelse
        </ul>
      </div>
    </div>
  </div>
</div>


@endsection
