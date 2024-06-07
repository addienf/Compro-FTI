<?php

namespace App\Http\Controllers;

use App\Models\Penelitian;
use Illuminate\Http\Request;

class PenelitianController extends Controller
{
    //
    public function index()
    {
        //
        $data = Penelitian::all();
        return view('Content.Penelitian', compact('data'));
    }

    public function create()
    {
        //
        return view('Content.Penelitian');
    }

    public function store(Request $request)
    {
        //
        $request->validate([
            'JudulPenelitian' => 'required|string|max:255',
            'ImgPenelitian' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'DescPenelitian' => 'required|string',
        ]);

        $imageName = time() . '_' . $request->file('ImgPenelitian')->getClientOriginalName();
        $request->file('ImgPenelitian')->move(public_path('img'), $imageName);

        Penelitian::create([
            'JudulPenelitian' => $request->JudulPenelitian,
            'ImgPenelitian' => $imageName,
            'DescPenelitian' => $request->DescPenelitian,
        ]);

        return redirect('Penelitian')->with('success', 'Kegiatan berhasil ditambahkan.');
    }

    public function edit(string $id)
    {
        //
        $data = Penelitian::findOrFail($id);
        return view('Content.Penelitian', compact('data'));
    }

    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'JudulPenelitian' => 'required|string|max:255',
            'ImgPenelitian' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'DescPenelitian' => 'required|string',
        ]);
        $penelitian = Penelitian::findOrFail($id);
        $penelitian->JudulPenelitian = $request->input('JudulPenelitian');
        $penelitian->DescPenelitian = $request->input('DescPenelitian');
        $oldFileName = $penelitian->ImgPenelitian;
        if ($request->hasFile('ImgPenelitian') && $oldFileName) {
            $deleted = unlink(public_path('img') . '/' . $oldFileName);
            if ($deleted) {
                $image = $request->file('ImgPenelitian');
                $newFileName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('img'), $newFileName);
                $penelitian->ImgPenelitian = $newFileName;
                $penelitian->save();
                return redirect()->back()->with('success', 'File berhasil dihapus dan diunggah.');
            } else {
                return redirect()->back()->with('error', 'Gagal menghapus file lama.');
            }
        } else {
            return redirect('Penelitian')->with('error', 'Tidak ada file yang diunggah atau tidak ada file lama yang ditemukan.');
        }
    }

    public function destroy(string $id)
    {
        //
        $penelitian = Penelitian::findOrFail($id);
        if ($penelitian->ImgPenelitian) {
            unlink(public_path('img') . '/' . $penelitian->ImgPenelitian);
        }
        $penelitian->delete();
        return redirect('Penelitian')->with('error', 'Kegiatan berhasil dihapus.');
    }
}
