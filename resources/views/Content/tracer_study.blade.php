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
