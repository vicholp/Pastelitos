@extends('admin.template.main')

@section('title', 'Joink')

@section('content')
<div class="container-fluid mt-4 px-0 px-md-2">
  <div class="container-xl px-0 px-md-2">
    <div class="row">
      <div class="col px-4">
        <form action="/admin/ingredients" method="POST">
          @csrf
          <h1 class="display-3 pacifico text-pink mb-3 px-4">Nuevo ingrediente</h1>
          <div class="form-group">
            <label>Que es?</label>
            <select class="custom-select" name="ingredient_type" required>
              <option value="consumable">Comida</option>
              <option value="package">Paquete</option>
              <option value="intangible">Intangible</option>
            </select>
          </div>
          <div class="form-group">
            <label>Nombre del ingrediente</label>
            <input type="text" name="ingredient_name" class="form-control" placeholder="Leche de frutilla de vacas rosadas" required>
          </div>
          <div class="form-group">
            <label>Unidad</label>
            <input type="text" name="ingredient_unit"class="form-control" placeholder="kg, l, u" required>
            <small class="form-text text-muted">En cuanto se mide?</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Precio unitario</label>
            <input type="text" name="ingredient_unitPrice" class="form-control" placeholder="tupoto.cl" required>
            <small class="form-text text-muted">Cuando vale cada unidad?</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Cantidad unitaria</label>
            <input type="number" name="ingredient_unitQuantity" class="form-control" placeholder="1000" required>
            <small class="form-text text-muted">Cuanto viene en cada unidad?</small>
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Cuanto te queda?</label>
            <input type="number" step="0.1" name="ingredient_quantity" class="form-control" placeholder="1.5" required>
            <small class="form-text text-muted">eso xd</small>
          </div>
          <button class="btn bg-pink btn-block" type="submit">Crear</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
