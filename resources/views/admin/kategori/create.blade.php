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
            <a href="{{route('kategori.index')}}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>
<!--end breadcrumb-->

<div class="card">
    <div class="card-body">
        <form action="{{route('kategori.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control @error('nama') is-invlaid @enderror"
                    placeholder="nama">
                @error('nama')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Stok</label>
                <input type="number" name="stok" class="form-control @error('stok') is-invlaid @enderror"
                    placeholder="stok">
                @error('stok')
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
