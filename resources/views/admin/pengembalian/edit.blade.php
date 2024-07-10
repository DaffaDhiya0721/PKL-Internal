@extends('layouts.admin.admin')
@section('content')
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Inventaris</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Admin</li>
            </ol>
        </nav>
    </div>
    <div class="ms-auto">
        <div class="btn-group">
            <a href="{{route('pengembalian.create')}}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>
<!--end breadcrumb-->
<div class="card">
    <div class="card-body">
        <form action="{{route('pengembalian.update', $pengembalian->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="" class="form-label">Nama Barang</label>
                <input type="text" name="nama_barang" class="form-control @error('nama_barang') is-invlaid @enderror"
                placeholder="Nama Barang" value="{{$pengembalian->barang->nama_barang}}">
            @error('nama_barang')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Nama Peminjam</label>
                <input type="text" name="nama_peminjam" class="form-control @error('nama_peminjam') is-invlaid @enderror"
                placeholder="Nama Peminjam" value="{{$pengembalian->nama_peminjam}}">
            @error('nama_peminjam')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Tanggal Pengembalian</label>
                <input type="date" name="tanggal_pengembalian" class="form-control @error('tanggal_pengembalian') is-invlaid @enderror"
                placeholder="Tanggal Pengembalian" value="{{$pengembalian->tanggal_pengembalian}}">
            @error('tanggal_pengembalian')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Jumlah</label>
                <input type="number" name="jumlah" class="form-control @error('jumlah') is-invlaid @enderror"
                placeholder="Jumlah" value="{{$pengembalian->jumlah}}">
            @error('jumlah')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Status</label>
                <input type="text" name="status" class="form-control @error('status') is-invlaid @enderror"
                placeholder="Status" value="{{$pengembalian->status}}">
            @error('status')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            </div>
            <div class="mb-3">
                <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                <button class="btn btn-sm btn-warning" type="reset">Cancel</button>
            </div>
        </form>
    </div>
</div>
@endsection
