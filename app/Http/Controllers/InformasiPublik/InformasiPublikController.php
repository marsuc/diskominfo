<?php

namespace App\Http\Controllers\InformasiPublik;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Informasi;

class InformasiPublikController extends Controller
{
    public function berkala()
    {
        $information = new Informasi;
        $information = $information
                            ->where('category', 'Berkala')
                            ->orderBy('created_at', 'desc')
                            ->get();

        $info = $information->toArray();

        $i = 0;

        foreach ($information as $in) {
            foreach (json_decode($in->file) as $file) {
                $info[$i]['file'] = Storage::disk(config('voyager.storage.disk'))->url($file->download_link);
            }

            $i++;
        }

        return view('informasi.berkala', compact('info'));
    }

    public function sertaMerta()
    {
        $information = new Informasi;
        $information = $information
                            ->where('category', 'Serta Merta')
                            ->orderBy('created_at', 'desc')
                            ->get();

        $info = $information->toArray();

        $i = 0;

        foreach ($information as $in) {
            foreach (json_decode($in->file) as $file) {
                $info[$i]['file'] = Storage::disk(config('voyager.storage.disk'))->url($file->download_link);
            }

            $i++;
        }

        return view('informasi.serta_merta', compact('info'));
    }

    public function setiapSaat()
    {
        $information = new Informasi;
        $information = $information
                            ->where('category', 'Setiap Saat')
                            ->orderBy('created_at', 'desc')
                            ->get();

        $info = $information->toArray();

        $i = 0;

        foreach ($information as $in) {
            foreach (json_decode($in->file) as $file) {
                $info[$i]['file'] = Storage::disk(config('voyager.storage.disk'))->url($file->download_link);
            }

            $i++;
        }

        return view('informasi.setiap_saat', compact('info'));
    }
}
