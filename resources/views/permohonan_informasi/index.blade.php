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
                <form>
                    {{-- <div class="form-group">
                        <label for="namaDepan">Nama Depan</label>
                        <input type="text" class="form-control" id="namaDepan" aria-describedby="namaDepanHelp" placeholder="Masukkan Nama Depan Anda">
                        <small id="namaDepanHelp" class="form-text text-muted">Nama Depan</small>
                    </div>
                    <div class="form-group">
                        <label for="namaBelakang">Nama Belakang</label>
                        <input type="text" class="form-control" id="namaBelakang" aria-describedby="namaDepanHelp" placeholder="Masukkan Nama Belakang">
                        <small id="namaBelakangHelp" class="form-text text-muted">Nama Belakang</small>
                    </div> --}}
                    <div class="form-row mb-3 mx-2">
                        <div class="col">
                            <label>Nama</label>
                            <input type="text" class="form-control" placeholder="Nama depan">
                        </div>
                        <div class="col">
                            <label>&nbsp</label>
                            <input type="text" class="form-control" placeholder="Nama belakang">
                        </div>
                    </div>
                    <div class="form-row mb-3 mx-2">
                        <div class="col">
                            <label>Status</label>
                            <select class="form-control">
                                <option>Perorangan</option>
                                <option>Kelompok Berbadan Hukum</option>
                                <option>Kelompok Tidak Berbadan Hukum</option>
                            </select>
                        </div>
                        <div class="col">
                            <label>No. KTP / No. SK</label>
                            <input type="text" class="form-control" placeholder="No. KTP / No. SK">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="col">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" id="alamat" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-row mb-3 mx-2">
                        <div class="col">
                            <label>Pekerjaan</label>
                            <input type="text" class="form-control" placeholder="Pekerjaan">
                        </div>
                        <div class="col">
                            <label>Upload Gambar KTP / SK</label>
                            <input type="file" class="form-control-file" id="ktp">
                            <small class="form-text text-muted">max size 2mb</small>
                        </div>
                    </div>
                    <div class="form-row mb-3 mx-2">
                        <div class="col">
                            <label>E-mail</label>
                            <input type="text" class="form-control" placeholder="E-mail">
                        </div>
                        <div class="col">
                            <label>No. Telepon</label>
                            <input type="text" class="form-control" placeholder="No. Telepon">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="col">
                            <label for="alamat">Rincian Informasi yang dibutuhkan</label>
                            <textarea class="form-control" id="rincianInformasi" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="col">
                            <label for="alamat">Tujuan penggunaan informasi</label>
                            <textarea class="form-control" id="tujuanPenggunaan" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-row mb-3 mx-2">
                        <div class="col">
                            <label>Cara Memperoleh Informasi</label>
                            <select class="form-control">
                                <option value="melihat">Melihat</option>
                                <option value="membaca">Membaca</option>
                                <option value="mendengarkan">Mendengarkan</option>
                                <option value="mencatat">Mencatat</option>
                                <option value="mendapatkan_salinan_informasi_(hardcopy/softcopy)">Mendapatkan salinan informasi (hardcopy/softcopy)</option>
                            </select>
                        </div>
                        <div class="col">
                            <label>Cara Mendapatkan Salinan Informasi</label>
                            <select class="form-control">
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
