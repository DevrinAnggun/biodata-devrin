{{-- resources/views/kegiatan_kadep_eksos.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow-lg border-0 rounded-4 p-4">

        {{-- JUDUL --}}
        <h2 class="text-center fw-bold mb-4" style="color: #000;">
            Kepala Departemen EKSOS (Eksternal & Sosial)
        </h2>

        {{-- GAMBAR --}}
        <div class="d-flex justify-content-center mb-4">
            <img src="{{ asset('images/kadep.jpg') }}" 
                 alt="Kepala Departemen EKSOS" 
                 class="img-fluid rounded-4 shadow-sm"
                 style="max-width:600px;">
        </div>

        {{-- DESKRIPSI --}}
        <p>
            Sebagai <b>Kepala Departemen EKSOS (Eksternal & Sosial)</b>, saya bertanggung jawab memimpin, 
            mengarahkan, dan mengoordinasikan seluruh program kerja yang berkaitan dengan hubungan eksternal 
            serta kegiatan sosial di lingkungan organisasi. Posisi ini menuntut kemampuan kepemimpinan yang kuat, 
            komunikasi yang efektif, serta kepekaan terhadap kebutuhan masyarakat sekitar.
        </p>

        <p>
            Dalam menjalankan peran ini, saya mengelola tim untuk menjalin relasi dengan pihak eksternal seperti 
            organisasi mahasiswa lain, lembaga pemerintahan, maupun komunitas sosial. Selain itu, saya memimpin 
            pelaksanaan kegiatan sosial seperti bakti sosial, kunjungan ke panti, dan program berbasis pengabdian 
            masyarakat, guna memberikan kontribusi nyata bagi lingkungan sekitar.
        </p>

        <p>
            Pengalaman ini mengajarkan saya untuk berpikir strategis, membangun jaringan kerjasama yang luas, 
            serta memastikan setiap kegiatan dapat memberikan dampak positif. Sebagai kepala departemen, saya 
            juga bertanggung jawab dalam memotivasi tim, membagi tugas secara efektif, dan memastikan program 
            kerja berjalan sesuai target.
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
