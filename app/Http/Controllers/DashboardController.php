<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function operasionalDashboard()
    {
        return view('layouts.operasional.dashboard');
    }

    public function operasionalValidasi()
    {
        $laporan = []; // Isi dengan data dari database
        return view('layouts.operasional.validasi', compact('laporan'));
    }
} 