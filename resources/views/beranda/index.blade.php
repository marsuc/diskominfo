@extends('layouts.app')
@section('content')
{{-- Container --}}
<div class="container-fluid" style="background-color:#286DA8">
    {{-- Jumbotron Header --}}
    <div class="jumbotron text-center" style="margin-bottom:0; margin-top:40px; background:transparent !important;">
        <img src="{{ asset('images/gedung-sate.png') }}" class="img-fluid" alt="Responsive image" style="margin-bottom:20px; width:700px">
        <h1 class="text-light">{{ setting('site.title') }}</h1>
        <p class="text-light">{{ setting('site.description') }}</p>
    </div>
</div>
<div class="container-fluid" style="background-color:#286DA8">
    <div class="album py-5">
        <div class="container">
            <div class="d-flex align-items-center p-3 my-3 text-white-50 rounded shadow" style="background-color:#FFFFFF">
                <img class="mr-3" src="{{ asset("images/icons8-circled-g-48.png") }}" alt="B" width="48" height="48">
                <div class="lh-100">
                    <h2 class="mb-0 text-dark lh-100">Galeri</h2>
                </div>
            </div>
            <div id="carouselExampleIndicators" class="carousel slide rounded shadow" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    @for($i = 1; $i <= 6; $i++)
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $i }}"></li>
                    @endfor
                    {{-- <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> --}}
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{ asset('images/carousel1.svg') }}" alt="First slide">
                    </div>
                    @for($i = 1; $i <= 6; $i++)
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('images/carousel2.svg') }}" alt="Second slide">
                    </div>
                    @endfor
                    {{-- <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('images/carousel3.svg') }}" alt="Third slide">
                    </div> --}}
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" style="background-color:#286DA8">
    {{-- Content Body --}}
    <div class="album py-5">
        <div class="container">
            <a class="text-dark" href="{{ url('/berita') }}">
                <div class="d-flex align-items-center p-3 my-3 text-white-50 rounded shadow" style="background-color: white">
                    <img class="mr-3" src="{{ asset("images/icons8-circled-b-48 (1).png") }}" alt="B" width="48" height="48">
                    <div class="lh-100">
                    <h2 class="mb-0 text-dark lh-100">Berita</h2>
                    </div>
                </div>
            </a>
            <div class="row">
                <div class="col-md-12">
                    <div class="card flex-md-row mb-4 shadow h-md-250" style="border: #286DA8">
                        <div class="card-body d-flex flex-column align-items-start">
                            <strong class="d-inline-block mb-2 text-primary">World</strong>
                            <h3 class="mb-0">
                                <a class="text-dark" href="#">Featured post</a>
                            </h3>
                            <div class="mb-1 text-muted">Nov 12</div>
                            <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                            <a href="#">Continue reading</a>
                        </div>
                        <img class="card-img-right flex-auto d-none d-md-block" alt="Thumbnail [200x250]" style="object-fit: cover; max-width: 250px; max-height: 200px;" src="{{ asset('images/phuket-romantic-beaches.jpg') }}" data-holder-rendered="true">
                    </div>
                </div>
                @for($i = 1; $i <= 4; $i++)
                <div class="col-md-6">
                    <div class="card flex-md-row mb-4 shadow h-md-250" style="border: #286DA8">
                        <div class="card-body d-flex flex-column align-items-start">
                            <strong class="d-inline-block mb-2 text-primary">World</strong>
                            <h3 class="mb-0">
                                <a class="text-dark" href="#">Featured post</a>
                            </h3>
                            <div class="mb-1 text-muted">Nov 12</div>
                            <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                            <a href="#">Continue reading</a>
                        </div>
                        <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_167df3ce07a%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_167df3ce07a%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2255.78125%22%20y%3D%22130.7234375%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" style="background-color:#286DA8">
    <div class="row justify-content-center" style="padding-bottom: 50px;">
        <div class="col-4 text-center">
            <a href="#" class="btn btn-light">
                <i class="fa fa-question-circle"></i>
                Buat Permohonan Informasi
            </a>
        </div>
    </div>
</div>

@endsection

