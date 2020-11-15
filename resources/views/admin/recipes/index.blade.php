@extends('admin.template.main')

@section('title', 'Joink')

@section('content')
<div class="container-fluid mt-4">
    <div class="container-xl">
      <div class="row">
        <div class="col">
            <h1 class="display-4 mt-2 mb-5 text-pink" style="font-family: Pacifico">Mis Recetitas 🍰</h1>
            <a href="recipes/create" class="btn btn-success mdi mdi-new-box"></a>
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nombre</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($recipes as $recipe)
                    <tr>
                      <th class="align-middle" scope="row">{{$recipe->id}}</th>
                      <td class="align-middle">{{$recipe->name}}</td>
                      <td><a href="" class="btn btn-warning mdi mdi-pot-steam">Cocinar</a></td>
                    </tr>
                @endforeach
              </tbody>
            </table>
        </div>
      </div>
    </div>
</div>

@endsection
