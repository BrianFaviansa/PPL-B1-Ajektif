<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pengajuan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PengajuanController extends Controller
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
            return view('pengajuan.poktan.index', compact('user', 'pengajuans'));
        }
        if ($request->user()->hasRole('bpp')) {
            $pengajuans = Pengajuan::with('user')->get();;
            $penanggung_jawab_ids = $pengajuans->pluck('penanggung_jawab_id');
            return view('pengajuan.bpp.index', compact('user', 'pengajuans'));
        }
        if ($request->user()->hasRole('dinas')) {
            $pengajuans = Pengajuan::where('status_tk1', 'Disetujui BPP')->with('user')->get();;
            return view('pengajuan.dinas.index', compact('user', 'pengajuans'));
        }
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = auth()->user();

        return view('pengajuan.poktan.create-pengajuan', compact('user'));
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
            $dokumenPengajuanName = time() . '.' . $dokumenPengajuanFile->getClientOriginalExtension();
            $validatedData['dokumen_pengajuan'] = $dokumenPengajuanName;
            $dokumenPengajuanFile->storeAs('public/dokumen_pengajuans', $dokumenPengajuanName);
        }

        $validatedData['jenis_alsintan'] = $request->jenis_alsintan;
        $validatedData['kode'] = $this->generateKodepengajuan();
        $validatedData['user_id'] = auth()->user()->id;

        Pengajuan::create($validatedData);

        return redirect()->route('pengajuan.index')->with('success', 'Pengajuan Bantuan berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengajuan $pengajuan, Request $request)
    {
        $user = auth()->user();
        $pengajuans = Pengajuan::with('user')->get();;

        if($request->user()->hasRole('poktan')) {
            return view('pengajuan.poktan.show', compact('user', 'pengajuan'));
        }
        if($request->user()->hasRole('bpp')) {
            return view('pengajuan.bpp.show', compact('user', 'pengajuan'));
        }
        if($request->user()->hasRole('dinas')) {
            return view('pengajuan.dinas.show', compact('user', 'pengajuan'));
        }

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengajuan $pengajuan)
    {
        $user = auth()->user();

        return view('pengajuan.poktan.update-pengajuan', compact('pengajuan', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengajuan $pengajuan)
    {
        $validatedData = $request->validate([
            'nama_alsintan' => 'required|min:3',
            'alasan_pengajuan' => 'required|min:5',
            'dokumen_pengajuan' => 'nullable|mimes:pdf|max:10240',
        ]);

        if ($request->hasFile('dokumen_pengajuan')) {
            Storage::delete('public/dokumen_pengajuans/' . $pengajuan->dokumen_pengajuan);

            $dokumenPengajuanFile = $request->file('dokumen_pengajuan');
            $dokumenPengajuanName = time() . '.' . $dokumenPengajuanFile->getClientOriginalExtension();
            $validatedData['dokumen_pengajuan'] = $dokumenPengajuanName;
            $dokumenPengajuanFile->storeAs('public/dokumen_pengajuans', $dokumenPengajuanName);
        } else {
            $validatedData['dokumen_pengajuan'] = $pengajuan->dokumen_pengajuan;
        }

        $validatedData['jenis_alsintan'] = $request->jenis_alsintan;

        $pengajuan->update($validatedData);

        return redirect()->route('pengajuan.index')->with('success', 'Pengajuan Bantuan berhasil diperbarui!');
    }

    public function updateStatusBpp(Request $request, Pengajuan $pengajuan)
    {
        $validatedData['status_tk1'] = $request->status_tk1;
        $validatedData['penanggung_jawab_id'] = $request->user()->id;
        $validatedData['tanggapan_bpp'] = $request->tanggapan_bpp;

        $pengajuan->update($validatedData);

        return redirect()->route('pengajuan.index')->with('success', 'Status pengajuan berhasil diperbarui!');
    }

    public function updateStatusDinas(Request $request, Pengajuan $pengajuan)
    {
        $validatedData['status_tk2'] = $request->status_tk2;
        $validatedData['tanggapan_dinas'] = $request->tanggapan_dinas;

        if($validatedData['status_tk2'] == 'Disetujui Dinas') {
            $pengajuan->disetujui_at = now();
        }

        $pengajuan->update($validatedData);

        return redirect()->route('pengajuan.index')->with('success', 'Status pengajuan berhasil diperbarui!');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengajuan $pengajuan)
    {
        $filePath = 'public/dokumen_pengajuans/' . $pengajuan->dokumen_pengajuan;
        Storage::delete($filePath);
        $pengajuan->delete();
        return redirect()->route('pengajuan.index')->with('success', 'Pengajuan Bantuan berhasil dihapus!');
    }
}
