<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use Illuminate\Http\Request;

class PendaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $pendaftars = Pendaftar::orderBy('kelas_offline_id')->latest()->with('kelas')->get();

        return view('pendaftar.index', compact('user', 'pendaftars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nik' => 'required|min:10',
            'nama' => 'required',
            'no_telpon' => 'required|numeric',
            'motivasi' => 'required',
        ]);

        $validatedData['kelas_offline_id'] = $request->kelas_id;
        Pendaftar::create($validatedData);

        return redirect()->route('landing.kelas.show', $request->kelas_id)->withSuccess('Terima Kasih Telah Mendaftar Kelas');}

    /**
     * Display the specified resource.
     */
    public function show(Pendaftar $pendaftar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pendaftar $pendaftar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pendaftar $pendaftar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pendaftar $pendaftar)
    {
        //
    }
}
