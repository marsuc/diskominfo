<?php

namespace App\Http\Controllers\PermohonanInformasi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PermohonanInformasi;
use DB;

class PermohonanInformasiController extends Controller
{
    public function index()
    {
        return view('permohonan_informasi.index');
    }

    public function insert(Request $request)
    {
        $request->validate([
            'first_name'     => 'required:max:191',
            'last_name'      => 'required:max:191',
            'status'         => 'required',
            'id_number'      => 'required',
            'address'        => 'required',
            'job'            => 'required',
            'id_picture'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'email'          => 'required|email',
            'phone_number'   => 'required|numeric',
            'info_desc'      => 'required',
            'infor_purposes' => 'required',
            'get_method_2'   => 'required',
            'get_method'     => 'required',
        ]);

        $permohonan = new PermohonanInformasi;

        $permohonan->front_name     = $request->get('first_name');
        $permohonan->last_name      = $request->get('last_name');
        $permohonan->status         = $request->get('status');
        $permohonan->id_number      = $request->get('id_number');
        $permohonan->address        = $request->get('address');
        $permohonan->job            = $request->get('job');
        $permohonan->id_picture     = 'ktp/'.$request->file('id_picture')->getClientOriginalName();
        $permohonan->email          = $request->get('email');
        $permohonan->phone_number   = $request->get('phone_number');
        $permohonan->info_desc      = $request->get('info_desc');
        $permohonan->infor_purposes = $request->get('infor_purposes');
        $permohonan->get_method     = $request->get('get_method');
        $permohonan->get_method_2   = $request->get('get_method_2');

        if ($file = $request->file('id_picture')) {
            $file_name = $file->getClientOriginalName();

            $file->move('storage/ktp', $file_name);
        }

        if ($permohonan->save()) {
            return view('permohonan_informasi.success');
        }

        return view('permohonan_informasi.failed');
    }

    public function laporanTahun()
    {
        // $days = PermohonanInformasi::whereBetween('created_at', [now(), now()->addDays(7)])
        //     ->orderBy('created_at')
        //     ->get()
        //     ->groupBy(function ($val) {
        //         return Carbon::parse($val->created_at)->format('d');
        //     });

        // dd($days);

        // foreach ($days as $day => $permohonan) {
        //     echo '<h2>'.$day.'</h2><ul>';
        //     foreach ($permohonan as $p) {
        //         echo '<li>'.$p->created_at.'</li>';
        //     }
        //     echo '</ul>';
        // }

        $laporan = DB::table('permohonan_informasis')
                        ->select(DB::raw('count(id) as `data`'), DB::raw('YEAR(created_at) year'))
                        ->groupby('year')
                        ->get();
        
        // dd($laporan);

        return view('permohonan_informasi.laporan_tahun', compact('laporan'));
    }

    public function laporanBulan($year)
    {
        $laporan = DB::table('permohonan_informasis')
                        ->select(DB::raw('count(id) as `data`'), DB::raw('YEAR(created_at) year, MONTH(created_at) month'))
                        ->groupby('year', 'month')
                        ->having('year', $year)
                        ->get();
        
        // dd($laporan);

        return view('permohonan_informasi.laporan_bulan', compact('laporan'));
    }
}

