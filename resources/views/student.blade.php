@extends('layouts.main')

@section('content')

<div style="text-align: start; margin: 20px;">
<h1> Ini Halaman Student</h1>
<table class="table table-striped-columns">
    <tr>
        <th style="border: 1px solid #000; padding: 8px;">NIS</th>
        <th style="border: 1px solid #000; padding: 8px;">Nama</th>
        <th style="border: 1px solid #000; padding: 8px;">Kelas</th>
        <th style="border: 1px solid #000; padding: 8px;">Alamat</th>
        <th style="border: 1px solid #000; padding: 8px;">Foto</th>
    </tr>
    @foreach ($students as $student)
    <tr>
        <td style="border: 1px solid #000; padding: 8px;">{{ $student['NIS'] }}</td>
        <td style="border: 1px solid #000; padding: 8px;">{{ $student['nama'] }}</td>
        <td style="border: 1px solid #000; padding: 8px;">{{ $student['kelas'] }}</td>
        <td style="border: 1px solid #000; padding: 8px;">{{ $student['alamat'] }}</td>
        <td style="border: 1px solid #000; padding: 8px;"><div style="display: flex; justify-content: start; width : 100px; height : 100px;">
        <img src="{{ asset($student['foto']) }}" alt="Foto">
        </div></td>
    </tr>
    @endforeach
</table>

</div>

@endsection