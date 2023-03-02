@extends('layouts.master')
@section('content')

<div class="p-5 mb-4 bg-light rounded-3">
<h3><center>List Data barang</center></h3>
<div>
<a href="/barang/create"><button class="btn btn-primary" style="border-radius: 15px;">add barang</button></a>   
</div>

<br>
<table border="2" class="table table-responsive" style="height: 250px;">
<tr>
    <th>id barang</th>
    <th>nama barang</th>
    <th>deskripsi barang</th>
    <th>harga</th>
    <th>aksi</th>
</tr>
@foreach($barangs as $barang)
<tr>
    <td>{{$barang->id}}</td>
    <td>{{$barang->namabarang}}</td>
    <td>{{$barang->deskripsibarang}}</td>
    <td>{{$barang->harga}}</td>
    <td>

    <a href="/barang/{{$barang->id}}/edit"><button class="btn btn-warning">Edit</button></a>
                @csrf
                @method('delete')  
                <a method="POST" href="/barang/{{$barang->id}}" onclick="return confirm('Yakin mau delete data?')"><button class="btn btn-danger">Hapus</button></a>
                        </td>

</tr>
@endforeach

</table>
</div>
</div>
@endsection