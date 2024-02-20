@extends('layouts.maindahs')

@section('content')
    <h1 class="text-center">New Data Student</h1>

    <div class="col-lg-6 mx-auto">
        <form method="post" action="/student2/add" style="padding: 20px;">
            @csrf
            <div class="mb-3">
                <label for="nis" class="form-label" style="margin-bottom: 5px; font-weight: bold;">NIS</label>
                <input type="number" class="form-control" id="NIS" name="NIS" value="{{ old('NIS')}}" required style="margin-bottom: 15px;">

                <label for="nama" class="form-label" style="margin-bottom: 5px; font-weight: bold;">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama')}}" required style="margin-bottom: 15px;">

                <div class="form-group">
                    <label for="kelas">Kelas:</label>
                    <select class="form-select" name="kelas_id" id="">
                        @foreach ($kelas as $kelasItem)
                        <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama }}</option>
                        @endforeach
                    </select>
                </div>

                <label for="alamat" class="form-label" style="margin-bottom: 5px; font-weight: bold;">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat')}}" required style="margin-bottom: 15px;">
            </div>

            <button type="submit" class="btn btn-primary" style="margin-bottom: 15px;">Add</button>
        </form>
    </div>
@endsection
