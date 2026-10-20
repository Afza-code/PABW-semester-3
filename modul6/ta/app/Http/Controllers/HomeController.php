<?php

namespace App\Http\Controllers;

use App\Models\Laporan;

class HomeController extends Controller
{
    public function dashboard()
    {
        $totalLaporan = Laporan::count();

        return view('dashboard', compact('totalLaporan'));
    }

    public function profile()
    {
        return view('profile');
    }
}
