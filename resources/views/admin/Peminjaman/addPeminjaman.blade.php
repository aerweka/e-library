@extends('admin/layout/layout')
@section('page title', 'Tambah Peminjaman')
@section('title', 'Tambah Peminjaman')
@section('breadcrump')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Tambah Peminjaman</li>
@endsection
@section('content')
<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">Tambah Peminjaman</h3>
		<div class="card-tools">
			<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
				<i class="fas fa-minus"></i></button>
			<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
				<i class="fas fa-times"></i></button>
		</div>
	</div>
	<div class="card-body">
		<form action="/peminjaman/insertData" method="post" id="addPeminjaman">
			<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
			<div class="form-group">
				<label for="inputJml_buku">Jumlah Buku</label>
				<input type="text" required="required" name="jml_buku" class="form-control" placeholder="Masukkan Jumlah Buku yang Disewa">
			</div>
			<div class="form-group">
				<label for="inputTgl_pinjam">Tanggal Pinjam</label>
				<input type="date" required="required" name="tgl_pinjam" id="datePicker" class="form-control" placeholder="Pilih Tanggal sewa">
			</div>
			<div class="form-group">
				<label for="inputBuku">Pilih Buku</label>
				<select name="kode_buku" id="kode_buku" class="form-control select2" style="width: 100%;" required>
					<option selected disabled>Pilih Buku</option>
					@foreach ($eksemplar as $e)
					@if($e->status == 1)
					<option value="{{$e->kode_buku}}">{{$e->kode_buku}} - {{$e->judul_buku}}</option>
					@endif
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="inputAnggota">Penyewa</label>
				<select name="nis_nip" id="nis_nip" class="form-control select2" style="width: 100%;" required>
					<option selected disabled>Pilih Data Penyewa</option>
					@foreach ($anggota as $a)
					<option value="{{$a->nis_nip}}">{{$a->nis_nip}} - {{$a->nama_anggota}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="inputPegawai">Pegawai</label>
				<select name="nip" id="nip" class="form-control" required>
					<option selected disabled>Pilih Petugas</option>
					@foreach ($pegawai as $p)
					<option value="{{$p->nip}}">{{$p->nip}} - {{$p->nama_pegawai}}</option>
					@endforeach
				</select>
			</div>
	</div>
	<!-- /.card-body -->
	<div class="card-footer">
		<input type="submit" name="Simpan" class="btn btn-primary swalDefaultSuccess">
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
		$(document).ready(function() {
			$.validator.setDefaults({
				submitHandler: function() {
					alert("Form berhasil disubmit!");
				}
			});
			$('#addPenerbit').validate({
				rules: {
					name: {
						required: true
					},
					address: {
						required: true
					},
					phone: {
						required: true,
						type: true
					},
					email: {
						required: true,
						type: true
					}
				},
				messages: {
					name: "Harap masukkan nama penerbit!",
					address: "Harap masukkan alamat penerbit!",
					phone: {
						required: "Harap Masukkan Nomor Telpon",
						type: "Harap Masukkan Angka"
					},
					email: {
						required: "Harap Masukkan Email Penerbit",
						type: "Harap Masukkan Email dengan Benar"
					}
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
	});
</script>
@endsection