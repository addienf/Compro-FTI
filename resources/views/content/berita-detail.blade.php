@extends('layout.layout')

@section('content')
    <style>
        .arahan {
            margin: 50px;
        }

        .container-photo {
            display: flex;
            justify-content: center;
            /* Menengahkan horizontal */
            align-items: center;

        }

        img {
            width: 60vw;
            height: 60vh;
            object-fit: cover;
            justify-content: center;
            align-items: center;
            border-radius: 15px;
            margin: 30px;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);
        }

        .container {
            width: 80%;
            background-color: antiquewhite;
            display: flex;
            justify-content: center;
            align-items: center;
            height: auto;
            line-height: 1cm;
        }

        .container p {
            text-align: justify;
        }

        .container .nav {
            justify-content: left;
        }

        .container .nav i {
            margin: 10px;
        }

        .container .nav i a {
            margin: 10px;
        }
    </style>

    <div class="judul">
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
    </div>

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

    </div>
    @include('Component.Footer')
@endsection
