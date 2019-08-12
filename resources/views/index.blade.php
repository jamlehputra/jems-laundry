@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
					<div class="card">
							<div class="card-body">
								<h3>Daftar Laundry</h3>
							 <a class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Tambah Data</a>
						
							<br/>
							<br/>
							<table class="table table striped tabled-borderred table-hover">
							<thead>
								<th>#</th>
								<th>NAMA BARANG</th>
								<th>SATUAN</th>
								<th>HARGA</th>
								<th>AKSI</th>
							</tr>
							</thead>
							<tbody>
							@php $no = 1; @endphp
							@foreach($barang as $barang)
							<tr>
							<td>{{ $no++}}</td>
								<td>{{$barang->nama_barang}}</td>
								<td>{{$barang->satuan}}</td>
								<td>Rp. {{$barang->harga}}</td>
								<td>
									{{-- <a class="btn btn-warning" href="/index/edit/{{ $barang->kd_barang }}">Edit</a> --}}
						
									<a class="btn btn-danger"  href="/index/hapus/{{ $barang->kd_barang }}" onclick="return confirm('Yakin Mau di Hapus')">Hapus</a>
								</td>
							</tr>
							@endforeach
							</tbody>
							</table>
								</div>
							</div>
{{-- Modal --}}
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				
				<form action="/index/tambah" method="post">
				{{csrf_field()}}
				<div class="form-group">
					<label for="exampleInputEmail1">Nama Barang</label>
					<input name="nama_barang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Baju">            
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Satuan</label>
					<select name="satuan" class="form-control" id="exampleFormControlSelect1">
							<option selected disabled>-- Pilih Satuan --</option>
							<option value="Unit">Unit</option>
							<option value="Kg">Kg</option>
					</select>
				</div>
				<div class="form-group">
						<label for="exampleInputEmail1">Harga</label>
						<div class="input-group mb-3">
								
								<div class="input-group-prepend">
							
								  <span class="input-group-text">Rp.</span>
								</div>
								<input name="harga" type="text" class="form-control" placeholder=".....">
							  </div>
				</div>
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
			</div>
		</div>
	</div>
	{{-- End Modal --}}

	@endsection