@extends('layouts.master')

@section('content')	
	<div  class="container">
		<div class="card">
			<div class="card-header">
				<h4>Tambah Data Laundry</h4> <a class="btn btn-success float-right " href="/index">Kembali</a>
			</div>
			<div class="card-body">
					<form action="/index/tambah" method="post">
		{{ csrf_field() }}
				

		<table align="center">
			<tr>
				<td>Jasa Laundry</td>
				<td>:</td>
				<td><input type="text" name="nama_barang" required="required"></td>
			</tr>
			<tr>
				<td>Satuan</td>
				<td>:</td>
				<td><input type="text" name="satuan" required="required"></td>				
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="hidden" name="berat" required="required" value="1"></textarea></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td>:</td>
				<td><input type="text" name="harga" required="required"></td>
			</tr>
		     <tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="Simpan Data"></td>
			</tr>
			
		</table>
	</form>
			</div>
		</div>
	</div>
	


@stop