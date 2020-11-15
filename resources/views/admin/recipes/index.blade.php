@extends('admin.template.main')

@section('title', 'Mis Recetitas 🍰')

@section('content')
<div class="container-fluid mt-4 px-0 px-md-2">
  <div class="container-xl ">
    <div class="row">
      <div class="col">

        <a href="recipes/create" class="btn btn-success mdi mdi-new-box"></a>
        <table class="table table-hover">
          <tbody>
            @foreach ($recipes as $recipe)
              <tr>
                <td class="align-middle">{{$recipe->name}}</td>
                <td>
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="" class="btn btn-warning btn-sm mdi mdi-pot-steam"></a>
                    <a href="/admin/recipes/{{$recipe->id}}" class="btn btn-secondary btn-sm mdi mdi-pencil"></a>
                  </div>

                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@endsection
