<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Barang_Keluar;
use Illuminate\Http\Request;
use Alert;

class BarangKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang_keluar = Barang_Keluar::latest()->get();
        confirmDelete("Delete", "Apa Kamu Yakin?");
        return view('admin.barang_keluar.index', compact('barang_keluar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $barang = Barang::all();
        return view('admin.barang_keluar.create', compact('barang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'id_barangs' => 'required',
            'tanggal_keluar' => 'required',
            'jumlah' => 'required',
            'keterangan' => 'required',
        ]);

        $barang_keluar = new Barang_Keluar();
        $barang_keluar->id_barangs = $request->id_barangs;
        $barang_keluar->tanggal_keluar = $request->tanggal_keluar;
        $barang_keluar->jumlah = $request->jumlah;
        $barang_keluar->keterangan = $request->keterangan;

        $barang = Barang::find($request->id_barangs);
        $barang->jumlah -= $request->jumlah;
        $barang->save();
        $barang_keluar->save();
        Alert::success('Success', 'Data Berhasil di Simpan')->autoClose(5000);
        return redirect()->route('barang_keluar.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Barang_Keluar $barang_Keluar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barang_Keluar $barang_Keluar)
    {
        $barang_keluar = Barang_Keluar::findOrFail($id);
        $barang = Barang::all();
        return view('admin.barang_keluar.edit', compact('barang_keluar', 'barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Barang_Keluar $barang_Keluar)
    {
        $this->validate($request, [
            'id_barangs' => 'required',
            'tanggal_keluar' => 'required',
            'jumlah' => 'required',
            'keterangan' => 'required',
        ]);

        $barang_keluar = Barang_Keluar::findOrFail($id);
        $barang_keluar->id_barangs = $request->id_barangs;
        $barang_keluar->tanggal_keluar = $request->tanggal_keluar;
        $barang_keluar->jumlah = $request->jumlah;
        $barang_keluar->keterangan = $request->keterangan;

        $barang = Barang::find($request->id_barangs);
        $barang->jumlah -= $request->jumlah;
        $barang->save();
        $barang_Keluar->save();
        Alert::success('Success', 'Data Berhasil di Edit')->autoClose(5000);
        return redirect()->route('barang_keluar.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $barang_keluar = Barang_Keluar::findOrFail($id);
        $barang_keluar->delete();
        toast('Data Berhasil di Hapus', 'Success')->autoClose(5000);
        return redirect()->route('barang_keluar.index');
    }
}
