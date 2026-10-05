<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanBanjirController extends Controller
{
    /**
     * Data contoh laporan banjir (prototipe tanpa database).
     */
    private function dataLaporan(): array
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

    /**
     * Halaman form pelaporan banjir (GET /laporan).
     */
    public function create()
    {
        return view('laporan.create');
    }

    /**
     * Memproses data form yang dikirim dengan method POST (POST /laporan).
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama'   => 'required|string|max:100',
            'lokasi' => 'required|string|max:150',
            'tinggi' => 'required|numeric|min:0|max:1000',
        ]);

        // Simpan sementara di session, lalu arahkan ke halaman konfirmasi.
        return redirect()
            ->route('laporan.konfirmasi')
            ->with('laporan', [
                'nama'   => $validated['nama'],
                'lokasi' => $validated['lokasi'],
                'tinggi' => (float) $validated['tinggi'],
            ]);
    }

    /**
     * Halaman konfirmasi setelah laporan dikirim (GET /laporan/konfirmasi).
     */
    public function konfirmasi(Request $request)
    {
        $laporan = $request->session()->get('laporan');

        if (! $laporan) {
            return redirect()->route('laporan.create');
        }

        return view('laporan.konfirmasi', compact('laporan'));
    }

    /**
     * Halaman daftar laporan banjir (GET /laporan/daftar).
     */
    public function index()
    {
        $laporans = $this->dataLaporan();

        return view('laporan.index', compact('laporans'));
    }
}
