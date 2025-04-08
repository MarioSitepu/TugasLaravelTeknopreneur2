<?php

namespace App\Http\Controllers;

use App\Models\Pengurus;
use Illuminate\Http\Request;

class PengurusController extends Controller
{
    // TAMPILKAN SEMUA DATA
    public function index()
    {
        $pengurus = Pengurus::all();
        return view('pengurus.index', compact('pengurus'));
    }

    // TAMPILKAN FORM TAMBAH DATA
    public function create()
    {
        return view('pengurus.create');
    }

    // SIMPAN DATA BARU KE DATABASE
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'divisi' => 'required',
            'jabatan' => 'required',
        ]);

        Pengurus::create($request->all());
        return redirect()->route('pengurus.index')->with('success', 'Data berhasil ditambahkan!');
    }

    // TAMPILKAN FORM EDIT
    public function edit(Pengurus $pengurus)
    {
        return view('pengurus.edit', compact('pengurus'));
    }

    // UPDATE DATA
    public function update(Request $request, Pengurus $pengurus)
    {
        $request->validate([
            'nama' => 'required',
            'divisi' => 'required',
            'jabatan' => 'required',
        ]);

        $pengurus->update($request->all());
        return redirect()->route('pengurus.index')->with('success', 'Data berhasil diupdate!');
    }

    // HAPUS DATA
    public function destroy(Pengurus $pengurus)
    {
        $pengurus->delete();
        return redirect()->route('pengurus.index')->with('success', 'Data berhasil dihapus!');
    }
}
