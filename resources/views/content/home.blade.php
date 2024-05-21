
@extends('Layout.layout')
@section('content')

@include('Component.Navbar')

<style>
  body{
    background-color: #FBFBFB;
}
.container-fluid{
    background-color: #EEEAF5;
    width: 80vw;
    margin: 2rem auto;
    padding: 1rem;
    border-radius: 15px;
}

.container-fluid .row{
    margin: 10px;
    padding: 15px;
    justify-content: center;
}

.row .col-2{
    text-align: center;
}

.row .col-2 i{
    margin: 50px;
    font-size: 3rem;
}

.row .col-2 h2{
    font-size: medium;
}

.container-fluid .gallery{
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 20px;
   
}

.container-fluid .kerjasama img{
    width: 100px;
    height: auto;
    margin: 50px;
}
/* end dashboard-home*/

  #container-fluid button{
    background-color: #261446;
  }

  .card-body a{
    background-color: #EB890A;
    border: none
  }

  .col-md-7{
    margin-right: 50px;
    margin-left: 0;
  }

  .col-md-7 button{
    background-color: #261446;
    border: none
  }
  .col-md-2 img{
    width: 15vw;
    height: 200px;
    margin-top: 5rem;
    object-fit: cover; 
  }

  #fti{
    background-color: transparent;
  }
   #banner{
    background: rgba(0, 0, 0, 0.6)url("assets/pexels-pixabay-247823.jpg");
    background-size: cover;
    background-position: center center;
    background-blend-mode:darken;
    color: whitesmoke;
  }

  #kerjasama{
    background-color: transparent;
  }
</style>

<!-- carosel -->
  <div id="carouselExampleIndicators" class="carousel slide ">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets\pexels-pixabay-247823.jpg" class="d-block w-100 h-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="assets\pexels-pixabay-267885.jpg" class="d-block w-100 h-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="assets\pexels-wildlittlethingsphoto-3471028.jpg" class="d-block w-100 h-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
<!-- end carosel -->

  <!-- pengumuman -->
    <div class="container-fluid" >
      <button type="button" class="btn btn-primary btn-sm">Pengumuman</button>
      <button type="button" class="btn btn-secondary btn-sm">Acara Selanjutnya</button>
    
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
    </div>
  <!-- end pengumuman -->

<!-- tentang fti -->
  <div class="container-fluid" id="fti">
    <div class="row mt-5">
      <div class="col-md-7">
        <h2>Tentang FTI</h2>
        <p class="lead">Fakultas Teknologi Industri merupakan Fakultas yang di desain untuk mempersiapkan 
          semua aspek yang dibutuhkan oleh dunia industri. Wawasan mengenai awal mula perindustrian hingga perkembangan teknologinya yang kini menjadi Industri 4.0 
          wajib dipahami sebelum merancang dan mencipta inovasi baru. Fakultas Teknologi Industri menggali potensi yang dimiliki para mahasiswa melalui pemikiran-pemikiran terdepan dalam riset, 
          serta menumbuhkan kreativitas dan inovasi yang akan menjadi modal besar bagi roda penggerak kemajuan industri.</p>
          <button type="button" class="btn btn-primary">Pelajari Lebih Lanjut</button>
        </div>
      <div class="col-md-2 ">
        <img src="assets\pexels-wildlittlethingsphoto-3471028.jpg" alt="">
      </div>
      <div class="col-md-2 mt-5">
        <img src="assets\pexels-pixabay-267885.jpg" alt="">
      </div>
    </div>
  </div>
<!-- end tentang fti -->

<!-- banner -->
 <div class="container-fluid" id="banner">
    <div class="row mt-3">
        <div class="col-2">
          <i class="fa-solid fa-building-columns"></i>
          <h2>Berdiri Tahun</h2>
        </div>
        <div class="col-2">
          <i class="fa-solid fa-book-bookmark"></i>
          <h2>Jumlah Prodi 8</h2>
        </div>
        <div class="col-2">
          <i class="fa-solid fa-flask-vial"></i>
          <h2>Labs</h2>
        </div>
        <div class="col-2">
          <i class="fa-solid fa-graduation-cap"></i>
          <h2>kelompok Keahlian</h2>
        </div>
    </div>
  </div>
<!-- end banner -->

<!-- kerja sama -->
   <div class="container-fluid mt-5" id="kerjasama">
    <div class="gallery">
      <div class="kerjasama">
        <a href="#"><img src="assets\logo\google-logo.png" alt=""></a>
      </div>
      <div class="kerjasama">
        <a href="#"><img src="assets\logo\huawei-logo.png" alt=""></a>
      </div>
      <div class="kerjasama">
        <a href="#"><img src="assets\logo\google-logo.png" alt=""></a>
      </div>
      <div class="kerjasama">
        <a href="#"><img src="assets\logo\huawei-logo.png" alt=""></a>
      </div>
     </div>
   </div>

  <!--  end kerja sama -->

  
@endsection