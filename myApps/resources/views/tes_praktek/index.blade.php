@extends('master')

@section('header')
    Data 
@endsection

@section('content')
    <a href="/table" class="btn btn-primary">Tambah Data Barang</a>
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nama</th>
                <th scope="col">Harga</th>
                <th scope="col">Stok</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($transaksi as $trs)
                    <tr>
                        <td>{{$loop->iteration}}</th>
                        <td>{{$trs->nama}}</td>
                        <td>{{$trs->Harga}}</td>
                        <td>{{$trs->Stok}}</td>
                        <td>
                            <a href="" class="btn btn-primary">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @empty
                    <tr colspan="3">
                        <td>No data</td>
                    </tr>  
                @endforeach              
            </tbody>
        </table>
@endsection