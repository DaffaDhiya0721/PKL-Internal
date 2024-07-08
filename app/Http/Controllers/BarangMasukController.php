<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Barang_Masuk;
use Illuminate\Http\Request;
use Alert;

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
        $this->validate($request, [
            'id_barangs' => 'required',
            'tanggal_masuk' => 'required',
            'jumlah' => 'required',
            'keterangan' => 'required',
        ]);

        $barang_masuk = new Barang_Masuk();
        $barang_masuk->id_barangs = $request->id_barangs;
        $barang_masuk->tanggal_masuk = $request->tanggal_masuk;
        $barang_masuk->jumlah = $request->jumlah;
        $barang_masuk->keterangan = $request->keterangan;

        $barang = Barang::find($request->id_barangs);
        $barang->jumlah += $request->jumlah;
        $barang->save();
        $barang_masuk->save();
        Alert::success('Success', 'Data Berhasil di Simpan')->autoClose(5000);
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
    public function edit(Barang_Masuk $barang_Masuk)
    {
        $barang_masuk = Barang_Masuk::findOrFail($id);
        $barang = Barang::all();
        return view('admin.barang_masuk.edit', compact('barang_masuk', 'barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Barang_Masuk $barang_Masuk)
    {
        $this->validate($request, [
            'id_barangs' => 'required',
            'tanggal_masuk' => 'required',
            'jumlah' => 'required',
            'keterangan' => 'required',
        ]);

        $barang_masuk = Barang_Masuk::findOrFail($id);
        $barang_masuk->id_barangs = $request->id_barangs;
        $barang_masuk->tanggal_masuk = $request->tanggal_masuk;
        $barang_masuk->jumlah = $request->jumlah;
        $barang_masuk->keterangan = $request->keterangan;

        $barang = Barang::find($request->id_barangs);
        $barang->jumlah += $request->jumlah;
        $barang->save();
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
