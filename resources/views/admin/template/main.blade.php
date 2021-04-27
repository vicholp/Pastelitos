<!DOCTYPE html>
<html lang="en">
<head>

  <title>@yield('title') - Admin</title>

  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1 minimum-scale=1">
  <link rel="canonical" href="$url">
  <meta name="theme-color" content="#E0FEFE">
  <meta name="robots" content="noindex, nofollow" />

  <!-- Imports -->

    <link rel="stylesheet" href="{{mix('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{mix('css/main.css')}}">
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

    @yield('importHead')

</head>
<body>


  <!--Navbar-->
  <nav class="navbar navbar-expand-lg shadow navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/admin">Pastelitos</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
          <a class="nav-link" href="#">Features</a>
          <a class="nav-link" href="#">Pricing</a>

          <a class="btn btn-outline-secondary" href="/admin/logout" role="button"> {{$user}} - Logout</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Content -->

    @yield('content')

  <!-- Imports -->

    <script src="{{mix('/js/manifest.js')}}"></script>
    <script src="{{mix('/js/vendor.js')}}"></script>
    <script src="{{mix('/js/main.js')}}"></script>

    @yield('importFoot')


</body>

</html>

