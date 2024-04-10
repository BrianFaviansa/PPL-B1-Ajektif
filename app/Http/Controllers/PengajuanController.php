<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    protected function generateKodePengajuan($prefix = 'PBPK', $length = 10)
    {
        $randomString = $prefix . Str::random($length - 4);
        return $randomString;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_alsintan' => 'required|min:3',
            'alasan_pengajuan' => 'required|min:5',
            'dokumen_pengajuan' => 'required|mimes:pdf|max:10240',
        ]);

        if ($request->file('dokumen_pengajuan')) {
            $dokumenPengajuanFile = $request->file('dokumen_pengajuan');
            // $dokumenPengajuanNameAsli = $dokumenPengajuanFile->getClientOriginalName();
            $dokumenPengajuanName = time() . '.' . $dokumenPengajuanFile->getClientOriginalExtension();
            $validatedData['dokumen_pengajuan'] = $dokumenPengajuanName;
            $dokumenPengajuanFile->storeAs('public/dokumen_pengajuans', $dokumenPengajuanName);
        }

        $validatedData['kode_pengajuan'] = $this->generateKodepengajuan();
        $validatedData['user_id'] = auth()->user()->id;

        Pengajuan::create($validatedData);

        return redirect()->route('pengajuan.index')->with('success', 'Pengajuan Bantuan berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengajuan $pengajuan)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengajuan $pengajuan)
    {
        //
    }
}
