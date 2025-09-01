@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Data Rumah Sakit</h2>
    <a href="{{ route('rumah-sakit.create') }}" class="btn btn-primary">Create</a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered" id="rumahSakitTable">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Telepon</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse($rumahsakit as $rs)
        <tr id="row-{{ $rs->id }}">
            <td>{{ $loop->iteration }}</td>
            <td>{{ $rs->nama }}</td>
            <td>{{ $rs->alamat }}</td>
            <td>{{ $rs->email }}</td>
            <td>{{ $rs->telepon }}</td>
            <td>
                <a href="{{ route('rumah-sakit.edit', $rs->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <button class="btn btn-sm btn-danger deleteBtn" data-id="{{ $rs->id }}">Hapus</button>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="6" class="text-center">Belum ada data</td>
        </tr>
        @endforelse
    </tbody>
</table>

<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
    <div id="deleteToast" class="toast align-items-center text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body" id="toastBody">
                Data berhasil dihapus.
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function() {
    $('.deleteBtn').click(function() {
        let id = $(this).data('id');  
        let btn = $(this);
        if(confirm('Apakah Anda yakin ingin menghapus data ini?')) {
            btn.prop('disabled', true); 
            $.ajax({
                url: "/rumah-sakit/" + id,
                type: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    _method: 'DELETE'
                },
                success: function(response) {
                    $('#row-' + id).fadeOut(500, function() { $(this).remove(); });
                    btn.prop('disabled', false);

                    let toastEl = document.getElementById('deleteToast');
                    let toast = new bootstrap.Toast(toastEl);
                    $('#toastBody').text('Data berhasil dihapus.');
                    toast.show();
                },
                error: function(xhr) {
                    btn.prop('disabled', false);
                    let toastEl = document.getElementById('deleteToast');
                    let toast = new bootstrap.Toast(toastEl);
                    $('#toastBody').text('Terjadi kesalahan.');
                    toastEl.classList.remove('text-bg-success');
                    toastEl.classList.add('text-bg-danger');
                    toast.show();
                }
            });
        }
    });
});
</script>

@endsection
