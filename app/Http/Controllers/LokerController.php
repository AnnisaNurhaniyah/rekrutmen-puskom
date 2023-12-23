<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LowonganPekerjaan;

class LokerController extends Controller
{
    public function index()
    {
        $lowonganPekerjaan = LowonganPekerjaan::all();
        return view('lowongan.index', compact('lowonganPekerjaan'));
    }

    public function create()
    {
        return view('lowongan.create');
    }

    public function store(Request $request)
    {
        // Validasi data yang dimasukkan
        $validatedData = $request->validate([
            'judul_pekerjaan' => 'required|string|max:255',
            'kuota' => 'required',
            'jenis_kelamin' => 'required|string',
            'kelahiran' => 'required|date',
            'deskripsi_pekerjaan' => 'required|string',
            'kualifikasi' => 'required|string',
            'tanggal_posting' => 'required|date',
            'deadline' => 'required|date',
        ]);

        LowonganPekerjaan::create($validatedData);

        return redirect()->route('loker')->with('success', 'Lowongan pekerjaan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $lowongan = LowonganPekerjaan::findOrFail($id);
        return view('lowongan.edit', compact('lowongan'));
    }

    public function update(Request $request, $id)
    {
        $lowongan = LowonganPekerjaan::findOrFail($id);

        $validatedData = $request->validate([
            'judul_pekerjaan' => 'required|string|max:255',
            'kuota' => 'required',
            'jenis_kelamin' => 'required|string',
            'kelahiran' => 'required|date',
            'deskripsi_pekerjaan' => 'required|string',
            'kualifikasi' => 'required|string',
            'tanggal_posting' => 'required|date',
            'deadline' => 'required|date',
        ]);

        $lowongan->update($validatedData);

        return redirect()->route('loker')->with('success', 'Lowongan pekerjaan berhasil diperbarui.');
    }

    public function delete($id)
    {
        $lowongan = LowonganPekerjaan::findOrFail($id);
        $lowongan->delete();

        return redirect()->route('loker')->with('success', 'Lowongan pekerjaan berhasil dihapus.');
    }
}
