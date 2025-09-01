@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Tambah Rumah Sakit</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('rumah-sakit.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Alamat</label>
                <textarea name="alamat" class="form-control" required></textarea>
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Telepon</label>
                <input type="text" name="telepon" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ route('rumah-sakit.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection
