@extends('app')

@section('title', 'Error 404')

@section('content')
<div class="text-center">
    <h1>404 - Halaman Tidak Ditemukan</h1>
    <p>Maaf, halaman yang Anda cari tidak tersedia.</p>
    <a href="{{ route('home') }}" class="btn btn-primary">Kembali ke Halaman Utama</a>
</div>
@endsection
