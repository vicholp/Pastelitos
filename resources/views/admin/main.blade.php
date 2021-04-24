@extends('admin.template.main')

@section('title', 'Home')

@section('content')
<div class="container mt-4">
  <div class="row">
    <div class="col-12">
      <div class="card shadow">
        <img src="src/5.png" class="card-img-top" alt="...">
        <div class="card-body">
          <a href="admin/recipes" class="btn btn-primary btn-block">Recetas</a>
        </div>
      </div>
    </div>
    <div class="col-12">
      <div class="card shadow">
        <img src="src/4.png" class="card-img-top" alt="...">
        <div class="card-body">
          <a href="admin/ingredients" class="btn btn-primary btn-block">Ingredientes</a>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col">
      <div class="card shadow">
        <div class="card-body">
          <a href="admin/ingredients" class="btn btn-secondary btn-block">Otros</a>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
