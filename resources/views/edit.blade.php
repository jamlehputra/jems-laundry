@extends('layouts.master')

@section('content')	
	<div class="container">
		<div class="card">
			<div class="card-header">
			 <a class="btn btn-success float-right " href="/index">Kembali</a>
			</div>
			<div class="card-body">
	@foreach($barang as $fb)
					<form action="/index/tambah" method="post">
		{{ csrf_field() }}
				

		<table align="center">
			<tr>
				<td>Kode Barang</td>
				<td>:</td>
				<td><input type="text" name="kd_barang" required="required" value="{{ $fb->kd_barang }}"></td>
			</tr>
			<tr>
				<td>Nama Barang</td>
				<td>:</td>
				<td><input type="text" name="nama_barang" required="required" value="{{ $fb->nama_barang }}"></td>
			</tr>
			<tr>
				<td>Jenis</td>
				<td>:</td>
				<td><input type="text" name="satuan" required="required" value="{{ $fb->satuan }}"></td>				
			</tr>
			<tr>
				<td>Harga</td>
				<td>:</td>
				<td><input type="text" name="harga" required="required" value="{{ $fb->harga }}"></td>
			</tr>
		     <tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="Simpan Data"></td>
			</tr>
			
		</table>
	</form>
    @endforeach
			</div>
		</div>
	</div>
	


@stop