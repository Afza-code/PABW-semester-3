<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Controller Tugas Akhir (hasil refactor dari DataWargaController & DesaKita
 * pada Modul 2) yang kini seluruh tampilannya memakai Blade Template.
 */
class DesaKitaController extends Controller
{
    /**
     * Data contoh laporan warga (prototipe tanpa database).
     */
    private function dataWarga(): array
    {
        return [
            ['nama' => 'Budi Santoso',  'lokasi' => 'Dayeuhkolot', 'jenis' => 'Laporan',   'keterangan' => 'Air mulai memasuki rumah warga', 'tinggi' => 0.8],
            ['nama' => 'Siti Aminah',   'lokasi' => 'Baleendah',   'jenis' => 'Aspirasi',  'keterangan' => 'Perlu perbaikan drainase',       'tinggi' => 0.4],
            ['nama' => 'Rudi Hartono',  'lokasi' => 'Bojongsoang', 'jenis' => 'Laporan',   'keterangan' => 'Jalan utama tergenang',          'tinggi' => 1.5],
        ];
    }

    /**
     * Halaman form laporan warga (GET /ta).
     */
    public function form()
    {
        return view('ta.form');
    }

    /**
     * Memproses laporan warga yang dikirim dengan method POST (POST /ta).
     */
    public function tampil(Request $request)
    {
        $validated = $request->validate([
            'nama'       => 'required|string|max:100',
            'lokasi'     => 'required|string|max:150',
            'keterangan' => 'required|string|max:255',
            'jenis'      => 'required|string|max:50',
        ]);

        return redirect()
            ->route('ta.hasil')
            ->with('ta_laporan', $validated);
    }

    /**
     * Halaman hasil/konfirmasi laporan warga (GET /ta/hasil).
     */
    public function hasil(Request $request)
    {
        $laporan = $request->session()->get('ta_laporan');

        if (! $laporan) {
            return redirect()->route('ta.form');
        }

        return view('ta.tampil', compact('laporan'));
    }

    /**
     * Halaman dashboard admin berisi seluruh laporan warga (GET /ta/dashboard).
     */
    public function dashboard()
    {
        $dataWarga = $this->dataWarga();

        return view('ta.dashboard', compact('dataWarga'));
    }
}
