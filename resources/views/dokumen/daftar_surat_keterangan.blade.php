@extends('layouts.app')

@section('content')
<div class="container mt-3 mb-5">
    <h2 class="text-center">Daftar Surat Keterangan Panitia</h2>
    <div class="row">
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body text-center">
                    <h5>Surat Tugas Mahasiswa Jamberskuy</h5>
                    <a href="{{ asset('surat/Surat Tugas Mahasiswa Jamberskuy.pdf') }}" target="_blank" class="btn btn-success">Lihat PDF</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
