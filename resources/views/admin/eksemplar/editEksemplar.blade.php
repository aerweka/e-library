@extends('admin.layout.layout')
@section('page title', 'Edit Data Eksemplar Buku')
@section('title', 'Edit Data Eksemplar Buku')
@section('breadcrump')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Edit Data Eksemplar Buku</li>
@endsection
@section('content')
<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">Edit Data Eksemplar Buku</h3>
		<div class="card-tools">
			<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
				<i class="fas fa-minus"></i></button>
			<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
				<i class="fas fa-times"></i></button>
		</div>
	</div>
	<div class="card-body">
		<form action="/eksemplar/updateData" method="post">
			<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
			<div class="form-group">
				<label for="inputKB">Kode Buku</label>
				<input type="text" name="kode_buku" class="form-control" value="{{ $eksemplar[0]->kode_buku }}" readonly>
			</div>
			<div class="form-group">
				<label for="inputTitle">Buku</label>
				<input type="text" name="no_isbn" class="form-control" value="{{ $eksemplar[0]->no_isbn }} - {{ $buku[0]->judul_buku }}" readonly>
				<!-- <select class="form-control" name="no_isbn" id="no_isbn" value="$eksemplar[0]->no_isbn">
					<option value="" disabled selected>Pilih buku</option>
					@foreach($buku as $b)
					<option name="no_isbn" id="no_isbn" value="{{ $b->no_isbn }}" {{ $eksemplar[0]->no_isbn == $b->no_isbn ? 'selected' : '' }}>{{ $b->no_isbn }} - {{ $b->judul_buku }}</option>
					@endforeach
				</select> -->
			</div>
			<div class="form-group">
				<label for="inputStatus">Status</label>
				<select name="status" id="status" class="form-control" value="$eksemplar->status">
					<option value="" disabled selected>Pilih Status Eksemplar Buku</option>
					<option value="1" {{ $eksemplar[0]->status == '1' ? 'selected' : '' }}>Ada</option>
					<option value="0" {{ $eksemplar[0]->status == '0' ? 'selected' : '' }}>Kosong</option>
					<option value="8" {{ $eksemplar[0]->status == '8' ? 'selected' : '' }}>Hilang</option>
				</select>
			</div>
			<div class="form-group">
				<label for="inputCondition">Kondisi</label>
				<select name="condition" class="form-control" value="$eksemplar->kondisi_eksemplar">
					<option value="1" {{ $eksemplar[0]->kondisi_eksemplar == '1' ? 'selected' : '' }}>Baik</option>
					<option value="0" {{ $eksemplar[0]->kondisi_eksemplar == '0' ? 'selected' : '' }}>Tidak Baik</option>
				</select>
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
				title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
			})
		});
	});
</script>
@endsection