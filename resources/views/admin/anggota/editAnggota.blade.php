@extends('admin/layout/layout')
@section('page title', 'Edit Data anggota')
@section('title', 'Edit Data anggota')
@section('breadcrump')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Edit Data Anggota</li>
@endsection
@section('content')
<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">Edit Data anggota</h3>
		<div class="card-tools">
			<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
				<i class="fas fa-minus"></i></button>
			<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
				<i class="fas fa-times"></i></button>
		</div>
	</div>
	<div class="card-body">
		<form action="/anggota/updateData" method="post">
			<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
			<div class="form-group">
				<label for="exampleInputEmail1">Nis_Nip</label>
				<input type="text" name="nis_nip" class="form-control" value="{{ $anggota[0]->nis_nip }}" readonly>
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Nama</label>
				<input type="text" name="name" class="form-control" value="{{ $anggota[0]->nama_anggota }}">
			</div>
			<div class="form-group">
				<!--<label for="exampleInputEmail1">Tahun Masuk</label>
					<input type="text" required="required" name="year_in" class="form-control" placeholder="Tahun Masuk Kamu Kapan?">-->
				<label for="exampleInputEmail1">Tahun Masuk</label>
				<select name="year_in" class="form-control">
					<option value="2018" {{ $anggota[0]->tahun_masuk == '2018' ? 'selected' : '' }}>2018</option>
					<option value="2019" {{ $anggota[0]->tahun_masuk == '2019' ? 'selected' : '' }}>2019</option>
					<option value="2020" {{ $anggota[0]->tahun_masuk == '2020' ? 'selected' : '' }}>2020</option>
				</select>
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Kelas</label>
				<input type="text" name="class" class="form-control" value="{{ $anggota[0]->kelas }}">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Username</label>
				<input type="text" name="username" class="form-control" value="{{ $anggota[0]->username }}">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Password</label>
				<input type="password" name="password" class="form-control" value="{{ $anggota[0]->password }}">
			</div>
			<label for="inputStatus">Status</label>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="status" value="Aktif" {{ $anggota[0]->status == 'Aktif' ? 'checked' : '' }}>
				<label class="form-check-label">Aktif</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="status" value="Inaktif" {{ $anggota[0]->status == 'Inaktif' ? 'checked' : '' }}>
				<label class="form-check-label">Inaktif</label>
			</div>
	</div>
	<!-- /.card-body -->
	<div class="card-footer">
		<input type="submit" name="Update" class="btn btn-primary swalDefaultSuccess">
		</form>
	</div>
	<!-- /.card-footer-->
</div>
@endsection
@section('custom_script')
<script type="text/javascript">
	$(function() {
		const Toast = Swal.mixin({
			toast: true,
			position: 'top-end',
			showConfirmButton: false,
			timer: 3000
		});

		$('.swalDefaultSuccess').click(function() {
			Toast.fire({
				icon: 'success',
				title: 'Data sukses disubmit'
			})
		});
	});
</script>
@endsection