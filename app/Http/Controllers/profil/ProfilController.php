<?php

namespace App\Http\Controllers\profil;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfilController extends Controller
{
    public function index()
    {
        return view('profil.index');
    }

    public function indexBagan()
    {
        return view('profil.bagan');
    }

    public function indexVisiMisi()
    {
        return view('profil.visi_misi');
    }

    public function indexSop()
    {
        return view('profil.sop');
    }

    public function indexMaklumatInformasi()
    {
        return view('profil.maklumat_informasi');
    }

    public function indexMekanismePelayananInformasi()
    {
        return view('profil.mekanisme_pelayanan');
    }

    public function indexStandarPelayananInformasi()
    {
        return view('profil.standar_pelayanan');
    }

    public function indexGaleri()
    {
        return view('profil.galeri');
    }

    public function indexDasarHukum()
    {
        return view('profil.dasar_hukum');
    }
}
