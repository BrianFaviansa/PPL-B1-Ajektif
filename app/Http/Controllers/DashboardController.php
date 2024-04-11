<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $user = auth()->user();
        $desa = $user->desa;

        return view('dashboard', compact('user', 'desa'));
    }
}
