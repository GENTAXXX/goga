<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_mainpage.css">
    <link rel="stylesheet" href="css/style-signin.css">
    <link rel="stylesheet" href="css/style-signup.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/f071d9c355.js" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
    @yield('css')
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-nav fixed-top">
        <a class="navbar-brand" href="halaman pilih.html">
            <img src="image/whitelogos.png" alt="" style="width: 90px; height: 40px;">
        </a>
        <button class="navbar-toggler  border-white" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon menu-button border-light"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto ">
                <li class="nav-item ">
                    <a class="nav-link text-light ml-auto text-right" href="#">Home <span class="sr-only">(current)</span></a>
                </li>

                @guest
                <li class="nav-item active">
                    <a class="nav-link text-light ml-auto text-right" href="{{ route('login') }}">Sign In</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link text-light ml-auto text-right" href="{{ route('register') }}">Sign Up</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color:white;">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a href="#" class="dropdown-item">
                        {{ __('Profile') }}
                    </a>
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
</div>
</nav>
    @yield('konten')
    <nav class="navbar fixed-bottom bg-nav ">
        <div>
            <a class="navbar-brand mr-2" href="#" style="color:white;">Contact</a>
            <a href="#" class="foot-icon">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="#" class="foot-icon">
                <i class="fab fa-facebook"></i>
            </a>
            <a href="#" class="foot-icon">
                <i class="fab fa-twitter"></i>
            </a>
        </div>
    </nav>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    @yield('js')
</body>
</html>