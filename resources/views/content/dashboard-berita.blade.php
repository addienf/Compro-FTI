
@extends('Layout.layout')
<link rel="stylesheet" href="{{asset('css\berita.css')}}">
@section('content')

@include('Component.Navbar')

<div class="jud"> 
    <h1>Artikel Berita FTI</h1>
</div>

<div class="container main-news section">
  <div class="row">
    <div class="col-sm-12 col-md-6 col-xs-12 col-lg-6">
      <img class="thumb mb-3" src="assets\pexels-pixabay-247823.jpg" alt="">
        <h3>
          <a class="font-large" href="">
            Juara 1 International
          </a>
        </h3>
    </div>

    <div class="col-sm-12 col-md-6 col-xs-12 col-lg-6">
      <div class="row">
        <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">
          <div class="image image-sm mb-1">
            <img src="assets\pexels-pixabay-247823.jpg" alt="">
          </div>
            <h3 class="mb-4">
              <a class="font-large" href="">
                Hibah Alat Praktikum FTI terbaru 2024 oleh pddikti jawabarat
              </a>
            </h3>

            <div class="image image-sm mb-1">
              <img src="assets\pexels-pixabay-247823.jpg" alt="">
            </div>
            <h3 class="mb-4">
              <a class="font-large" href="">
                Akreditasi Prodi Sistem Informasi terbaru tahun 2024
              </a>
            </h3>
        </div>

        <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">
          <div class="image image-sm mb-1">
            <img src="assets\pexels-pixabay-247823.jpg" alt="">
          </div>
          <h3 class="mb-4">
            <a class="font-large" href="">
              Program Magang Fakultas FTI telah diuka untuk umum
            </a>
          </h3>

          <div class="image image-sm mb-1">
            <img src="assets\pexels-pixabay-247823.jpg" alt="">
          </div>
          <h3 class="mb-4">
          <a class="font-large" href="">
            Penghargaan untuk fakultas fti yang telah menyelesaikan akreditasi
          </a>
          </h3>
      </div>  
    </div>
  </div>
</div>
</div>



<!-- section berita -->
<div class="wrapper">
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
<!-- end section berita -->

<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
          <span class="sr-only">Previous</span>
        </a>
      </li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
          <span class="sr-only">Next</span>
        </a>
      </li>
    </ul>
</nav>