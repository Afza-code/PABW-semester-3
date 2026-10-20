<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;

class LaporanBanjirController extends Controller
{
    public function create()
    {
        return view('laporan.form');
    }

    public function store(Request $request)
    {
        $laporan = Laporan::create([
            'nama_pelapor'      => $request->nama_pelapor,
            'lokasi'            => $request->lokasi,
            'tinggi_genangan'   => $request->tinggi_genangan,
            'tanggal_kejadian'  => $request->tanggal_kejadian,
        ]);

        return view('laporan.konfirmasi', compact('laporan'));
    }

    public function index()
    {
        $laporan = Laporan::all();

        return view('laporan.index', compact('laporan'));
    }
}
