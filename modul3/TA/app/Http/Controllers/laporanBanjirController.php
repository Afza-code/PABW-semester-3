<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class laporanBanjirController extends Controller
{
    public function dataLaporan()
    {
        return [
            [
                'nama'   => 'Budi Santoso',
                'lokasi' => 'Desa Cangkuang, Dayeuhkolot',
                'tinggi' => 25,
                'waktu'  => '07:45 WIB',
            ],
            [
                'nama'   => 'Siti Aminah',
                'lokasi' => 'Jl. Raya Soreang KM 10',
                'tinggi' => 45,
                'waktu'  => '08:20 WIB',
            ],
            [
                'nama'   => 'Rudi Hartono',
                'lokasi' => 'Kecamatan Baleendah',
                'tinggi' => 60,
                'waktu'  => '09:05 WIB',
            ],
            [
                'nama'   => 'Dewi Lestari',
                'lokasi' => 'Desa Bojongsoang',
                'tinggi' => 85,
                'waktu'  => '09:40 WIB',
            ],
            [
                'nama'   => 'Agus Setiawan',
                'lokasi' => 'Kelurahan Andir, Baleendah',
                'tinggi' => 120,
                'waktu'  => '10:15 WIB',
            ],
        ];
    }

    public function create()
    {
        return view('laporan.form');
    }

    public function store(Request $request)
    {
        $laporan = [
            'nama'   => $request->nama,
            'lokasi' => $request->lokasi,
            'tinggi' => $request->tinggi,
        ];

        return view('laporan.konfirmasi', compact('laporan'));
    }

    public function index()
    {
        $laporan = $this->dataLaporan();

        return view('laporan.index', compact('laporan'));
    }
}
