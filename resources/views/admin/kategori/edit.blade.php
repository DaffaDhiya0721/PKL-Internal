@extends('layouts.admin.admin')
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
            <a href="{{route('kategori.create')}}" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>
<!--end breadcrumb-->
<div class="card">
    <div class="card-body">
        <form action="{{route('kategori.update', $kategori->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control @error('nama') is-invlaid @enderror"
                placeholder="nama" value="{{$kategori->nama}}">
            @error('nama')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Jumlah</label>
                <input type="number" name="jumlah" class="form-control @error('jumlah') is-invlaid @enderror"
                placeholder="jumlah" value="{{$kategori->jumlah}}">
            @error('jumlah')
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
