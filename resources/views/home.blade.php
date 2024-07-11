@extends('layouts.admin.admin')
@section('content')
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Inventory</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Admin</li>
            </ol>
        </nav>
    </div>
</div>
<!--end breadcrumb-->
<h6 class="mb-0 text-uppercase">Dashboard</h6>
<hr>
<div class="row">
    <div class="col-12 col-lg-4 col-xxl-2 d-flex">
      <div class="card rounded-4 w-100">
        <div class="card-body">
          <div class="mb-3 d-flex align-items-center justify-content-between">
            <div
              class="wh-42 d-flex align-items-center justify-content-center rounded-circle bg-primary bg-opacity-10 text-primary">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-box" viewBox="0 0 16 16">
                <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5 8 5.961 14.154 3.5zM15 4.239l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464z"/>
              </svg>
            </div>
            <div>
                <span class="text-primary d-flex align-items-center">70%<i
                    class="material-icons-outlined"></i></span>
              </div>
          </div>
          <div>
            <h4 class="mb-0">{{$barang}}</h4>
            <p class="mb-3">Data Barang</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-lg-4 col-xxl-2 d-flex">
      <div class="card rounded-4 w-100">
        <div class="card-body">
          <div class="mb-3 d-flex align-items-center justify-content-between">
            <div
              class="wh-42 d-flex align-items-center justify-content-center rounded-circle bg-success bg-opacity-10 text-success">
              <span class="material-icons-outlined fs-5"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-box-arrow-in-down" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M3.5 6a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-8a.5.5 0 0 0-.5-.5h-2a.5.5 0 0 1 0-1h2A1.5 1.5 0 0 1 14 6.5v8a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5v-8A1.5 1.5 0 0 1 3.5 5h2a.5.5 0 0 1 0 1z"/>
                <path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z"/>
              </svg></span>
            </div>
            <div>
                <span class="text-success d-flex align-items-center">80%<i
                    class="material-icons-outlined"></i></span>
              </div>
          </div>
          <div>
            <h4 class="mb-0">{{$barang_masuk}}</h4>
            <p class="mb-3">Data Barang Masuk</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-lg-6 col-xxl-2 d-flex">
      <div class="card rounded-4 w-100">
        <div class="card-body">
          <div class="mb-3 d-flex align-items-center justify-content-between">
            <div
              class="wh-42 d-flex align-items-center justify-content-center rounded-circle bg-danger bg-opacity-10 text-danger">
              <span class="material-icons-outlined fs-5"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-box-arrow-up" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M3.5 6a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-8a.5.5 0 0 0-.5-.5h-2a.5.5 0 0 1 0-1h2A1.5 1.5 0 0 1 14 6.5v8a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5v-8A1.5 1.5 0 0 1 3.5 5h2a.5.5 0 0 1 0 1z"/>
                <path fill-rule="evenodd" d="M7.646.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 1.707V10.5a.5.5 0 0 1-1 0V1.707L5.354 3.854a.5.5 0 1 1-.708-.708z"/>
              </svg></span>
            </div>
            <div>
              <span class="text-danger d-flex align-items-center">25%<i
                  class="material-icons-outlined"></i></span>
            </div>
          </div>
          <div>
            <h4 class="mb-0">{{$barang_keluar}}</h4>
            <p class="mb-3">Data Barang Keluar</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-lg-6 col-xxl-2 d-flex">
      <div class="card rounded-4 w-100">
        <div class="card-body">
          <div class="mb-3 d-flex align-items-center justify-content-between">
            <div
              class="wh-42 d-flex align-items-center justify-content-center rounded-circle bg-warning bg-opacity-10 text-warning">
              <span class="material-icons-outlined fs-5">widgets</span>
            </div>
            <div>
                <span class="text-warning d-flex align-items-center">50%<i
                    class="material-icons-outlined"></i></span>
              </div>
          </div>
          <div>
            <h4 class="mb-0">{{$kategori}}</h4>
            <p class="mb-3">Data Kategori</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-lg-6 col-xxl-2 d-flex">
        <div class="card rounded-4 w-100">
          <div class="card-body">
            <div class="mb-3 d-flex align-items-center justify-content-between">
              <div
                class="wh-42 d-flex align-items-center justify-content-center rounded-circle bg-danger bg-opacity-10 text-danger">
                <span class="material-icons-outlined fs-5"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                  </svg></span>
              </div>
              <div>
                <span class="text-danger d-flex align-items-center">25%<i
                    class="material-icons-outlined"></i></span>
              </div>
            </div>
            <div>
              <h4 class="mb-0">{{$pinjaman}}</h4>
              <p class="mb-3">Data Peminjaman</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-4 col-xxl-2 d-flex">
        <div class="card rounded-4 w-100">
          <div class="card-body">
            <div class="mb-3 d-flex align-items-center justify-content-between">
              <div
                class="wh-42 d-flex align-items-center justify-content-center rounded-circle bg-success bg-opacity-10 text-success">
                <span class="material-icons-outlined fs-5"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                  </svg></span>
              </div>
              <div>
                  <span class="text-success d-flex align-items-center">25%<i
                      class="material-icons-outlined"></i></span>
                </div>
            </div>
            <div>
              <h4 class="mb-0">{{$pengembalian}}</h4>
              <p class="mb-3">Data Pengembalian</p>
            </div>
          </div>
        </div>
      </div>
  </div>
@endsection
