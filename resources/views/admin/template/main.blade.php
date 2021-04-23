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

    <script
      src="https://code.jquery.com/jquery-3.5.1.min.js"
      integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
      crossorigin="anonymous">
    </script>

    @yield('importHead')

</head>
<body>


  <!--Navbar-->
    <nav class="navbar shadow-sm navbar-expand-lg navbar-light bg-blue">
      <a class="pacifico text-pink" href="/admin"><h3>@yield('title')</h3></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/admin">Inicio <span class="sr-only">(current)</span></a>
          </li>
        </ul>
        <span class="navbar-text">
          {{$user}}
          <a class="btn ml-3 btn-outline-secondary" href="/admin/logout" role="button">Logout</a>
        </span>
      </div>
    </nav>


  <!-- Content -->

    @yield('content')

  <!-- Imports -->

    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.materialdesignicons.com/5.1.45/css/materialdesignicons.min.css" >

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>

    @yield('importFoot')


  <div id="div-stickyButtons">
    @yield('stickyButton')

  </div>
</body>

</html>

