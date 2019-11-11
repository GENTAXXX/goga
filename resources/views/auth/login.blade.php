<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="css/style_mainpage.css">
    <link rel="stylesheet" href="css/style-signin.css">
    <script src="https://kit.fontawesome.com/f071d9c355.js" crossorigin="anonymous"></script>
    <title>Login</title>
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
                <li class="nav-item">
                    <a class="nav-link text-light ml-auto text-right" href="{{ route('register') }}">Sign Up</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-light ml-auto text-right" href="#">Sign In</a>
                </li>

            </ul>
        </div>
    </nav>
    <div class="container-fluid mt-5">
        <div class="row text-center bg-search mt-5">
            <div class="col">
            </div>
        </div>
    </div>
    <body>
        <div class="container h-100">
            <div class="d-flex justify-content-center h-100">
                <div class="user_card">
                    <div class="d-flex justify-content-center">
                        <div class="brand_logo_container">
                            <img src="image/usr.jpg" class="brand_logo" alt="Logo">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center form_container">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="input-group mb-3">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control input_user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Username">
                            </div>
                            <div class="input-group mb-2">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="password" class="form-control input_pass @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="customControlInline">Remember me</label>
                                </div>
                            </div>
                                <div class="d-flex justify-content-center mt-3 login_container">
                                    <button type="submit" name="button" class="btn login_btn">Login</button>
                                </div>

                        </form>
                    </div>
                    <div class="mt-4">
                        <div class="d-flex justify-content-center links">
                            Don't have an account? <a href="sign_up.html" class="ml-2">Sign Up</a>
                        </div>
                        <div class="d-flex justify-content-center links">
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar fixed-bottom bg-nav ">
            <div>
                <a class="navbar-brand mr-2" href="#" style="color:white;">Contact</a>

                <a href="#" class="foot-icon">
                    <i class="fab fa-instagram"></i></a>
                <a href="#" class="foot-icon">
                    <i class="fab fa-facebook"></i></a>
                <a href="#" class="foot-icon">
                    <i class="fab fa-twitter"></i></a>
            </div>
        </nav>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>

    </html