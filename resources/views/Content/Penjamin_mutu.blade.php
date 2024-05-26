@extends('Layout.layout')
<link rel="stylesheet" href="{{ asset('css\penjaminanmutu.css') }}">
@include('Component.Navbar')
@section('content')
    <div class="container">
        <div class="kotak">
            <div class="judulatas1">
                Nama
            </div>
            <div class="judulatas2">
                Link
            </div>
        </div>
        <table>
            <tr>
                <td>
                    <h5> Standar</h5>
                </td>
                <td> <button type="button" class="btn btn-purple">www.Jurnal.com</button> </td>
            </tr>
            <tr>
                <td>
                    <h5> Audit Mutu Internal </h5>
                </td>
                <td> <button type="button" class="btn btn-purple">www.PKM.org</button> </td>
            </tr>
        </table>
    </div>
    @include('Component.Footer')
@endsection
