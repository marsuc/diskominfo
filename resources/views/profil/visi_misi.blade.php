@extends('layouts.app')
@section('content')
{{-- Content Header --}}
<div class="container-fluid" style="background-color:#286DA8">
    <div class="jumbotron text-center mb-0 mt-4" style="background:transparent !important;">
        <img src="{{ asset('images/icons8-menu-100.png') }}" class="img-fluid" alt="Responsive image" style="margin-bottom:20px;">
        <h1 class="text-light">Visi dan Misi</h1>
        <p class="text-light mb-0">Visi dan Misi PPID Kab. Bandung</p>
    </div>
</div>
{{-- Content Body --}}
<div class="container-fluid" style="background-color:#286DA8">
    <div class="album py-1">
        <div class="container">
            <div class="d-flex align-items-center p-3 text-white-50 rounded shadow" style="background-color:#FFFFFF">
                <img class="mr-3" src="{{ asset("images/icons8-circled-v-48.png") }}" alt="B" width="48" height="48">
                <div class="lh-100">
                    <h2 class="mb-0 text-dark lh-100">{!! $visimisi->title !!}</h2>
                </div>
            </div>
            <div class="align-items-center p-3 my-3 rounded shadow" style="background-color:#FFFFFF">
                {!! $visimisi->body!!}                
            </div>
        </div>
    </div>
</div>
