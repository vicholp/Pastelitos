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

    <script src="{{mix('/js/manifest.js')}}"></script>
    <script src="{{mix('/js/vendor.js')}}"></script>
    <script src="{{mix('/js/main.js')}}"></script>

    @yield('importFoot')


  <div id="div-stickyButtons">
    @yield('stickyButton')

  </div>
</body>

</html>

