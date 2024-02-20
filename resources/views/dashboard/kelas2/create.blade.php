
@extends('layouts.maindahs')

@section('content')
<div class="container">
    <h1>Create Kelas</h1>

    <form method="post" action="{{ route('kelas2.store') }}">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection
