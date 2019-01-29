@extends('layouts.app')
@section('content')
{{-- Content Header --}}
<div class="container-fluid" style="background-color:#286DA8">
    <div class="jumbotron text-center mb-0 mt-4" style="background:transparent !important;">
        <img src="{{ asset('images/icons8-ask-question-100.png') }}" class="img-fluid" alt="Responsive image" style="margin-bottom:20px;">
        <h1 class="text-light">Permohonan Informasi Publik</h1>
        <p class="text-light mb-0">Permohonan Informasi Publik PPID Kab. Bandung</p>
    </div>
</div>
{{-- Content Body --}}
<div class="container-fluid" style="background-color:#286DA8">
    <div class="album py-1">
        <div class="container">
            <div class="d-flex align-items-center p-3 text-white-50 rounded shadow" style="background-color:#FFFFFF">
                <img class="mr-3" src="{{ asset("images/icons8-circled-p-48.png") }}" alt="B" width="48" height="48">
                <div class="lh-100">
                    <h2 class="mb-0 text-dark lh-100">Permohonan Informasi Publik</h2>
                </div>
            </div>
            <div class="align-items-center p-3 my-3 rounded shadow" style="background-color:#FFFFFF">
                <form enctype="multipart/form-data" method="POST" action="{{ url('permohonan-informasi-publik') }}">
                    <div class="form-row mb-3 mx-2">
                        @csrf
                        <div class="col">
                            <label>Nama</label>
                            <input type="text" name="first_name" class="form-control" placeholder="Nama depan">
                        </div>
                        <div class="col">
                            <label>&nbsp</label>
                            <input type="text" name="last_name" class="form-control" placeholder="Nama belakang">
                        </div>
                    </div>
                    <div class="form-row mb-3 mx-2">
                        <div class="col">
                            <label>Status</label>
                            <select class="form-control" name="status">
                                <option>Perorangan</option>
                                <option>Kelompok Berbadan Hukum</option>
                                <option>Kelompok Tidak Berbadan Hukum</option>
                            </select>
                        </div>
                        <div class="col">
                            <label>No. KTP / No. SK</label>
                            <input type="text" name="id_number" class="form-control" placeholder="No. KTP / No. SK">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="col">
                            <label for="address">Alamat</label>
                            <textarea name="address" class="form-control" id="address" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-row mb-3 mx-2">
                        <div class="col">
                            <label>Pekerjaan</label>
                            <input type="text" name="job" class="form-control" placeholder="Pekerjaan">
                        </div>
                        <div class="col">
                            <label>Upload Gambar KTP / SK</label>
                            <input type="file" name="id_picture" class="form-control-file" id="id_picture">
                            <small class="form-text text-muted">ukuran maksimum 2mb</small>
                        </div>
                    </div>
                    <div class="form-row mb-3 mx-2">
                        <div class="col">
                            <label>E-mail</label>
                            <input type="text" name="email" class="form-control" placeholder="E-mail">
                        </div>
                        <div class="col">
                            <label>No. Telepon</label>
                            <input type="text" name="phone_number" class="form-control" placeholder="No. Telepon">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="col">
                            <label for="alamat">Rincian Informasi yang dibutuhkan</label>
                            <textarea name="info_desc" class="form-control" id="rincianInformasi" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="col">
                            <label for="alamat">Tujuan penggunaan informasi</label>
                            <textarea name="infor_purposes" class="form-control" id="tujuanPenggunaan" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-row mb-3 mx-2">
                        <div class="col">
                            <label>Cara Memperoleh Informasi</label>
                            <select name="get_method" class="form-control">
                                <option value="melihat">Melihat</option>
                                <option value="membaca">Membaca</option>
                                <option value="mendengarkan">Mendengarkan</option>
                                <option value="mencatat">Mencatat</option>
                                <option value="mendapatkan_salinan_informasi_(hardcopy/softcopy)">Mendapatkan salinan informasi (hardcopy/softcopy)</option>
                            </select>
                        </div>
                        <div class="col">
                            <label>Cara Mendapatkan Salinan Informasi</label>
                            <select name="get_method_2" class="form-control">
                                <option value="mengambil_langsung">Mengambil Langsung</option>
                                <option value="kurir">Kurir</option>
                                <option value="faksimili">Faksimili</option>
                                <option value="e-mail">E-Mail</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary mx-2">Kirim Permohonan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
