@extends('layouts.master')

@section('content')	
	<div class="container">
		<div class="card">
			<div class="card-header">
			 <a class="btn btn-success float-right " href="/index">Kembali</a>
			</div>
			<div class="card-body">
	@foreach($barang as $fb)
					<form action="/transaksi/tambah" method="post">
		{{ csrf_field() }}
				
		{{-- <table class="table table-bordered">					
			<tr>
				<th>Nama Barang</th>
				<th>Harga</th>
				<th>Jumlah</th>
				<th>Total</th>
			</tr>
		</table> --}}

		<table align="center">
			<tr>
				<td>Kode Barang</td>
				<td>:</td>
				<td><input type="text" name="kd_barang" required="required" value="{{ $fb->kd_barang }}" readonly></td>
			</tr>
			<tr>
				<td>Nama Barang</td>
				<td>:</td>
				<td><input type="text" name="nama_barang" required="required" value="{{ $fb->nama_barang }}" readonly></td>
			</tr>
			<tr>
				<td>Jenis</td>
				<td>:</td>
				<td><input type="text" name="satuan" required="required" value="{{ $fb->satuan }}" readonly></td>				
			</tr>
			
			<tr>
				<td>Harga</td>
				<td>:</td>
				<td><input type="text" name="harga" required="required" value="{{ $fb->harga }}" id="harga" readonly></td>
			</tr>
			<tr>
				<td>Jumlah</td>
				<td>:</td>
				<td><input type="text" name="jumlah" required="required" id="jumlah" onkeyup="hitungtotal()"></td>
			</tr>
			<tr>
				<td>Total</td>
				<td>:</td>
				<td><input type="text" name="total" required="required" id="total" readonly></td>
			</tr>
			<tr>
				<td>Bayar</td>
				<td>:</td>
				<td><input type="text" name="bayar" required="required" id="bayar" onkeyup="hitungkembalian()"></td>
			</tr>
			<tr>
				<td>Kembalian</td>
				<td>:</td>
				<td><input type="text" name="kembalian" required="required" id="kembalian" readonly></td>
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

<script>
    function hitungtotal(){
        var val1 = document.getElementById('harga').value;
        var val2 = document.getElementById('jumlah').value;
        var hasil = parseInt(val1)*parseInt(val2);

        if(!isNaN(hasil)){
            document.getElementById('total').value=hasil;
        }
    }
    
    function hitungkembalian(){
        var val1 = document.getElementById('total').value;
        var val2 = document.getElementById('bayar').value;
        var hasil = parseInt(val2)-parseInt(val1);

        if(!isNaN(hasil)){
            document.getElementById('kembalian').value=hasil;
        }
    }
</script>

@stop