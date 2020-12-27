@extends('admin.template.main')

@section('title', 'Peculiar Bakery')
@section('importHead')

<script type="text/javascript" src="{{mix("js/recipe_ingredients.js")}}"></script>
<script type="text/javascript">
  const recipe_id = {{$recipe->id}}
  let recipe_ingredients =[
    @foreach ($recipe->ingredients as $ingredient)
      {{$ingredient->id}},
    @endforeach
  ]

</script>
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
                <div class="div-ingredient mt-3">
                  <label for="">Lechesita</label>
                  <div class="input-group">
                    <input type="number" step="0.01" class="form-control" name="" required>
                    <div class="input-group-append">
                      <span class="input-group-text">L</span>
                      <button type="button" class="btn btn-danger">x</button>
                    </div>
                  </div>
                </div>
              </template>
              <div id="div-ingredients">
                @foreach ($recipe->ingredients as $ingredient)
                  <div class="div-ingredient mt-3" data-ingredient="{{$ingredient->id}}">
                    <label for="">{{$ingredient->name}}</label>
                    <div class="input-group">
                      <input type="number" step="0.01" class="form-control" name="{{$ingredient->id}}" value="{{$ingredient->pivot->quantity}}" required>
                      <div class="input-group-append">
                        <span class="input-group-text">{{$ingredient->unit}}</span>
                        <button type="button" class="btn btn-danger" onclick="removeIngredient({{$ingredient->id}})">x</button>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
              <button type="submit" class="btn btn-primary btn-block mt-3">Listo</button>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ingredientes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <template id="template-ingredientAdd">
        <div class="card mt-2">
          <div class="card-body">
            <div class="row">
              <div class="col-10">
                <h5>Titlle</h5>
              </div>
              <div class="col-2">
                <button class="btn btn-success">+</button>
              </div>
            </div>
          </div>
        </div>
      </template>
      <div class="modal-body" id="div-ingredientsAdd">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Listo</button>
      </div>
    </div>
  </div>
</div>

@endsection


