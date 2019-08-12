<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaundryController extends Controller
{
    public function index()
    {
        $barang = DB::table('tb_barang')->get();
        return view('/index',['barang' => $barang]);
    }

    public function pilihbarang()
    {
        $barang = DB::table('tb_barang')->get();
        return view('/pilihbarang',['barang' => $barang]);
    }
    
    public function datatransaksi()
    {
        $transaksi = DB::table('tb_transaksi')->get();
        return view('datatransaksi',['transaksi' => $transaksi]);
    }

    public function cetakdatatransaksi()
    {
        $transaksi = DB::table('tb_transaksi')->get();
        return view('laporandatatransaksi',['transaksi' => $transaksi]);
    }

    public function create(){
        return view('tambah');
    }

    public function store(Request $request)
    {
        //insert data
        DB::table('tb_barang')->insert([
            'nama_barang' => $request->nama_barang,
            'satuan' => $request->satuan,
            'harga' => $request->harga
        ]);
        $barang = DB::table('tb_barang')->get();
        return redirect('/index');
    }
    
    public function transaksitambah(Request $request)
    {
        //insert data
        DB::table('tb_transaksi')->insert([
            'kd_barang' => $request->kd_barang,
            'nama_barang' => $request->nama_barang,
            'jenis_barang' => $request->jenis,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah,
            'total' => $request->total,
            'bayar' => $request->bayar,
            'kembalian' => $request->kembalian
        ]);

        $transaksi = DB::table('tb_transaksi')->get();
        return view('datatransaksi',['transaksi' => $transaksi]);
    }
    
    public function edit($kd_barang)
    {
        $barang = DB::table('tb_barang')->where('kd_barang', $kd_barang)->get();
        return view('edit', ['barang' => $barang]);
    }
    
    public function mulaitransaksi($kd_barang)
    {
        $barang = DB::table('tb_barang')->where('kd_barang', $kd_barang)->get();
        return view('transaksi', ['barang' => $barang]);
    }

    public function update(Request $request)
    {
        DB::table('tb_siswa')->where('kd_barang',$request->kd_barang)->update([
            'kd_barang' => $request->kd_barang,
            'nama_barang' => $request->nama_barang,
            'jenis_barang' => $request->jenis,
            'berat' => $request->berat,
            'harga' => $request->harga
        ]);

        return redirect('/index');
    }
   
    public function hapus($kd_barang)
    {
        DB::table('tb_barang')->where('kd_barang', $kd_barang)->delete();

        return redirect('index');
    }
}