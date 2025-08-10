@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow-lg border-0 rounded-4 p-4">

        {{-- JUDUL --}}
        <h2 class="text-center fw-bold mb-4" style="color: #000;">
            Staff Poster Kemahasiswaan
        </h2>

        {{-- GAMBAR --}}
        <div class="d-flex justify-content-center mb-4">
            <img src="{{ asset('images/pasang_poster.jpg') }}" 
                 alt="Staff Poster Kemahasiswaan" 
                 class="img-fluid rounded-4 shadow-sm"
                 style="max-width:300px;">
        </div>

        {{-- DESKRIPSI --}}
        <p>
            Sebagai <b>Staff Poster Kemahasiswaan</b>, saya bertugas memasang poster himbauan dan aturan mahasiswa 
            di lingkungan kos yang terdaftar dalam data resmi kemahasiswaan. Tugas ini mencakup pendataan lokasi, koordinasi 
            dengan pemilik kos, serta memastikan setiap poster terpasang di tempat yang strategis dan mudah terlihat oleh 
            penghuni.
        </p>

        <p>
            Dalam pelaksanaannya, saya memasang kurang lebih <b>40 poster</b> di berbagai kos sesuai daftar yang telah 
            diberikan. Pekerjaan ini dilaksanakan dengan profesional dan tepat waktu, serta mendapatkan imbalan sebesar 
            <b>Rp 250.000</b> sebagai bentuk apresiasi dari pihak kampus.
        </p>

        <p>
            Kegiatan ini memberikan pengalaman berharga dalam hal manajemen waktu, komunikasi lapangan, serta pemahaman 
            mengenai pentingnya penyebaran informasi visual yang efektif di lingkungan mahasiswa.
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
