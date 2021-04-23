@extends('admin.template.main')

@section('title', 'Joink')

@section('content')
<div class="container-fluid mt-4 px-0 px-md-2">
  <div class="container-xl">
    <div class="row">
      <div class="col px-1 px-md-2">
        <h1 class="display-3 pacifico text-pink mb-3 px-4">Nuevo ingrediente</h1>
      </div>
    </div>

    @isset ($ingredient)
      <form action="/admin/ingredients/{{$ingredient->id}}" method="POST">
      @method('PUT')
    @else
      <form action="/admin/ingredients" method="POST">
    @endisset
      @csrf
      <div class="row mt-3">
        <div class="col px-1 px-md-2">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">General</h5>
              <div class="form-group">
                <select class="custom-select" name="type" required>
                  <option value="consumable">Comida</option>
                  <option value="package">Paquete</option>
                  <option value="intangible">Intangible</option>
                </select>
              </div>
              <div class="form-group">
                <label>Nombre del ingrediente</label>
                <input type="text" name="name" class="form-control" placeholder="Leche de frutilla de vacas rosadas" value="{{$ingredient->name ?? ''}}" required>
              </div>
              <div class="form-group">
                <label>Unidad</label>
                <input type="text" name="unit" class="form-control" placeholder="kg, l, u" value="{{$ingredient->unit ?? ''}}"required>
                <small class="form-text text-muted">En cuanto se mide?</small>
              </div>
              <div class="form-group">
                <label>Precio unitario</label>
                <input type="text" name="unit_price" class="form-control" placeholder="1000" value="{{$ingredient->unit_price ?? ''}}"required>
                <small class="form-text text-muted">Cuando vale cada unidad?</small>
              </div>
              <div class="form-group">
                <label>Cantidad unitaria</label>
                <input type="number" name="unit_quantity" class="form-control" placeholder="1000" value="{{$ingredient->unit_quantity ?? ''}}" required>
                <small class="form-text text-muted">Cuanto viene en cada unidad?</small>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col px-1 px-md-2">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Inventario</h5>
              <div class="form-group">
                <label>Cuanto te queda?</label>
                <input type="number" step="0.1" name="remaining_quantity" class="form-control" placeholder="1.5" value="{{$ingredient->remaining_quantity ?? ''}}" required>
                <small class="form-text text-muted">eso xd</small>
              </div>
              <div class="form-group">
                <label>Cuando aviso?</label>
                <input type="number" step="0.1" name="remaining_quantity_alert" class="form-control" placeholder="1.5" value="{{$ingredient->remaining_quantity_alert ?? ''}}" required>
                <small class="form-text text-muted">eso xd</small>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col px-1 px-md-2">
          @isset ($ingredient)
            <button class="btn bg-pink btn-block mt-3" type="submit">Editar</button>
          @else
            <button class="btn bg-pink btn-block mt-3" type="submit">Crear</button>
          @endisset
        </div>
      </div>
    </form>
  </div>
</div>

@endsection
