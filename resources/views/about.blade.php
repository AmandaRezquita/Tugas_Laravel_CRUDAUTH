@extends('layouts.main')

@section('content')
<div style="text-align: start; margin: 20px;">
    <h1>Ini Halaman About</h1>
    <p>Nama     : {{ $nama }}</p>
    <p>Kelas    : {{ $kelas }}</p>
    <p>Foto     :
        <div style="display: flex; justify-content: start; width : 250px; height : 250px;">
        <img src="{{ asset($foto) }}" alt="Foto">
        </div></p>
   
</div>
@endsection
