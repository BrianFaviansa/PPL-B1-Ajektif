<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use App\Models\KelasOffline;
use Illuminate\Http\Request;

class PendaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $pendaftars = Pendaftar::orderBy('nama_kelas')->latest()->with('kelas')->get();

        if (request()->has('search')) {
            $pendaftars = Pendaftar::where('nama', 'like', '%' . request('search') . '%')
                ->orWhere('nik', 'like', '%' . request('search') . '%')
                ->orWhere('no_telpon', 'like', '%' . request('search') . '%')
                ->orWhere('motivasi', 'like', '%' . request('search') . '%')
                ->orWhere('nama_kelas', 'like', '%' . request('search') . '%')->orderBy('nama_kelas')
                ->latest()
                ->with('kelas')
                ->get();
        } else {
            $pendaftars = Pendaftar::orderBy('nama_kelas')->latest()->with('kelas')->get();
        }

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

        $kelas = KelasOffline::find($request->kelas_id);

        if ($kelas) {
            $validatedData['kelas_offline_id'] = $request->kelas_id;
            $validatedData['nama_kelas'] = $kelas->nama;

            Pendaftar::create($validatedData);

            return redirect()->route('landing.kelas.show', $request->kelas_id)->withSuccess('Terima Kasih Telah Mendaftar Kelas');
        } else {
            return redirect()->back()->withError('Kelas tidak ditemukan.');
        }
    }

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
