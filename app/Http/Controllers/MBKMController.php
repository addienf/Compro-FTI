<?php

namespace App\Http\Controllers;

use App\Models\MBKM;
use Illuminate\Http\Request;

class MBKMController extends Controller
{
    // PMM
    public function indexPMM()
    {
        //
        $data = MBKM::where('IdJenisMBKM', 1)->get();
        return view('Content.MBKM.PMM1', compact('data'));
    }

    public function createPMM()
    {
        return view('Content.MBKM.PMM1');
    }

    public function storePMM(Request $request)
    {
        $input = $request->all();
        $input['IdJenisMBKM'] = 1;
        MBKM::create($input);
        return redirect('PMM')->with('success', 'Data berhasil ditambahkan.');;
    }

    public function editPMM($id)
    {
        $data = MBKM::find($id);
        return view('Content.MBKM.PMM', compact('data'));
    }

    public function updatePMM($id, Request $request)
    {
        $input = $request->all();
        MBKM::find($id)->update($input);
        return redirect('PMM');
    }

    public function destroyPMM($id)
    {
        $PMM = MBKM::find($id);
        $PMM->delete();
        return redirect('PMM')->with('error', 'Data berhasil dihapus.');;
    }

    //Magang
    public function indexMagang()
    {
        //
        $data = MBKM::where('IdJenisMBKM', 2)->get();
        return view('Content.MBKM.Magang', compact('data'));
    }

    public function createMagang()
    {
        return view('Content.MBKM.Magang');
    }

    public function storeMagang(Request $request)
    {
        $input = $request->all();
        $input['IdJenisMBKM'] = 2;
        MBKM::create($input);
        return redirect('Magang')->with('success', 'Data berhasil ditambahkan.');;
    }

    public function editMagang($id)
    {
        $data = MBKM::find($id);
        return view('Content.MBKM.Magang', compact('data'));
    }

    public function updateMagang($id, Request $request)
    {
        $input = $request->all();
        MBKM::find($id)->update($input);
        return redirect('Magang');
    }

    public function destroyMagang($id)
    {
        $magang = MBKM::find($id);
        $magang->delete();
        return redirect('Magang')->with('error', 'Data berhasil dihapus.');;
    }

    // KKN
    public function indexKKN()
    {
        //
        $data = MBKM::where('IdJenisMBKM', 3)->get();
        return view('Content.MBKM.KKNTematik', compact('data'));
    }

    public function createKKN()
    {
        return view('Content.MBKM.KKNTematik');
    }

    public function storeKKN(Request $request)
    {
        $input = $request->all();
        $input['IdJenisMBKM'] = 3;
        MBKM::create($input);
        return redirect('KKNTematik')->with('success', 'Data berhasil ditambahkan.');;
    }

    public function editKKN($id)
    {
        $data = MBKM::find($id);
        return view('Content.MBKM.KKNTematik', compact('data'));
    }

    public function updateKKN($id, Request $request)
    {
        $input = $request->all();
        MBKM::find($id)->update($input);
        return redirect('KKNTematik');
    }

    public function destroyKKN($id)
    {
        $KKN = MBKM::find($id);
        $KKN->delete();
        return redirect('KKNTematik')->with('error', 'Data berhasil dihapus.');;
    }

    // Penelitian
    public function indexPenelitian()
    {
        //
        $data = MBKM::where('IdJenisMBKM', 4)->get();
        return view('Content.MBKM.Penelitian', compact('data'));
    }

    public function createPenelitian()
    {
        return view('Content.MBKM.Penelitian');
    }

    public function storePenelitian(Request $request)
    {
        $input = $request->all();
        $input['IdJenisMBKM'] = 4;
        MBKM::create($input);
        return redirect('Penelitian-MBKM')->with('success', 'Data berhasil ditambahkan.');;
    }

    public function editPenelitian($id)
    {
        $data = MBKM::find($id);
        return view('Content.MBKM.Penelitian', compact('data'));
    }

    public function updatePenelitian($id, Request $request)
    {
        $input = $request->all();
        MBKM::find($id)->update($input);
        return redirect('Penelitian-MBKM');
    }

    public function destroyPenelitian($id)
    {
        $Penelitian = MBKM::find($id);
        $Penelitian->delete();
        return redirect('Penelitian-MBKM')->with('error', 'Data berhasil dihapus.');;
    }

