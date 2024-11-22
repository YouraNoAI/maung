@extends('app')

@section('title', 'Laporan Sampah')

@section('content')
<div class="container mt-5">
    <h1>Laporan Sampah</h1>
    <form method="POST" action="{{ route('warga.storeLaporan') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="volume" class="form-label">Volume Sampah (kg)</label>
            <input type="number" name="volume" id="volume" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <select name="kategori" id="kategori" class="form-control" required>
                <option value="Organik">Organik</option>
                <option value="Anorganik">Anorganik</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label">Unggah Foto Sampah</label>
            <input type="file" name="foto" id="foto" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Kirim Laporan</button>
    </form>
</div>
@endsection
