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

        <form  action='login' method='POST'>
          @csrf
          <div class="form-group">
            <label for="username">Username</label>
            <input type="email" class="form-control" name="username" id="username" placeholder="Nombre de usuario" required>

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

  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/coliff/bootstrap-rfs/bootstrap-rfs.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.materialdesignicons.com/5.1.45/css/materialdesignicons.min.css" >

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>


</body>
</html>
