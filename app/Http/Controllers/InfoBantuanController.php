<?php

namespace App\Http\Controllers;

use App\Models\InfoBantuan;
use Illuminate\Http\Request;

class InfoBantuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $bantuans = InfoBantuan::all();

        return view('info-bantuan.index', compact('user', 'bantuans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = auth()->user();
        return view('info-bantuan.create', compact('user'));

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
    public function show(InfoBantuan $infoBantuan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InfoBantuan $infoBantuan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InfoBantuan $infoBantuan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InfoBantuan $infoBantuan)
    {
        //
    }
}
