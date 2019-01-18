<?php

namespace App\Http\Controllers\Berita;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BeritaController extends Controller
{
    public function index()
    {
        return view('berita.index');
    }

    public function show($slug)
    {

    }
}
