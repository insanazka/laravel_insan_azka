@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h1 class="my-4">Dashboard</h1>

            <div class="row">
                <div class="col-md-6">
                    <div class="card text-white bg-primary mb-3 shadow">
                        <div class="card-body">
                            <h5 class="card-title">Jumlah Rumah Sakit</h5>
                            <p class="card-text display-4">{{ $jumlahRumahSakit }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card text-white bg-success mb-3 shadow">
                        <div class="card-body">
                            <h5 class="card-title">Jumlah Pasien</h5>
                            <p class="card-text display-4">{{ $jumlahPasien }}</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
