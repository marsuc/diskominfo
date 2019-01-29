@extends('layouts.app')
@section('content')
{{-- Container --}}
<div class="container-fluid" style="background-color:#286DA8">
    {{-- Jumbotron Header --}}
    <div class="jumbotron text-center" style="margin-bottom:0; margin-top:40px; background:transparent !important;">
        <img src="{{ 'http://localhost:8000/storage/'.setting('site.image') }}" class="img-fluid" alt="Responsive image" style="margin-bottom:20px; width:700px">
        <h1 class="text-light">{{ setting('site.title') }}</h1>
        <p class="text-light">{{ setting('site.description') }}</p>
    </div>
</div>
<div class="container-fluid" style="background-color:#286DA8">
    <div class="album py-5">
        <div class="container">
            <a class="text-dark" href="{{ url("/profil/galeri") }}">
                <div class="d-flex align-items-center p-3 my-3 text-white-50 rounded shadow" style="background-color:#FFFFFF">
                    <img class="mr-3" src="{{ asset("images/icons8-circled-g-48.png") }}" alt="B" width="48" height="48">
                    <div class="lh-100">
                        <h2 class="mb-0 text-dark lh-100">Galeri</h2>
                    </div>
                </div>
            </a>
            <div id="carouselExampleIndicators" class="carousel slide rounded shadow" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    @for($i = 1; $i < count($images); $i++)
                        <li data-target="#carouselExampleIndicators" data-slide-to="{{ $i }}"></li>
                    @endfor
                    {{-- <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> --}}
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{ asset('storage/'.$images[0]['image']) }}" alt="First slide" style="object-fit: cover; height: 550px;">
                    </div>
                    @for ($i = 1; $i < count($images); $i++)
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('storage/'.$images[$i]['image']) }}" alt="Image" style="object-fit: cover; height: 550px;">
                    </div>
                    @endfor                    
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
                            <strong class="d-inline-block mb-2 text-primary">{!! $posts[0]['category']['name'] !!}</strong>
                            <h3 class="mb-0">
                                <a class="text-dark" href="{{ url('/berita/'.$posts[0]['slug']) }}">{!! $posts[0]['title'] !!}</a>
                            </h3>
                            <div class="mb-1 text-muted">{!! \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $posts[0]['created_at'])->format('d M Y') !!}</div>
                            {{-- <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p> --}}
                            <p class="card-text mb-auto">{!! substr(str_replace(array('<p>', '</p>'), '', $posts[0]['body']), 0, 200) !!}...</p>
                            <a href="{{ url('/berita/'.$posts[0]['slug']) }}">Baca lebih lanjut</a>
                        </div>
                        <img class="card-img-right flex-auto d-none d-md-block" alt="Thumbnail [200x250]" style="object-fit: cover; max-width: 250px; max-height: 250px;" src="{{ asset('storage/'.$posts[0]['image']) }}" data-holder-rendered="true">
                    </div>
                </div>
                @if (count($posts) > 0)
                    @for($i = 1; $i < count($posts); $i++)
                    <div class="col-md-6">
                        <div class="card flex-md-row mb-4 shadow h-md-250" style="border: #286DA8">
                            <div class="card-body d-flex flex-column align-items-start">
                                <strong class="d-inline-block mb-2 text-primary">{!! $posts[$i]['category']['name'] !!}</strong>
                                <h3 class="mb-0">
                                    <a class="text-dark" href="{{ url('/berita/'.$posts[$i]['slug']) }}">{!! $posts[$i]['title'] !!}</a>
                                </h3>
                                <div class="mb-1 text-muted">{!! \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $posts[$i]['created_at'])->format('d M Y') !!}</div>
                                <p class="card-text mb-auto">{!! substr(str_replace(array('<p>', '</p>'), '', $posts[$i]['body']), 0, 100) !!}...</p>
                                <a href="{{ url('/berita/'.$posts[$i]['slug']) }}">Baca lebih lanjut</a>
                            </div>
                        <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="object-fit: cover; width: 250px; height: 250px;" src="{{ asset('storage/'.$posts[$i]['image']) }}" data-holder-rendered="true">
                        </div>
                    </div>
                    @endfor
                @endif
            </div>
        </div>
    </div>
</div>

@endsection

