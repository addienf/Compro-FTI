<?php

namespace App\Http\Controllers;

use App\Models\JenisKerjasama;
use App\Models\Kerjasama;
use Illuminate\Http\Request;

class KerjasamaController extends Controller
{
    // Nasional
    public function indexNasional()
    {
        $data = Kerjasama::join('jenis_kerjasama', 'kerjasama.IdJenisKerjasama', '=', 'jenis_kerjasama.IdJenisKerjasama')
            ->select('kerjasama.*', 'jenis_kerjasama.NamaJenisKerjasama')
            ->where('kerjasama.IdJenisKerjasama', 1)
            ->get();
        $data2 = JenisKerjasama::all();
        return view('Content.Kerjasama', compact('data', 'data2'));
    }

    public function createNasional()
    {
        //
        $data2 = JenisKerjasama::all();
        return view('Content.Kerjasama', compact('data2'));
    }

    public function storeNasional(Request $request)
    {
        $request->validate([
            'NamaMitra' => 'required|string|max:255',
            'IdJenisKerjasama' => 'required|exists:jenis_kerjasama,IdJenisKerjasama',
            'Mulai' => 'required|date',
            'Berakhir' => 'required|date',
            'Manfaat' => 'nullable|string',
            'Tridarma' => 'required|array',
        ]);

        $Tridarma1 = isset($request->Tridarma[1]) ? 1 : 0;
        $Tridarma2 = isset($request->Tridarma[2]) ? 1 : 0;
        $Tridarma3 = isset($request->Tridarma[3]) ? 1 : 0;

        Kerjasama::create([
            'NamaMitra' => $request->NamaMitra,
            'IdJenisKerjasama' => $request->IdJenisKerjasama,
            'Tridarma1' => $Tridarma1,
            'Tridarma2' => $Tridarma2,
            'Tridarma3' => $Tridarma3,
            'Mulai' => $request->Mulai,
            'Berakhir' => $request->Berakhir,
            'Manfaat' => $request->Manfaat,
        ]);

        return redirect('Kerjasama')->with('success', 'Kegiatan berhasil ditambahkan.');
    }

    public function editNasional(string $id)
    {
        //
        $data = Kerjasama::findOrFail($id);
        $data2 = JenisKerjasama::all();
        return view('Content.Kerjasama', compact('data', 'data2'));
    }

    public function updateNasional(Request $request, string $id)
    {
        //
        $request->validate([
            'NamaMitra' => 'required|string|max:255',
            'IdJenisKerjasama' => 'required|exists:jenis_kerjasama,IdJenisKerjasama',
            'Mulai' => 'required|date',
            'Berakhir' => 'required|date',
            'Manfaat' => 'nullable|string',
            'Tridarma' => 'required|array',
        ]);

        $Tridarma1 = isset($request->Tridarma[1]) ? 1 : 0;
        $Tridarma2 = isset($request->Tridarma[2]) ? 1 : 0;
        $Tridarma3 = isset($request->Tridarma[3]) ? 1 : 0;

        $kerjasama = Kerjasama::findOrFail($id);
        $kerjasama->update([
            'NamaMitra' => $request->NamaMitra,
            'IdJenisKerjasama' => $request->IdJenisKerjasama,
            'Tridarma1' => $Tridarma1,
            'Tridarma2' => $Tridarma2,
            'Tridarma3' => $Tridarma3,
            'Mulai' => $request->Mulai,
            'Berakhir' => $request->Berakhir,
            'Manfaat' => $request->Manfaat,
        ]);

        return redirect('Kerjasama')->with('success', 'Kegiatan berhasil diperbarui.');
    }

    // Internasional
    public function indexInternasional()
    {
        $data = Kerjasama::join('jenis_kerjasama', 'kerjasama.IdJenisKerjasama', '=', 'jenis_kerjasama.IdJenisKerjasama')
            ->select('kerjasama.*', 'jenis_kerjasama.NamaJenisKerjasama')
            ->where('kerjasama.IdJenisKerjasama', 2)
            ->get();
        $data2 = JenisKerjasama::all();
        return view('Content.KerjasamaInter', compact('data', 'data2'));
    }
    public function createInternasional()
    {
        //
        $data2 = JenisKerjasama::all();
        return view('Content.KerjasamaInter', compact('data2'));
    }

    public function storeInternasional(Request $request)
    {
        $request->validate([
            'NamaMitra' => 'required|string|max:255',
            'IdJenisKerjasama' => 'required|exists:jenis_kerjasama,IdJenisKerjasama',
            'Mulai' => 'required|date',
            'Berakhir' => 'required|date',
            'Manfaat' => 'nullable|string',
            'Tridarma' => 'required|array',
        ]);

        $Tridarma1 = isset($request->Tridarma[1]) ? 1 : 0;
        $Tridarma2 = isset($request->Tridarma[2]) ? 1 : 0;
        $Tridarma3 = isset($request->Tridarma[3]) ? 1 : 0;

        Kerjasama::create([
            'NamaMitra' => $request->NamaMitra,
            'IdJenisKerjasama' => $request->IdJenisKerjasama,
            'Tridarma1' => $Tridarma1,
            'Tridarma2' => $Tridarma2,
            'Tridarma3' => $Tridarma3,
            'Mulai' => $request->Mulai,
            'Berakhir' => $request->Berakhir,
            'Manfaat' => $request->Manfaat,
        ]);

        return redirect('Kerjasama-I')->with('success', 'Kegiatan berhasil ditambahkan.');
    }

    public function editInternasional(string $id)
    {
        //
        $data = Kerjasama::findOrFail($id);
        $data2 = JenisKerjasama::all();
        return view('Content.KerjasamaInter', compact('data', 'data2'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateInternasional(Request $request, string $id)
    {
        //
        $request->validate([
            'NamaMitra' => 'string|max:255',
            'IdJenisKerjasama' => 'exists:jenis_kerjasama,IdJenisKerjasama',
            'Manfaat' => 'nullable|string',
            'Tridarma' => 'required|array',
            'Mulai' => $request->has('Tridarma') ? 'required|date' : 'nullable|date',
            'Berakhir' => $request->has('Tridarma') ? 'required|date' : 'nullable|date',
        ]);

        $Tridarma1 = isset($request->Tridarma[1]) ? 1 : 0;
        $Tridarma2 = isset($request->Tridarma[2]) ? 1 : 0;
        $Tridarma3 = isset($request->Tridarma[3]) ? 1 : 0;

        $kerjasama = Kerjasama::findOrFail($id);
        $kerjasama->update([
            'NamaMitra' => $request->NamaMitra,
            'IdJenisKerjasama' => $request->IdJenisKerjasama,
            'Tridarma1' => $Tridarma1,
            'Tridarma2' => $Tridarma2,
            'Tridarma3' => $Tridarma3,
            'Mulai' => $request->Mulai,
            'Berakhir' => $request->Berakhir,
            'Manfaat' => $request->Manfaat,
        ]);

        return redirect('Kerjasama-I')->with('success', 'Kegiatan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $kerjasama = Kerjasama::findOrFail($id);
        $kerjasama->delete();
        return redirect()->back()->with('error', 'Data berhasil dihapus.');
    }
}
