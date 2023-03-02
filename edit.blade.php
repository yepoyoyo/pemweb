
@extends('layouts.master')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Data Barang') }}</div>

                <div class="card-body">
    <form action="/barang/{{$barang->id}}" method="POST">
        @method('put')
        @csrf
    <div class="mb-3"> 
        <label for="exampleInput" class="form-label">nama barang</label>
        <input type="text" name="namabarang" class="form-control" aria-describedby="emailHelp" value="{{$barang->namabarang}}">
   </div>
   <div class="mb-3"> 
        <label for="exampleInput" class="form-label">deskripsi barang</label>
        <input type="text" name="deskripsibarang" class="form-control" aria-describedby="emailHelp" value="{{$barang->deskripsibarang}}">
   </div>
   <div class="mb-3"> 
        <label for="exampleInput" class="form-label">harga</label>
        <input type="text" name="harga" class="form-control" aria-describedby="emailHelp" value="{{$barang->harga}}">
   </div>
    <input class="btn-success" type="submit" name="submit" value="save">
</form>
</div>
</div>
@endsection


