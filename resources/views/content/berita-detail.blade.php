@extends('layout.layout')
<link rel="stylesheet" href="{{ asset('css\beritadetail.css') }}">
@section('content')
    @include('Component.Navbar')

    {{-- <div class="judul">
        <h1>Artikel Berita FTI</h1>
    </div>

    <div class="arahan">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Library</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data</li>
            </ol>
        </nav>
    </div>

    <div class="container-photo">
        <img src="assets\pexels-wildlittlethingsphoto-3471028.jpg" alt="">
    </div> --}}

    <div class="container">
        <p>Lörem ipsum gamification heterohynat, om än androplastisk otide. Telefas ranebelt, jasminrevolution. David
            Håkansson kahåvis, i trollfabrik. Skräpbot rattsurfa larade.
            Stuprörspolitik syngen emedan sextremism, robotfälla inte posttropi råvis. Tigure kringmyndighet, såsom
            portfoliometoden Madeleine Lind. Kronire kuren videosamtal mossgraffiti, innan krana. Diamani sassa treliga,
            söse.
            Treren mms:a supratropi emedan ofiv semiterad. Transfiering ägiling ifall osade kontrapobekuk, desertad hypa.
            Linjär tv ASMR del postlog makrongen. Trahyv kamikazetips ins liksom mikrofäliga, laddstolpe.
            Premok infodemi, för att neologi. Facebookfest klustersmitta, blandkostare inte dikahet. Komskop pixlig
            ångerrösta av stadsutglesning. Krislåda kror det stafettläkare ifall mobilmobbning huruvida datalektiker i
            teledisk.
            Mobil-tv minidator i kontracentrism. Kompetenstrappa speros fastlans Elin Nyström. Asymmetrisk krigföring
            bloggare i kus deepfake techlash stereonomi. Frågestrejka älogi makrode därför att galna chips-sjukan och
            förarstödjare.
        </p>
    </div>

    <div class="container mt-3">
        <nav class="nav">
            <i class="fa-regular fa-newspaper"><a href="#">Berita FTI</a></i>
            <i class="fa-solid fa-user"><a href="#">Berita FTI</a></i>
            <i class="fa-solid fa-user"><a href="#">Berita FTI</a></i>
        </nav>
    </div>

    <div class="container-fluid">


        <!-- gambar berita -->
        <div class="container-photo">
            <img src="assets\pexels-wildlittlethingsphoto-3471028.jpg" alt="">
        </div>
        <!-- end gambar berita -->

        <!-- isi berita -->
        <div class="container">
            <p>Lörem ipsum gamification heterohynat, om än androplastisk otide. Telefas ranebelt, jasminrevolution. David
                Håkansson kahåvis, i trollfabrik. Skräpbot rattsurfa larade.
                Stuprörspolitik syngen emedan sextremism, robotfälla inte posttropi råvis. Tigure kringmyndighet, såsom
                portfoliometoden Madeleine Lind. Kronire kuren videosamtal mossgraffiti, innan krana. Diamani sassa treliga,
                söse.
                Treren mms:a supratropi emedan ofiv semiterad. Transfiering ägiling ifall osade kontrapobekuk, desertad
                hypa. Linjär tv ASMR del postlog makrongen. Trahyv kamikazetips ins liksom mikrofäliga, laddstolpe.
                Premok infodemi, för att neologi. Facebookfest klustersmitta, blandkostare inte dikahet. <br> <br>Komskop
                pixlig ångerrösta av stadsutglesning. Krislåda kror det stafettläkare ifall mobilmobbning huruvida
                datalektiker i teledisk.
                Mobil-tv minidator i kontracentrism. Kompetenstrappa speros fastlans Elin Nyström. Asymmetrisk krigföring
                bloggare i kus deepfake techlash stereonomi. Frågestrejka älogi makrode därför att galna chips-sjukan och
                förarstödjare.
                Tigure kringmyndighet, såsom portfoliometoden Madeleine Lind. Kronire kuren videosamtal mossgraffiti, innan
                krana. Diamani sassa treliga, söse.
                Treren mms:a supratropi emedan ofiv semiterad. Transfiering ägiling ifall osade kontrapobekuk. <br> <br>
                desertad hypa. Linjär tv ASMR del postlog makrongen. Trahyv kamikazetips ins liksom mikrofäliga, laddstolpe.
                Tigure kringmyndighet, såsom portfoliometoden Madeleine Lind. Kronire kuren videosamtal mossgraffiti, innan
                krana. Diamani sassa treliga, söse.
                Treren mms:a supratropi emedan ofiv semiterad. Transfiering ägiling ifall osade kontrapobekuk, desertad
                hypa. Linjär tv ASMR del postlog makrongen. Trahyv kamikazetips ins liksom mikrofäliga, laddstolpe.
                Mobil-tv minidator i kontracentrism. Kompetenstrappa speros fastlans Elin Nyström. Asymmetrisk krigföring
                bloggare i kus deepfake techlash stereonomi. Frågestrejka älogi makrode därför att galna chips-sjukan och
                förarstödjare.
                Tigure kringmyndighet, såsom portfoliometoden Madeleine Lind. Kronire kuren videosamtal mossgraffiti, innan
                krana. Diamani sassa treliga, söse.
                Treren mms:a supratropi emedan ofiv semiterad. Transfiering ägiling ifall osade kontrapobekuk,
            </p>
        </div>
        <!-- end isi berita -->

        <!-- detail berita -->
        <div class="container mt-3" id="person">
            <i class="fa-regular fa-newspaper">
                <p>Berita FTI</p>
            </i>
            <i class="fa-solid fa-user">
                <p>Andrew G</p>
            </i>
            <i class="fa-regular fa-calendar-days">
                <p>20/05/24</p>
            </i>
        </div>
        <!-- end detail berita -->

        <!-- pengumuman -->

        <div class="container-fluid">
            <h4>Baca Juga</h4>
            <div class="row mt-3">
                <div class="col-4">
                    <div class="card">
                        <img src="assets\pexels-pixabay-247823.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">20/04/24</p>
                            <a href="#" class="btn btn-dark">Selengkapnya</a>
                        </div>
                    </div>

                </div>
                <div class="col-4">
                    <div class="card">
                        <img src="assets\pexels-pixabay-247823.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">20/04/24</p>
                            <a href="#" class="btn btn-dark">Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="card">
                        <img src="assets\pexels-pixabay-247823.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">20/04/24</p>
                            <a href="#" class="btn btn-dark">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-dark btn-sm">Berita Lainnya</button>
        </div>
        <!-- end pengumuman -->
    </div>
    @include('Component.Footer')
@endsection
