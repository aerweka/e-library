@extends('admin/layout/layout')
@section('page title', 'Edit Data Bahasa')
@section('title', 'Edit Data Bahasa')
@section('breadcrump')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Edit Data Bahasa</li>  
@endsection
@section('content')
	<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-title">Edit Data Bahasa</h3>
			<div class="card-tools">
				<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
				<i class="fas fa-minus"></i></button>
				<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
				<i class="fas fa-times"></i></button>
			</div>
		</div>
		<div class="card-body">
			<form action="/bahasa/updateData" method="post">
				<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
				<div class="form-group">
					<label for="exampleInputEmail1">Id Bahasa</label>
					<input type="text" name="id_bhs" class="form-control" value="{{ $bahasa[0]->id_bhs }}" readonly>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Nama Bahasa</label>
					<input type="text" name="name" class="form-control" value="{{ $bahasa[0]->nama_bhs }}">
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