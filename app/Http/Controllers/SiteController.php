<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        return view('beranda.index');
    }

    public function profile()
    {
        return 'profil';
    }

    public function informasiPublik()
    {
        return 'informasi publik';
    }

    public function ppidPembantu()
    {
        return 'ppid pembantu';
    }

    public function permohonanInformasi()
    {
        return 'permohonan informasi';
    }

    public function insertPermohonanInformasi()
    {
        return 'insert permohonan informasi';
    }

    public function kontakKami()
    {
        return 'kontak kami';
    }
}
