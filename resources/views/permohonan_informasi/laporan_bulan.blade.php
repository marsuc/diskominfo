@extends('layouts.app')
@section('content')
{{-- Content Header --}}
<div class="container-fluid" style="background-color:#286DA8">
        <div class="jumbotron text-center mb-0 mt-4" style="background:transparent !important;">
            <img src="{{ asset('images/icons8-ask-question-100.png') }}" class="img-fluid" alt="Responsive image" style="margin-bottom:20px;">
            <h1 class="text-light">Laporan Permohonan Informasi Publik</h1>
            <p class="text-light mb-0">Permohonan Informasi Publik PPID Kab. Bandung</p>
        </div>
    </div>
{{-- Content Body --}}
<div class="container-fluid" style="background-color:#286DA8">
    <div class="album py-1">
        <div class="container">
            <div class="d-flex align-items-center p-3 text-white-50 rounded shadow" style="background-color:#FFFFFF">
                <img class="mr-3" src="{{ asset("images/icons8-circled-b-48 (1).png") }}" alt="B" width="48" height="48">
                <div class="lh-100">
                    <h2 class="mb-0 text-dark lh-100">Laporan Permohonan Informasi Publik</h2>
                </div>
            </div>
            <div class="align-items-center p-3 my-3 rounded shadow" style="background-color:#FFFFFF">
                <table class="table">
                <thead class="bg-info">
                    <tr>
                        <th scope="col">Bulan</th>
                        <th scope="col">Jumlah</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($laporan as $l)
                    <tr>
                        <td>{{ date("F", mktime(0, 0, 0, $l->month, 1)) }}</td>
                        <td>{{ $l->data }}</td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
