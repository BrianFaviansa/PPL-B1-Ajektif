<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    public function authenticate(Request $request) {
        $validated = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($validated)) {
            $user = auth()->user();
            $profile = $user->profile;
            // $pengajuans = PengajuanBantuan::where('user_id', $user->id)
            // ->with(['status_tk1', 'status_tk2', 'jenis_alsintan'])
            // ->get();


            return redirect()->route('pengajuan.index');
        } else {
            return redirect('login')->with('error', 'Username atau Password salah !');
        }
    }

    public function register() {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        // $user = User::create([
        //     'name' => $validatedData['name'],
        //     'email' => $validatedData['email'],
        //     'password' => Hash::make($validatedData['password']),
        // ]);

        // Auth::login($user);

        return redirect('/dashboard')->with('success', 'Registrasi berhasil!');
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('landing')->with('success', 'Logout berhasil');
    }
}
