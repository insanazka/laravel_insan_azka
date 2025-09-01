@extends('layouts.app')

@section('content')
<h2>Tambah Pasien</h2>

<form action="{{ route('pasien.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control" value="{{ old('nama') }}" required>
    </div>

    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" name="alamat" class="form-control" value="{{ old('alamat') }}">
    </div>

    <div class="mb-3">
        <label for="telepon" class="form-label">No Telepon</label>
        <input type="text" name="telepon" class="form-control" value="{{ old('telepon') }}">
    </div>

    <div class="mb-3">
        <label for="rumah_sakit_id" class="form-label">Rumah Sakit</label>
        <select name="rumah_sakit_id" class="form-select" required>
            <option value="">-- Pilih Rumah Sakit --</option>
            @foreach($rumahsakit as $rs)
                <option value="{{ $rs->id }}" {{ old('rumah_sakit_id') == $rs->id ? 'selected' : '' }}>{{ $rs->nama }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{ route('pasien.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection
