<?php

namespace App\Http\Controllers\Ppid;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\PpidUtama;
use App\PpidPembantu;

class PpidController extends Controller
{
    public function utama()
    {
        $utama = PpidUtama::orderBy('created_at', 'asc')->get();

        $utamas = $utama->toArray();

        $i = 0;

        foreach($utama as $u) {

            foreach (json_decode($u->file) as $file) {
                $utamas[$i]['file'] = Storage::disk(config('voyager.storage.disk'))->url($file->download_link);
            }
            print_r($i);

            $i++;
        }

        return view('ppid.ppid_utama', compact('utamas'));
    }

    public function pembantu()
    {
        $pembantu = PpidPembantu::orderBy('created_at', 'desc')->get();

        $pembantus = $pembantu->toArray();

        $i = 0;

        foreach($pembantu as $u) {
            foreach (json_decode($u->file) as $file) {

                $pembantus[$i]['file'] = $u->file = Storage::disk(config('voyager.storage.disk'))->url($file->download_link);
                
            }
            $i++;
        }

        return view('ppid.ppid_pembantu', compact('pembantus'));
    }
}
