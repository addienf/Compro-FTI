<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    //
    public function index()
    {
        $data = Pengumuman::latest()->take(3)->get();
        $main = Pengumuman::latest()->first();
        $sec = Pengumuman::latest()->take(4)->get();
        return view('Content.home', compact('data', 'main', 'sec'));
    }

    public function indexPengumuman()
    {
        $all = Pengumuman::all();
        $data = Pengumuman::latest()->take(3)->get();
        $main = Pengumuman::latest()->first();
        $sec = Pengumuman::latest()->take(4)->get();
        return view('Content.Pengumuman', compact('data', 'main', 'sec', 'all'));
    }

    public function createPengumuman()
    {
        return view('Content.Pengumuman');
    }

    public function storePengumuman(Request $request)
    {
        $request->validate([
            'Judul' => 'required|string|max:255',
            'Penulis' => 'required|string|max:255',
            'Tanggal' => 'required',
            'ImgPengumuman' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'IsiPengumuman' => 'required|string',
        ]);

        $imageName = time() . '_' . $request->file('ImgPengumuman')->getClientOriginalName();
        $request->file('ImgPengumuman')->move(public_path('img'), $imageName);

        Pengumuman::create([
            'Judul' => $request->Judul,
            'Penulis' => $request->Penulis,
            'Tanggal' => $request->Tanggal,
            'ImgPengumuman' => $imageName,
            'IsiPengumuman' => $request->IsiPengumuman,
        ]);

        return back()->with('success', 'Pengumuman berhasil ditambahkan.');
    }

    public function editPengumuman(string $id)
    {
        //
        $all = Pengumuman::findOrFail($id);
        return view('Content.Pengumuman', compact('all'));
    }

    public function updatePengumuman(Request $request, string $id)
    {
        //
        $request->validate([
            'Judul' => 'required|string|max:255',
            'Penulis' => 'required|string|max:255',
            // 'Tanggal' => 'required',
            'ImgPengumuman' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'IsiPengumuman' => 'required|string',
        ]);
        $Pengumuman = Pengumuman::findOrFail($id);

        $Pengumuman->Judul = $request->input('Judul');
        $Pengumuman->Penulis = $request->input('Penulis');
        $Pengumuman->Tanggal = $request->input('Tanggal');
        $Pengumuman->IsiPengumuman = $request->input('IsiPengumuman');


        $oldFileName = $Pengumuman->ImgPengumuman;
        if ($request->hasFile('ImgPengumuman') && $oldFileName) {
            $deleted = unlink(public_path('img') . '/' . $oldFileName);
            if ($deleted) {
                $image = $request->file('ImgPengumuman');
                $newFileName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('img'), $newFileName);
                $Pengumuman->ImgPengumuman = $newFileName;
                $Pengumuman->save();
                return redirect()->back()->with('success', 'File berhasil dihapus dan diunggah.');
            } else {
                return redirect()->back()->with('error', 'Gagal menghapus file lama.');
            }
        } else {
            return redirect()->back()->with('error', 'Tidak ada file yang diunggah atau tidak ada file lama yang ditemukan.');
        }
    }

    public function destroyPengumuman(string $id)
    {
        //
        $Pengumuman = Pengumuman::findOrFail($id);
        if ($Pengumuman->ImgPengumuman) {
            unlink(public_path('img') . '/' . $Pengumuman->ImgPengumuman);
        }
        $Pengumuman->delete();
        return redirect()->back()->with('error', 'Kegiatan berhasil dihapus.');
    }

    public function detailPengumuman(string $id)
    {
        $detail = Pengumuman::findOrFail($id);
        $data = Pengumuman::latest()->take(3)->get();
        return view('Content.Pengumuman-detail', compact('detail', 'data'));
    }
}
