<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Barang_Keluar;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Alert;

Carbon::setLocale('id');

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
        $barang_keluar = new Barang_Keluar();
        $barang_keluar->id_barangs = $request->id_barangs;
        $barang_keluar->tanggal_keluar = $request->tanggal_keluar;
        $barang_keluar->jumlah = $request->jumlah;
        $barang_keluar->keterangan = $request->keterangan;

        $barang = Barang::findOrFail($request->id_barangs);
        if ($barang->jumlah < $request->jumlah) {
            Alert::warning('Warning', 'Jumlah Tidak Valid')->autoClose(5000);
            return redirect()->route('barang_keluar.index');
        } else {
            $barang->jumlah -= $request->jumlah;
            $barang->save();
        }

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
    public function edit($id)
    {
        $barang_keluar = Barang_Keluar::findOrFail($id);
        $barang = Barang::all();
        return view('admin.barang_keluar.edit', compact('barang_keluar', 'barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $barang_keluar = Barang_Keluar::findOrFail($id);
        $barang = Barang::findOrFail($barang_keluar->id_barangs);

        if ($barang->jumlah < $request->jumlah) {
            Alert::warning('Warning', 'Jumlah Tidak Valid')->autoClose(5000);
            return redirect()->route('barang_keluar.index');
        } else {
            $barang->jumlah += $barang_keluar->jumlah;
            $barang->jumlah -= $request->jumlah;
            $barang->save();
        }
        $barang_keluar->update($request->all());
        $barang_keluar->save();
        Alert::success('success', 'Data Berhasil Diubah')->autoClose(5000);
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
