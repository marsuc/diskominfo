@extends('layouts.app')
@section('content')
{{-- Content Header --}}
<div class="container-fluid" style="background-color:#286DA8">
    <div class="jumbotron text-center" style="margin-bottom:0; margin-top:40px; background:transparent !important;">
        <img src="{{ asset('images/icons8-news-100 (1).png') }}" class="img-fluid" alt="Responsive image" style="margin-bottom:20px;">
        <h1 class="text-light">Berita</h1>
        <p class="text-light">Kabar Terbaru Tentang Kab. Bandung</p>
    </div>
</div>
{{-- Content Body --}}
<div class="container-fluid" style="background-color:#286DA8">
    <div class="album py-5">
        <div class="container">
            <div class="d-flex align-items-center p-3 my-3 text-white-50 rounded shadow" style="background-color:#FFFFFF">
                <img class="mr-3" src="{{ asset("images/icons8-circled-b-48 (1).png") }}" alt="B" width="48" height="48">
                <div class="lh-100">
                    <h2 class="mb-0 text-dark lh-100">Daftar Berita</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card flex-md-row mb-4 shadow h-md-250" style="border: #286DA8">
                        <div class="card-body d-flex flex-column align-items-start">
                            <strong class="d-inline-block mb-2 text-primary">{!! $posts['data'][0]['category']['name'] !!}</strong>
                            <h3 class="mb-0">
                                <a class="text-dark" href="{{ url('/berita/'.$posts['data'][0]['slug']) }}">{!! $posts['data'][0]['title'] !!}</a>
                            </h3>
                            <div class="mb-1 text-muted">{!! \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $posts['data'][0]['created_at'])->format('d M Y') !!}</div>
                            <p class="card-text mb-auto">{!! substr(str_replace(array('<p>', '</p>'), '', $posts['data'][0]['body']), 0, 200) !!}...</p>
                            <a href="{{ url('/berita/'.$posts['data'][0]['slug']) }}">Baca lebih lanjut</a>
                        </div>
                        <img class="card-img-right flex-auto d-none d-md-block" alt="Thumbnail [200x250]" style="object-fit: cover; max-width: 250px; max-height: 250px;" src="{{ asset('storage/'.$posts['data'][0]['image']) }}" data-holder-rendered="true">
                    </div>
                </div>
                @if (count($posts['data']) > 0)
                    @for($i = 1; $i < count($posts['data']); $i++)
                    <div class="col-md-6">
                        <div class="card flex-md-row mb-4 shadow h-md-250" style="border: #286DA8">
                            <div class="card-body d-flex flex-column align-items-start">
                                <strong class="d-inline-block mb-2 text-primary">{!! $posts['data'][$i]['category']['name'] !!}</strong>
                                <h3 class="mb-0">
                                    <a class="text-dark" href="{{ url('/berita/'.$posts['data'][$i]['slug']) }}">{!! $posts['data'][$i]['title'] !!}</a>
                                </h3>
                                <div class="mb-1 text-muted">{!! \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $posts['data'][$i]['created_at'])->format('d M Y') !!}</div>
                                <p class="card-text mb-auto">{!! substr(str_replace(array('<p>', '</p>'), '', $posts['data'][$i]['body']), 0, 100) !!}...</p>
                                <a href="{{ url('/berita/'.$posts['data'][$i]['slug']) }}">Baca lebih lanjut</a>
                            </div>
                        <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="object-fit: cover; width: 250px; height: 250px;" src="{{ asset('storage/'.$posts['data'][$i]['image']) }}" data-holder-rendered="true">
                        </div>
                    </div>
                    @endfor
                @endif
            </div>
        </div>
        <div class="container">
            <div class="row">
                <nav aria-label="Page navigation example" class="mx-auto">
                    <ul class="pagination" style="margin-left: auto !important; margin-right: auto !important;">
                        @if ($posts['prev_page_url'])
                        <li class="page-item"><a class="page-link" href="{{$posts['prev_page_url']}}"><i class="fas fa-arrow-left mr-1"></i> Halaman sebelumnya</a></li>
                        @else
                        <li class="page-item disabled"><a class="page-link" href=""><i class="fas fa-arrow-left mr-1"></i> Halaman sebelumnya</a></li>
                        @endif
                        @if ($posts['next_page_url'])
                        <li class="page-item"><a class="page-link" href="{{$posts['next_page_url']}}">Halaman berikutnya <i class="fas fa-arrow-right ml-1"></i></a></li>
                        @else
                        <li class="page-item disabled"><a class="page-link" href="">Halaman berikutnya <i class="fas fa-arrow-right ml-1"></i></a></li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection
