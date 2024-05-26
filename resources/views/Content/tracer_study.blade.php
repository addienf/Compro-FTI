@extends('Layout.layout')
@section('title', 'Kegiatan Mahasiswa')
<link rel="stylesheet" href="{{ asset('css\tracer.css') }}">
@section('content')
    @include('Component.Navbar')
    <div class="container">
        <div class="Subjudul1">
            Testimoni Alumni
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card testimonial-card">
                    <div class="card-up" style="background-color: #white;"></div>
                    <div class="avatar mx-auto bg-white">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp"
                            class="rounded-circle img-fluid" />
                    </div>
                    <div class="card-body text-center">
                        <div class="namatesti">Putri Ayu</div>
                        <p>Teknik Sipil</p>
                        <hr />
                        <p class="dark-grey-text mt-4">
                            <i class="fas fa-quote-left pe-2"></i>Lorem ipsum dolor sit amet eos adipisci,
                            consectetur adipisicing elit.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card testimonial-card">
                    <div class="card-up" style="background-color: white;"></div>
                    <div class="avatar mx-auto bg-white">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(2).webp"
                            class="rounded-circle img-fluid" />
                    </div>
                    <div class="card-body text-center">
                        <div class="namatesti">Awalidzan</div>
                        <p> Informatika</p>
                        <hr />
                        <p class="dark-grey-text mt-4">
                            <i class="fas fa-quote-left pe-2"></i>Neque cupiditate assumenda in maiores repudi
                            mollitia architecto.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card testimonial-card">
                    <div class="card-up" style="background-color: white;"></div>
                    <div class="avatar mx-auto bg-white">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(9).webp"
                            class="rounded-circle img-fluid" />
                    </div>
                    <div class="card-body text-center">
                        <div class="namatesti">Zidan Chosyiyar</div>
                        <p>Sistem Informasi</p>

                        <hr />
                        <p class="dark-grey-text mt-4">
                            <i class="fas fa-quote-left pe-2"></i>Delectus impedit saepe officiis ab aliquam
                            repellat rem unde ducimus.
                        </p>
                    </div>
                </div>
            </div>
            <div class="data-lulusan">
                <div class="Subjudul2">
                    Data Lulusan
                </div>
            </div>
            <table id="test" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Mitra</th>
                        <th>Jenis Kegiatan</th>
                        <th>Mulai</th>
                        <th>Berakhir</th>
                        <th>Manfaat</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Fauzan</td>
                        <td>System Architect</td>
                        <td>Cimahi</td>
                        <td>61</td>
                        <td>2011-04-25</td>
                        <td>$1</td>
                    </tr>
                    <tr>
                        <td>Fauzan</td>
                        <td>System Architect</td>
                        <td>Cimahi</td>
                        <td>61</td>
                        <td>2011-04-25</td>
                        <td>$1</td>
                    </tr>
                    <tr>
                        <td>Fauzan</td>
                        <td>System Architect</td>
                        <td>Cimahi</td>
                        <td>61</td>
                        <td>2011-04-25</td>
                        <td>$1</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection
{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap"
        rel="stylesheet">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Hind+Guntur:wght@300;400;500;600;700&family=Inter:wght@100..900&family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap"
        rel="stylesheet">

    <title>Tracer Study</title>

    <style>
        /* Custom CSS */
        body {
            padding: 50px;
        }

        h2 {
            font-size: 2.5rem;
            font-weight: 600;
            text-align: center;
            margin-bottom: 50px;
        }

        .button {
            color: #261446;
        }

        .testimonial-card {
            border: none;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.6);
            height: 500px;
        }

        .testimonial-card .card-up {
            height: 150px;
            overflow: hidden;
            border-top-left-radius: 0.25rem;
            border-top-right-radius: 0.25rem;
        }

        .testimonial-card .avatar {
            width: 110px;
            margin-top: -60px;
            overflow: hidden;
            border: 3px solid #fff;
            border-radius: 50%;
        }

        .title {
            margin-top: 20px;
            font-weight: bold;
        }

        /* Tambahkan margin bawah untuk setiap container */
        .container {
            margin-bottom: 30px;
        }

        .namatesti {
            font-family: "Source Sans", Arial, sans-serif;
            font-size: 16;
            text-align: center;
            font-weight: bold;
        }

        .Subjudul1 {
            font-family: "Hind Guntur", Arial, sans-serif;
            font-size: 36px;
            color: black;
            text-align: center;
            font-weight: semibold;
            background: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
        }

        .Subjudul2 {
            font-family: "Hind Guntur", Arial, sans-serif;
            font-size: 36px;
            color: black;
            font-weight: bold;

        }

        .box {
            background: #133765;
            height: 95px;
            color: white;
            border-radius: 15px;
        }

        .box1 {
            background: #133765;
            height: 95px;
            width: 1100px;
            color: white;
            border-radius: 15px;
            margin-top: 20px;
        }

        .box3 {
            background: #EB890A;
            border-radius: 5px;
            margin: 35px 85px 35px 80px;
            /* Atas, kanan, bawah, kiri */
        }

        .box4 {
            color: white;
            border-radius: 5px;
            margin: 35px 85px 35px 72px;
            /* Atas, kanan, bawah, kiri */
        }

        #baru {
            width: 500px;
            ont-family: "Hind Guntur", Arial, sans-serif;
            font-weight: bold;
            font-size: 32px;
            background: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
        }

        .wrapper {
            color: black;
            text-align: center;
            margin:

        }


        .col text-center {
            margin-left: 20px;
        }

        .p {
            margin-left: 10px;
        }

        .table {
            text-align: center;
            background: #133765;
            color: white;
            border-radius: 10px;
            border-spacing: 0 20px;
            height: 80px;
        }

        .table1 {
            text-align: center;
            background: #133765;
            color: white;
            height: 80px;
            width: 1100px;
            margin-right: 500px;
        }


        td,
        th * {
            text-align: center;
            font-family: "Source Sans", Arial, sans-serif;
            font-size: 20px;
            font-weight: bold;
            height: 30px;
        }

        .sss {
            background: #EB890A;
            border-radius: 100px;
        }

        .trke1 {
            padding: 20px;
        }
    </style>

