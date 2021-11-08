<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;

class InventoryController extends Controller
{
    public function form(){
        $transaksi = Transaksi::all();
        return view ('tes_praktek.formBelanja', compact('transaksi'));
    }
    
    public function slip(){
        return view ('tes_praktek.slip');
    }

    public function slip_post(Request $request){
        //dd($request->all());
        $nama = $request['nama'];
        $harga = $request['harga'];
        $stok = $request['stok'];
        return view ('welcome', compact('nama', 'harga', 'stok'));
    }

}
