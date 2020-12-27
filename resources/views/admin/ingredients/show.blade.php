@extends('admin.template.main')

@section('title', 'Joink')

@section('content')
<div class="container-fluid mt-4 px-0 px-md-2">
  <div class="container-xl">
    <div class="row">
      <div class="col px-1 px-md-2">
        <a href="" class="btn btn-primary mdi mdi-pencil">Editar</a>
        <div class="card shadow mt-4">
          <div class="card-body">
            <h1 class="display-3">{{$ingredient->name}}</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col px-1 px-md-2">
        <div class="card shadow">
          <div class="card-header">
            Recetas
          </div>
          <ul class="list-group list-group-flush">

          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
