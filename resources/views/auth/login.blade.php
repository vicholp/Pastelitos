<!DOCTYPE html>
<html>

<head>
  <title>Iniciar sesion</title>

  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1 minimum-scale=1">
  <link rel="canonical" href="$url">

</head>

<body style="background-color: rgb(242, 242, 242);">
<div class="container">
  <div class="row mb-3 mt-5 justify-content-center">
    <div class="col-6">
      <div class="card">
        <div class="card-body text-center">
          <h5 class="card-title">Movimiento Pleno</h5>
          <h6 class="card-subtitle mb-2 text-muted">Acceder</h6>
        </div>
      </div>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-6">
      <div class="card">
        <div class="card-body">
          <form action='login' method='POST'>
            @csrf
            <div class="mb-3">
              <label for="input-username" class="form-label">Nombre de usuario</label>
              <input type="email" class="form-control" name="email" id="username" placeholder="Nombre de usuario" required>
              <div id="emailHelp" class="form-text">ayuaaa</div>
            </div>
            <div class="mb-3">
              <label for="input-password" class="form-label">Password</label>
               <input type="password" class="form-control" name="password" id="pass" placeholder="Contraseña">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

</div>

<!-- Imports -->

  <link rel="stylesheet" href="{{mix('css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{mix('css/main.css')}}">
  <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
  <script src="{{mix('/js/manifest.js')}}"></script>
  <script src="{{mix('/js/vendor.js')}}"></script>
  <script src="{{mix('/js/main.js')}}"></script>


</body>
</html>
