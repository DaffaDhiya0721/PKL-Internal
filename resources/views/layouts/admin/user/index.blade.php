@extends('layouts.admin.admin')
@section('styles')
<link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
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
                <li class="breadcrumb-item active" aria-current="page">Data Table</li>
            </ol>
        </nav>
    </div>
    <div class="ms-auto">
        <div class="btn-group">
            <a href="{{route('user.create')}}" class="btn btn-primary">Add Data</a>
        </div>
    </div>
</div>
<!--end breadcrumb-->

<h6 class="mb-0 text-uppercase">DataTable Example</h6>
<hr>
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i = 1; @endphp
                    @foreach ($users as $data)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->isAdmin == 1 ? 'Admin' : 'User'}}</td>
                        <td>
                            <form action="{{route('user.destroy',$data->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                            <a href="{{route('user.edit',$data->id)}}" class="btn btn-warning">
                                Edit
                            </a>
                            <button type="submit" class="btn btn-danger">Delete</button>
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
<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
    <script>
	    $(document).ready(function() {
			$('#example').DataTable();
		  });
	</script>
@endpush