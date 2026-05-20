<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use Illuminate\Http\Request;

class FakultasController extends Controller
{
    public function index() {
        $fakultas = Fakultas::all();
        return view('fakultas.index', compact('fakultas'));
    }

    public function create() {
        return view('fakultas.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'nama_fakultas' => 'required|string|max:255',
            'nama_dekan' => 'required|string|max:255',
        ]);

        Fakultas::create($validated);
        return redirect()->route('fakultas.index')->with('success', 'Data Fakultas berhasil disimpan!');
    }

    // Menggunakan $fakultas (Sesuai parameter model)
    public function edit(Fakultas $fakulta) {
        return view('fakultas.edit', compact('fakulta'));
    }

    // PERBAIKAN: Mengubah nama variabel dari $fakulta menjadi $fakultas agar klop dengan parameter form
    public function update(Request $request, Fakultas $fakulta) {
        $validated = $request->validate([
            'nama_fakultas' => 'required|string|max:255',
            'nama_dekan' => 'required|string|max:255',
        ]);

        $fakulta->update($validated);
        return redirect()->route('fakultas.index')->with('success', 'Data Fakultas berhasil diperbarui!');
    }

    // PERBAIKAN: Mengubah nama variabel dari $fakulta menjadi $fakultas
    public function destroy(Fakultas $fakultas) {
        $fakultas->delete();
        return redirect()->route('fakultas.index')->with('success', 'Data Fakultas berhasil dihapus!');
    }
}
