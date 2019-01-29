<?php

namespace App\Http\Controllers\Profil;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Page;
use App\Galery;

class ProfilController extends Controller
{
    public function index()
    {
        $profil = Page::where('slug', 'profil')->first();
        // $profil = $profil->toArray();

        // dd($profil);

        return view('profil.index', compact('profil'));
    }

    public function indexBagan()
    {
        $bagan = Page::where('slug', 'bagan-organisasi')->first();

        return view('profil.bagan', compact('bagan'));
    }

    public function indexVisiMisi()
    {
        $visimisi = Page::where('slug', 'visi-misi')->first();

        return view('profil.visi_misi', compact('visimisi'));
    }

    public function indexSop()
    {
        $sop = Page::where('slug', 'sop')->first();

        return view('profil.sop', compact('sop'));
    }

    public function indexMaklumatInformasi()
    {
        $minfo = Page::where('slug', 'maklumat-informasi')->first();

        return view('profil.maklumat_informasi', compact('minfo'));
    }

    public function indexMekanismePelayananInformasi()
    {
        $mpinfo = Page::where('slug', 'mekanisme-pelayanan')->first();

        return view('profil.mekanisme_pelayanan', compact('mpinfo'));
    }

    public function indexStandarPelayananInformasi()
    {
        $spinfo = Page::where('slug', 'standar-pelayanan')->first();

        return view('profil.standar_pelayanan', compact('spinfo'));
    }

    public function indexGaleri()
    {
        $images = Galery::orderBy('created_at', 'desc')->get();

        return view('profil.galeri', compact('images'));
    }

    public function indexDasarHukum()
    {
        $hukum = Page::where('slug', 'dasar-hukum')->first();

        return view('profil.dasar_hukum', compact('hukum'));
    }
}
