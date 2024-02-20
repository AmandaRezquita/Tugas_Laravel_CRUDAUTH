@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Siswa</h1>
    <!-- <a class="btn btn-primary mb-2" href="student/create" role="button">Add New Data</a>
    @if(session()->has('success'))
    <div class="alert alert-success col-lg-12" role="alert">
        {{session ('success')}}
    </div>
    @endif -->
    <table class="table">   
        <thead>
            <tr>
                <th>NIS</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->NIS }}</td>
                    <td>{{  $student->nama }}</td>
                    <td>{{ optional($student->kelas)->nama }}</td>                    
                    <td>{{  $student->alamat }}</td>
                    <td>
                        <a class="btn btn-primary" href="/student/detail/{{ $student->id }}">Detail</a> 
                       
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection