@extends('Layout.layout')
@section('title', 'Login Admin')
{{-- <link rel="stylesheet" href="{{ asset('css\style3row.css') }}"> --}}
@section('content')
    <h1>Login</h1>
    <form method="POST" action="post-login">
        @csrf
        <div>
            <label>Email:</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label>Password:</label>
            <input type="password" name="password" required>
        </div>
        <button type="submit">Login</button>
    </form>
@endsection