    // PKM
    public function indexPKM()
    {
        //
        $data = MBKM::where('IdJenisMBKM', 5)->get();
        return view('Content.MBKM.PKM', compact('data'));
    }

    public function createPKM()
    {
        return view('Content.MBKM.PKM');
    }

    public function storePKM(Request $request)
    {
        $input = $request->all();
        $input['IdJenisMBKM'] = 5;
        MBKM::create($input);
        return redirect('PKM-MBKM')->with('success', 'Data berhasil ditambahkan.');;
    }

    public function editPKM($id)
    {
        $data = MBKM::find($id);
        return view('Content.MBKM.PKM', compact('data'));
    }

    public function updatePKM($id, Request $request)
    {
        $input = $request->all();
        MBKM::find($id)->update($input);
        return redirect('PKM-MBKM');
    }

    public function destroyPKM($id)
    {
        $PKM = MBKM::find($id);
        $PKM->delete();
        return redirect('PKM')->with('error', 'Data berhasil dihapus.');;
    }

    // Kewirus
    public function indexKewirus()
    {
        //
        $data = MBKM::where('IdJenisMBKM', 6)->get();
        return view('Content.MBKM.Kewirausahaan', compact('data'));
    }

    public function createKewirus()
    {
        return view('Content.MBKM.Kewirausahaan');
    }

    public function storeKewirus(Request $request)
    {
        $input = $request->all();
        $input['IdJenisMBKM'] = 6;
        MBKM::create($input);
        return redirect('Kewirausahaan')->with('success', 'Data berhasil ditambahkan.');;
    }

    public function editKewirus($id)
    {
        $data = MBKM::find($id);
        return view('Content.MBKM.Kewirausahaan', compact('data'));
    }

    public function updateKewirus($id, Request $request)
    {
        $input = $request->all();
        MBKM::find($id)->update($input);
        return redirect('Kewirausahaan');
    }

    public function destroyKewirus($id)
    {
        $KKN = MBKM::find($id);
        $KKN->delete();
        return redirect('Kewirausahaan')->with('error', 'Data berhasil dihapus.');;
    }

    // Asisten
    public function indexAsisten()
    {
        //
        $data = MBKM::where('IdJenisMBKM', 7)->get();
        return view('Content.MBKM.AsistenManajer', compact('data'));
    }

    public function createAsist()
    {
        return view('Content.MBKM.AsistenManajer');
    }

    public function storeAsist(Request $request)
    {
        $input = $request->all();
        $input['IdJenisMBKM'] = 7;
        MBKM::create($input);
        return redirect('AsistenManajer')->with('success', 'Data berhasil ditambahkan.');;
    }

    public function editAsist($id)
    {
        $data = MBKM::find($id);
        return view('Content.MBKM.AsistenManajer', compact('data'));
    }

    public function updateAsist($id, Request $request)
    {
        $input = $request->all();
        MBKM::find($id)->update($input);
        return redirect('AsistenManajer');
    }

    public function destroyAsist($id)
    {
        $KKN = MBKM::find($id);
        $KKN->delete();
        return redirect('AsistenManajer')->with('error', 'Data berhasil dihapus.');;
    }

    // Studi
    public function indexStudi()
    {
        //
        $data = MBKM::where('IdJenisMBKM', 8)->get();
        return view('Content.MBKM.StudiIndependen', compact('data'));
    }

    public function createStudi()
    {
        return view('Content.MBKM.StudiIndependen');
    }

    public function storeStudi(Request $request)
    {
        $input = $request->all();
        $input['IdJenisMBKM'] = 8;
        MBKM::create($input);
        return redirect('StudiIndependen')->with('success', 'Data berhasil ditambahkan.');;
    }

    public function editStudi($id)
    {
        $data = MBKM::find($id);
        return view('Content.MBKM.StudiIndependen', compact('data'));
    }

    public function updateStudi($id, Request $request)
    {
        $input = $request->all();
        MBKM::find($id)->update($input);
        return redirect('StudiIndependen');
    }

    public function destroyStudi($id)
    {
        $KKN = MBKM::find($id);
        $KKN->delete();
        return redirect('StudiIndependen')->with('error', 'Data berhasil dihapus.');;
    }
}
