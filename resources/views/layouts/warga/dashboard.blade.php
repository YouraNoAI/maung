@extends('app')

@section('title', 'Dashboard Tim Operasional')

@section('content')
<h1>Dashboard Tim Operasional</h1>
<p>Selamat datang, {{ auth()->user()->name }}!</p>
<div class="mt-4">
    <a href="{{ route('operasional.validasi') }}" class="btn btn-primary">Validasi Laporan</a>
</div>
@endsection
