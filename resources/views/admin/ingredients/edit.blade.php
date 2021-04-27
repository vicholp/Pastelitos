@extends('admin.template.main')

@section('title', 'Ingrediente')

@section('content')

<div class="container-xl">
  <div class="row mt-3">
    <div class="col-auto">
       <h1 class="display-4">Ingrediente</h1>
    </div>
    <div class="col-auto ms-auto">
      @isset ($ingredient)
        <button type="submit" form="form" class="btn btn-success">Listo</button>
      @else
        <button type="submit" form="form" class="btn btn-success">Crear</button>
      @endisset

    </div>
  </div>
  @isset ($ingredient)
    <form id="form" action="/admin/ingredients/{{$ingredient->id}}" method="POST">
    @method('PUT')
  @else
    <form id="form" action="/admin/ingredients" method="POST">
  @endisset
    @csrf
    <div class="row mt-3">
      <div class="col">
        <div class="card shadow">
          <div class="card-body">
            <h5 class="card-title my-2 mb-4 text-center">General</h5>
            <select name="type" class="form-select mb-3" required>
              <option selected disabled>Tipo de ingrediente</option>
              <option value="consumable">Comida</option>
              <option value="package">Paquete</option>
              <option value="intangible">Intangible</option>
            </select>

            <div class="form-floating mb-3">
              <input type="text" name="name" class="form-control" placeholder="Leche de frutilla de vacas rosadas" value="{{$ingredient->name ?? ''}}" required>
              <label>Nombre del ingrediente</label>
            </div>

            <div class="form-floating mb-3">
              <input type="text" name="unit" class="form-control" placeholder="kg, l, u" value="{{$ingredient->unit ?? ''}}"required>
              <label>Unidad</label>
            </div>


            <div class="form-floating mb-3">
              <input type="text" name="unit_price" class="form-control" placeholder="1000" value="{{$ingredient->unit_price ?? ''}}"required>
              <label>Precio unitario</label>
            </div>

            <div class="form-floating mb-3">
              <input type="number" name="unit_quantity" class="form-control" placeholder="1000" value="{{$ingredient->unit_quantity ?? ''}}" required>
              <label>Cantidad unitaria</label>
            </div>

          </div>
        </div>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col ">
        <div class="card shadow">
          <div class="card-body">
            <h5 class="card-title my-2 mb-4 text-center">Inventario</h5>

            <div class="form-floating mb-3">
              <input type="number" step="0.1" name="remaining_quantity" class="form-control" placeholder="1.5" value="{{$ingredient->remaining_quantity ?? ''}}" required>
              <label>Cuanto te queda?</label>
            </div>
            <div class="form-floating mb-3">
              <input type="number" step="0.1" name="remaining_quantity_alert" class="form-control" placeholder="1.5" value="{{$ingredient->remaining_quantity_alert ?? ''}}" required>
              <label>Cuando aviso?</label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>


@endsection
