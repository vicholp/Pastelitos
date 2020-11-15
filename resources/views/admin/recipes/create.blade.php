@extends('admin.template.main')

@section('title', 'Joink')

@section('content')
<div class="container-fluid mt-4 px-0 px-md-2">
  <div class="container-xl px-0 px-md-2">
    <div class="row">
      <div class="col">
        <form action="/admin/recipes" method="POST">
          @csrf
          <h1 class="display-3 pacifico text-pink mb-3">Datos</h1>
          <div class="form-group">
            <label>Nombre de la receta</label>
            <input type="text" name="recipe_name" class="form-control" placeholder="Torta de chocolate con chocolate" required>
            <small id="emailHelp" class="form-text text-muted" >Nombre para identificarla</small>
          </div>
          <div class="form-group">
            <label>Cantidad</label>
            <input type="text" name="recipe_quantity"class="form-control" placeholder="De 18 cm" required>
            <small class="form-text text-muted">Cuanto haces?</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Link</label>
            <input type="text" name="recipe_link" class="form-control" placeholder="tupoto.cl" required>
            <small class="form-text text-muted">De donde la sacaste?</small>
          </div>
          <div class="form-group">
            <label>Es vegana?</label>
            <select class="custom-select" name="recipe_vegan" required>
              <option value="vegan">Vegana</option>
              <option value="vegetarian">Vegetariana</option>
              <option value="carnivorous">:(</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Factor</label>
            <input type="number" step="0.1" name="recipe_factor" class="form-control" placeholder="1.5" required>
            <small class="form-text text-muted">Cuan dificil es</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Detalles</label>
            <input type="text" name="recipe_details" class="form-control" placeholder="jiji" required>
            <small class="form-text text-muted">Alguna otra cosa?</small>
          </div>
          <button class="btn btn-primary" type="submit">Enviar</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection

@section('importFoot')
<script defer type="text/javascript" src="{{asset('js/recipe_create.js')}}"></script>
