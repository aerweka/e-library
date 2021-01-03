@extends('admin/layout/layout')
@section('page title', 'Edit Data Penerbit')
@section('title', 'Edit Data Penerbit')
@section('breadcrump')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Edit Data Penerbit</li>  
@endsection
@section('content')
	<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-title">Edit Data Penerbit</h3>
			<div class="card-tools">
				<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
				<i class="fas fa-minus"></i></button>
				<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
				<i class="fas fa-times"></i></button>
			</div>
		</div>
		<div class="card-body">
			<form action="/penerbit/updateData" method="post">
				<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
				<div class="form-group">
					<label for="exampleInputEmail1">Id Penerbit</label>
					<input type="text" name="id_penerbit" class="form-control" value="{{ $penerbit[0]->id_penerbit }}" readonly>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Nama Penerbit</label>
					<input type="text" name="name" class="form-control" value="{{ $penerbit[0]->nama_penerbit }}">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Alamat Penerbit</label>
					<input type="text" name="address" class="form-control" value="{{ $penerbit[0]->alamat_penerbit }}">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Nomor Telpon</label>
					<input type="text" name="phone" class="form-control" value="{{ $penerbit[0]->no_telp_penerbit }}">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Email Penerbit</label>
					<input type="email" name="email" class="form-control" value="{{ $penerbit[0]->email_penerbit }}">
				</div>
		</div>
		<!-- /.card-body -->
		<div class="card-footer">
				<input type="submit" name="Update" class="btn btn-primary">
			</form>
		</div>
		<!-- /.card-footer-->
	</div>
@endsection