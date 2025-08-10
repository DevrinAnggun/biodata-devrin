{{-- resources/views/kegiatan_diesnatalis.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow-lg border-0 rounded-4 p-4">
        {{-- JUDUL --}}
        <h2 class="text-center fw-bold mb-4" style="color: #000;">
            Sekretaris DIESNATALIS SE Ke-7
        </h2>

        {{-- GAMBAR --}}
        <div class="d-flex justify-content-center mb-4">
            <img src="{{ asset('images/diesnatalis.jpg') }}" 
                 alt="DIESNATALIS SE Ke-7"
                 class="img-fluid rounded-4 shadow-sm"
                 style="max-width:500px;">
        </div>

        {{-- DESKRIPSI --}}
        <p>
            Sebagai <b>Sekretaris DIESNATALIS SE Ke-7</b>, saya bertanggung jawab dalam mendukung kelancaran administrasi 
            dan dokumentasi seluruh rangkaian acara perayaan ulang tahun Program Studi Software Engineering.
        </p>

        <p><b>Tugas utama saya mencakup:</b></p>
        <ul>
            <li>Menyusun agenda kegiatan mulai dari rapat persiapan hingga acara puncak.</li>
            <li>Mencatat notulen rapat dan mendistribusikannya kepada seluruh panitia.</li>
            <li>Mengelola arsip dokumen penting, seperti proposal, surat menyurat, dan laporan pertanggungjawaban.</li>
            <li>Mendukung koordinasi antar divisi, sehingga setiap divisi dapat melaksanakan tugasnya dengan efektif.</li>
            <li>Mengatur komunikasi internal agar informasi tersampaikan dengan jelas dan tepat waktu.</li>
        </ul>

        <p>
            Melalui peran ini, saya belajar mengelola administrasi acara besar, meningkatkan keterampilan komunikasi, 
            serta memastikan setiap detail acara terdokumentasi dengan baik. 
            Pengalaman ini juga melatih ketelitian, kedisiplinan, dan tanggung jawab 
            dalam menjalankan tugas sebagai bagian dari tim inti kepanitiaan.
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
