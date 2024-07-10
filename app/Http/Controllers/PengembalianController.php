<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Pengembalian;
use Illuminate\Http\Request;
use Alert;

class PengembalianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengembalian = Pengembalian::all();
        confirmDelete("Delete", "Apa Kamu Yakin?");
        return view('admin.pengembalian.index', compact('pengembalian'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $barang = Barang::all();
        return view('admin.pengembalian.create', compact('barang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'id_barangs' => 'required',
            'nama_peminjam' => 'required',
            'tanggal_pengembalian' => 'required',
            'jumlah' => 'required|nullable',
            'status' => 'required',
        ]);

        $pengembalian = new Pengembalian();
        $pengembalian->id_barangs = $request->id_barangs;
        $pengembalian->nama_peminjam = $request->nama_peminjam;
        $pengembalian->tanggal_pengembalian = $request->tanggal_pengembalian;
        $pengembalian->jumlah = $request->jumlah;
        $pengembalian->status = $request->status;

        $barang = Barang::find($request->id_barangs);
        $barang->jumlah += $request->jumlah;
        $barang->save();
        $pengembalian->save();
        Alert::success('Success', 'Data Berhasil di Simpan')->autoClose(5000);
        return redirect()->route('pengembalian.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengembalian $pengembalian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pengembalian = Pengembalian::findOrFail($id);
        $barang = Barang::all();
        return view('admin.pengembalian.edit', compact('pengembalian', 'barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'nama_peminjam' => 'required',
            'tanggal_pengembalian' => 'required',
            'jumlah' => 'required|nullable',
            'status' => 'required',
        ]);
        $pengembalian = Pengembalian::findOrFail($id);
        $pengembalian->nama_peminjam = $request->nama_peminjam;
        $pengembalian->tanggal_pengembalian = $request->tanggal_pengembalian;
        $pengembalian->jumlah = $request->jumlah;
        $pengembalian->status = $request->status;
        $pengembalian->save();
        Alert::success('Success', 'Data Berhasil di Simpan')->autoClose(5000);
        return redirect()->route('pengembalian.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pengembalian = Pengembalian::findOrFail($id);
        $pengembalian->delete();
        toast('Data Berhasil di Hapus', 'Success')->autoClose(5000);
        return redirect()->route('pengembalian.index');
    }
}
