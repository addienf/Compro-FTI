@extends('layout.layout')

@section('content')


<div class="judul"> 
    <h1>Artikel Berita FTI</h1>
</div>


<div class="container">
    <div class="artikel-1">
        <div class="card">
            <div class="tumb" style="background-image:url(assets\pexels-wildlittlethingsphoto-3471028.jpg)"></div>
            <article>
                <h2>ini buat judul berita</h2>
                <span>Tanggal</span>
            </article>
        </div>
    </div>

    <div class="artikel-2">
        <div class="card">
            <div class="tumb" style="background-image:url(assets\pexels-wildlittlethingsphoto-3471028.jpg)"></div>
            <article>
                <h2>ini buat judul berita</h2>
                <span>Tanggal</span>
            </article>
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