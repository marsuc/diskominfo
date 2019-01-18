<?php

namespace App\Http\Controllers\PermohonanInformasi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PermohonanInformasiController extends Controller
{
    public function index()
    {
        return view('permohonan_informasi.index');
    }
}
