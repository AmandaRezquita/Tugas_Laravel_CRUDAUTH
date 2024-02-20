@extends('layouts.maindahs')

@section('content')

    <form method="post" action=" " style="  max-width: 400px; /* Adjust the maximum width as needed */
  margin: auto; /* Center the form horizontally */
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;">
   <h2>Detail Siswa</h2>

<table class="table">
    <tr>
        <th>NIS:</th>
        <td>{{ $student->NIS }}</td>
    </tr>
    <tr>
        <th>Nama:</th>
        <td>{{ $student->nama }}</td>
    </tr>
    <tr>
        <th>Kelas:</th>
        <td>{{ optional($student->kelas)->nama}}</td>
    </tr>
    <tr>
        <th>Alamat:</th>
        <td>{{ $student->alamat }}</td>
    </tr>
</table>

<a class="btn btn-primary mb-2" href="/dashboard/student2/all" role="button">Back</a>

@endsection



