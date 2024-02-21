
@extends('layouts.maindahs')

@section('content')

<div class="container" style= "width: 1100px;">
    <h1>Siswa</h1>
    <a class="btn btn-primary mb-2" href="/student2/create" role="button">Add New Data</a>
    @if(session()->has('success'))
    <div class="alert alert-success col-lg-12" role="alert">
        {{session ('success')}}
    </div>
    @endif
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
                    <a href="{{ route('student2.edit', ['id' => $student->id]) }}" class="btn btn-warning">Edit</a>
                        <a class="btn btn-primary" href="/student2/detail/{{ $student->id }}">Detail</a> 
                        <form method="POST" action="{{ route('student2.destroy', ['id' => $student->id]) }}"onsubmit="return confirmDelete()">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger" style="margin-top: 7px;">Delete</button>
                        </form>
                        <script>
                        function confirmDelete() {
                        return confirm("Apakah Anda yakin ingin menghapus data siswa ini?");}
                        </script>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection