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
    <div class="album py-1">
        <div class="container">
            <div class="d-flex align-items-center p-3 text-white-50 rounded shadow" style="background-color:#FFFFFF">
                <img class="mr-3" src="{{ asset('images/icons8-circled-b-48 (1).png') }}" alt="B" width="48" height="48">
                <div class="lh-100">
                    <h2 class="mb-0 text-dark lh-100">{!! $post['title'] !!}</h2>
                </div>
            </div>
            <div class="align-items-center p-3 my-3 rounded shadow" style="background-color:#FFFFFF">
                @if ($post['image'])
                <img class="mx-auto mb-3 d-block" src="{{ asset('storage/'.$post['image']) }}" alt="post-image" width="500">
                @endif
                {!! $post['body'] !!}
            </div>
        </div>
    </div>
</div>
