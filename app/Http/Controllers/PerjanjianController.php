<?php

namespace App\Http\Controllers;

use DateTime;
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
        if ($request->user()->hasRole('dinas')) {
            $pengajuans = Pengajuan::where('status_tk2', 'Disetujui Dinas')
                ->where('status_tk1', 'Disetujui BPP')->orderByDesc('created_at')
                ->get();
            return view('surat-perjanjian.dinas.index', compact('user', 'pengajuans'));
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
    public function show(Pengajuan $pengajuan, Request $request)
    {
        $user = auth()->user();


        if ($request->user()->hasRole('poktan')) {
            return view('surat-perjanjian.poktan.show', compact('user', 'pengajuan'));
        }
        if ($request->user()->hasRole('dinas')) {
            return view('surat-perjanjian.dinas.show', compact('user', 'pengajuan'));
        }
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

        if ($request->hasFile('surat_poktan')) {
            if ($pengajuan->surat_poktan) {
                Storage::delete('public/surat_poktans/' . $pengajuan->surat_poktan);
            }

            $surat_poktanFile = $request->file('surat_poktan');
            $surat_poktanName = time() . '.' . $surat_poktanFile->getClientOriginalExtension();
            $validatedData['surat_poktan'] = $surat_poktanName;
            $surat_poktanFile->storeAs('public/surat_poktans', $surat_poktanName);

            $pengajuan->surat_poktan_uploaded_at = now();
        } else {
            $validatedData['surat_poktan'] = $pengajuan->surat_poktan;
        }

        $pengajuan->update($validatedData);

        return redirect()->route('perjanjian.index')->with('success', 'Surat SPKO Poktan berhasil diunggah!');
    }

    public function unggahDinas(Request $request, Pengajuan $pengajuan)
    {
        $validatedData = $request->validate([
            'surat_dinas' => 'mimes:pdf,doc,docx',
        ]);

        if ($request->hasFile('surat_dinas')) {
            if ($pengajuan->surat_dinas) {
                Storage::delete('public/surat_dinass/' . $pengajuan->surat_dinas);
            }

            $surat_dinasFile = $request->file('surat_dinas');
            $surat_dinasName = time() . '.' . $surat_dinasFile->getClientOriginalExtension();
            $validatedData['surat_dinas'] = $surat_dinasName;
            $surat_dinasFile->storeAs('public/surat_dinass', $surat_dinasName);

            $pengajuan->surat_dinas_uploaded_at = now();
        } else {
            $validatedData['surat_dinas'] = $pengajuan->surat_dinas;
        }

        $pengajuan->update($validatedData);

        return redirect()->route('perjanjian.index')->with('success', 'Surat SPKO Tingkat 2 berhasil diunggah!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengajuan $pengajuan)
    {
        //
    }
    public function test(Request $request)
    {
        dd($request->all());
    }

}
