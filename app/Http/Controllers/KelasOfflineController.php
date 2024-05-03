<?php

namespace App\Http\Controllers;

use App\Models\KelasOffline;
use Illuminate\Http\Request;

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
        dd("halo adek");
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
