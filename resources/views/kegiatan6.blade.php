@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow-lg border-0 rounded-4 p-4">
        <h2 class="text-center fw-bold mb-4" style="color: #000;">
            Internship HMSE Bidang PEMDA
        </h2>

        {{-- GAMBAR TENGAH --}}
        <div class="d-flex justify-content-center mb-4">
            <img src="{{ asset('images/intern.jpg') }}" 
                 alt="Internship HMSE Bidang PEMDA" 
                 class="img-fluid rounded-4 shadow-sm" 
                 style="max-width:500px;">
        </div>

        {{-- DESKRIPSI --}}
        <p>
            Sebagai <b>Internship HMSE di Bidang Pengembangan Minat dan Bakat (PEMDA)</b>, 
            saya berperan dalam mendukung berbagai program kerja yang berfokus pada 
            pengembangan potensi mahasiswa Software Engineering.
        </p>

        <p>
            Tugas saya meliputi:
        </p>
        <ul>
            <li>Membantu menyusun dan menyiapkan agenda kegiatan di bidang PEMDA.</li>
            <li>Mendukung pelaksanaan event yang berkaitan dengan minat dan bakat mahasiswa.</li>
            <li>Berkoordinasi dengan divisi lain untuk memastikan kelancaran acara.</li>
            <li>Menyusun laporan kegiatan serta dokumentasi sebagai bentuk pertanggungjawaban.</li>
        </ul>

        <p>
            Melalui pengalaman ini, saya belajar tentang pentingnya kerja tim, manajemen acara, 
            serta memahami lebih dalam bagaimana sebuah organisasi mahasiswa merancang program 
            yang bermanfaat bagi anggotanya. Internship ini menjadi kesempatan berharga untuk 
            mengembangkan keterampilan komunikasi, kepemimpinan, dan koordinasi.
        </p>

        {{-- TOMBOL BALIK --}}
        <div class="text-center mt-4">
            <a href="{{ url('/') }}#pengalaman" 
               class="btn btn-primary px-4 py-2 rounded-pill shadow">
                Kembali
            </a>
        </div>
    </div>
</div>
@endsection
