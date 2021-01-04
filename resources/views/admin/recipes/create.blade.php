@extends('admin.template.main')

@section('title', 'Joink')

@section('content')
<div class="container-fluid mt-4 px-0 px-md-2">
  <div class="container-xl px-0 px-md-2">
    <div class="row">
      <div class="col px-4">
        <form action="/admin/recipes" method="POST">
          @csrf
          <h1 class="display-3 pacifico text-pink mb-3 px-4">Nueva receta</h1>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">General</h5>
              <div class="form-group">
                <label>Nombre de la receta</label>
                <input type="text" name="name" class="form-control" placeholder="Torta de chocolate con chocolate" required>
              </div>
              <div class="form-group">
                <label>Cantidad</label>
                <input type="text" name="quantity" class="form-control" placeholder="De 18 cm" required>
                <small class="form-text text-muted">Cuanto haces?</small>
              </div>
              <div class="form-group">
                <label>Factor dificultad/tiempo</label>
                <input type="number" step="0.1" name="factor" class="form-control" placeholder="1.5" required>
                <small class="form-text text-muted">Cuan dificil es</small>
              </div>
            </div>
          </div>

          <div class="card mt-3">
            <div class="card-body">
              <div class="form-check">
                <input type="checkbox" name="vegan" class="form-check-input" checked>
                <label class="form-check-label">Vegana</label>
              </div>
            </div>
          </div>
          <div class="card mt-3">
            <div class="card-body">
              <h5 class="card-title">Detalles (opcional)</h5>
              <div class="form-group">
                <label>Link</label>
                <input type="text" name="link" class="form-control" placeholder="tupoto.cl">
              </div>
              <div class="form-group">
                <label>Detalles</label>
                <input type="text" name="details" class="form-control" placeholder="jiji" >
                <small class="form-text text-muted">Alguna otra cosa?</small>
              </div>
              <div class="form-group">
                <label>Tiempo estimado (minutos)</label>
                <input type="number" name="estimated_time" class="form-control" placeholder="60">
              </div>
            </div>
          </div>
          <button class="btn bg-pink btn-block mt-3" type="submit">Crear</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection

@section('importFoot')
<script defer type="text/javascript" src="{{asset('js/create.js')}}"></script>
