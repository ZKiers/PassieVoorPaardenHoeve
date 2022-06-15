<!DOCTYPE html>
<html>
<head>
  <!-- Hier include ik links (Javascript moet nog een local src worden)-->
  <link rel="icon" href="{{ URL::asset('imgs/logo/passievoorpaardenlogo.png') }}">
    <script src="{{ URL::asset('js/bootstrap.bundle.min.js') }}"></script>
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/My.css') }}" rel="stylesheet">
<title>@yield('title')</title>

</head>
<body class="bg-2 d-flex flex-column min-vh-100">

  <!-- Dit is de container met dropdown en header -->

    <nav class="bg-3 container-fluid">
        <div class="row text-center">

           <!-- Dit is de dropdown -->

            <div class="dropdown d-block d-sm-none">
                <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown button
                </button>
                <ul class="dropdown-menu dropdown-menu-light fullw" aria-labelledby="dropdownMenuButton2">
                  <li><a class="dropdown-item" href="{{ route('home') }}">Home</a></li>
                  <li><a class="dropdown-item" href="{{ route('activiteiten') }}">Activiteiten</a></li>
                  <li><a class="dropdown-item" href="{{ route('game') }}">Game</a></li>
                  <li><a class="dropdown-item" href="{{ route('about') }}">About</a></li>
                  <li><a class="dropdown-item" href="{{ route('contact') }}">Contact</a></li>
                </ul>
              </div>
    
               <!-- Dit is de header -->

          <div class="col-sm-2 nav-link d-none d-sm-block">
            <img src="{{ URL::asset('imgs/logo/passievoorpaardenlogo.png') }}" width="80px" height="80px">
          </div>
          <div class="col-sm-2 nav-link my-auto  font-weight-bold d-none d-sm-block">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="text-2 nav-link" href="{{ route('home') }}">Home</a>
            </li>
          </ul>
          </div>
          <div class="col-sm-2 nav-link my-auto  font-weight-bold d-none d-sm-block">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link text-2" href="{{ route('activiteiten') }}">Activiteiten</a>
              </li>
            </ul>
          </div>
          <div class="col-sm-2 nav-link my-auto  font-weight-bold d-none d-sm-block">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link text-2" href="{{ route('game') }}">Game</a>
              </li>
            </ul>
          </div>
          <div class="col-sm-2 nav-link my-auto  font-weight-bold d-none d-sm-block">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link text-2" href="{{ route('about') }}">About</a>
              </li>
            </ul>
          </div>
          <div class="col-sm-2 nav-link my-auto  font-weight-bold d-none d-sm-block">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link text-2" href="{{ route('contact') }}">Contact</a>
                </li>
              </ul>
          </div>
        </div>
      </nav>

      @yield('content')

 <!-- Dit is de footer -->

      <footer class="mt-auto">

        <div class="bg-3 container-fluid h-100 text-2">
          <div class="row text-center">
            <div class="col-md-4 nav-link my-auto ">
              <img src="{{ URL::asset('imgs/logo/passievoorpaardenlogo.png') }}" width="100px" height="100px">
            </div>
            <div class="col-md-4 nav-link font-weight-bold">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link text-2" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-2" href="#">Activiteiten</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-2" href="#">Game</a>
                  </li>
              </ul>
            </div>
            <div class="col-md-4 nav-link font-weight-bold">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link text-2" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-2" href="#">Contact</a>
                  </li>
                  <li class="nav-item text-1 pt-2">
                   <a>&copy;2022</a>
                  </li> 
              </ul>
            </div>
          </div>
        </div>
      </footer>
</body>
</html>