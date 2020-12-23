@extends('admin.template.main')

@section('title', 'Mis recetas')

@section('content')
<div class="container-fluid mt-4 px-0 px-md-2">
  <div class="container-xl ">
    <div class="row">
      <div class="col">
        <table class="table table-hover">
          <tbody>
            @forelse ($recipes as $recipe)
              <tr>
                <td class="align-middle">{{$recipe->name}}</td>
                <td>
                  <div class="btn-group">
                    <a href="/admin/recipes/{{$recipe->id}}" class="btn bg-pink shadow-sm btn-sm mdi mdi-book-open-variant"></a>
                  </div>
                </td>
              </tr>
            @empty
              <div class="card shadow">
                <div class="card-body">
                  No has agregado ninguna receta
                </div>
              </div>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@endsection

@section('stickyButton')
<a href="recipes/create" class="btn btn-secondary btn-sm shadow-lg mdi mdi-book-plus rounded-pill p-3"> Agregar</a>
@endsection
