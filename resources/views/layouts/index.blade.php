<html>
<head>
  <!-- Skrypty Js -->
  <script src="{{ asset('js/app.js')}}" defer></script>
  <script src="{{ asset('js/search.js') }}" defer></script>
  <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->
  <script src="{{ asset('js/filters.js') }}" defer></script>
  <!-- CSS -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <!-- fonts -->
</head>
<body>
  <!-- nagłówek -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <a class="navbar-brand" href="{{route('index')}}">Księgarnia</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="{{route('lista')}}">Lista książek</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Nowości</a>
      </li>
      @guest
          <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
          @if (Route::has('register'))
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
          @endif
      @else
          <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </div>
            </li>
            @endguest
    </ul>
    <!-- Wyszukiwarka -->
  <form class="form-line my-2 my-lg-0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <select class="wyszukiwarka form-control" name="wyszukiwarka">
    </select>
    <button class="btn btn-outline my-2 my-sm-0" id='search' type="submit">Szukaj</button>
  </form>
</div>
</nav>
<!-- tresc -->
  <main class="py-4">
      @yield('content')
  </main>
  <!--stopka -->
  <!-- Footer -->
<footer class="bg-dark text-center text-white">
  <div class="container p-4">
    <!-- Socjal media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
        <i class="bi bi-facebook"></i></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Links -->
    <section class="">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-12 mb-md-0">
          <h4 class="text-uppercase">Księgarnia</h5>
        </div>

        <div class="col-lg-4 col-md-12 mb-12 mb-md-0">
          <h5 class="text-uppercase">Dane</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">O nas</a>
            </li>
            <li>
              <a href="#!" class="text-white">Cennik</a>
            </li>
            <li>
              <a href="#!" class="text-white">Regulamin</a>
            </li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase">Kontakt</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a class="text-white">Telefon: </a>
            </li>
            <li>
              <a class="text-white">Email: </a>
            </li>
            <li>
              <a class="text-white">Adres: </a>
            </li>
          </ul>
        </div>
    </section>
  </div>

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright:
    <a class="text-white" href="{{route('index')}}">Ksiegarnia.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</body>
</html>
