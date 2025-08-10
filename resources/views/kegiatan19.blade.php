@extends('layouts.app')

@section('content')
<main style="padding: 40px; max-width: 900px; margin: auto; text-align: center;">

    <!-- JUDUL -->
    <h2 style="margin-bottom: 25px; font-size: 2rem; font-weight: 700; text-align:center; color:#111;">
        Student Staff Library TUP
    </h2>

    <!-- GAMBAR -->
    <img src="{{ asset('images/perpus.jpg') }}" 
         alt="Student Staff Library TUP" 
         style="max-width:300px; margin:20px auto; display:block; border-radius:10px;">

    <!-- DESKRIPSI -->
    <p style="margin-top:20px; text-align:justify; font-size:1rem; line-height:1.8;">
        Sebagai <strong>Student Staff Library TUP</strong>, saya bertugas melakukan proses 
        digitalisasi dokumen dengan cara memindai skripsi dari angkatan awal 
        untuk dijadikan arsip dalam bentuk <em>softfile</em>. Kegiatan ini bertujuan untuk 
        menjaga kelestarian dokumen akademik sekaligus memudahkan akses bagi mahasiswa dan staf perpustakaan.
    </p>

    <p style="margin-top:20px; text-align:justify; font-size:1rem; line-height:1.8;">
        Proses digitalisasi melibatkan penataan dokumen fisik, pemindaian dengan kualitas tinggi, 
        pengelolaan file, serta penamaan dan penyimpanan arsip secara sistematis. Hal ini memerlukan 
        ketelitian tinggi dan tanggung jawab penuh untuk memastikan dokumen tersimpan dengan aman 
        dan mudah ditemukan.
    </p>

    <p style="margin-top:20px; text-align:justify; font-size:1rem; line-height:1.8;">
        Pengalaman ini mengajarkan saya pentingnya pengarsipan digital dalam dunia akademik, 
        sekaligus meningkatkan keterampilan teknis dalam pengoperasian perangkat pemindaian 
        dan manajemen file digital.
    </p>
</main>
@endsection
