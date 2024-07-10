@extends('layouts.admin.admin')
@section('styles')
<link href="../assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../assets/plugins/metismenu/metisMenu.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/plugins/metismenu/mm-vertical.css">
  <link rel="stylesheet" type="text/css" href="../assets/plugins/simplebar/css/simplebar.css">
  <link href="../assets/plugins/input-tags/css/tagsinput.css" rel="stylesheet">
@endsection

@section('content')
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Dashboard</div>
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
            <a href="{{route('barang_keluar.index')}}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>
<!--end breadcrumb-->

<div class="card">
    <div class="card-body">
        <form action="{{route('barang_keluar.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nama Barang</label>
                <select name="id_barangs" class="form-control @error('id_barangs') is-invalid @enderror">
                    <option value="">Pilih Barang</option>
                    @foreach ($barang as $data)
                    <option class="text-black" value="{{$data->id}}">{{$data->nama_barang}}</option>
                    @endforeach
                </select>
                @error('id_barangs')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Tanggal Keluar</label>
                <input type="date" name="tanggal_keluar" class="form-control @error('tanggal_keluar') is-invlaid @enderror"
                    placeholder="Tanggal keluar">
                @error('tanggal_keluar')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Jumlah</label>
                <input type="number" name="jumlah" class="form-control @error('jumlah') is-invlaid @enderror"
                    placeholder="Jumlah">
                @error('jumlah')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Keterangan</label>
                <input type="text" name="keterangan" class="form-control @error('keterangan') is-invlaid @enderror"
                    placeholder="keterangan">
                @error('keterangan')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
                <div class="mb-3">
                    <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                    <button class="btn btn-sm btn-warning" type="reset">Cancel</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script src="../assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
  <script src="../assets/plugins/metismenu/metisMenu.min.js"></script>
  <script src="../assets/plugins/input-tags/js/tagsinput.js"></script>
  <script src="../assets/plugins/simplebar/js/simplebar.min.js"></script>
@endpush
