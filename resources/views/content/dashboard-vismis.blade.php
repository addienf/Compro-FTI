@extends('Layout.layout')

@section('content')

@include('Component.Navbar')
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

#fti h2{
    margin-left: 50px;
}

.container .row{
    margin: 50px;
}

.container .row .col h2{
    text-align: left;
}

.container #vismis{
    justify-content: center;
    border-radius: 10px;
}

#vismis .col-5 h2{
    text-align:left;
}

.col-md-2 img{
    width: 500px;
    height: auto;
    margin-left: 90px;
    margin-bottom: 50px;
    object-fit: cover; 
  }

.container-fluid{
    background-color: transparent;
}
.container-fluid h2{
    text-align: center;
}

.wrapper{
    justify-content: center;
    align-items: center;
}

.wrapper .row{
    justify-content: center;
}

.wrapper .col-sm-4 {
  position: relative;
  margin: 15px;
  width: fit-content;
}

.image {
  width: 300px;
  height: 250px;
  object-fit: cover;
  justify-content: center;
  box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.2);
}

.overlay {
  position: absolute; 
  bottom: 0; 
  width: 300px;
  background: rgb(0, 0, 0);
  background: rgba(190, 107, 29, 0.5); /* Warna hitam yang tembus pandang */
  color: #f1f1f1; 
  transition: .5s ease;
  opacity:0;
  color: white;
  font-size: 20px;
  padding: 20px;
  text-align: center;
}

.col-sm-4:hover .overlay {
  opacity: 1;
}

</style>

<div class="foto">
    <img src="assets\fakultas\fakultas.jpg" alt="">
</div>

<div class="container mt-5">
    <div class="row mt-5" id="vismis">
        <div class="col-5">
            <h2>Visi</h2>
            <p>Menjadi fakultas bereputasi dalam pengembangan ilmu pengetahuan dan teknologi industri 
                serta berperan aktif dalam pembangunan pada lingkup nasional dan global</p>
        </div>
        <div class="col-5">
            <h2>Misi</h2>
            <p>Mengkoordinasi dan mendorong seluruh potensi yang ada di fakultas untuk melaksanakan pendidikan, 
                penelitian dan pengabdian kepada masyarakat yang berkualitas tinggi agar dapat menghasilkan 
                sumber daya manusia yang unggul dan memiliki moral dan etika yang tinggi</p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h2>Tujuan Dan Sasaran</h2>
            <p>1. Mengkoordinasi dan mengembangkan kegiatan administrasi serta penyelenggaraan proses pendidikan di Jurusan/ program studi untuk membangun karakter lulusan yang kompeten pada bidangnya, terampil, mandiri, berjiwa entrepreneur serta memiliki moral dan etika yang baik;<hr>
            2. Mendorong budaya untuk melaksanakan dan mengembangkan penelitian dasar dan terapan yang hasilnya dapat diaplikasikan, dipatenkan dan/atau karya ilmiahnya dapat dipublikasikan pada jurnal nasional terakreditasi atau jurnal internasional terindeks basis data internasional bereputasi;<hr>
            3. Menyebarluaskan dan mendiseminasikan hasil studi dan penelitian terkait ilmu pengetahuan dan teknologi melalui program pemberdayaan dan pengabdian kepada masyarakat;<hr>
            4. Membangun dan mengembangkan jejaring kerjasama strategis secara sinergi dan berkesinambungan dengan berbagai institusi pemerintah maupun swasta, di dalam dan luar negeri.</p>
        </div>
    </div>
</div>

<div class="container" id="fti">
    <h2>Tentang FTI</h2>
    <div class="row">
        <div class="col-md-6">
            <p class="lead">Fakultas Teknologi Industri merupakan Fakultas yang di desain untuk mempersiapkan 
            semua aspek yang dibutuhkan oleh dunia industri. Wawasan mengenai awal mula perindustrian hingga perkembangan teknologinya yang kini menjadi Industri 4.0 
            wajib dipahami sebelum merancang dan mencipta inovasi baru. Fakultas Teknologi Industri menggali potensi yang dimiliki para mahasiswa melalui pemikiran-pemikiran terdepan dalam riset, 
            serta menumbuhkan kreativitas dan inovasi yang akan menjadi modal besar bagi roda penggerak kemajuan industri.</p>   
        </div>
        <div class="col-md-2 ">
            <img src="assets\pexels-wildlittlethingsphoto-3471028.jpg" alt="">
        </div>
    </div>
</div>

<div class="container-fluid">
    <H2>Struktur Organisasi</H2>
    <div class="wrapper">
        <div class="row">
            <div class="col-sm-4">
                <img src="https://dosenit.com/wp-content/uploads/2020/10/140185_1234217273488_400_300.jpg" alt="Avatar" class="image">
                <div class="overlay">
                    <h3>Jono Sunjoyo</h3>
                    <h5>Bachelor of Information System</h5>
                </div>
            </div>
            <div class="col-sm-4">
                <img src="assets\pexels-wildlittlethingsphoto-3471028.jpg" alt="Avatar" class="image">
                <div class="overlay">
                    <h3>Jono Sunjoyo</h3>
                    <h5>Bachelor of Information System</h5>
                </div>
            </div>
            <div class="col-sm-4">
                <img src="https://dosenit.com/wp-content/uploads/2020/10/140185_1234217273488_400_300.jpg" alt="Avatar" class="image">
                <div class="overlay">
                    <h3>Jono Sunjoyo</h3>
                    <h5>Bachelor of Information System</h5>
                </div>
            </div>
            <div class="col-sm-4">
                <img src="https://dosenit.com/wp-content/uploads/2020/10/140185_1234217273488_400_300.jpg" alt="Avatar" class="image">
                <div class="overlay">
                    <h3>Jono Sunjoyo</h3>
                    <h5>Bachelor of Information System</h5>
                </div>
            </div>
            <div class="col-sm-4">
                <img src="assets\pexels-wildlittlethingsphoto-3471028.jpg" alt="Avatar" class="image">
                <div class="overlay">
                    <h3>Jono Sunjoyo</h3>
                    <h5>Bachelor of Information System</h5>
                </div>
            </div>
            <div class="col-sm-4">
                <img src="assets\pexels-wildlittlethingsphoto-3471028.jpg" alt="Avatar" class="image">
                <div class="overlay">
                    <h3>Jono Sunjoyo</h3>
                    <h5>Bachelor of Information System</h5>
                </div>
            </div>
    </div>
</div>
