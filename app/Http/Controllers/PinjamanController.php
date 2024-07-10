<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Pinjaman;
use Illuminate\Http\Request;
use Alert;

class PinjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pinjaman = Pinjaman::all();
        confirmDelete("Delete", "Apa Kamu Yakin?");
        return view('admin.pinjaman.index', compact('pinjaman'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $barang = Barang::all();
        return view('admin.pinjaman.create', compact('barang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'id_barangs' => 'required',
            'nama_peminjam' => 'required',
            'tanggal_pinjam' => 'required',
            'jumlah' => 'required|nullable',
            'status' => 'required',
        ]);

        $pinjaman = new Pinjaman();
        $pinjaman->id_barangs = $request->id_barangs;
        $pinjaman->nama_peminjam = $request->nama_peminjam;
        $pinjaman->tanggal_pinjam = $request->tanggal_pinjam;
        $pinjaman->jumlah = $request->jumlah;
        $pinjaman->status = $request->status;

        $barang = Barang::find($request->id_barangs);
        $barang->jumlah -= $request->jumlah;
        $barang->save();
        $pinjaman->save();
        Alert::success('Success', 'Data Berhasil di Simpan')->autoClose(5000);
        return redirect()->route('pinjaman.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pinjaman $pinjaman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pinjaman = Pinjaman::findOrFail($id);
        $barang = Barang::all();
        return view('admin.pinjaman.edit', compact('pinjaman', 'barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'nama_peminjam' => 'required',
            'tanggal_pinjam' => 'required',
            'jumlah' => 'required|nullable',
            'status' => 'required',
        ]);

        $pinjaman = Pinjaman::findOrFail($id);
        $pinjaman->nama_peminjam = $request->nama_peminjam;
        $pinjaman->tanggal_pinjam = $request->tanggal_pinjam;
        $pinjaman->jumlah = $request->jumlah;
        $pinjaman->status = $request->status;
        $pinjaman->save();
        Alert::success('Success', 'Data Berhasil di Simpan')->autoClose(5000);
        return redirect()->route('pinjaman.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pinjaman = Pinjaman::findOrFail($id);
        $pinjaman->delete();
        toast('Data Berhasil di Hapus', 'Success')->autoClose(5000);
        return redirect()->route('pinjaman.index');
    }
}
