@extends('Layout.layout')
<link rel="stylesheet" href="{{ asset('css\dokumen.css') }}">
@include('Component.Navbar')
@section('content')
    {{--  bagian ke-1  --}}
    <div class="container1">
        <div class="bag1">
            <h5> Kebijakan & Peraturan, Renstra, laporan kinerja dan laporan tahunan </h5>
        </div>
    </div>

    {{--  bagian ke-2   --}}

    <div class="container">
        <div class="bag3">
            <div class="subab">Kebijakan</div>
            <p> Lörem ipsum teratologi dimåska trifoni och redöngen. Digital tvilling grafen oresebyrå jolingar.
                Gigasade
                vårdvisare även om jänyv nätbingo. Kong agnostitos i divis. Backflyt tefyliga trelaling. Megar vabel,
                svenna sitt liv terragram. Megakädonat polytar och digifysisk. Nyras trekvartspudel termodiktisk.
                Enveckasförsvar sena hexas. Snippgympa jobbtorg, kovis. Ongar safariforskning, parara och göra en pudel.
                Makronina reklejma gässade. Kyrade obeligt popes. Nyras por. Megaform prong råtissade. Megakrogon miktig
                ögonkramp än trise. Desnomi tegt.
                Ekotropi modemkapare. Pseudotion kubtest. Poddsändning bipol polisiv. </p>
        </div>
    </div>


    <div class="container">
        <div class="bag3">
            <div class="subab">Peraturan</div>
            <p> Lörem ipsum teratologi dimåska trifoni och redöngen. Digital tvilling grafen oresebyrå jolingar.
                Gigasade
                vårdvisare även om jänyv nätbingo. Kong agnostitos i divis. Backflyt tefyliga trelaling. Megar vabel,
                svenna sitt liv terragram. Megakädonat polytar och digifysisk. Nyras trekvartspudel termodiktisk.
                Enveckasförsvar sena hexas. Snippgympa jobbtorg, kovis. Ongar safariforskning, parara och göra en pudel.
                Makronina reklejma gässade. Kyrade obeligt popes. Nyras por. Megaform prong råtissade. Megakrogon miktig
                ögonkramp än trise. Desnomi tegt.
                Ekotropi modemkapare. Pseudotion kubtest. Poddsändning bipol polisiv. </p>
        </div>
    </div>

    <div class="container">
        <div data-aos="fade-up">
            <div class="subab">Renstra</div>
            <div class="kotak">
                <div class="judulatas1">
                    Judul
                </div>
                <div class="judulatas2">
                    Link
                </div>
            </div>
        </div>
    </div>


    <table>
        <tr>

            <td>
                <h5> Jurnal Penelitian </h5>
            </td>
            <td> <button type="button" class="btn btn-purple">www.Jurnal.com</button> </td>
        </tr>
        <tr>
            <td>
                <h5> Jurnal PKM </h5>
            </td>
            <td> <button type="button" class="btn btn-purple">www.PKM.org</button> </td>
        </tr>
        <tr>
            <td>
                <h5> Diseminasi FTI </h5>
            </td>
            <td> <button type="button" class="btn btn-purple">www.DiseminasiFTI.org</button> </td>
        </tr>
        <tr>
            <td>
                <h5> Seminar Nasional </h5>
            </td>
            <td> <button type="button" class="btn btn-purple">www.Semnas.org</button> </td>
        </tr>
        <tr>
            <td>
                <h5> FoITIC </h5>
            </td>
            <td> <button type="button" class="btn btn-purple">www.foitic.org</button> </td>
        </tr>

    </table>
    </div>
    <div data-aos="fade-up">
        <div class="container">
            <div class="bag3">
                <div class="subab2">Laporan Kinerja</div>
                <img src="https://asset.kompas.com/data/photo/2021/04/23/60828b8b00b4e.jpg" alt="Deskripsi gambar"
                    class="d-block mx-auto">
            </div>
        </div>
    </div>
    <div data-aos="fade-up">
        <div class="container">
            <div class="bag3">
                <div class="subab2">Laporan Tahunan</div>
                <img src="https://asset.kompas.com/data/photo/2021/04/23/60828b8b00b4e.jpg" alt="Deskripsi gambar"
                    class="d-block mx-auto">
            </div>
        </div>
    </div>
    @include('Component.Footer')
@endsection
