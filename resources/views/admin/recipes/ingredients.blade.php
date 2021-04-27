@extends('admin.template.main')

@section('title', 'Peculiar Bakery')
@section('importFoot')
<script type="text/javascript" src="{{mix("js/recipe_ingredients.js")}}"></script>
<script type="text/javascript">
  const recipe_id = {{$recipe->id}};
  let recipe_ingredients = [{{implode(', ', $list_ingredients)}}]
</script>
@endsection

@section('content')
<div class="container-xl">
  <div class="row mt-3">
    <div class="col-auto">
       <h1 class="display-4">{{$recipe->name}}</h1>
    </div>
    <div class="col-auto ms-auto">
      <button type="submit" form="form" class="btn btn-success">Listo</button>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col">
      <div class="card shadow">
        <div class="card-body">
          <input type="search" class="form-control" id="searchIngredient" placeholder="Busca un ingrediente">
          <button class="btn btn-primary mt-3 w-100" onclick="search()">Buscar</button>
        </div>
      </div>
    </div>
  </div>
  <form id="form" action="/admin/recipe/{{$recipe->id}}/ingredients" method="POST">
    @csrf
    <template id="template-ingredientAdded">
      <div class="col div-ingredient">
        <div class="card shadow-sm">
          <div class="card-body">
            <h6 class="card-subtitle "></h6>
            <div class="input-group mt-2">
              <input type="number" step="0.01" class="form-control" name="" required>
              <span class="input-group-text">L</span>
              <button type="button" class="btn btn-outline-danger text-danger"><span class="iconify" data-icon="ic:baseline-delete"></span></button>
            </div>
          </div>
        </div>
      </div>
    </template>
    <div id="div-ingredients" class="row mt-3 gy-2">
      @foreach ($recipe->ingredients as $ingredient)
        <div class="col-12 div-ingredient" data-ingredient="{{$ingredient->id}}">
          <div class="card shadow-sm">
            <div class="card-body ">
              <h6 class="card-subtitle">{{$ingredient->name}}</h6>
              <div class="input-group mt-2">
                <input type="number" step="0.01" class="form-control" name="{{$ingredient->id}}" value="{{$ingredient->pivot->quantity}}" required>
                <span class="input-group-text">{{$ingredient->unit}}</span>
                <button type="button" class="btn btn-outline-danger text-danger" onclick="removeIngredient({{$ingredient->id}})"><span class="iconify" data-icon="ic:baseline-delete"></span></button>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>


  </form>
</div>


<div class="modal fade" id="modal-ingredientsSearch" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ingredientes</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <template id="template-ingredientAdd">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <h6 class="card-subtitle">Titulo</h6>
              <a class="stretched-link"></a>
            </div>
          </div>
        </div>
      </template>
      <div class="modal-body row gy-2" id="div-ingredientsAdd">

      </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal-ingredientsSearch">Listo</button>
      </div>
    </div>
  </div>
</div>

@endsection


