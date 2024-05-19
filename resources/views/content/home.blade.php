
@extends('layout.layout')

@section('content')


<!-- carosel -->
  <div id="carouselExampleIndicators" class="carousel slide">
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
    <div class="container-fluid">
      <button type="button" class="btn btn-primary btn-sm">Pengumuman</button>
      <button type="button" class="btn btn-secondary btn-sm">Acara Selanjutnya</button>
    
      <div class="row mt-3">
        <div class="col-4">
          <div class="card">
            <img src="assets\pexels-pixabay-247823.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">20/04/24</p>
              <a href="#" class="btn btn-primary">Selengkapnya</a>
            </div>
          </div>

        </div>
        <div class="col-4">
          <div class="card">
            <img src="assets\pexels-pixabay-247823.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">20/04/24</p>
              <a href="#" class="btn btn-primary">Selengkapnya</a>
            </div>
          </div>
        </div>

        <div class="col-4">
          <div class="card">
            <img src="assets\pexels-pixabay-247823.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">20/04/24</p>
              <a href="#" class="btn btn-primary">Selengkapnya</a>
            </div>
          </div>
        </div>      
      </div>
    </div>
  <!-- end pengumuman -->

<!-- tentang fti -->
  <div class="container-fluid" id="no-color">
    <div class="row">
      <div class="col-md-7">
        <h2>Tentang FTI</h2>
        <p class="lead">Fakultas Teknologi Industri merupakan Fakultas yang di desain untuk mempersiapkan 
          semua aspek yang dibutuhkan oleh dunia industri. Wawasan mengenai awal mula perindustrian hingga perkembangan teknologinya yang kini menjadi Industri 4.0 
          wajib dipahami sebelum merancang dan mencipta inovasi baru. Fakultas Teknologi Industri menggali potensi yang dimiliki para mahasiswa melalui pemikiran-pemikiran terdepan dalam riset, 
          serta menumbuhkan kreativitas dan inovasi yang akan menjadi modal besar bagi roda penggerak kemajuan industri.</p>
          <button type="button" class="btn btn-primary">Primary</button>
        </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="300" height="300" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em">500x500</text></svg>
      </div>
    </div>
  </div>
<!-- end tentang fti -->

<!-- banner -->
 <div class="container-fluid">
    <div class="row mt-3">
        <div class="col-2">
          <i class="fa-solid fa-building-columns"></i>
          <h2>Berdiri Tahun</h2>
        </div>
        <div class="col-2">
          <i class="fa-solid fa-building-columns"></i>
          <h2>Berdiri Tahun</h2>
        </div>
        <div class="col-2">
          <i class="fa-solid fa-building-columns"></i>
          <h2>Berdiri Tahun</h2>
        </div>
        <div class="col-2">
          <i class="fa-solid fa-building-columns"></i>
          <h2>Berdiri Tahun</h2>
        </div>
    </div>
  </div>
<!-- end banner -->

<!-- kerja sama -->
   <div class="container-fluid mt-5">
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