@extends('admin.template.main')

@section('title', 'Peculiar Bakery')

@section('content')
<div class="container-fluid mt-4 px-0 px-md-2">
  <div class="container-xl ">
    <div class="row">
      <div class="col">
        <h1 class="display-4 pacifico mb-3 text-pink">Ingredientes</h1>
        <table class="table table-hover">
          <tbody>
            @foreach ($ingredients as $ingredient)
              <tr>
                <td class="align-middle">{{$ingredient->name}}</td>
                <td>
                  <div class="btn-group">
                    <a href="/admin/ingredients/{{$ingredient->id}}" class="btn bg-pink shadow-sm btn-sm mdi mdi-food-apple"></a>
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

@section('stickyButton')
<a href="ingredients/create" class="btn btn-secondary btn-sm shadow-lg mdi mdi-book-plus rounded-pill p-3"> Agregar</a>
@endsection
