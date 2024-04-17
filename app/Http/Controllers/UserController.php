<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user = auth()->user();
        $desas = Desa::all();

        if ($request->user()->hasRole('poktan')) {
            return view('profil.poktan.edit', compact('user', 'desas'));
        }
        if ($request->user()->hasRole('dinas')) {
            return view('profil.dinas.edit', compact('user'));
        }
        if ($request->user()->hasRole('bpp')) {
            return view('profil.bpp.edit', compact('user', 'desas'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = auth()->user();

        return view('tambah-akun.index', compact('user'));
    }

    public function createPoktan() {
        $user = auth()->user();
        $desas = Desa::all();
        return view('tambah-akun.create-poktan', compact('user', 'desas'));
    }

    public function createBpp() {
        $user = auth()->user();
        $desas = Desa::all();
        return view('tambah-akun.create-bpp', compact('user', 'desas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storePoktan(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'no_reg' => 'required|unique:users',
            'desa_id' => 'required',
            'alamat' => 'required',
            'jml_anggota' => 'required',
            'no_telpon' => 'required',
            'username' => 'required|unique:users',
            'password' => 'required',
        ]);

        $user = User::create([
            'nama' => $validatedData['nama'],
            'no_reg' => $validatedData['no_reg'],
            'desa_id' => $validatedData['desa_id'],
            'alamat' => $validatedData['alamat'],
            'jml_anggota' => $validatedData['jml_anggota'],
            'no_telpon' => $validatedData['no_telpon'],
            'username' => $validatedData['username'],
            'password' => Hash::make($validatedData['password']),
        ]);
        $user->assignRole('poktan');

        return redirect()->route('akun.create')->with('success', 'Akun Poktan baru berhasil ditambahkan.');
    }

    public function storeBpp(Request $request) {
        $validatedData = $request->validate([
            'nama' => 'required',
            'no_reg' => 'required|unique:users',
            'desa_id' => 'required',
            'alamat' => 'required',
            'no_telpon' => 'required',
            'username' => 'required|unique:users',
            'password' => 'required',
        ]);

        $user = User::create([
            'nama' => $validatedData['nama'],
            'no_reg' => $validatedData['no_reg'],
            'desa_id' => $validatedData['desa_id'],
            'alamat' => $validatedData['alamat'],
            'no_telpon' => $validatedData['no_telpon'],
            'username' => $validatedData['username'],
            'password' => Hash::make($validatedData['password']),
        ]);
        $user->assignRole('bpp');

        return redirect()->route('akun.create')->with('success', 'Akun BPP baru berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        $pelihat = auth()->user();
        if($pelihat->hasRole('bpp')) {
            return view('profil.poktan.show', compact('user', 'pelihat'));
        }
        if($pelihat->hasRole('poktan')) {
            return view('profil.bpp.show', compact('user', 'pelihat'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'no_reg' => 'required',
            'nama' => 'required',
            'desa_id' => 'nullable',
            'alamat' => 'required',
            'daerah' => 'nullable',
            'jml_anggota' => 'nullable',
            'no_telpon' => 'required',
            'username' => 'required',
            'password' => 'nullable|min:8',
        ]);

        if ($request->has('password') && $request->password != '') {
            $validatedData['password'] = bcrypt($request->password);;
        } else {
            $validatedData['password'] = $user->password;
        }

        $user->update($validatedData);


        return redirect()->route('dashboard')->with('success', 'Profil berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
