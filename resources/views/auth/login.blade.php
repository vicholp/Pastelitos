<!DOCTYPE html>
<html>

<head>
  <title>Iniciar sesion</title>

  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1 minimum-scale=1">

  <link rel="stylesheet" href="{{mix('css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{mix('css/main.css')}}">
  <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

</head>

<body>
<div class="container-xl">
  <div class="row mt-5 justify-content-center">
    <div class="col-10 col-md-6 col-lg-4">
      <div class="card shadow-sm">
        <div class="card-body text-center">
          <h5 class="card-title">Pastelitos</h5>
          <h6 class="card-subtitle mb-2 text-muted">Acceder</h6>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-3 justify-content-center">
    <div class="col-10 col-md-6 col-lg-4">
      @error('email')
      <div class="alert alert-danger shadow-danger" >{{ $message }}</div>
    @enderror
      <div class="card shadow-sm">
        <div class="card-body">
          <form action='login' method='POST'>
            @csrf
            <div class="form-floating ">
              <input type="email" class="form-control" name="email" id="username" placeholder="Nombre de usuario" required>
              <label for="input-username" class="form-label">Nombre de usuario</label>
            </div>
            <div class="form-floating mt-3">
              <input type="password" class="form-control" name="password" id="pass" placeholder="Contraseña">
              <label for="input-password" class="form-label">Password</label>
            </div>

            <button type="submit" class="btn btn-primary mt-3 w-100">Ingresar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Imports -->

  <script src="{{mix('/js/manifest.js')}}"></script>
  <script src="{{mix('/js/vendor.js')}}"></script>
  <script src="{{mix('/js/main.js')}}"></script>

</body>
</html>
