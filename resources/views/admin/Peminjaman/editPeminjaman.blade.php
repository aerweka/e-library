@extends('admin/layout/layout')
@section('page title', 'Edit Data Peminjaman')
@section('title', 'Edit Data Peminjaman')
@section('breadcrump')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Edit Data Peminjaman</li>
@endsection
@section('content')
<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">Edit Data Peminjaman</h3>
		<div class="card-tools">
			<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
				<i class="fas fa-minus"></i></button>
			<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
				<i class="fas fa-times"></i></button>
		</div>
	</div>
	<div class="card-body">
		<form action="/peminjaman/updateData" method="post">
			<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
			<div class="form-group">
				<label for="id_peminjaman">Id Peminjaman</label>
				<input type="text" name="id_peminjaman" class="form-control" value="{{ $peminjaman[0]->id_peminjaman }}" readonly>
			</div>
			<div class="form-group">
				<label for="kode_buku">Kode Buku</label>
				<input type="text" name="kode_buku" class="form-control" value="{{ $det[0]->kode_buku }}" readonly>
			</div>
			<div class="form-group">
				<label for="jml_buku">Jumlah Buku Tersewa</label>
				<input type="number" name="jml_buku" class="form-control" value="{{ $peminjaman[0]->jml_buku }}">
			</div>
			<div class="form-group">
				<label for="tgl_pinjam">Tanggal Pinjam</label>
				<input type="date" name="tgl_pinjam" class="form-control" value="{{ $peminjaman[0]->tgl_pinjam }}">
			</div>
			<div class="form-group">
				<label for="tgl_harusKembali">Tanggal Harus Kembali</label>
				<input type="date" name="tgl_harusKembali" class="form-control" value="{{ $det[0]->tgl_harusKembali }}" readonly>
			</div>
			<div class="form-group">
				<label for="tgl_kembali">Tanggal Kembali</label>
				<input type="date" name="tgl_kembali" class="form-control" value="{{ $det[0]->tgl_kembali }}">
			</div>
			<div class="form-group">
				<label for="perpanjangan">Perpanjangan</label>
				<input type="number" name="perpanjangan" class="form-control" value="{{ $det[0]->perpanjangan }}">
			</div>
			<div class="form-group">
				<label for="denda_perbuku">Denda Buku</label>
				<input type="number" name="denda_perbuku" class="form-control" value="{{ $det[0]->denda_perbuku }}">
			</div>
			<div class="form-group">
				<label for="status_pinjam">Status Pinjam</label>
				<div class="row">
					<div class="form-check form-check-inline ml-2">
						<input class="form-check-input" type="radio" name="status_peminjaman" value="1" {{ $det[0]->status_peminjaman == '1' ? 'checked' : '' }}>
						<label class="form-check-label">Terpinjam</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="status_peminjaman" value="0" {{ $det[0]->status_peminjaman == '0' ? 'checked' : '' }}>
						<label class="form-check-label">Kembali</label>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="status_verif">Status Verifikasi</label>
				<div class="row">
					<div class="form-check form-check-inline ml-2">
						<input class="form-check-input" type="radio" name="status_verif" value="1" {{ $det[0]->status_verif == '1' ? 'checked' : '' }}>
						<label class="form-check-label">Terverifikasi</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="status_verif" value="0" {{ $det[0]->status_verif == '0' ? 'checked' : '' }}>
						<label class="form-check-label">Belum Terverifikasi</label>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="anggota">Penyewa</label>
				<select name="nis_nip" id="nis_nip" class="form-control">
					<option value="" disabled selected>Ubah Penyewa</option>
					@foreach ($anggota as $a)
					<option value="{{ $a->nis_nip }}" {{ $peminjaman[0]->nis_nip == $a->nis_nip ? 'selected' : '' }}>{{ $a->nama_anggota }}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="pegawai">Petugas</label>
				<select name="nip" id="nip" class="form-control">
					<option value="" disabled selected>Ubah Petugas</option>
					@foreach ($pegawai as $p)
					<option value="{{ $p->nip }}" {{ $peminjaman[0]->nip == $p->nip ? 'selected' : '' }}> {{ $p->nama_pegawai }}</option>
					@endforeach
				</select>
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