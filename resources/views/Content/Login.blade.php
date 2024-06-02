@extends('Layout.layout')
@section('title', 'Login Admin')
<link rel="stylesheet" href="{{ asset('css\login.css') }}">
@section('content')

    <div class="login-page">
        <div class="form">
            <div class="login-form">
                <form method="POST" action="post-login">

                    @csrf
                    <label>Form Login</label>
                    <div>
                        <input type="email" name="email" required placeholder="Email">
                    </div>
                    <div>
                        <input type="password" name="password" required placeholder="Password">
                    </div>
                    <button type="submit">Login</button>
                    <p class="message">Fakultas Teknologi Industri</a></p>
                </form>
            </div>
        </div>
    </div>
@endsection
