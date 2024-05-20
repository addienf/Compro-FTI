
@extends('layout.layout')

@section('content')

@include('Component.Navbar')

<style>
  /*dashboard-berita*/
.judul{
    max-width: 100vw;
    height: 150px;
    background: linear-gradient(to right, #000046, #1cb5e0);
    color: whitesmoke;
    align-items: center; 
    display: flex;
}
.judul h1{
    margin-left: 50px;
}

.wrapper{
    margin: 30px;
    padding: 20px;
}

.wrapper .row .col-4 .card{
    margin: 30px;
  box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.2);
}

.wrapper .row .col-4 .card .card-body a{
    float: right;
}
/* end dashboard-berita */

  img{
    width: 300px;
    height: auto;
    object-fit: cover;
  }

  .thumb{
    width: 100%;
  }

  .main-news{
    margin-top: 20px;
    padding: 50px;

  }

  .main-news h3{
    line-height: 0.75;
  }

  .main-news h3 a{
    font-size: 17px;
    text-decoration: none;
    font-weight: 600;
  }

  .image{
    overflow: hidden;
  }

  .image-sm{
    max-height: 180px;
  }

  .image-xs{
    max-height: 160px;
  }

  .image-xxs{
    max-height: 100px;
  }

  .font-large{
    font-size: 0.9em!important;
    font-weight: 600!important;
  }
</style>

<div class="judul"> 
    <h1>Artikel Berita FTI</h1>
</div>


<div class="container main-news section">
    <div class="row">
      <div class="col-sm-12 col-md-6 col-xs-12 col-lg-6">
        <img class="thumb mb-3" src="assets\pexels-pixabay-247823.jpg" alt="">
        <h3>
          <a class="font-large" href="">
            judul berita
          </a>
        </h3>
      </div>
      <div class="col-sm-12 col-md-6 col-xs-12 col-lg-6">
        <div class="row">
          <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">
            <div class="image image-sm mb-3">
              <img src="assets\pexels-pixabay-247823.jpg" alt="">
            </div>
            <h3>
              <a class="font-large" href="">
                peraih juara satu internasional
              </a>
            </h3>

            <div class="image image-sm mb-3">
              <img src="assets\pexels-pixabay-247823.jpg" alt="">
            </div>
            <h3>
              <a class="font-large" href="">
                judul berita
              </a>
            </h3>
        </div>

        <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">
          <div class="image image-sm mb-3">
            <img src="assets\pexels-pixabay-247823.jpg" alt="">
          </div>
          <h3>
            <a class="font-large" href="">
              judul berita
            </a>
          </h3>

          <div class="image image-sm mb-3">
            <img src="assets\pexels-pixabay-247823.jpg" alt="">
          </div>
          <h3>
            <a class="font-large" href="">
              judul berita
            </a>
          </h3>
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