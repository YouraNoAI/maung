@extends('app')

@section('title', 'Validasi Laporan')

@section('content')
<div class="container mt-5">
    <h1>Validasi Laporan Sampah</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Nama Warga</th>
                <th>Volume</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($laporan as $item)
            <tr>
                <td>{{ $item->warga->name }}</td>
                <td>{{ $item->volume }}</td>
                <td>{{ $item->kategori }}</td>
                <td>
                    <a href="{{ route('operasional.approve', $item->id) }}" class="btn btn-success">Setujui</a>
                    <a href="{{ route('operasional.reject', $item->id) }}" class="btn btn-danger">Tolak</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
