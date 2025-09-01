<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\RumahSakit;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    // Tampilkan semua pasien
    public function index()
    {
        $pasien = Pasien::with('rumahsakit')->get();
        $rumahsakit = rumahsakit::all();
        return view('pasien.index', compact('pasien', 'rumahsakit'));
    }

    // Form tambah pasien
    public function create()
    {
        $rumahsakit = rumahsakit::all();
        return view('pasien.create', compact('rumahsakit'));
    }

    // Simpan pasien baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'nullable|string|max:255',
            'telepon' => 'nullable|string|max:50',
            'rumah_sakit_id' => 'required|exists:rumah_sakit,id',
        ]);

        Pasien::create($validated);
        return redirect()->route('pasien.index')->with('success', 'Pasien berhasil ditambahkan.');
    }

    // Form edit pasien
    public function edit(Pasien $pasien)
    {
        $rumahsakit = rumahsakit::all();
        return view('pasien.edit', compact('pasien', 'rumahsakit'));
    }

    // Update pasien
    public function update(Request $request, Pasien $pasien)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'nullable|string|max:255',
            'telepon' => 'nullable|string|max:50',
            'rumah_sakit_id' => 'required|exists:rumah_sakit,id',
        ]);

        $pasien->update($validated);
        return redirect()->route('pasien.index')->with('success', 'Pasien berhasil diupdate.');
    }

    // Hapus pasien
    public function destroy(Pasien $pasien)
    {
        $pasien->delete();
        return response()->json(['success' => true]);
    }
}
