@extends('admin/layout/layout')
@section('page title', 'Data Customer')
@section('title', 'Data Customer')
@section('breadcrump')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Data Customer</li>  
@endsection
@section('content')
	<div class="card">
		<div class="card-header">
			<h3 class="card-title">Data Customer</h3>
			<div class="card-tools">
				<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
				<i class="fas fa-minus"></i></button>
				<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
				<i class="fas fa-times"></i></button>
			</div>
		</div>
		<div class="card-body table-responsive p-0" style="height: 300px;">
			<table class="table table-head-fixed text-nowrap">
				<thead>
					<tr>
						<th>Id Customer</th>
						<th>Nama Depan</th>
						<th>Nama Belakang</th>
						<th>Phone</th>
						<th>Email</th>
						<th>Alamat</th>
						<th>Kota</th>
						<th>Provinsi</th>
						<th>Kode Pos</th>
					</tr>
				</thead>
				<tbody>
				  	@foreach($customer as $data)
					<tr>
						<td>{{ $data->customer_id }}</td>
						<td>{{ $data->first_name }}</td>
						<td>{{ $data->last_name }}</td>
						<td>{{ $data->phone }}</td>
						<td>{{ $data->email }}</td>
						<td>{{ $data->street }}</td>
						<td>{{ $data->city }}</td>
						<td>{{ $data->state }}</td>
						<td>{{ $data->zip_code }}</td>
						<td><a href="/customer/editCustomer/{{ $data->customer_id }}">
						<button> edit </button></a></td>
					</tr>
					@endforeach			
				</tbody>	
			</table>
		</div>
			<!-- /.card-body -->
		<div class="card-footer">
			<a href="/customer/addCustomer"><b>Tambah Data Customer</b></a>	
		</div>
		<!-- /.card-footer-->
	</div>
@endsection

