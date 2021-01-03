@extends('admin/layout/layout')
@section('page title', 'Edit Data Pegawai')
@section('title', 'Edit Data Pegawai')
@section('breadcrump')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Edit Data Pegawai</li>
@endsection
@section('content')
<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">Edit Data Pegawai</h3>
		<div class="card-tools">
			<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
				<i class="fas fa-minus"></i></button>
			<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
				<i class="fas fa-times"></i></button>
		</div>
	</div>
	<div class="card-body">
		<form action="/penerimaan/updateData" method="post" id="editPegawai">
			<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
			<div class="form-group">
				<label for="">Id Penerimaan</label>
				<input type="text" name="id_penerimaan" class="form-control" value="{{ $penerimaan[0]->id_penerimaan }}" readonly>
			</div>
			<div class="form-group">
				<label for="editTglTerima">Tanggal Terima</label>
				<input type="date" name="receiveDate" class="form-control" value="{{ $penerimaan[0]->tgl_penerimaan }}">
			</div>
			<div class="form-group">
				<label for="editJmlBuku">Jumlah Buku</label>
				<input type="text" name="total_rec_book" class="form-control" value="{{ $penerimaan[0]->jml_buku_diterima }}">
			</div>
			<div class="form-group">
				<label for="editKet">Keterangan</label>
				<input type="text" name="p_s" class="form-control" value="{{ $penerimaan[0]->ket }}">
			</div>
			<div class="form-group">
				<label for="inputAsal">Asal Buku</label>
				<select name="source" id="" class="form-control">
					@foreach ($asal as $a)
					<option value="{{ $a->id_asal }}" {{ $penerimaan[0]->id_asal == $a->id_asal ? 'selected' : '' }}>{{ $a->asal }}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="inputNama">Nama Pegawai</label>
				<select name="nip" id="" class="form-control">
					@foreach ($pegawai as $p)
					<option value="{{ $p->nip }}" {{ $penerimaan[0]->nip == $p->nip ? 'selected' : '' }}>{{ $p->nip }} - {{ $p->nama_pegawai }}</option>
					@endforeach
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
				title: 'Data sukses disubmit'
			})
		});
	});
	$(document).ready(function() {
		$('#editPegawai').validate({
			rules: {
				nip: {
					required: true,
					number: true
				},
				name: {
					required: true
				},
				username: {
					required: true
				},
				password: {
					required: true
					//minlength: 10
				},
				status: {
					required: true
				}
			},
			messages: {
				nip: {
					required: "Harap masukkan NIP!",
					number: "Harap masukkan angka saja!"
				},
				name: "Harap masukkan nama kamu!",
				username: {
					required: "Harap masukkan username kamu!"
				},
				password: {
					required: "Harap masukkan alamat kamu!",
					minlength: "Harap masukkan minimal 10 digit!"
				},
				status: "Harap pilih status kamu!"
			},
			errorElement: 'span',
			errorPlacement: function(error, element) {
				error.addClass('invalid-feedback');
				element.closest('.form-group').append(error);
			},
			highlight: function(element, errorClass, validClass) {
				$(element).addClass('is-invalid');
			},
			unhighlight: function(element, errorClass, validClass) {
				$(element).removeClass('is-invalid');
			}
		});
	});
</script>
@endsection