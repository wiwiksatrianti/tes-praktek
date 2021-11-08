@extends('master')

@section('title')
    Data 
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-10 my-3">
                <form action="/transaksi/show" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Barang</label>
                        <select class= "form-control" name="nama" id="">
                            <option value="">-Pilih Barang-</option>
                            @foreach ($transaksi as $item)
                                <option value="{{$item->id}}">
                                    {{$item->nama}}
                                </option>
                            @endforeach
                        </select>
                        @error('genre_id')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input class="form-control" type="number" name="harga" id="">
                        @error('harga')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Jumlah Item</label>
                        <input class="form-control" type="number" name="stok" id="">
                        @error('stok')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    
        
@endsection