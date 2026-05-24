<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->get();
        return view('welcome', compact('products'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_alat' => 'required',
            'harga_sewa' => 'required|numeric',
            'stok' => 'required|numeric',
        ]);

        DB::table('products')->insert([
            'nama_alat' => $request->nama_alat,
            'harga_sewa' => $request->harga_sewa,
            'stok' => $request->stok,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect('/')->with('success', 'Alat gunung baru berhasil ditambahkan!');
    }

    public function destroy($id)
    {
        DB::table('products')->where('id', $id)->delete();
        return redirect('/')->with('success', 'Alat gunung berhasil dihapus!');
    }

    // Fitur Baru: Ambil data lama dan tampilkan di form edit
    public function edit($id)
    {
        $product = DB::table('products')->where('id', $id)->first();
        return view('edit', compact('product'));
    }

    // Fitur Baru: Simpan perubahan data ke database
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_alat' => 'required',
            'harga_sewa' => 'required|numeric',
            'stok' => 'required|numeric',
        ]);

        DB::table('products')->where('id', $id)->update([
            'nama_alat' => $request->nama_alat,
            'harga_sewa' => $request->harga_sewa,
            'stok' => $request->stok,
            'updated_at' => now(),
        ]);

        return redirect('/')->with('success', 'Data alat gunung berhasil diperbarui!');
    }
}