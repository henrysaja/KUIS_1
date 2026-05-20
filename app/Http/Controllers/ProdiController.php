<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prodi = Prodi::all();
        return view('prodi.index', compact('prodi'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('prodi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_prodi' => 'required|string|max:255',
            'nama_kaprodi' => 'required|string|max:255',
            'alias_prodi' => 'required|string|max:255',
        ]);

        Prodi::create($validated);
        return redirect()->route('prodi.index')->with('success', 'Data Prodi berhasil disimpan!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Prodi $prodi)
    {
        return view('prodi.show', compact('prodi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prodi $prodi)
    {
        return view('prodi.edit', compact('prodi'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prodi $prodi)
    {
        $validated = $request->validate([
            'nama_prodi' => 'required|string|max:255',
            'nama_kaprodi' => 'required|string|max:255',
            'alias_prodi' => 'required|string|max:255',
        ]);

        $prodi->update($validated);
        return redirect()->route('prodi.index')->with('success', 'Data Prodi berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prodi $prodi)
    {
        $prodi->delete();
        return redirect()->route('prodi.index')->with('success', 'Data Prodi berhasil dihapus!');
    }
}
