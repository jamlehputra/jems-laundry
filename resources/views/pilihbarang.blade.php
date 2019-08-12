@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
					<div class="card">
							<div class="card-body">
								<h3>Jems Laundry</h3>
							<br/>
							<table class="table table striped tabled-borderred table-hover">
							<thead>
								<th>NAMA BARANG</th>
								<th>SATUAN</th>
								<th>HARGA</th>
								<th>Opsi</th>
							</tr>
							</thead>
							<tbody>
							@foreach($barang as $barang)
							<tr>
								<td>{{$barang->nama_barang}}</td>
								<td>{{$barang->satuan}}</td>
								<td>{{$barang->harga}}</td>
								<td>
									<a class="btn btn-success" href="/pilihbarang/transaksi/{{ $barang->kd_barang }}">Pilih</a>			
								</td>
							</tr>
							@endforeach
							</tbody>
							</table>
								</div>
							</div>
			</div>
		</div>
	
</div>
@endsection