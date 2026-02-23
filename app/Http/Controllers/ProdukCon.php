<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProdukCon extends Controller
{
    public function home()
    {
        $produk = DB::table('produks')->get();
        return view('utama', ['produk' => $produk]);
    }

    public function updateStok(Request $request, $id)
    {
        $produk = DB::table('produks')->where('id', $id)->first();
        if ($produk) {
            $stokBaru = $produk->stok - $request->banyak;
            if ($stokBaru >= 0) {
                DB::table('produks')->where('id', $id)->update(['stok' => $stokBaru]);
                return redirect('/admin/produk')->with('success', 'Stok produk berhasil diupdate!');
            } else {
                return redirect('/admin/produk')->with('error', 'Stok produk tidak cukup!');
            }
        } else {
            return redirect('/admin/produk')->with('error', 'Produk tidak ditemukan!');
        }
    }
}