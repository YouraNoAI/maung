@extends('app')

@section('title', 'Kelola Laporan')

@section('content')
<div class="container mt-5">
    <h1>Kelola Laporan Sampah</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Nama Warga</th>
                <th>Volume</th>
                <th>Kategori</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($laporan as $item)
            <tr>
                <td>{{ $item->warga->name }}</td>
                <td>{{ $item->volume }}</td>
                <td>{{ $item->kategori }}</td>
                <td>{{ $item->status }}</td>
                <td>
                    <a href="{{ route('admin.detailLaporan', $item->id) }}" class="btn btn-info">Detail</a>
                    <a href="{{ route('admin.deleteLaporan', $item->id) }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
