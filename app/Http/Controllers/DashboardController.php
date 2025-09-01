<?php

namespace App\Http\Controllers;
use App\Models\RumahSakit;
use App\Models\Pasien;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlahRumahSakit = RumahSakit::count();
        $jumlahPasien = Pasien::count();

        return view('dashboard.index', compact('jumlahRumahSakit', 'jumlahPasien'));
    }
}
