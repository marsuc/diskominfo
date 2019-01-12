<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ setting('site.title') }}</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}"></script>

    @yield('head')

    <style>
        .dropdown:hover>.dropdown-menu {
           display: block;
        }
    </style>
</head>
<body>
    <div id="app">

        {{-- navbar --}}
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top" style="background-color:#286DA8 !important">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('/images/Bandung.png')}}" width="30" height="30" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse justify-content-center order-2" id="collapsingNavbar">
                <ul class="navbar-nav">
                     <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                        <a class="nav-link font-weight-bold" href="{{ url("/")}}">
                            <i class="fas fa-home mr-1"></i>
                            Beranda
                        </a>
                    </li>
                    <li class="nav-item dropdown {{ Request::is('profil') ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-info-circle mr-1"></i>
                            Profil
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ url("/profil")}}">Profil PPID</a>
                            <a class="dropdown-item" href="{{ url("/profil/bagan-organisasi")}}">Bagan Organisasi PPID</a>
                            <a class="dropdown-item" href="{{ url("/profil/visi-misi")}}">Visi dan Misi</a>
                            <a class="dropdown-item" href="{{ url("/profil/sop")}}">SOP PPID</a>
                            <a class="dropdown-item" href="{{ url("/profil/maklumat-informasi")}}">Maklumat Informasi Publik</a>
                            <a class="dropdown-item" href="{{ url("/profil/mekanisme-pelayanan")}}">Mekanisme Pelayanan Informasi Publik</a>
                            <a class="dropdown-item" href="{{ url("/profil/standar-pelayanan")}}">Standar Pelayanan Informasi Publik</a>
                            <a class="dropdown-item" href="{{ url("/profil/galeri")}}">Galeri PPID</a>
                            <a class="dropdown-item" href="{{ url("/profil/dasar-hukum")}}">Dasar Hukum</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown {{ Request::is('/daftar-informasi-publik') ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-th-list mr-1"></i>
                            Daftar Informasi Publik
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">PPID Utama</a>
                            <a class="dropdown-item" href="#">PPID Pembantu</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown {{ Request::is('/informasi-publik') ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-newspaper mr-1"></i>
                            Informasi Publik
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Informasi Berkala</a>
                            <a class="dropdown-item" href="#">Informasi Serta Merta</a>
                            <a class="dropdown-item" href="#">Informasi Setiap Saat</a>
                        </div>
                    </li>
                    <li class="nav-item {{ Request::is('/ppid-pembantu') ? 'active' : '' }}">
                        <a class="nav-link font-weight-bold" href="{{ url("/ppid-pembantu")}}">
                            <i class="fas fa-question-circle mr-1"></i>
                            PPID Pembantu
                        </a>
                    </li>
                    <li class="nav-item dropdown {{ Request::is('/permohonan-informasi') ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-info-circle mr-1"></i>
                            Permohonan Informasi
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Permohonan Informasi Publik</a>
                            <a class="dropdown-item" href="#">Cek Status Permohonan Informasi Publik</a>
                            <a class="dropdown-item" href="#">Permohonan  Keberatan</a>
                            <a class="dropdown-item" href="#">Cek Status Permohonan Keberatan</a>
                            <a class="dropdown-item" href="#">Laporan Permohonan Informasi Publik</a>
                        </div>
                    </li>
                    <li class="nav-item {{ Request::is('/kontak') ? 'active' : '' }}">
                        <a class="nav-link font-weight-bold" href="{{ url("/kontak-kami")}}">
                            <i class="fas fa-phone mr-1"></i>
                            Kontak Kami
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        {{-- Main content --}}
        <main>
            @yield('content')
        </main>

        {{-- Footer --}}
        @include('layouts.footer')

    </div>
    {{-- <img class="" src="{{ asset('images/Bandung.png') }}" style="position:fixed; bottom:15px; right:10px; margin:0; width:4%; height: auto" href="#"> --}}
</body>
</html>
