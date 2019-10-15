@extends('base')

@section('body')
<button ><a href="{{ route('daftarKontakNewForm') }}">Add New</a></button>
<form method="GET" action="{{route('daftarKontakSearch')}}">
<input type="text" name="search">
<input type="submit" value="search"></form>
<table>
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Telepon</th>
        <th>Email</th>
        <th>Alamat</th>
        <th>Action</th>
    </tr>
    @foreach ($daftarkontaks as $daftarKontak)
    <tr>
        <td><a href="">{{ $daftarKontak->id }}</a></td>
        <td><a href="">{{ $daftarKontak->nama }}</a></td>
        <td><a href="">{{ $daftarKontak->telepon }}</a></td>
        <td><a href="">{{ $daftarKontak->email }}</a></td>
        <td><a href="">{{ $daftarKontak->alamat }}</a></td>
        <td><a href="{{ route('daftarKontakDelete', ['id' => $daftarKontak->id]) }}"
            onclick="return confirm('Are you sure?')">Delete</a>
            <a href="{{ route('daftarKontakEditForm', ['id'=>$daftarKontak->id]) }}">Edit</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection