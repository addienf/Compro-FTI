<?php

namespace App\Http\Controllers;

use App\Models\KegiatanMHS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = KegiatanMHS::all();
        return view('Content.KegiatanMahasiswa', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Content.KegiatanMahasiswa');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'JudulKegiatan' => 'required|string|max:255',
            'ImgKegiatan' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'DescKegiatan' => 'required|string',
        ]);

        $imageName = time() . '_' . $request->file('ImgKegiatan')->getClientOriginalName();
        $request->file('ImgKegiatan')->move(public_path('img'), $imageName);

        KegiatanMHS::create([
            'JudulKegiatan' => $request->JudulKegiatan,
            'ImgKegiatan' => $imageName,
            'DescKegiatan' => $request->DescKegiatan,
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
        $data = KegiatanMHS::findOrFail($id);
        return view('Content.KegiatanMahasiswa', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'JudulKegiatan' => 'required|string|max:255',
            'ImgKegiatan' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'DescKegiatan' => 'required|string',
        ]);
        $kegiatan = KegiatanMHS::findOrFail($id);
        $kegiatan->JudulKegiatan = $request->input('JudulKegiatan');
        $kegiatan->DescKegiatan = $request->input('DescKegiatan');
        $oldFileName = $kegiatan->ImgKegiatan;
        if ($request->hasFile('ImgKegiatan') && $oldFileName) {
            $deleted = unlink(public_path('img') . '/' . $oldFileName);
            if ($deleted) {
                $image = $request->file('ImgKegiatan');
                $newFileName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('img'), $newFileName);
                $kegiatan->ImgKegiatan = $newFileName;
                $kegiatan->save();
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
        $kegiatan = KegiatanMHS::findOrFail($id);
        if ($kegiatan->ImgKegiatan) {
            unlink(public_path('img') . '/' . $kegiatan->ImgKegiatan);
        }
        $kegiatan->delete();
        return redirect()->back()->with('error', 'Kegiatan berhasil dihapus.');
    }
}
