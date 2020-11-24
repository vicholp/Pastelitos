@extends('admin.template.main')

@section('title', 'Peculiar Bakery')
@section('importHead')
<script type="text/javascript">
  const ingredients = {!! $ingredients->toJson() !!};
  const recipe_ingredients = {!! $recipe->ingredients->toJson() !!};
</script>

<script type="text/javascript" src="{{mix("js/recipe_ingredients.js")}}"></script>
@endsection

@section('content')
<div class="container-fluid mt-4 px-0 px-md-2">
  <div class="container-xl ">
    <div class="row">
      <div class="col">
        <h1 class="display-4 pacifico mb-3 text-pink">{{$recipe->name}}</h1>
        <div class="card">
          <div class="card-body">
            <input type="search" class="form-control" id="searchIngredient" placeholder="Busca un ingrediente">
            <button class="btn btn-outline-primary btn-block mt-3" onclick="search()">Buscar</button>
          </div>
        </div>
        <div class="card mt-3">
          <div class="card-body">
            <form action="/admin/recipe/{{$recipe->id}}/ingredients" method="POST">
              @csrf
              <template id="template-ingredientAdded">
                <div class="mt-3">
                  <label for="">Lechesita</label>
                  <div class="input-group">
                    <input type="text" class="form-control" name="">
                    <div class="input-group-append">
                      <span class="input-group-text">L</span>
                      <button  type="button" class="btn btn-danger">x</button>
                    </div>
                  </div>
                </div>
              </template>
              <div id="div-ingredients">
              </div>
              <button type="submit" class="btn btn-primary btn-block mt-3">Subir</button>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <template id="template-ingredientAdd">
        <div class="card">
          <div class="card-body">
            <h5>Titlle</h5>
            <button class="btn btn-success">+</button>
          </div>
        </div>
      </template>
      <div class="modal-body" id="div-ingredientsAdd">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

@endsection


