<?php

namespace App\Http\Controllers;

use App\Models\PrestasiMHS;
use Illuminate\Http\Request;

class PrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = PrestasiMHS::all();
        return view('Content.PrestasiMahasiswa', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Content.PrestasiMahasiswa');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'JudulPrestasi' => 'required|string|max:255',
            'ImgPrestasi' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'DescPrestasi' => 'required|string',
        ]);

        $imageName = time() . '_' . $request->file('ImgPrestasi')->getClientOriginalName();
        $request->file('ImgPrestasi')->move(public_path('img'), $imageName);

        PrestasiMHS::create([
            'JudulPrestasi' => $request->JudulPrestasi,
            'ImgPrestasi' => $imageName,
            'DescPrestasi' => $request->DescPrestasi,
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
        $data = PrestasiMHS::findOrFail($id);
        return view('Content.PrestasiMahasiswa', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'ImgPrestasi' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $prestasi = PrestasiMHS::findOrFail($id);
        $oldFileName = $prestasi->ImgPrestasi;
        if ($request->hasFile('ImgPrestasi') && $oldFileName) {
            $deleted = unlink(public_path('img') . '/' . $oldFileName);
            if ($deleted) {
                $image = $request->file('ImgPrestasi');
                $newFileName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('img'), $newFileName);
                $prestasi->ImgPrestasi = $newFileName;
                $prestasi->save();
                return redirect()->back()->with('success', 'File berhasil dihapus dan diunggah.');
            } else {
                return redirect()->back()->with('error', 'Gagal menghapus file lama.');
            }
        } else {
            return redirect()->back()->with('error', 'Tidak ada file yang diunggah atau tidak ada file lama yang ditemukan.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $prestasi = PrestasiMHS::findOrFail($id);
        if ($prestasi->ImgPrestasi) {
            unlink(public_path('img') . '/' . $prestasi->ImgPrestasi);
        }
        $prestasi->delete();
        return redirect()->back()->with('error', 'Kegiatan berhasil dihapus.');
    }
}
