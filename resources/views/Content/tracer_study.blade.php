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
            <div data-aos="fade-up">
                <div class="w-100 h-auto">
                    <iframe width="800" height="780"
                        src="https://lookerstudio.google.com/embed/reporting/4e86007f-38dd-41e0-968f-f312cf56141c/page/jbpEC"
                        frameborder="0" style="border:0" allowfullscreen
                        sandbox="allow-storage-access-by-user-activation allow-scripts allow-same-origin allow-popups allow-popups-to-escape-sandbox"></iframe>
                </div>
            </div>
        </div>
    </div>
    @include('Component.Footer')
@endsection
