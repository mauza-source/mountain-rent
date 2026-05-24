<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    // 1. Menampilkan halaman katalog depan ala Foresta Adventure
    public function index()
    {
        $products = DB::table('products')->get();
        return view('home', compact('products'));
    }

    // 2. Menampilkan halaman Dashboard Admin (Sesuai rute web.php kamu)
    public function adminDashboard()
    {
        $products = DB::table('products')->get();
        return view('admin.dashboard', compact('products'));
    }

    // 3. Menampilkan Form Tambah Barang
    public function create()
    {
        return view('create');
    }

    // 4. Proses Simpan Barang Baru ke Database
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

        return redirect('/admin')->with('success', 'Alat gunung baru berhasil ditambahkan!');
    }

    // 5. Menampilkan Form Edit Barang
    public function edit($id)
    {
        $product = DB::table('products')->where('id', $id)->first();
        return view('edit', compact('product'));
    }

    // 6. Proses Update Data Barang
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

        return redirect('/admin')->with('success', 'Data alat gunung berhasil diperbarui!');
    }

    // 7. Proses Hapus Barang
    public function destroy($id)
    {
        DB::table('products')->where('id', $id)->delete();
        return redirect('/admin')->with('success', 'Alat gunung berhasil dihapus!');
    }
}