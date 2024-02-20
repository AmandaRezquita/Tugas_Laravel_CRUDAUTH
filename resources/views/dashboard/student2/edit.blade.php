@extends('layouts.maindahs')

@section('content')
<div class="container">
    <h1>Edit Data</h1>

<form method="post" action="/student2/{{ $student->id }}/update">    
    @csrf
        <div class="mb-3">
            <label for="nis" class="form-label">NIS</label>
            <input type="number" class="form-control" id="nis" name="nis" value="{{ $student->NIS }}" required>
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $student->nama }}" required>
            <div class="form-group">
    <label for="kelas_id">Kelas:</label>
    <select class="form-control" required id="kelas_id" name="kelas_id">
        @foreach($kelas as $kelasItem)
            <option name="kelas_id" value="{{ $kelasItem->id }}" {{ $student->kelas_id == $kelasItem->id ? 'selected' : '' }}>
                {{ $kelasItem->nama }}
            </option>
        @endforeach
    </select>
</div>

            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $student->alamat }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
