@extends('layouts.app')

@section('head')
{{-- baguetteBox --}}
{{-- <link type="text/css" rel="stylesheet" href="{{ asset('css/baguetteBox.css') }}"> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />

<style>
    .gallery-block.grid-gallery{
        padding-bottom: 60px;
        padding-top: 60px;
    }

    .gallery-block.grid-gallery .heading{
        margin-bottom: 50px;
        text-align: center;
    }

    .gallery-block.grid-gallery .heading h2{
        font-weight: bold;
        font-size: 1.4rem;
        text-transform: uppercase;
    }

    .gallery-block.grid-gallery a:hover{
        opacity: 0.8;
    }

    .gallery-block.grid-gallery .item img{
        box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.15);
        transition: 0.4s;
    }

    .gallery-block.grid-gallery .item{
        margin-bottom: 20px;
    }

    @media (min-width: 576px) {

        .gallery-block.grid-gallery .scale-on-hover:hover{
            transform: scale(1.05);
            box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.15) !important;
        }
    }
</style>
@endsection

@section('content')
{{-- Content Header --}}
<div class="container-fluid" style="background-color:#286DA8">
    <div class="jumbotron text-center" style="margin-bottom:0; margin-top:40px; background:transparent !important;">
        <img src="{{ asset('images/icons8-picture-100.png') }}" class="img-fluid" alt="Responsive image" style="margin-bottom:20px;">
        <h1 class="text-light">Galari</h1>
        <p class="text-light">Galeri PPID Kab. Bandung</p>
    </div>
</div>
{{-- Content Body --}}
<div class="container-fluid" style="background-color:#286DA8">
    <div class="album py-5">
        <div class="container">
            <div class="d-flex align-items-center p-3 my-3 text-white-50 rounded shadow" style="background-color:#FFFFFF">
                <img class="mr-3" src="{{ asset("images/icons8-circled-g-48.png") }}" alt="B" width="48" height="48">
                <div class="lh-100">
                    <h2 class="mb-0 text-dark lh-100">Galeri</h2>
                </div>
            </div>
            <div class="align-items-center p-3 my-3 rounded shadow" style="background-color:#FFFFFF">
                <section class="gallery-block grid-gallery">
                    <div class="container">
                        <div class="row">
                            @foreach($images as $image)
                            <div class="col-md-6 col-lg-4 item">
                                <a class="lightbox" href="{{ asset('storage/'.$image->image) }}">
                                    <img class="img-fluid image scale-on-hover" style="object-fit: cover; width: 350px; height: 200px;" src="{{ asset('storage/'.$image->image) }}">
                                </a>
                            </div>
                            @endforeach
                            {{-- <div class="col-md-6 col-lg-4 item">
                                <a class="lightbox" href="{{ asset("images/image2.jpg") }}") }}">
                                    <img class="img-fluid image scale-on-hover" src="{{ asset("images/image2.jpg") }}">
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-4 item">
                                <a class="lightbox" href="{{ asset("images/image3.jpg") }}">
                                    <img class="img-fluid image scale-on-hover" src="{{ asset("images/image3.jpg") }}">
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-4 item">
                                <a class="lightbox" href="{{ asset("images/image4.jpg") }}">
                                    <img class="img-fluid image scale-on-hover" src="{{ asset("images/image4.jpg") }}">
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-4 item">
                                <a class="lightbox" href="{{ asset("images/image5.jpg") }}">
                                    <img class="img-fluid image scale-on-hover" src="{{ asset("images/image5.jpg") }}">
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-4 item">
                                <a class="lightbox" href="{{ asset("images/image6.jpg") }}">
                                    <img class="img-fluid image scale-on-hover" src="{{ asset("images/image6.jpg") }}">
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-4 item">
                                <a class="lightbox" href="{{ asset("images/image7.jpg") }}">
                                    <img class="img-fluid image scale-on-hover" src="{{ asset("images/image7.jpg") }}">
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-4 item">
                                <a class="lightbox" href="{{ asset("images/image8.jpg") }}">
                                    <img class="img-fluid image scale-on-hover" src="{{ asset("images/image8.jpg") }}">
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-4 item">
                                <a class="lightbox" href="{{ asset("images/image9.jpg") }}">
                                    <img class="img-fluid image scale-on-hover" src="{{ asset("images/image9.jpg") }}">
                                </a>
                            </div> --}}
                        </div>
                    </div>
                </section>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
                {{-- <script src="{{ asset('js/baguetteBox.js') }}"></script> --}}
                <script>
                    baguetteBox.run('.grid-gallery', { animation: 'slideIn'});
                </script>
            </div>
        </div>
    </div>
</div>
@endsection
