<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;
use Inertia\Inertia;

class ProdukController extends Controller
{
    
    public function index(){
        $produks = Produk::all();
        return Inertia::render('Produk/Index', ['produks' => $produks]);
    }

    public function show($id){
        $produk = Produk::findOrFail($id);
        return Inertia::render('Produk/Show', ['produk' => $produk]);
    }

    public function create(){
        return Inertia::render('Produk/Create');
    }

    public function store(Request $request){
        $request->validate([
            'jenis_buket' => 'required|string|max:255',
            'tema' => 'required|string|max:255',
            'size' => 'required|string|max:50',
            'deskripsi' => 'required|string',
            'harga' => 'required|numeric',
        ]);

        Produk::create($request->all());
        return redirect()->route('produk.index')->with('success', 'Produk berhasil ditambahkan.');
    }

    public function edit($id){
        $produk = Produk::findOrFail($id);
        return Inertia::render('Produk/Edit', ['produk' => $produk]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'jenis_buket' => 'required|string|max:255',
            'tema' => 'required|string|max:255',
            'size' => 'required|string|max:50',
            'deskripsi' => 'required|string',
            'harga' => 'required|numeric',
        ]);

        $produk = Produk::findOrFail($id);
        $produk->update($request->all());
        return redirect()->route('produk.index')->with('success', 'Produk berhasil diperbarui.');
    }
    public function destroy($id){
        $produk = Produk::findOrFail($id);
        $produk->delete();
        return redirect()->route('produk.index')->with('success', 'Produk berhasil dihapus.');
    }


}
