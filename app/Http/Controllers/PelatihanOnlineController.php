<?php

namespace App\Http\Controllers;

use App\Models\PelatihanOnline;
use Illuminate\Http\Request;

class PelatihanOnlineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $pelatihanOnlines = PelatihanOnline::all();

        return view('pelatihan.bpp.index', compact('pelatihanOnlines','user'));
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
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PelatihanOnline $pelatihanOnline)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PelatihanOnline $pelatihanOnline)
    {
        //
    }
}
