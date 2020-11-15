@extends('admin.template.main')

@section('title', 'Joink')

@section('content')
<div class="container-fluid mt-4 px-0 px-md-2">
    <div class="container-xl">
      <div class="row">
        <div class="col px-1 px-md-2">
          <a href="" class="btn btn-warning mdi mdi-pot-steam">Cocinar</a>
          <a href="" class="btn btn-warning mdi mdi-pencil">Editar</a>
          <div class="card mt-4">
            <div class="card-body">
              <h1 class="display-3">{{$recipe->name}}</h1>
              <h6 class="card-subtitle mb-2 text-muted">{{$recipe->quantity}}</h6>

              <p class="card-text"><small class="text-muted">{{$recipe->detail}}</small></p>
            </div>
            <div class="card-footer text-muted">
              {{$recipe->vegan}}
            </div>
          </div>


        </div>
      </div>
    </div>
</div>

@endsection
