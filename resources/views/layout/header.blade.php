<!doctype html>
<html lang="en" class="semi-dark">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--plugins-->
    <link href="{{ asset('plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/bootstrap-extended.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/icons.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- ajax header --}}
    <meta id="csrf-token" content="{{ csrf_token() }}">

    <!-- loader-->
    <link href="{{ asset('css/pace.min.css') }}" rel="stylesheet" />

    <!--Theme Styles-->
    <link href="{{ asset('css/dark-theme.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/light-theme.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/semi-dark.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/header-colors.css') }}" rel="stylesheet" />

    {{-- CK Editor --}}
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- Main Quill library -->
    <script src="//cdn.quilljs.com/1.0.0/quill.js"></script>

    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <title>{{ $title ??= 'Title' }} | Dinas PU SDA</title>
</head>

<body>
    <!--start wrapper-->
    <div class="wrapper">
        <!--start top header-->
        <header class="top-header">
            <nav class="navbar navbar-expand gap-3">
                <div class="mobile-toggle-icon fs-3">
                    <i class="bi bi-list"></i>
                </div>
                {{-- <form class="searchbar">
                    <div class="position-absolute top-50 translate-middle-y search-icon ms-3"><i class="bi bi-search"></i></div>
                    <input class="form-control" type="text" placeholder="Type here to search">
                    <div class="position-absolute top-50 translate-middle-y search-close-icon"><i class="bi bi-x-lg"></i>
                    </div>
                </form> --}}
                <div class="top-navbar-right ms-auto">
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item search-toggle-icon">
                            <a class="nav-link" href="#">
                                <div class="">
                                    <i class="bi bi-search"></i>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item dropdown dropdown-user-setting">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                                data-bs-toggle="dropdown">
                                <div class="user-setting d-flex align-items-center">
                                    <div class="d-inline-block mx-4" style="text-align: right">
                                        <span style="font-size: 90%" class="d-block font-weight-lighter">
                                            {{ auth()->user()->name }}
                                        </span>
                                        <span style="font-size: 80%" class="d-block text-secondary">
                                            {{ auth()->user()->role->name }}
                                            @if (auth()->user()->role_id == 1)
                                                <i class="fa-solid fa-crown text-warning"></i>
                                            @elseif (auth()->user()->role_id == 2)
                                                <i class="fa-solid fa-crown text-silver"></i>
                                            @elseif (auth()->user()->role_id == 3)
                                                <i class="fa-solid fa-crown text-brown"></i>
                                            @endif
                                        </span>
                                    </div>
                                    @if (auth()->user()->gender == 'Pria')
                                        <img src="{{ asset('images/avatars/man.png') }}" alt=""
                                             class="rounded-circle" width="35" height="35">
                                    @else
                                        <img src="{{ asset('images/avatars/woman.png') }}" alt=""
                                             class="rounded-circle" width="35" height="35">
                                    @endif
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                {{-- <li>
                                <div class="d-flex align-items-center">
                                        @if (auth()->user()->gender == 'Pria')
                                            <img src="{{ asset('images/avatars/man.png') }}" alt=""
                                                class="rounded-circle" width="54" height="54">
                                        @else
                                            <img src="{{ asset('images/avatars/woman.png') }}" alt=""
                                                class="rounded-circle" width="54" height="54">
                                        @endif
                                        <div class="ms-3">
                                            <h6 class="mb-0 dropdown-user-name">{{ auth()->user()->name }}</h6>
                                            <small
                                                class="mb-0 dropdown-user-designation text-secondary">{{ auth()->user()->role->name }}</small>
                                        </div>
                                    </div>
                                </li> --}}

                                {{-- <li>
                                    <hr class="dropdown-divider">
                                </li> --}}
                                <li>
                                    <a class="dropdown-item" href="{{ route('user.profile') }}">
                                        <div class="d-flex align-items-center">
                                            <div class=""><i class="bi bi-person-fill"></i></div>
                                            <div class="ms-3"><span>Profile</span></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}">
                                        <div class="d-flex align-items-center">
                                            <div class=""><i class="bi bi-lock-fill"></i></div>
                                            <div class="ms-3"><span>Logout</span></div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!--end top header-->

        <!--start sidebar -->
        <aside class="semi-dark sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <a href="/">
                    <img src="{{ asset('images/pusda.png') }}" class="logo-icon" alt="logo icon">
                </a>
                <a href="/">
                    <h5 class="logo-text">PUSDA</h5>
                </a>

                {{--<div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>--}}
                {{--</div>--}}
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                {{-- <li class="mm-active"></li> --}}

                {{-- Dashboard --}}
                <li>
                    <a href="/" class="" aria-expanded="true">
                        <div class="parent-icon"><i class="bi bi-house-fill"></i>
                        </div>
                        <div class="menu-title">Dashboard</div>
                    </a>
                </li>
                <hr>
                {{-- <li class="menu-label">Pengelolaan</li> --}}

                {{-- Pengajuan --}}
                {{-- Hanya diakses oleh Peminjam --}}
                @if (auth()->user()->role_id == 3)
                    <li>
                        <a href="{{ route('request') }}">
                            <div class="parent-icon"><i class="bi bi-list"></i>
                            </div>
                            <div class="menu-title">Pengajuan</div>
                        </a>
                    </li>
                @endif

                {{-- Kelola Jadwal --}}
                {{-- Bisa diakses oleh Admin dan Petugas --}}
                @if (auth()->user()->role_id == 1 || auth()->user()->role_id == 2)
                    <li>
                        <a href="{{ route('schedule.index') }}">
                            <div class="parent-icon"><i class="bi bi-list-check"></i>
                            </div>
                            <div class="menu-title">Kelola Jadwal</div>
                        </a>
                    </li>
                @endif

                {{-- Kelola Pengguna & Kelola Ruangan --}}
                {{-- Hanya diakses oleh Administrator --}}
                @if (auth()->user()->role_id == 1)
                    <li>
                        <a href="{{ route('user.index') }}">
                            <div class="parent-icon"><i class="bi bi-people-fill"></i>
                            </div>
                            <div class="menu-title">Kelola Pengguna</div>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('room.index') }}">
                            <div class="parent-icon"><i class="bi bi-door-closed"></i>
                            </div>
                            <div class="menu-title">Kelola Ruangan</div>
                        </a>
                    </li>
                @endif
            </ul>
            <!--end navigation-->
        </aside>

        <!--end sidebar -->
    </div>
