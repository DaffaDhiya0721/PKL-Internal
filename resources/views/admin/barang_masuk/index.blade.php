@extends('layouts.admin.admin')
@section('styles')
<link href="../assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection

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
    <div class="ms-auto">
        <div class="btn-group">
            <a href="{{route('barang_masuk.create')}}" class="btn btn-primary">Tambah Data</a>
        </div>
    </div>
</div>
<!--end breadcrumb-->

<h6 class="mb-0 text-uppercase">Barang Masuk</h6>
<hr>
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Tanggal Masuk</th>
                        <th>Jumlah</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i = 1; @endphp
                    @foreach ($barang_masuk as $data)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$data->barang->nama_barang}}</td>
                        <td>{{$data->tanggal_masuk}}</td>
                        <td>{{$data->jumlah}}</td>
                        <td>{{$data->keterangan}}</td>
                        <td>
                            <form action="{{route('barang_masuk.destroy', $data->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                            <a href="{{route('barang_masuk.edit',$data->id)}}" class="btn btn-sm btn-warning">
                                Edit
                            </a> |
                            <a href="{{route('barang_masuk.destroy', $data->id) }}" class="btn btn-sm btn-danger" data-confirm-delete="true">Delete</a>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
  <script src="../assets/plugins/metismenu/metisMenu.min.js"></script>
<script src="../assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<script src="../assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
			$('#example').DataTable();
		  });
	</script>
    <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="assets/js/main.js"></script>
@endpush
