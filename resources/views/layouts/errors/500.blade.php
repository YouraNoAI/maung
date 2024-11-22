@extends('app')

@section('title', 'Error 500')

@section('content')
<div class="text-center">
    <h1>500 - Kesalahan Server</h1>
    <p>Maaf, terjadi kesalahan pada server kami. Silakan coba lagi nanti.</p>
    <a href="{{ route('home') }}" class="btn btn-primary">Kembali ke Halaman Utama</a>
</div>
@endsection
