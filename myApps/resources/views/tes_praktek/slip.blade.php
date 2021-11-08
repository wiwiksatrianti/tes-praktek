@extends('master')

@section('title')
    Data Belanja
@endsection

@section('content')
    <div class="container"> 
        <div class="row">
            <div class="col-10 my-3">
                <h2>Data belanja</h2>
                @foreach ($transaksi as $trs)
                <p>Transaksi {{$loop->iteration}}</p>
                <form>
                        <label>Nama Barang: {{$trs->nama}} </label><br><br>
                        <label>Jumlah Pembelian : {{$trs->stok}}</label><br><br>
                        <label>Harga Satuan : {{$trs->harga}}</label><br><br>
                        <label>Total Pembelian : {{$trs->harga*$trs->stok}}</label><br><br>
                </form>
                @endforeach
            </div>
        </div>
    </div>
    
        
@endsection