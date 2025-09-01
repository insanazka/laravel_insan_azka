<?php

namespace App\Http\Controllers;

use App\Models\RumahSakit;
use Illuminate\Http\Request;

class RumahSakitController extends Controller
{
    public function index()
    {
        $rumahsakit = RumahSakit::all();
        return view('rumah-sakit.index', compact('rumahsakit'));
    }
    public function create()
    {
        return view('rumah-sakit.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'email' => 'required|email|unique:rumah_sakit,email',
            'telepon' => 'required|string|max:20',
        ]);

        RumahSakit::create($request->all());

        return redirect()->route('rumah-sakit.index')->with('success', 'Data rumah sakit berhasil ditambahkan.');
    }

     public function edit($id)
    {
        $rumahSakit = RumahSakit::findOrFail($id);
        return view('rumah-sakit.edit', compact('rumahSakit'));
    }

    public function update(Request $request, $id)
    {
        $rumahSakit = RumahSakit::findOrFail($id);

        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'email' => 'required|email|unique:rumah_sakit,email,' . $id,
            'telepon' => 'required|string|max:20',
        ]);

        $rumahSakit->update($request->all());

        return redirect()->route('rumah-sakit.index')->with('success', 'Data rumah sakit berhasil diupdate.');
    }

    public function destroy($id)
    {
        $rumahSakit = RumahSakit::findOrFail($id);
        $rumahSakit->delete();

        return redirect()->route('rumah-sakit.index')->with('success', 'Data rumah sakit berhasil dihapus.');
    }
}
