<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PelatihanOnline;
use Illuminate\Support\Facades\Storage;

class PelatihanOnlineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $pelatihanOnlines = PelatihanOnline::latest()->get();

        return view('pelatihan.bpp.index', compact('pelatihanOnlines','user'));
    }

    public function indexLanding() {
        $pelatihanOnlines = PelatihanOnline::all();

        return view('pelatihan.landing.index', compact('pelatihanOnlines'));
    }

    public function showPelatihanLanding(PelatihanOnline $pelatihanOnline) {
        return view('pelatihan.landing.show', compact('pelatihanOnline'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = auth()->user();

        return view('pelatihan.bpp.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'video' => 'required|mimetypes:video/mp4,video/mpeg,video/quicktime',
            'ringkasan' => 'required',
        ]);

        if ($request->file('video')) {
            $videoPelatihanFile = $request->file('video');
            $videoPelatihanName = time() . '.' . $videoPelatihanFile->getClientOriginalExtension();
            $validatedData['video'] = $videoPelatihanName;
            $videoPelatihanFile->storeAs('public/video_pelatihans', $videoPelatihanName);
        }

        $validatedData['penanggung_jawab_id'] = $request->user()->id;
        PelatihanOnline::create($validatedData);

        return redirect()->route('bpp.pelatihan.index')->with('success', 'Pelatihan Online berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(PelatihanOnline $pelatihanOnline)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PelatihanOnline $pelatihanOnline)
    {
        $user = auth()->user();

        return view('pelatihan.bpp.edit', compact('pelatihanOnline', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PelatihanOnline $pelatihanOnline)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'video' => 'nullable|mimetypes:video/mp4,video/mpeg,video/quicktime',
            'ringkasan' => 'required',
        ]);

        if ($request->file('video')) {
            if ($request->oldVideo) {
                Storage::delete('public/video_pelatihans/' . $request->oldVideo);
            }
            $videoPelatihanFile = $request->file('poster');
            $videoPelatihanName = time() . '.' . $videoPelatihanFile->getClientOriginalExtension();
            $validatedData['poster'] = $videoPelatihanName;
            $videoPelatihanFile->storeAs('public/video_pelatihans', $videoPelatihanName);
        } else {
            $validatedData['video'] = $request->oldVideo;
        }

        $validatedData['penanggung_jawab_id'] = $request->user()->id;
        $pelatihanOnline->update($validatedData);

        return redirect()->route('bpp.pelatihan.index')->with('success', 'Pelatihan Online berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PelatihanOnline $pelatihanOnline)
    {
        $pelatihanOnline->delete();

        return redirect()->route('bpp.pelatihan.index')->with('success', 'Pelatihan Online berhasil dihapus!');
    }
}
