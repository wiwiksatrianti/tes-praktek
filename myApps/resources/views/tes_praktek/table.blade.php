@extends('master')

@section('header')
    Pembelian
@endsection

@section('content')
<form action="/index" method="POST">
    @csrf
        <label>Barang : </label><br><br>
        <input type="text" name="barang"><br><br>
        <label>Jumlah Item: </label><br><br>
        <input type="number" name="jumlah"><br><br>
        <input type="submit">
    </form>
@endsection