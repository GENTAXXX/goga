<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/f071d9c355.js" crossorigin="anonymous"></script>
    <title>GOGA</title>
</head>

<body>
    <section>
        <nav class="navbar navbar-expand-lg navbar-light bg-nav">
            <a class="navbar-brand" href="halaman pilih.html">
                <img src="image/whitelogos.png" alt="" style="width: 90px; height: 40px;">
            </a>
            <button class="navbar-toggler  border-white" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon menu-button border-light"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto ">
                    <li class="nav-item active ">
                        <a class="nav-link text-light ml-auto text-right" href="halaman pilih.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light ml-auto text-right" href="{{ route('register') }}">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light ml-auto text-right" href="{{ route('login') }}">Sign In</a>
                    </li>

                </ul>
            </div>
        </nav>
        <div class="container-fluid position-fixed bg-content ">
            <div class="row text-center mt-sm-5 pt-sm-5 d-flex justify-content-center">
                <div class="col">

                    <img class="gbr" src="image/logor.png" alt="" style="width: 156px;">

                </div>

            </div>
            <div class="row text-center mt-2 mb-3">
                <div class="col font-weight-bold align-content-lg-center">
                    <h1 class="selamat">SELAMAT DATANG DI</h1>
                    <h1 class="goga">GOGA</h1>
                    <h1 class="selamat">GOLEK YOUR GAWE HERE</h1>
                    <p class="desc">Job Search Application That Will Help You Find The Work And Labor You Need</p>

                </div>
            </div>
            <a href="sign_in.html">
                <div class="row text-center mt-2">

                    <div class="col font-weight-bold align-content-lg-center">
                        <input class="btn btn-primary btn-mulai" type="submit" value="Mulai">

                    </div>

                </div>
            </a>


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
        <!-- <footer class="footer fixed-bottom">
            <div class="container-fluid">
                <h5>Contact</h5>
                <a href="#" class="foot-icon">
                    <img class="foot-icon" src="image/ig.png" alt="Submit"></a>
                <a href="#" class="foot-icon">
                    <img class="foot-icon" src="image/fb.png" alt="Submit"></a>
                <a href="#" class="foot-icon">
                    <img class="foot-icon" src="image/twt.png" alt="Submit"></a>

            </div>
        </footer> -->
    </section>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html