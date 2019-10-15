@extends('base')

@section('body')
<dl> 
    <dt>Nama</dt>
    <dd>{{$daftarKontak->nama}}</dd>
    <dt>Telepon</dt>
    <dd>{{$daftarKontak->telepon}}</dd>
    <dt>Email</dt>
    <dd>{{$daftarKontak->email}}</dd>
    <dt>Alamat</dt>
    <dd>{{$daftarKontak->alamat}}</dd>
</dl>
@endsection
