<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PerjanjianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user = auth()->user();

        if ($request->user()->hasRole('poktan')) {
            $pengajuans = Pengajuan::where('user_id', $user->id)
                ->orderByDesc('created_at')
                ->get();
            return view('surat-perjanjian.poktan.index', compact('user', 'pengajuans'));
        }
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengajuan $pengajuan)
    {
        $user = auth()->user();

        return view('surat-perjanjian.poktan.show', compact('user', 'pengajuan'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengajuan $pengajuan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengajuan $pengajuan)
    {
    }

    public function unggahPoktan(Request $request, Pengajuan $pengajuan)
    {
        $validatedData = $request->validate([
            'surat_poktan' => 'mimes:pdf,doc,docx',
        ]);

        // Kode untuk menangani upload surat_poktan
        if ($request->hasFile('surat_poktan')) {
            // Hapus file surat_poktan lama jika ada
            if ($pengajuan->surat_poktan) {
                Storage::delete('public/surat_poktans/' . $pengajuan->surat_poktan);
            }

            // Simpan file surat_poktan baru
            $surat_poktanFile = $request->file('surat_poktan');
            $surat_poktanName = time() . '.' . $surat_poktanFile->getClientOriginalExtension();
            $validatedData['surat_poktan'] = $surat_poktanName;
            $surat_poktanFile->storeAs('public/surat_poktans', $surat_poktanName);

            // Simpan tanggal upload surat_poktan
            $pengajuan->surat_poktan_uploaded_at = now();
        } else {
            // Jika tidak ada file surat_poktan baru, simpan nilai surat_poktan lama
            $validatedData['surat_poktan'] = $pengajuan->surat_poktan;
        }

        // Update model Pengajuan
        $pengajuan->update($validatedData);

        return redirect()->route('perjanjian.index')->with('success', 'Surat SPKO Poktan berhasil diunggah!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengajuan $pengajuan)
    {
        //
    }
}
