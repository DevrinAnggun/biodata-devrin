@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow-lg border-0 rounded-4 p-4">
        <h2 class="text-center fw-bold mb-4" style="color: #000;">
            Staff Humas LDK & MAKRAB SE 2023
        </h2>

        {{-- GAMBAR TENGAH --}}
        <div class="d-flex justify-content-center mb-4">
            <img src="{{ asset('images/humas.jpg') }}" 
                 alt="Staff Humas LDK & MAKRAB SE 2023"
                 class="img-fluid rounded-4 shadow-sm"
                 style="max-width:500px;">
        </div>

        {{-- DESKRIPSI --}}
        <p>
            Sebagai <b>Staff Humas</b> dalam kegiatan <b>Latihan Dasar Kepemimpinan (LDK)</b> 
            dan <b>Malam Keakraban (MAKRAB) Software Engineering 2023</b>, 
            saya berperan dalam menjalin komunikasi serta membangun hubungan baik antara panitia, peserta, dan pihak eksternal.
        </p>

        <p>
            Tugas utama saya meliputi publikasi acara, koordinasi informasi kepada peserta, 
            serta menjaga citra positif kegiatan melalui komunikasi yang efektif. 
            Saya juga memastikan seluruh informasi terkait rundown acara, teknis kegiatan, 
            serta kebutuhan peserta dapat tersampaikan dengan baik.
        </p>

        <p>
            Dengan menjadi bagian dari divisi Humas, saya belajar pentingnya keterampilan komunikasi, 
            koordinasi antar tim, serta cara menyampaikan pesan dengan jelas dan persuasif. 
            Pengalaman ini sangat berharga untuk mengasah soft skill sekaligus membangun relasi positif.
        </p>

        {{-- TOMBOL KEMBALI --}}
        <div class="text-center mt-4">
            <a href="{{ url('/') }}#pengalaman" class="btn btn-primary px-4 py-2 rounded-pill shadow">
                Kembali
            </a>
        </div>
    </div>
</div>
@endsection
