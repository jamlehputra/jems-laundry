<!DOCTYPE html>
<html lang="en">
<head>
    <title>CETAK</title>
</head>
<body onload="window.print()" style="font-family: calibri;">
<center>
    <h1>Jems Laundry</h1>
    <p>LAPORAN DATA TRANSAKSI</p>
</center>

<br>

<table border="1" style="border-collapse: collapse;" align="center">
	<thead>
		<th style="padding: 10px">Kode Transaksi</th>
		<th style="padding: 10px">Kode Barang</th>
		<th style="padding: 10px">Nama Barang</th>
		<th style="padding: 10px">Jenis</th>
		<th style="padding: 10px">Harga</th>
		<th style="padding: 10px">Jumlah</th>
		<th style="padding: 10px">Total</th>
		<th style="padding: 10px">Bayar</th>
		<th style="padding: 10px">Kembalian</th>
	</tr>
	</thead>
	<tbody>
	@foreach($transaksi as $barang)
	<tr>
		<td style="padding: 5px" align="center">{{$barang->kd_transaksi}}</td>
		<td style="padding: 5px" align="center">{{$barang->kd_barang}}</td>
		<td style="padding: 5px">{{$barang->nama_barang}}</td>
		<td style="padding: 5px">{{$barang->jenis_barang}}</td>
		<td style="padding: 5px">{{$barang->harga}}</td>
		<td style="padding: 5px" align="center">{{$barang->jumlah}}</td>
		<td style="padding: 5px">{{$barang->total}}</td>
		<td style="padding: 5px">{{$barang->bayar}}</td>
		<td style="padding: 5px">{{$barang->kembalian}}</td>
	</tr>
	@endforeach
	</tbody>
	</table>
    <br>
    <br>
    
</body>
</html>