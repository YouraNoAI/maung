@extends('app')

@section('title', 'Dashboard Koordinator')

@section('content')
<div class="container mt-5">
    <h1>Dashboard Koordinator</h1>
    <p>Selamat datang, Koordinator!</p>
    <div class="mt-4">
        <a href="{{ route('koordinator.laporan') }}" class="btn btn-primary">Kelola Laporan</a>
    </div>
</div>
@endsection
