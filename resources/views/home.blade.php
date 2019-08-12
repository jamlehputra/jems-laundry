@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Pilih Opsi :
                    <hr>

                    <div>
                        <a href="/index" class="btn btn-primary">BARANG</a>
                        <a href="/pilihbarang" class="btn btn-primary">TRANSAKSI</a>
                        <a href="/datatransaksi" class="btn btn-primary">DATA TRANSAKSI</a>
                    <div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
