<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/bootstrap-extended.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/icons.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- loader-->
    <link href="{{ asset('css/pace.min.css') }}" rel="stylesheet" />

    <title>Login | Dinas PUSDA</title>

    <style>
        body {
            position: relative;
            overflow: hidden; /* Menyembunyikan scroll */
        }

        .background-image {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('{{ asset('images/ruangrapat.jpg') }}');
    background-size: cover;
    background-position: center;
    animation: zoomInOut 20s infinite;
    z-index: -1;
    opacity: 0.7; /* Ubah nilai opacity sesuai kebutuhan */
}

@keyframes zoomInOut {
    0% {
        transform: scale(1);
    }

    25% {
        transform: scale(1.9);
    }

    50% {
        transform: scale(1) translateX(10%);
    }

    75% {
        transform: scale(1.9) translateX(-30%);
    }

    100% {
        transform: scale(1);
    }
}

.authentication-content {
    background: rgba(0, 0, 0, 0.5); /* Black background with transparency */
    border-radius: 10px;
    padding: 20px;
}

</style>
</head>

<body>

    <div class="background-image"></div>

    <!--start wrapper-->
    <div class="wrapper">

        <!--start content-->
        <main class="authentication-content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-4">
                        <div class="authentication-card">
                            <div class="card shadow rounded overflow-hidden">
                                <div class="row g-0">
                                    <div class="col-lg-12">
                                        <div class="card-body p-4 p-sm-5">
                                            <center>
                                                <img width="150px"
                                                src="{{ asset('images/pusda.png') }}"
                                                alt="">
                                            </center>
                                            <h4 class="card-title text-center mt-4">DINAS PU SDA PROVINSI <br> JAWA TIMUR</h4>
                                            <form class="form-body" action="{{ route('login-process') }}" method="POST">
                                                @csrf
                                                @if (session('status'))
                                                <center>
                                                    <small class="text-danger">{{ session('status') }}</small>
                                                </center>
                                                @endif
                                                @if (session('success'))
                                                <center>
                                                    <small class="text-success">{{ session('success') }}</small>
                                                </center>
                                                @endif
                                                @if (session('inactive'))
                                                <center>
                                                    <small class="text-danger">Akun berstatus <strong>nonaktif</strong>.
                                                        Silahkan hubungi pihak administrator untuk melakukan
                                                        <a href="{{ route('activate.request', session('inactive')) }}">aktivasi
                                                        akun.</a>
                                                    </small>
                                                </center>
                                                @endif
                                                <div class="login-separater text-center mb-4"> <span>SIGN IN</span>
                                                    <hr>
                                                </div>

                                                <div class="row g-3">
                                                    <div class="col-12">
                                                        <label for="username" class="form-label">Username</label>
                                                        <div class="ms-auto position-relative">
                                                            <div
                                                            class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                            <i class="bx bx-user"></i>
                                                        </div>
                                                        <input name="username" type="text"
                                                        class="form-control ps-5 
                                                        @error('username') border-danger @enderror"
                                                        id="username" placeholder="Username" autofocus>
                                                    </div>
                                                    @error('username')
                                                    <small class="text-danger">
                                                        {{ $message }}
                                                    </small>
                                                    @enderror
                                                </div>
                                                <div class="col-12">
                                                    <label for="password" class="form-label">
                                                    Password</label>
                                                    <div class="ms-auto position-relative">
                                                        <div
                                                        class="position-absolute top-50 translate-middle-y search-icon px-3">

                                                        <i class="bi bi-lock-fill"></i>
                                                    </div>
                                                    <input name="password" type="password"
                                                    class="form-control ps-5
                                                    @error('password') border-danger @enderror"
                                                    id="password" placeholder="Password">
                                                </div>
                                                @error('password')
                                                <small class="text-danger">
                                                    {{ $message }}
                                                </small>
                                                @enderror
                                            </div>
                                            <div class="col-6">
                                                <div class="form-check form-switch">
                                                    <input name="rememberMe" class="form-check-input"
                                                    type="checkbox" id="rememberMe">
                                                    <label class="form-check-label" for="rememberMe">Remember
                                                    Me</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit"
                                                    class="btn btn-outline-primary">Sign
                                                In</button>
                                            </div>
                                            {{-- <p class="d-block mt-3 text-center">
                                                <a target="_blank"
                                                href="mailto:{{ $admin->email }}">
                                                Hubungi Administrator untuk bantuan.
                                            </a>
                                        </p> --}}
                                        {{-- <p class="d-block mt-3 text-center">
                                            Belum memiliki akun ?
                                            <a href="/register">Daftar
                                                sebagai peminjam
                                            </a>
                                        </p> --}}
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</main>

<!--end page main-->

</div>
<!--end wrapper-->


<!--plugins-->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/pace.min.js') }}"></script>


</body>

</html>
