<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;


    class DataWargaController extends Controller{

        public function formLaporan(){
            return view('form');
        }

        public function dashboard(Request $requestdata){

            $nama = $requestdata->input('nama');
            $lokasi = $requestdata->input('lokasi');
            $tinggiAir = $requestdata->input('tinggiAir');

            return view('dashboard', compact('nama', 'lokasi', 'tinggiAir'));
        }
    }
?>