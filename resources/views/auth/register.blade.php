    @extends('layout')

    @section('title')
    Register
    @endsection

    @section('konten')
    <div class="container-fluid mt-5">
        <div class="row text-center bg-search mt-5">
            <div class="col">
            </div>
        </div>
    </div>
    <body>
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="user_card" style="height: 800px">
                    <div class="d-flex justify-content-center">
                        <div class="brand_logo_container">
                            <img src="image/usr.jpg" class="brand_logo" alt="Logo">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center form_container">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="input-group mb-2">
                                <div class="input-group-append">
                                </div>
                                <input type="text" class="form-control input_user @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Username">
                            </div>
                            <div class="input-group mb-2">
                                <div class="input-group-append">
                                </div>
                                <input type="text" class="form-control input_pass @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-Mail Address ">
                            </div>
                            <div class="input-group mb-2">
                                <div class="input-group-append">
                                </div>
                                <input type="password" class="form-control input_pass @error('password') is-invalid @enderror" name="password" id="password" required autocomplete="new-password" placeholder="Password">
                            </div>
                            <div class="input-group mb-2">
                                <div class="input-group-append">
                                </div>
                                <input id="password-confirm" type="password" class="form-control input_pass" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                            </div>

                            <div class="d-flex justify-content-center mt-3 login_container">
                                    <button type="submit" name="button" class="btn login_btn">DAFTAR</button>

                            </div>
                            <div class="mt-4">
                                <div class="d-flex justify-content-center links">
                                    Sudah punya akun ? <a href="{{ route('login') }}" class="ml-2">Sign In</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        @endsection