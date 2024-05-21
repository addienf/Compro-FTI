<?php

namespace App\Http\Controllers;

use App\Models\Lomba;
use Illuminate\Http\Request;

class LombaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Lomba::all();
        return view('Content.Lomba', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Content.Lomba');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'JudulLomba' => 'required|string|max:255',
            'ImgLomba' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'DescLomba' => 'required|string',
        ]);

        $imageName = time() . '_' . $request->file('ImgLomba')->getClientOriginalName();
        $request->file('ImgLomba')->move(public_path('img'), $imageName);

        Lomba::create([
            'JudulLomba' => $request->JudulLomba,
            'ImgLomba' => $imageName,
            'DescLomba' => $request->DescLomba,
        ]);

        return back()->with('success', 'Kegiatan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
