@extends('base')

@section('body')
<!-- <form method="post" action="/komentar/edit"> -->
<form method="post" action="{{route('daftarKontakUpdate',['id'=>$daftarKontak->id])}}">
@csrf
    <input type="text" value ="{{$daftarKontak->id}}" disabled>
    <input type="hidden" value ="{{$daftarKontak->id}}" name="id" >
    <div>
        <label>Nama:</label>
        <input type="text" name="nama" value="{{$daftarKontak->nama }}">
    </div>
    <div>
        <label>Telepon: </label>
        <input type="text" name="telepon" value="{{$daftarKontak->telepon}}" >
    </div>
    <div>
        <label>Email: </label>
        <input type="text" name="email" value="{{$daftarKontak->email}}" >
    </div>
    <div>
        <label>Alamat: </label>
        <input type="text" name="alamat" value="{{$daftarKontak->alamat}}" >
    </div>
    <div>
        <input type="submit">
    </div>


</form>
@endsection
