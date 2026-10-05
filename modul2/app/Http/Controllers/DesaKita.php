<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;

    class DesaKita extends Controller{

        public function lapor(){
            return view('lapor');
        }

        public function tampilHasil(Request $request){

            $nama = $request->input('nama');
            $lokasi = $request->input('lokasi');
            $keterangan = $request->input('keterangan');
            $jenis = $request->input('jenis');

            return view('tampil', compact('nama', 'lokasi','keterangan', 'jenis'));
        }
    }
?>

