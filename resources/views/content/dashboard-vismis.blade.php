@extends('layout.layout')

@section('content')

<style>
.foto{
    width: 100%;
    height: 379px; 
}

.foto img{
    width: 100%;
    height: 379px;
    object-fit: cover;
    object-position: 60% 70%;
}

.container{
    justify-content: center;
    background-color: antiquewhite;
}

.container .row{
    margin: 50px;
    
    
}

.container .row .col-5{
    margin-right: 50px;
}
</style>

<div class="foto">
    <img src="assets\fakultas\fakultas.jpg" alt="">
    <h2>Fakultas FTI</h2>
</div>

<div class="container mt-5">
    <div class="row mt-5">
        <div class="col-5">
            <h2>Visi</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias est, quibusdam aperiam tempora 
                consequatur asperiores? Sunt, modi alias quos ab perferendis numquam at, 
                hic nesciunt saepe nihil quasi nisi esse?</p>
        </div>
        <div class="col-5 ">
            <h2>Tujuan Dan Sasaran</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias est, quibusdam aperiam tempora 
            consequatur asperiores? Sunt, modi alias quos ab perferendis numquam at, hic nesciunt saepe nihil quasi nisi esse?</p>
        </div>
    </div>
    <div class="row">
        <div class="col-5">
            <h2>Tujuan Dan Sasaran</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias est, quibusdam aperiam tempora 
            consequatur asperiores? Sunt, modi alias quos ab perferendis numquam at, hic nesciunt saepe nihil quasi nisi esse?</p>
        </div>
    </div>
</div>

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
