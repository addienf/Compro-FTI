<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    //
    public function index()
    {
        $data = Berita::latest()->take(3)->get();
        $main = Berita::latest()->first();
        $sec = Berita::latest()->take(4)->get();
        return view('Content.home', compact('data', 'main', 'sec'));
    }

    public function indexBerita()
    {
        $all = Berita::all();
        $data = Berita::latest()->take(3)->get();
        $main = Berita::latest()->first();
        $sec = Berita::latest()->take(4)->get();
        return view('Content.dashboard-berita', compact('data', 'main', 'sec', 'all'));
    }

    public function createBerita()
    {
        return view('Content.dashboard-berita');
    }

    public function storeBerita(Request $request)
    {
        $request->validate([
            'Judul' => 'required|string|max:255',
            'Penulis' => 'required|string|max:255',
            'Tanggal' => 'required',
            'ImgBerita' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'IsiBerita' => 'required|string',
        ]);

        $imageName = time() . '_' . $request->file('ImgBerita')->getClientOriginalName();
        $request->file('ImgBerita')->move(public_path('img'), $imageName);

        Berita::create([
            'Judul' => $request->Judul,
            'Penulis' => $request->Penulis,
            'Tanggal' => $request->Tanggal,
            'ImgBerita' => $imageName,
            'IsiBerita' => $request->IsiBerita,
        ]);

        return back()->with('success', 'Berita berhasil ditambahkan.');
    }

    public function editBerita(string $id)
    {
        //
        $all = Berita::findOrFail($id);
        return view('Content.KegiatanMahasiswa', compact('all'));
    }

    public function updateBerita(Request $request, string $id)
    {
        //
        $request->validate([
            'Judul' => 'required|string|max:255',
            'Penulis' => 'required|string|max:255',
            // 'Tanggal' => 'required',
            'ImgBerita' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'IsiBerita' => 'required|string',
        ]);
        $berita = Berita::findOrFail($id);

        $berita->Judul = $request->input('Judul');
        $berita->Penulis = $request->input('Penulis');
        $berita->Tanggal = $request->input('Tanggal');
        $berita->IsiBerita = $request->input('IsiBerita');


        $oldFileName = $berita->ImgBerita;
        if ($request->hasFile('ImgBerita') && $oldFileName) {
            $deleted = unlink(public_path('img') . '/' . $oldFileName);
            if ($deleted) {
                $image = $request->file('ImgBerita');
                $newFileName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('img'), $newFileName);
                $berita->ImgBerita = $newFileName;
                $berita->save();
                return redirect()->back()->with('success', 'File berhasil dihapus dan diunggah.');
            } else {
                return redirect()->back()->with('error', 'Gagal menghapus file lama.');
            }
        } else {
            return redirect()->back()->with('error', 'Tidak ada file yang diunggah atau tidak ada file lama yang ditemukan.');
        }
    }

    public function destroyBerita(string $id)
    {
        //
        $berita = Berita::findOrFail($id);
        if ($berita->ImgBerita) {
            unlink(public_path('img') . '/' . $berita->ImgBerita);
        }
        $berita->delete();
        return redirect()->back()->with('error', 'Kegiatan berhasil dihapus.');
    }

    public function detailBerita(string $id)
    {
        $detail = Berita::findOrFail($id);
        $data = Berita::latest()->take(3)->get();
        return view('Content.berita-detail', compact('detail', 'data'));
    }
}
