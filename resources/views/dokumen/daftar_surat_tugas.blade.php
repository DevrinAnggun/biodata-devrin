@extends('layouts.app')

@section('content')
<div class="container mt-3 mb-5 min-vh-100">
    <h2 class="text-center mb-4">Surat Tugas</h2>
    <div class="row">
        @php
            $suratList = [
                [
                    'judul' => 'Kegiatan Sosialisasi BPJS Kesehatan',
                    'file'  => 'Kegiatan_Sosialisasi_BPJS_Kesehatan.pdf'
                ],
                [
                    'judul' => 'Sosialisasi Penerima Beasiswa',
                    'file'  => 'Sosialisasi_Penerima_Beasiswa.pdf'
                ],
                [
                    'judul' => 'Koordinator Lapangan',
                    'file'  => 'Koordinator_Lapangan.pdf'
                ],
                [
                    'judul' => 'Seminar Nasional',
                    'file'  => 'Seminar_Nasional.pdf'
                ],
                [
                    'judul' => 'Workshop Teknologi',
                    'file'  => 'Workshop_Teknologi.pdf'
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
