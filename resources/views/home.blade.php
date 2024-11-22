@extends('app')

@section('title', 'Selamat Datang')

@section('content')
<div class="text-center">
    <h1>Selamat Datang di Pengelolaan Sampah</h1>
    <p class="mt-3">Bersama menciptakan lingkungan yang bersih dan sehat melalui pengelolaan sampah.</p>
    <div class="mt-4">
        @auth
            <a href="{{ route('dashboard') }}" class="btn btn-primary btn-lg">Masuk ke Dashboard</a>
        @else
            <a href="{{ route('login') }}" class="btn btn-primary btn-lg">Login</a>
            <a href="{{ route('register') }}" class="btn btn-secondary btn-lg">Register</a>
        @endauth
    </div>
</div>
@endsection
