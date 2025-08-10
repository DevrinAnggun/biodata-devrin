{{-- resources/views/kegiatan_ldk_makrab2024.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow-lg border-0 rounded-4 p-4">

        {{-- JUDUL --}}
        <h2 class="text-center fw-bold mb-4" style="color: #000;">
            Panitia LDK & MAKRAB 2024 - Anggota Divisi Acara
        </h2>

        {{-- GAMBAR --}}
        <div class="d-flex justify-content-center mb-4">
            <img src="{{ asset('images/ldk2024.jpg') }}" 
                 alt="Panitia LDK & MAKRAB 2024 - Anggota Divisi Acara" 
                 class="img-fluid rounded-4 shadow-sm"
                 style="max-width:300px;">
        </div>

        {{-- DESKRIPSI --}}
        <p>
            Sebagai <b>Anggota Divisi Acara</b> dalam kegiatan <b>Latihan Dasar Kepemimpinan (LDK)</b> 
            dan <b>Malam Keakraban (MAKRAB) 2024</b>, saya berperan dalam merancang, menyiapkan, dan memastikan 
            seluruh rangkaian acara berjalan sesuai rencana. Peran ini membutuhkan kreativitas, koordinasi 
            yang baik, serta kemampuan mengatur alur kegiatan agar peserta mendapatkan pengalaman terbaik.
        </p>

        <p>
            Saya terlibat dalam penyusunan rundown acara, pembuatan konsep kegiatan, dan memastikan setiap sesi 
            memiliki alur yang jelas dan menarik. Selain itu, saya turut mengoordinasikan teknis pelaksanaan 
            bersama tim lain untuk memastikan acara berjalan lancar dari awal hingga akhir.
        </p>

        <p>
            Pengalaman ini mengajarkan saya pentingnya kerja sama tim, manajemen waktu, dan kemampuan beradaptasi 
            terhadap perubahan di lapangan. Sebagai bagian dari divisi acara, saya belajar bahwa kesuksesan kegiatan 
            bergantung pada detail dan persiapan yang matang.
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
