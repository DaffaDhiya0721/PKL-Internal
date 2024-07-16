<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Pinjaman;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Alert;

Carbon::setLocale('id');

class PinjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pinjaman = Pinjaman::all();
        confirmDelete('delete', 'Apakah Anda Yakin?');

        foreach ($pinjaman as $data) {
            $data->formatted_tanggal_pinjam = Carbon::parse($data->tanggal_pinjam)->translatedFormat('l, d F Y');
        }

        foreach ($pinjaman as $data) {
            $data->formatted_tanggal_pengembalian = Carbon::parse($data->tanggal_pengembalian)->translatedFormat('l, d F Y');
        }

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
        $pinjaman = new Pinjaman();
        $pinjaman->id_barangs = $request->id_barangs;
        $pinjaman->nama_peminjam = $request->nama_peminjam;
        $pinjaman->tanggal_pinjam = $request->tanggal_pinjam;
        $pinjaman->tanggal_pengembalian = $request->tanggal_pengembalian;
        $pinjaman->jumlah = $request->jumlah;
        $pinjaman->status = "Sedang Dipinjam";

        $barang = Barang::findOrFail($request->id_barangs);
        if ($barang->jumlah < $request->jumlah) {
            Alert::warning('Warning', 'Barang Tidak Cukup')->autoClose(5000);
            return redirect()->route('pinjaman.index');
        } else {
            $barang->jumlah -= $request->jumlah;
            $barang->save();
        }

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
    public function update(Request $request, $id)
    {
        $pinjaman = Pinjaman::findOrFail($id);
        $barang = Barang::findOrFail($pinjaman->id_barangs);

        $pinjaman->update($request->all());

        if ($barang->jumlah < $request->jumlah) {
            Alert::warning('Warning', 'Barang Tidak Cukup')->autoClose(5000);
            return redirect()->route('pinjaman.index');
        } else {
            $barang->jumlah += $pinjaman->jumlah;
            $barang->jumlah -= $request->jumlah;
            $barang->save();
        }

        if ($request->status == "Sudah Dikembalikan") {
            $barang->jumlah += $pinjaman->jumlah;
            $barang->save();
        }

        $pinjaman->save();
        Alert::success('Success', 'Data Berhasil Diubah')->autoclose(5000);
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
