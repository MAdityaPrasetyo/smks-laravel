<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portofolio;
use Illuminate\Support\Facades\Storage;

class PortofolioController extends Controller
{
    public function index() 
    {
        // Tampilkan daftar portofolio
        $portofolios = Portofolio::all();
        return view('dashboard.portofolio.index', [
            'title' => 'Portofolio',
            'active' => 'portofolio',
            'portofolios' => $portofolios,
        ]);
    }

    public function create()
    {
        // Tampilkan formulir tambah portofolio
        return view('dashboard.portofolio.create', [
            'title' => 'Tambah Portofolio',
            'active' => 'portofolio',
        ]);
    }

    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'name' => 'required|string',
            'link' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Simpan portofolio baru
        $portofolio = new Portofolio;
        $portofolio->name = $request->name;
        $portofolio->link = $request->link;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images', $imageName); // Simpan gambar ke dalam storage
            $portofolio->image = $imageName;
        }

        $portofolio->save();

        return redirect()->route('portofolio.index')->with('success', 'Portofolio berhasil ditambahkan');
    }

    public function edit(Portofolio $portofolio)
    {
        // Tampilkan formulir edit portofolio
        return view('dashboard.portofolio.edit', [
            'title' => 'Edit Portofolio',
            'active' => 'portofolio',
            'portofolio' => $portofolio,
        ]);
    }

    public function update(Request $request, Portofolio $portofolio)
    {
        // Validasi data
        $request->validate([
            'name' => 'required|string',
            'link' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Update portofolio
        $portofolio->name = $request->name;
        $portofolio->link = $request->link;

        if ($request->hasFile('image')) {
            // Menghapus gambar lama sebelum menyimpan yang baru
            if ($portofolio->image) {
                Storage::delete('public/images/' . $portofolio->image);
            }

            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images', $imageName); // Simpan gambar ke dalam storage
            $portofolio->image = $imageName;
        }

        $portofolio->save();

        return redirect()->route('portofolio.index')->with('success', 'Portofolio berhasil diperbarui');
    }

    public function destroy(Portofolio $portofolio)
    {
        // Hapus portofolio
        if ($portofolio->image) {
            Storage::delete('public/images/' . $portofolio->image);
        }

        $portofolio->delete();

        return redirect()->route('portofolio.index')->with('success', 'Portofolio berhasil dihapus');
    }
}