</head>

<body>

    <div class="container" id="baru">
        <div class="wrapper">
            <p>Testimoni Alumni</p>
        </div>
    </div>


    <div class="container">
        <div class="row">

            <div class="col-md-4 mb-4">
                <div class="card testimonial-card">
                    <div class="card-up" style="background-color: #white;"></div>
                    <div class="avatar mx-auto bg-white">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp"
                            class="rounded-circle img-fluid" />
                    </div>
                    <div class="card-body text-center">
                        <div class="namatesti">Putri Ayu</div>
                        <p>Teknik Sipil</p>
                        <hr />
                        <p class="dark-grey-text mt-4">
                            <i class="fas fa-quote-left pe-2"></i>Lorem ipsum dolor sit amet eos adipisci,
                            consectetur adipisicing elit.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card testimonial-card">
                    <div class="card-up" style="background-color: white;"></div>
                    <div class="avatar mx-auto bg-white">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(2).webp"
                            class="rounded-circle img-fluid" />
                    </div>
                    <div class="card-body text-center">
                        <div class="namatesti">Awalidzan</div>
                        <p> Informatika</p>

                        <hr />
                        <p class="dark-grey-text mt-4">
                            <i class="fas fa-quote-left pe-2"></i>Neque cupiditate assumenda in maiores repudi
                            mollitia architecto.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card testimonial-card">
                    <div class="card-up" style="background-color: white;"></div>
                    <div class="avatar mx-auto bg-white">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(9).webp"
                            class="rounded-circle img-fluid" />
                    </div>
                    <div class="card-body text-center">
                        <div class="namatesti">Zidan Chosyiyar</div>
                        <p>Sistem Informasi</p>

                        <hr />
                        <p class="dark-grey-text mt-4">
                            <i class="fas fa-quote-left pe-2"></i>Delectus impedit saepe officiis ab aliquam
                            repellat rem unde ducimus.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Data Lulusan Section -->
    <section class="data-lulusan">
        <div class="container">
            <div class="Subjudul2">
                Data Lulusan
            </div>
        </div>

        <!-- Judul -->
        <div class="container-fluid"></div>
        <div class="container">
            <div class="box">
                <div class="row title">
                    <div class="box3">
                        <div class="col-md-auto">
                            No
                        </div>
                    </div>
                    <div class="box3">
                        <div class="col text-center">
                            Nama Lulusan
                        </div>
                    </div>
                    <div class="box3">
                        <div class="col text-center">
                            Program Studi
                        </div>
                    </div>
                    <div class="box3">
                        <div class="col text-center">
                            Tempat Bekerja
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="box">
                <div class="row title">
                    <div class="box4">
                        <div class="col-md-auto">
                            1
                        </div>
                    </div>
                    <div class="box4">
                        <div class="col text-center">
                            Zidan Chosyiyar
                        </div>
                    </div>
                    <div class="box4">
                        <div class="col text-center">
                            Sistem Informasi
                        </div>
                    </div>
                    <div class="box4">
                        <div class="col text-center">
                            Shoppe Indonesia
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid"></div>
        <div class="container">
            <div class="box">
                <div class="row title">
                    <div class="box4">
                        <div class="col-md-auto">
                            2
                        </div>
                    </div>
                    <div class="box4">
                        <div class="col text-center">
                            Fauzan Addien
                        </div>
                    </div>
                    <div class="box4">
                        <div class="col text-center">
                            Teknik Mesin
                        </div>
                    </div>
                    <div class="box4">
                        <div class="col text-center">
                            Dirgantara
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid"></div>
        <div class="container">
            <div class="box">
                <div class="row title">
                    <div class="box4">
                        <div class="col-md-auto">
                            3
                        </div>
                    </div>
                    <div class="box4">
                        <div class="col text-center">
                            Awalidzan Ahda
                        </div>
                    </div>
                    <div class="box4">
                        <div class="col text-center">
                            Informatika
                        </div>
                    </div>
                    <div class="box4">
                        <div class="col text-center">
                            Tokopedia Bandung
                        </div>
                    </div>
                </div>
            </div>
        </div>


</body>

</html> --}}
