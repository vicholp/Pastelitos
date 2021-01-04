@extends('admin.template.main')

@section('title', 'Mis recetas')

@section('content')
<div class="container-fluid mt-4 px-0 px-md-2">
  <div class="container-xl">
    <div class="row row-cols-1 row-cols-md-2">
      @forelse ($recipes as $recipe)
        <div class="col mb-4 px-1 px-md-2">
          <a href="/admin/recipes/{{$recipe->id}}" style="color: inherit; text-decoration: inherit;">
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
            </div>
          </a>
        </div>
      @empty
        <div class="col mb-4 px-1 px-md-2">
          <div class="card shadow">
            <div class="card-body">
              No has agregado ninguna receta
            </div>
          </div>
        </div>
      @endforelse
    </div>
  </div>
</div>


@endsection

@section('stickyButton')
<a href="recipes/create" class="btn btn-secondary btn-sm shadow-lg mdi mdi-book-plus rounded-pill p-3"> Agregar</a>
@endsection
