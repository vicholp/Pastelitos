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
  <div class="row justify-content-center">
    <div class="card mb-3 mt-4 col-6">
     <div class="card-body">
       <h5 class="card-title">Acceder</h5>
       <p class="card-text">Solo los administradores pueden acceder.</p>
     </div>
    </div>
  </div>


  <div class="row justify-content-center">
    <div class="card  mb-3">
      <div class="card-body">

        <form action='login' method='POST'>
          @csrf
          <div class="form-group">
            <label for="email">Username</label>
            <input type="email" class="form-control" name="email" id="username" placeholder="Nombre de usuario" required>

          </div>
          <div class="form-group">
            <label for="pass">Password</label>
            <input type="password" class="form-control" name="password" id="pass" placeholder="Contraseña">
          </div>

          <button type="submit" class="btn btn-primary">Acceder</button>
        </form>
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
