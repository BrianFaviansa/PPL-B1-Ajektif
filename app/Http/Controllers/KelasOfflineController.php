<?php

namespace App\Http\Controllers;

use App\Models\KelasOffline;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class KelasOfflineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelasOfflines = KelasOffline::all();
        $user = auth()->user();

        return view('kelas.bpp.index', compact('kelasOfflines', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = auth()->user();

        return view('kelas.bpp.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tanggalPelaksanaan = Carbon::createFromFormat('d/m/Y', $request->tgl_pelaksanaan);
        $request->merge(['tgl_pelaksanaan' => $tanggalPelaksanaan]);
        $validatedData = $request->validate([
            'nama' => 'required',
            'ringkasan' => 'required',
            'poster' => 'required|image|mimes:jpeg,png,jpg',
            'tgl_pelaksanaan' => 'required|date',
            'jam_pelaksanaan' => 'required',
            'lokasi_pelaksanaan' => 'required',
        ]);

        if ($request->file('poster')) {
            $posterPelatihanFile = $request->file('poster');
            $posterPelatihanName = time() . '.' . $posterPelatihanFile->getClientOriginalExtension();
            $validatedData['poster'] = $posterPelatihanName;
            $posterPelatihanFile->storeAs('public/poster_kelass', $posterPelatihanName);
        }

        $validatedData['penanggung_jawab_id'] = $request->user()->id;

        KelasOffline::create($validatedData);

        return redirect()->route('bpp.kelas.index')->with('success', 'Kelas berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(KelasOffline $kelasOffline)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KelasOffline $kelasOffline)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KelasOffline $kelasOffline)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KelasOffline $kelasOffline)
    {
        //
    }
}
