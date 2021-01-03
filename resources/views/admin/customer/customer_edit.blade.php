@extends('admin/layout/layout')
@section('page title', 'Edit Data Customer')
@section('title', 'Edit Data Customer')
@section('content')
	<div class="card">
		<div class="card-header">
			<h3 class="card-title">Edit Data Customer</h3>
			<div class="card-tools">
				<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
				<i class="fas fa-minus"></i></button>
				<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
				<i class="fas fa-times"></i></button>
			</div>
		</div>
		<div class="card-body">
			<form action="/customer/updateCustomer" method="post">
				<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
				<table>
					<tr>
						<td>Id customer</td>
						<td><input type="text" name="customer_id" value="{{ $customer[0]->customer_id }}" readonly></td>
					</tr>
						<tr><td>Nama Depan</td>		
						<td><input type="text" name="f_name" value="{{ $customer[0]->first_name }}"></td>
					</tr>
					<tr>
						<td>Nama Belakang</td>		
						<td><input type="text" name="l_name" value="{{ $customer[0]->last_name }}"></td>
					</tr>
					<tr>
						<td>Telpon</td>			
						<td><input type="text" name="phone" value="{{ $customer[0]->phone }}"></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="email" name="email" value="{{ $customer[0]->email }}"></td>
					</tr>
					<tr>	
						<td>Kota</td>
						<td><input type="text" name="city" value="{{ $customer[0]->city }}"></td>
					</tr>
					<tr>
						<td>Provinsi</td>
						<td><input type="text" name="state" value="{{ $customer[0]->state }}"></td>
					</tr>
					<tr>
						<td>Kode Pos</td>
						<td><input type="text" name="zip_code" value="{{ $customer[0]->zip_code }}"></td>
					</tr>
				</table>
			</div>
			<!-- /.card-body -->
			<div class="card-footer">
					<input type="submit" name="Update">
				</form>
			</div>
			<!-- /.card-footer-->
		</div>
	</div>
@endsection