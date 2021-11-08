@extends('master')

@section('title')
    Data 
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-10 my-3">
                <h2>List Barang</h2>
                <a href="/create" class="btn btn-primary my-3">Tambah Data Barang</a>
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
                        @foreach ($transaksi as $trs)
                            <tr>
                                <td>{{$loop->iteration}}</th>
                                <td>{{$trs->nama}}</td>
                                <td>{{$trs->harga}}</td>
                                <td>{{$trs->stok}}</td>
                                <td>
                                    <form action="/transaksi/{{$trs->id}}" method="POST">
                                        <a href="" class="btn btn-primary">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="btn btn-danger my-1" value="Delete">
                                    </form>
                                </td>
                            </tr>
                        @endforeach              
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
        
@endsection