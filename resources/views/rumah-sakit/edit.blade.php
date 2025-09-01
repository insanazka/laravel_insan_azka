@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Edit Rumah Sakit</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('rumah-sakit.update', $rumahSakit->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" value="{{ $rumahSakit->nama }}" required>
            </div>
            <div class="mb-3">
                <label>Alamat</label>
                <textarea name="alamat" class="form-control" required>{{ $rumahSakit->alamat }}</textarea>
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="{{ $rumahSakit->email }}" required>
            </div>
            <div class="mb-3">
                <label>Telepon</label>
                <input type="text" name="telepon" class="form-control" value="{{ $rumahSakit->telepon }}" required>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('rumah-sakit.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection
