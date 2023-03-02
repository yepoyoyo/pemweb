<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index() {
        $barangs = Barang::all();
        return view ('barang.index',compact(['barangs']));
    }
    public function create() {
        return view  ('barang.create');
    }
    public function store(Request $request) {
        //dd($request->except(['_token','submit']));
        Barang::create($request->except(['_token','submit']));
        return redirect('/barang');
    }
    public function edit($id)
    {
        $barang = Barang::find($id);
        return view('barang.edit',compact(['barang']));
       
    }
    
    public function update($id, Request $request)
    {
          //dd($request->except(['_token','submit']));
        $barang = Barang::find($id);
        $barang->update($request->except(['_token','submit']));
        return redirect('/barang');
     
    }
    public function destroy($id){
        $barang = Barang::find($id);
        $barang->delete();
        return redirect('/barang');
    }
}


