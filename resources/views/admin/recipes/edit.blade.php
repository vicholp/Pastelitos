@extends('admin.template.main')

@section('title', 'Joink')

@section('content')

<div class="container-xl">
  <div class="row mt-3">
    <div class="col-auto">
       <h1 class="display-4">Receta</h1>
    </div>
    <div class="col-auto ms-auto">
      @isset ($recipe)
        <button type="submit" form="form" class="btn btn-success">Listo</button>
      @else
        <button type="submit" form="form" class="btn btn-success">Crear</button>
      @endisset

    </div>
  </div>
  @isset ($recipe)
    <form id="form" action="/admin/recipes/{{$recipe->id}}" method="POST">
    @method('PUT')
  @else
    <form id="form" action="/admin/recipes" method="POST">
  @endisset
    @csrf
    <div class="row mt-3">
      <div class="col">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title my-2 mb-4 text-center">General</h5>
            <div class="form-floating mb-3">
              <input type="text" name="name" class="form-control" placeholder="Torta de chocolate con chocolate" value="{{$recipe->name ?? ''}}" required>
              <label>Nombre de la receta</label>
            </div>

            <div class="form-floating mb-3">
              <input type="text" name="quantity" class="form-control" placeholder="De 18 cm" value="{{$recipe->quantity ?? ''}}" required>
              <label>Cantidad</label>
            </div>

            <div class="form-floating">
              <input type="number" step="0.1" name="factor" class="form-control" placeholder="1.5" value="{{$recipe->factor ?? ''}}" required>
              <label>Factor dificultad/tiempo</label>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col">
        <div class="card">
          <div class="card-body">
            <div class="form-check form-switch">
              <input type="checkbox" name="vegan" class="form-check-input" checked>
              <label class="form-check-label">Vegana</label>
            </div>
            <div class="form-check form-switch">
              <input type="checkbox" name="gluten" class="form-check-input" checked>
              <label class="form-check-label">glutenFree</label>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title my-2 mb-4 text-center">Detalles (opcional)</h5>

            <div class="form-floating mb-3 ">
              <input type="text" name="link" class="form-control" placeholder="tupoto.cl" value="{{$recipe->link ?? ''}}">
              <label>Link</label>
            </div>
            <div class="form-floating mb-3 ">
              <textarea type="text" name="details" class="form-control" placeholder="jiji" value="{{$recipe->details ?? ''}}"></textarea>
              <label>Detalles</label>
            </div>
            <div class="form-floating mb-3 ">
              <input type="number" name="estimated_time" class="form-control" placeholder="60" value="{{$recipe->estimated_time ?? ''}}">
              <label>Tiempo estimado (minutos)</label>
            </div>

          </div>
        </div>
      </div>
    </div>
  </form>
</div>
@endsection

