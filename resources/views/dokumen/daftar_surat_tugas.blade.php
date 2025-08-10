@extends('layouts.app')

@section('content')
<div class="container mt-3 mb-5 min-vh-100">
    <h2 class="text-center mb-4">Daftar Surat Tugas</h2>
    <div class="row">
        @php
            $suratList = [
                [
                    'judul' => 'Surat Tugas Mahasiswa Jamberskuy',
                    'file'  => 'Surat Tugas Mahasiswa Jamberskuy.pdf'
                ],
                [
                    'judul' => 'Surat Tugas Mahasiswa Kegiatan Sosisaliasi BPJS Kesehatan',
                    'file'  => 'Surat Tugas Mahasiswa Kegiatan Sosisaliasi BPJS Kesehatan (update).pdf'
                ],
                [
                    'judul' => 'Surat Tugas Mahasiswa Sosialisasi Penerima Beasiswa',
                    'file'  => 'Surat Tugas Panitia Kegiatan Kampus.pdf'
                ],
                [
                    'judul' => 'Surat Tugas Koordinator Lapangan',
                    'file'  => 'Surat Tugas Koordinator Lapangan.pdf'
                ],
                [
                    'judul' => 'Surat Tugas Seminar Nasional',
                    'file'  => 'Surat Tugas Seminar Nasional.pdf'
                ],
                [
                    'judul' => 'Surat Tugas Workshop Teknologi',
                    'file'  => 'Surat Tugas Workshop Teknologi.pdf'
                ],
            ];
        @endphp

        @foreach($suratList as $surat)
            <div class="col-md-3 mb-3">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <h6 class="text-dark border border-primary p-2">{{ $surat['judul'] }}</h6>
                        <a href="{{ asset('surat/' . $surat['file']) }}" 
                           target="_blank" 
                           class="btn btn-primary btn-sm mt-2">
                           Lihat PDF
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
