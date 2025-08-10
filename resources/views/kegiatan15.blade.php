@extends('layouts.app')

@section('content')
<main style="padding: 40px; max-width: 900px; margin: auto; text-align: center;">

    <!-- JUDUL -->
    <h2 style="margin-bottom: 25px; font-size: 2rem; font-weight: 700; text-align:center; color:#111;">
        Kepala Departemen EKSOS (Eksternal & Sosial)
    </h2>

    <!-- GAMBAR -->
    <img src="{{ asset('images/kadep.jpg') }}" 
         alt="Kepala Departemen EKSOS" 
         style="max-width:600px; margin:20px auto; display:block; border-radius:10px;">

    <!-- DESKRIPSI -->
    <p style="margin-top:20px; text-align:justify; font-size:1rem; line-height:1.8;">
        Sebagai <strong>Kepala Departemen EKSOS (Eksternal & Sosial)</strong>, saya bertanggung jawab memimpin, 
        mengarahkan, dan mengoordinasikan seluruh program kerja yang berkaitan dengan hubungan eksternal 
        serta kegiatan sosial di lingkungan organisasi. Posisi ini menuntut kemampuan kepemimpinan yang kuat, 
        komunikasi yang efektif, serta kepekaan terhadap kebutuhan masyarakat sekitar.
    </p>

    <p style="margin-top:20px; text-align:justify; font-size:1rem; line-height:1.8;">
        Dalam menjalankan peran ini, saya mengelola tim untuk menjalin relasi dengan pihak eksternal seperti 
        organisasi mahasiswa lain, lembaga pemerintahan, maupun komunitas sosial. Selain itu, saya memimpin 
        pelaksanaan kegiatan sosial seperti bakti sosial, kunjungan ke panti, dan program berbasis pengabdian 
        masyarakat, guna memberikan kontribusi nyata bagi lingkungan sekitar.
    </p>

    <p style="margin-top:20px; text-align:justify; font-size:1rem; line-height:1.8;">
        Pengalaman ini mengajarkan saya untuk berpikir strategis, membangun jaringan kerjasama yang luas, 
        serta memastikan setiap kegiatan dapat memberikan dampak positif. Sebagai kepala departemen, saya 
        juga bertanggung jawab dalam memotivasi tim, membagi tugas secara efektif, dan memastikan program 
        kerja berjalan sesuai target.
    </p>
</main>
@endsection
