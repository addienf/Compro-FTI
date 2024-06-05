@extends('Layout.layout')
<link rel="stylesheet" href="{{ asset('css\publikasi.css') }}">
@include('Component.Navbar')
@section('content')
    <div class="container">

        <div class="kotak">
            <div class="judulatas1">
                Judul
            </div>
            <div class="judulatas2">
                Link
            </div>
        </div>

        <table>
            <tr>
                <td>
                    <h5> Jurnal Penelitian </h5>
                </td>
                <td> <button type="button" class="btn btn-purple">www.Jurnal.com</button> </td>
            </tr>
            <tr>
                <td>
                    <h5> Jurnal PKM </h5>
                </td>
                <td> <button type="button" class="btn btn-purple">www.PKM.org</button> </td>
            </tr>
            <tr>
                <td>
                    <h5> Diseminasi FTI </h5>
                </td>
                <td> <button type="button" class="btn btn-purple">www.DiseminasiFTI.org</button> </td>
            </tr>
            <tr>
                <td>
                    <h5> Seminar Nasional </h5>
                </td>
                <td> <button type="button" class="btn btn-purple">www.Semnas.org</button> </td>
            </tr>
            <tr>
                <td>
                    <h5> FoITIC </h5>
                </td>
                <td> <button type="button" class="btn btn-purple">www.foitic.org</button> </td>
            </tr>
        </table>
    </div>
    @include('Component.Footer')
@endsection
