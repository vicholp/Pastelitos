@extends('admin.template.main')

@section('title', 'Home')

@section('content')
<div class="container-xl ">
  <div class="row mt-3 gy-3">
    <div class="col-12">
      <div class="card shadow">
        <img src="src/5.png" class="card-img-top" alt="...">
        <div class="card-img-overlay">
          <h5 class="card-title text-center">Recetas</h5>
          <a href="admin/recipes" class="stretched-link"></a>
        </div>
      </div>
    </div>
    <div class="col-12">
      <div class="card shadow">
        <img src="src/4.png" class="card-img-top" alt="...">
        <div class="card-img-overlay">
          <h5 class="card-title text-center">Ingredientes</h5>
          <a href="admin/ingredients" class="stretched-link"></a>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
