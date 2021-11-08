@extends('master')

@section('title')
    FORM
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-10 my-3">
                <form action="/slip" method="POST">
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
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input class="form-control" type="number" name="harga" id="">
                    </div>
                    <div class="form-group">
                        <label>Jumlah Item</label>
                        <input class="form-control" type="number" name="stok" id="">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    
        
@endsection