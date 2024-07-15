<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Barang_Masuk;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Alert;

Carbon::setLocale('id');

class BarangMasukController extends Controller
{

    public function index()
    {
        $barang_masuk = Barang_Masuk::latest()->get();
        confirmDelete("Delete", "Apa Kamu Yakin?");
        return view('admin.barang_masuk.index', compact('barang_masuk'));
    }

    public function create()
    {
        $barang = Barang::all();
        return view('admin.barang_masuk.create', compact('barang'));
    }

    public function store(Request $request)
    {
        $barang_masuk = new Barang_Masuk();
        $barang_masuk->id_barangs = $request->id_barangs;
        $barang_masuk->tanggal_masuk = $request->tanggal_masuk;
        $barang_masuk->jumlah = $request->jumlah;
        $barang_masuk->keterangan = $request->keterangan;

        $barang = Barang::findOrFail($request->id_barangs);
        $barang->jumlah += $request->jumlah;
        $barang->save();

        $barang_masuk->save();
        Alert::success('Success', 'Data Berhasil Ditambahkan')->autoClose(1500);
        return redirect()->route('barang_masuk.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Barang_Masuk $barang_Masuk)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $barang_masuk = Barang_Masuk::findOrFail($id);
        $barang = Barang::all();
        return view('admin.barang_masuk.edit', compact('barang_masuk', 'barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $barang_masuk = Barang_Masuk::findOrFail($id);
        $barang = Barang::findOrFail($barang_masuk->id_barangs);
        $barang->jumlah -= $barang_masuk->jumlah;
        $barang->jumlah += $request->jumlah;
        $barang->save();
        $barang_masuk->tanggal_masuk = $request->tanggal_masuk;
        $barang_masuk->jumlah = $request->jumlah;
        $barang_masuk->keterangan = $request->keterangan;
        $barang_masuk->id_barangs = $request->id_barangs;

        $barang_masuk->save();
        Alert::success('Success', 'Data Berhasil di Edit')->autoClose(5000);
        return redirect()->route('barang_masuk.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $barang_masuk = Barang_masuk::findOrFail($id);
        $barang_masuk->delete();
        toast('Data Berhasil di Hapus', 'Success')->autoClose(5000);
        return redirect()->route('barang_masuk.index');
    }
}
