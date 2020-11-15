@extends('admin.template.main')

@section('title', 'Joink')

@section('content')
<div class="container-fluid mt-4">
  <div class="container-xl px-0 px-md-2">
    <div class="row">
      <div class="col">
        <form>
          @csrf
          <h1 class="display-3 pacifico text-pink mb-3">Datos</h1>
          <input type="text" name="ingredients" hidden>
          <div class="form-group">
            <label>Nombre de la receta</label>
            <input type="text" name="recipe-name" class="form-control" placeholder="Torta de chocolate con chocolate">
            <small id="emailHelp" class="form-text text-muted" >Nombre para identificarla</small>
          </div>
          <div class="form-group">
            <label>Cantidad</label>
            <input type="text" name="recipe-quantity"class="form-control" placeholder="De 18 cm">
            <small class="form-text text-muted" >Cuanto haces?</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Link</label>
            <input type="url" name="recipe-link" class="form-control" placeholder="tupoto.cl">
            <small class="form-text text-muted">De donde la sacaste?</small>
          </div>
          <div class="form-group">
            <label>Es vegana?</label>
            <select class="custom-select" name="recipe-vegan">
              <option value="vegan">Vegana</option>
              <option value="vegetarian">Vegetariana</option>
              <option value="carnivorous">:(</option>
            </select>
          </div>
        </form>
        <h1 class="display-3 pacifico text-pink mt-5 mb-3">Ingredientes</h1>

        <input id="input-ingredientName" type="text" class="form-control" placeholder="Leche con caca" hidden>
        <select id="select-ingredientName" class="custom-select mb-3">
          <option disabled selected>Ingredientes</option>
          @foreach ($ingredients as $ingredient)
          <option value="{{$ingredient['id']}}">{{$ingredient['name']}}</option>
          @endforeach
        </select>
        <div id="div-ingredients">

        </div>
        <div class="form-group">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"></span>
            </div>
            <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
            <div class="input-group-append">
              <button class="btn btn-outline-danger mdi mdi-close" type="button" id="button-addon1"></button>
            </div>

          </div>
          <small class="form-text text-muted"></small>
        </div>
        <template id="template-ingredientInput">
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Nombre</span>
              </div>
              <input type="text" class="form-control" placeholder="">
              <div class="input-group-append">
                <button class="btn btn-outline-danger mdi mdi-close" type="button" id="button-addon1"></button>
              </div>

            </div>
            <small class="form-text text-muted"></small>
          </div>
        </template>
      </div>
    </div>
  </div>
</div>

@endsection

@section('importFoot')
<script defer type="text/javascript" src="{{asset('js/recipe_create.js')}}"></script>
