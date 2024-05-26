<?php

namespace App\Http\Controllers;

use App\Models\PKM;
use Illuminate\Http\Request;

class PKMController extends Controller
{
    //
    public function index()
    {
        $data = PKM::all();
        return view('Content.PKM', compact('data'));
    }

    public function create()
    {
        return view('Content.PKM');
    }

    public function store(Request $request)
    {
        $request->validate([
            'JudulPKM' => 'required|string|max:255',
            'ImgPKM' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'DescPKM' => 'required|string',
        ]);

        $imageName = time() . '_' . $request->file('ImgPKM')->getClientOriginalName();
        $request->file('ImgPKM')->move(public_path('img'), $imageName);

        PKM::create([
            'JudulPKM' => $request->JudulPKM,
            'ImgPKM' => $imageName,
            'DescPKM' => $request->DescPKM,
        ]);

        return back()->with('success', 'PKM berhasil ditambahkan.');
    }

    public function edit(string $id)
    {
        //
        $data = PKM::findOrFail($id);
        return view('Content.PKM', compact('data'));
    }

    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'ImgPKM' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $pkm = PKM::findOrFail($id);
        $oldFileName = $pkm->ImgPKM;
        if ($request->hasFile('ImgPKM') && $oldFileName) {
            $deleted = unlink(public_path('img') . '/' . $oldFileName);
            if ($deleted) {
                $image = $request->file('ImgPKM');
                $newFileName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('img'), $newFileName);
                $pkm->ImgPKM = $newFileName;
                $pkm->save();
                return redirect()->back()->with('success', 'File berhasil dihapus dan diunggah.');
            } else {
                return redirect()->back()->with('error', 'Gagal menghapus file lama.');
            }
        } else {
            return redirect()->back()->with('error', 'Tidak ada file yang diunggah atau tidak ada file lama yang ditemukan.');
        }
    }

    public function destroy(string $id)
    {
        //
        $pkm = PKM::findOrFail($id);
        if ($pkm->ImgPKM) {
            unlink(public_path('img') . '/' . $pkm->ImgPKM);
        }
        $pkm->delete();
        return redirect()->back()->with('error', 'PKM berhasil dihapus.');
    }
}
