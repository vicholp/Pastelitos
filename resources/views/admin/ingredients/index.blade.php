@extends('admin.template.main')

@section('title', 'Ingredientes')

@section('content')
<div class="container-fluid mt-4 px-0 px-md-2">
  <div class="container-xl ">
    <div class="row row-cols-1 row-cols-md-2">
      @forelse ($ingredients as $ingredient)
        <div class="col mt-3 px-1 px-md-2">
          <a href="/admin/ingredients/{{$ingredient->id}}" style="color: inherit; text-decoration: inherit;">
            <div class="card shadow">
              <img src="..." class="card-img-top" alt="..." hidden>
              <div class="card-body">
                <h5 class="card-title">{{$ingredient->name}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">
                  {{$ingredient->type}} ~ quedan {{$ingredient->remaining_quantity}} [{{$ingredient->unit}}]
                </h6>
              </div>
            </div>
          </a>
        </div>
      @empty
        <div class="col mt-3 px-1 px-md-2">
          <div class="card shadow">
            <div class="card-body">
              No has agregado ningun ingrediente
            </div>
          </div>
        </div>
      @endforelse
    </div>
  </div>
</div>

@endsection

@section('stickyButton')
<a href="ingredients/create" class="btn btn-secondary btn-sm shadow-lg mdi mdi-book-plus rounded-pill p-3"> Agregar</a>
@endsection
