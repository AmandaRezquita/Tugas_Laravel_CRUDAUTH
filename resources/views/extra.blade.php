@extends('layouts.main')

@section('content')

<div style="text-align: start; margin: 20px;">
<h1> Ini Halaman Extra</h1>
<table class="table table-striped-columns">
    <tr>
        <th style="border: 1px solid #000; padding: 8px;">Nama</th>
        <th style="border: 1px solid #000; padding: 8px;">Nama Pembina</th>
        <th style="border: 1px solid #000; padding: 8px;">Deskripsi</th>
    </tr>
    @foreach ($extracurricular as $extra)
    <tr>
        <td style="border: 1px solid #000; padding: 8px;">{{ $extra['nama'] }}</td>
        <td style="border: 1px solid #000; padding: 8px;">{{ $extra['nama_pembina'] }}</td>
        <td style="border: 1px solid #000; padding: 8px;">{{ $extra['deskripsi'] }}</td>
    </tr>
    @endforeach
</table>

</div>

@endsection