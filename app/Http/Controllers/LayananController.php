<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    // Menampilkan semua layanan
    public function index()
    {
        $layanans = Layanan::all();
        return response()->json($layanans);
    }

    // Menyimpan layanan baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode' => 'required|string|unique:layanans,kode',
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'total_biaya' => 'required|numeric',
            'rating' => 'nullable|numeric|min:0|max:5',
        ]);

        $layanan = Layanan::create($validated);

        return response()->json($layanan, 201);
    }

    // Menampilkan satu layanan berdasarkan ID
    public function show($id)
    {
        $layanan = Layanan::findOrFail($id);
        return response()->json($layanan);
    }

    // Mengupdate layanan
    public function update(Request $request, $id)
    {
        $layanan = Layanan::findOrFail($id);

        $validated = $request->validate([
            'kode' => 'sometimes|required|string|unique:layanans,kode,' . $layanan->id,
            'nama' => 'sometimes|required|string|max:255',
            'deskripsi' => 'nullable|string',
            'total_biaya' => 'sometimes|required|numeric',
            'rating' => 'nullable|numeric|min:0|max:5',
        ]);

        $layanan->update($validated);

        return response()->json($layanan);
    }

    // Menghapus layanan
    public function destroy($id)
    {
        $layanan = Layanan::findOrFail($id);
        $layanan->delete();

        return response()->json(['message' => 'Layanan berhasil dihapus.']);
    }
}
