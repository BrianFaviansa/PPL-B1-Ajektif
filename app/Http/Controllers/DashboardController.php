<?php

namespace App\Http\Controllers;

use App\Models\InfoBantuan;
use App\Models\KelasOffline;
use Illuminate\Http\Request;
use App\Models\PelatihanOnline;

class DashboardController extends Controller
{
    public function index() {
        $user = auth()->user();
        $desa = $user->desa;
        $bantuan = InfoBantuan::latest()->firstOrFail();

        return view('dashboard', compact('user', 'desa', 'bantuan'));
    }

    public function landing() {
        $bantuan = InfoBantuan::latest()->firstOrFail();
        $kelasOfflines = KelasOffline::limit(3)->get();
        $pelatihanOnlines = PelatihanOnline::limit(3)->get();

        return view('landing', compact('bantuan', 'kelasOfflines', 'pelatihanOnlines'));
    }
}
