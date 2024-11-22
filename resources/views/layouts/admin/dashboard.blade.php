@extends('app')

@section('title', 'Dashboard Admin')

@section('content')
<h1>Dashboard Admin</h1>
<p>Selamat datang, {{ auth()->user()->name }}!</p>
<div class="mt-4">
    <a href="{{ route('admin.laporan') }}" class="btn btn-primary">Kelola Laporan</a>
    <a href="{{ route('admin.iuran') }}" class="btn btn-secondary">Kelola Iuran</a>
</div>
@endsection
