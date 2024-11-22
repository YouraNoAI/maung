@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-2 sidebar p-0">
            <div class="d-flex flex-column p-3">
                <h4 class="mb-4">Dashboard</h4>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            <i class="fas fa-home me-2"></i> Beranda
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-shopping-cart me-2"></i> Produk
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-chart-bar me-2"></i> Statistik
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-users me-2"></i> Pelanggan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-cog me-2"></i> Pengaturan
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col-md-10 main-content p-4">
            <div class="row mb-4">
                <div class="col-md-3">
                    <div class="stats-card">
                        <h6 class="text-muted">Total Penjualan</h6>
                        <h3>Rp 5.000.000</h3>
                        <p class="text-success mb-0">
                            <i class="fas fa-arrow-up"></i> 15% dari bulan lalu
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stats-card">
                        <h6 class="text-muted">Total Produk</h6>
                        <h3>150</h3>
                        <p class="text-primary mb-0">
                            <i class="fas fa-box"></i> Produk Aktif
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stats-card">
                        <h6 class="text-muted">Total Pelanggan</h6>
                        <h3>1.250</h3>
                        <p class="text-success mb-0">
                            <i class="fas fa-arrow-up"></i> 25% dari bulan lalu
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stats-card">
                        <h6 class="text-muted">Pesanan Baru</h6>
                        <h3>48</h3>
                        <p class="text-warning mb-0">
                            <i class="fas fa-clock"></i> Menunggu Proses
                        </p>
                    </div>
                </div>
            </div>

            <!-- Recent Orders -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Pesanan Terbaru</h5>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID Pesanan</th>
                                <th>Pelanggan</th>
                                <th>Produk</th>
                                <th>Total</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#ORD001</td>
                                <td>John Doe</td>
                                <td>Produk A</td>
                                <td>Rp 500.000</td>
                                <td><span class="badge bg-success">Selesai</span></td>
                            </tr>
                            <tr>
                                <td>#ORD002</td>
                                <td>Jane Smith</td>
                                <td>Produk B</td>
                                <td>Rp 750.000</td>
                                <td><span class="badge bg-warning">Proses</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection