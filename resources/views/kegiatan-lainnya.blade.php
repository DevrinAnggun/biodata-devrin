{{-- resources/views/kegiatan-lainnya.blade.php --}}
@extends('layouts.app')

@section('content')
<section class="detail-kegiatan">
    <div class="container text-center">
        <h2 class="mb-4">Daftar Pengalaman & Kegiatan Lainnya</h2>

        <div class="list-group text-start" style="max-width:800px; margin:0 auto;">

            <a href="{{ url('kegiatan1') }}" class="list-group-item list-group-item-action">
                Sekretaris JAMBERSKUY UKM SENI TEMANI
            </a>

            <a href="{{ url('kegiatan2') }}" class="list-group-item list-group-item-action">
                Anggota PDD SERBU (Software Engineering Berbuka)
            </a>

            <a href="{{ url('kegiatan3') }}" class="list-group-item list-group-item-action">
                Staff Humas LDK & MAKRAB SE 2023
            </a>

            <a href="{{ url('kegiatan4') }}" class="list-group-item list-group-item-action">
                Ketua Pelaksana Studi Banding HMSE ITTP X HMTI UNUGHA
            </a>

            <a href="{{ url('kegiatan5') }}" class="list-group-item list-group-item-action">
                Sekretaris DIESNATALIS SE Ke-7
            </a>

            
            <a href="{{ url('kegiatan6') }}" class="list-group-item list-group-item-action">
                Internship HMSE di Bidang Pengembangan Minat dan Bakat (PEMDA)
            </a>

            <a href="{{ url('kegiatan7') }}" class="list-group-item list-group-item-action">
                Kunjungan Industri Bersama FIF ITTP
            </a>

            <a href="{{ url('kegiatan8') }}" class="list-group-item list-group-item-action">
                CENTIVE 2023 ITTP
            </a>

            <a href="{{ url('kegiatan9') }}" class="list-group-item list-group-item-action">
                Anggota Divisi Konsumsi FLS2N SMA/SMK Se-Banyumas
            </a>


        </div>

        <div class="mt-4">
            <a href="{{ url('/') }}#pengalaman" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</section>
@endsection
