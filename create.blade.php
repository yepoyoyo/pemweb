@extends('layouts.master')
@section('content')

<div class="mx-auto">
    <div class="card">
        <div class="card-header">
        <h3>create barang</h3></div>
    </div>
<div class="card-body mt-4">
<form action="/barang/store" method="POST">
    @csrf
    <div class="mb-3"> 
        <label for="exampleInputEmail" class="form-label">nama barang</label>
        <input type="text" name="namabarang" class="form-control" aria-describedby="emailHelp">
   </div>
   <div class="mb-3"> 
        <label for="exampleInputEmail" class="form-label">deskripsi barang</label>
        <input type="text" name="deskripsibarang" class="form-control" aria-describedby="emailHelp">
   </div>
   <div class="mb-3"> 
        <label for="exampleInputEmail" class="form-label">harga</label>
        <input type="text" name="harga" class="form-control" aria-describedby="emailHelp">
   </div>

    <input class="btn btn-success" type="submit" name="submit" value="save">

        
  
    
</form>
</div>
</div>
@endsection

