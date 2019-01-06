<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PPID Kab. Bandung</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script src="{{ mix('js/app.js') }}"></script>

    </head>
    <body>
        {{-- Container --}}
        <div class="container-fluid" style="background-color:#286DA8 !important">
            {{-- Navbar --}}
            <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
                <div class="navbar-collapse collapse justify-content-center order-2" id="collapsingNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Profil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Daftar Informasi Publik</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">PPID Pembantu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Permohonan Informasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Kontak Kami</a>
                        </li>
                    </ul>
                </div>
            </nav>
            {{-- Jumbotron Header --}}
            <div class="jumbotron text-center" style="margin-bottom:0; margin-top:50px; background:transparent !important">
                <img src="..." class="img-fluid" alt="Responsive image">
                <h1 class="text-light">PPID Kab. Bandung</h1>
                <p class="text-light">Pejabat Pengelola Informasi dan Dokumentasi Kab. Bandung</p>
            </div>
        </div>
    </body>
</html>
