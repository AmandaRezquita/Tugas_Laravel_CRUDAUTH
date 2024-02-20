@extends('layouts.main')

@section('content')

<div class="text-left">
    <h2 style="width: 400px; margin: 0 auto;">Detail Siswa</h2>

    <table class="table" style="width: 400px; margin: 0 auto;">
        <tr>
            <th style="width: 150px;">NIS</th>
            <td>{{ $student->NIS }}</td>
        </tr>
        <tr>
            <th style="width: 150px;">Nama</th>
            <td>{{ $student->nama }}</td>
        </tr>
        <tr>
            <th style="width: 150px;">Kelas</th>
            <td>{{ optional($student->kelas)->nama}}</td>
        </tr>
        <tr>
            <th style="width: 150px;">Alamat</th>
            <td>{{ $student->alamat }}</td>
        </tr>
    </table>

    <a style=" margin: 10px 570px;" class="btn btn-primary mb-2" href="/student" role="button">Back</a>
</div>

@endsection
