<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Barang;
use App\Models\Barang_Masuk;
use App\Models\Barang_Keluar;
use App\Models\Kategori;
use App\Models\Pinjaman;
use App\Models\Pengembalian;
use Illuminate\Http\Request;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
            $barang = Barang::count();
            $barang_masuk = Barang_Masuk::count();
            $barang_keluar = Barang_Keluar::count();
            $kategori = Kategori::count();
            $pinjaman = Pinjaman::count();
            $pengembalian = Pengembalian::count();
            return view('home', compact('barang', 'barang_masuk', 'barang_keluar', 'kategori', 'pinjaman', 'pengembalian'));
    }
}
