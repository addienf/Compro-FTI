
@extends('layout.layout')

@section('content')

@include('Component.Navbar')

<style>
  .arahan{
    margin: 50px;
  }

  .container-fluid{
    background-color: #EEEAF5;
    width: 80vw;
    margin: 2rem auto;
    padding: 1rem;
    border-radius: 15px;
}
   
    .container-photo{
        display: flex;
        justify-content: center; 
        align-items: center;
        
    }
    .container-photo img{
        width: 60vw;
        height: 60vh;
        object-fit: cover;
        justify-content: center;
        align-items: center;
        border-radius: 15px;
        margin: 30px;
        box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);
    }

    .container{
        width: 80%;
        display: flex;
        justify-content: center;
        align-items: center; 
        height: auto;
        line-height: 1cm;
    }

    .container p{
        text-align: justify;
    }


    .container i{
        margin: 10px;
        font-size: 1rem;
        color: #EB890A;
    }

    .container  i p{
        color: black;
        float: right;
        margin-left: 10px;
        font-size: 15px;
    }

    #person{
      justify-content: left;
    }

    .container-fluid{
      background-color: transparent;
    }

    .card{
      box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.2);
    }

    .container-fluid button{
      width: 10vw;
      background-color: #261446;
      border: none;
      border-radius: 10px;
    }
</style>

<!-- judul -->
  <div class="judul"> 
      <h1>Artikel Berita FTI</h1>
  </div>
<!-- end judul -->

<!-- bread crumbs -->
  <div class="arahan">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Home Berita</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
    </nav>
  </div>
<!-- end bread crumbs -->

<!-- gambar berita -->
  <div class="container-photo">
    <img src="assets\pexels-wildlittlethingsphoto-3471028.jpg" alt="">
  </div>
<!-- end gambar berita -->

<!-- isi berita -->
  <div class="container">
    <p>Lörem ipsum gamification heterohynat, om än androplastisk otide. Telefas ranebelt, jasminrevolution. David Håkansson kahåvis, i trollfabrik. Skräpbot rattsurfa larade. 
        Stuprörspolitik syngen emedan sextremism, robotfälla inte posttropi råvis. Tigure kringmyndighet, såsom portfoliometoden Madeleine Lind. Kronire kuren videosamtal mossgraffiti, innan krana. Diamani sassa treliga, söse. 
        Treren mms:a supratropi emedan ofiv semiterad. Transfiering ägiling ifall osade kontrapobekuk, desertad hypa. Linjär tv ASMR del postlog makrongen. Trahyv kamikazetips ins liksom mikrofäliga, laddstolpe. 
        Premok infodemi, för att neologi. Facebookfest klustersmitta, blandkostare inte dikahet. <br> <br>Komskop pixlig ångerrösta av stadsutglesning. Krislåda kror det stafettläkare ifall mobilmobbning huruvida datalektiker i teledisk. 
        Mobil-tv minidator i kontracentrism. Kompetenstrappa speros fastlans Elin Nyström. Asymmetrisk krigföring bloggare i kus deepfake techlash stereonomi. Frågestrejka älogi makrode därför att galna chips-sjukan och förarstödjare. 
        Tigure kringmyndighet, såsom portfoliometoden Madeleine Lind. Kronire kuren videosamtal mossgraffiti, innan krana. Diamani sassa treliga, söse. 
        Treren mms:a supratropi emedan ofiv semiterad. Transfiering ägiling ifall osade kontrapobekuk. <br> <br> desertad hypa. Linjär tv ASMR del postlog makrongen. Trahyv kamikazetips ins liksom mikrofäliga, laddstolpe.
        Tigure kringmyndighet, såsom portfoliometoden Madeleine Lind. Kronire kuren videosamtal mossgraffiti, innan krana. Diamani sassa treliga, söse. 
        Treren mms:a supratropi emedan ofiv semiterad. Transfiering ägiling ifall osade kontrapobekuk, desertad hypa. Linjär tv ASMR del postlog makrongen. Trahyv kamikazetips ins liksom mikrofäliga, laddstolpe.
        Mobil-tv minidator i kontracentrism. Kompetenstrappa speros fastlans Elin Nyström. Asymmetrisk krigföring bloggare i kus deepfake techlash stereonomi. Frågestrejka älogi makrode därför att galna chips-sjukan och förarstödjare. 
        Tigure kringmyndighet, såsom portfoliometoden Madeleine Lind. Kronire kuren videosamtal mossgraffiti, innan krana. Diamani sassa treliga, söse. 
        Treren mms:a supratropi emedan ofiv semiterad. Transfiering ägiling ifall osade kontrapobekuk,
      </p>
  </div>
<!-- end isi berita -->

<!-- detail berita -->
  <div class="container mt-3" id="person">
        <i class="fa-regular fa-newspaper"><p>Berita FTI</p></i>
        <i class="fa-solid fa-user"><p>Andrew G</p></i>
        <i class="fa-regular fa-calendar-days"><p>20/05/24</p></i>
  </div>
<!-- end detail berita -->

<!-- pengumuman -->

     <div class="container-fluid" >
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

@endsection
  