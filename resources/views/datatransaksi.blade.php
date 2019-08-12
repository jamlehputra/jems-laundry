@extends('layouts.master')

@section('content')
	<div class="container">
	<div class="card">
	<div class="card-body">
		<h3>Data Laundry
		<a href="/cetakdatatransaksi" style="float: right;" class="btn btn-success" target="_blank">CETAK</a></h3>
	<br/>
	<table class="table table striped tabled-borderred table-hover">
	<thead>
		<th>Kode Transaksi</th>
		<th>Kode Barang</th>
		<th>Nama Barang</th>
		<th>Jenis</th>
		<th>Harga</th>
		<th>Jumlah</th>
		<th>Total</th>
		<th>Bayar</th>
		<th>Kembalian</th>
	</tr>
	</thead>
	<tbody>
	@foreach($transaksi as $barang)
	<tr>
		<td>{{$barang->kd_transaksi}}</td>
		<td>{{$barang->kd_barang}}</td>
		<td>{{$barang->nama_barang}}</td>
		<td>{{$barang->jenis_barang}}</td>
		<td>{{$barang->harga}}</td>
		<td>{{$barang->jumlah}}</td>
		<td>{{$barang->total}}</td>
		<td>{{$barang->bayar}}</td>
		<td>{{$barang->kembalian}}</td>
	</tr>
	@endforeach
	</tbody>
	</table>
		</div>
	</div>
</div>
@endsection