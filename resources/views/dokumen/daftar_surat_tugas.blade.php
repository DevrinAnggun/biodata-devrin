@extends('layouts.app')

@section('content')
<div class="container mt-3 mb-5">
    <h2 class="text-center">Daftar Surat Tugas</h2>
    <div class="row">
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body text-center">
                    <h5>Surat Tugas Mahasiswa Sosialisasi Penerima Beasiswa</h5>
                    <a href="{{ asset('surat/Surat Tugas Mahasiswa Sosialisasi Penerima Beasiswa.pdf') }}" target="_blank" class="btn btn-primary">Lihat PDF</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
