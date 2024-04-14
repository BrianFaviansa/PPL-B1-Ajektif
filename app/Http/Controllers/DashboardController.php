<?php

namespace App\Http\Controllers;

use App\Models\InfoBantuan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $user = auth()->user();
        $desa = $user->desa;
        $bantuan = InfoBantuan::latest()->firstOrFail();

        return view('dashboard', compact('user', 'desa', 'bantuan'));
    }
}
