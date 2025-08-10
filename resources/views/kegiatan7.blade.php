@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow-lg border-0 rounded-4 p-4">
        <h2 class="text-center fw-bold mb-4" style="color: #000;">
            Kunjungan Industri Bersama FIF ITTP
        </h2>

        {{-- GAMBAR TENGAH --}}
        <div class="d-flex justify-content-center mb-4">
            <img src="{{ asset('images/KI.jpg') }}" 
                 alt="Kunjungan Industri" 
                 class="img-fluid rounded-4 shadow-sm" 
                 style="max-width:500px;">
        </div>

        {{-- DESKRIPSI --}}
        <p>
            Sebagai <strong>Ketua Divisi Pemasaran</strong> pada kegiatan 
            <strong>Kunjungan Industri Bersama FIF ITTP</strong>, 
            saya bertanggung jawab dalam merancang serta mengelola strategi promosi 
            agar kegiatan ini dapat diketahui secara luas oleh mahasiswa dan pihak terkait. 
            Peran ini mencakup penyusunan konsep publikasi, penyebaran informasi melalui media sosial, 
            hingga memastikan pesan kegiatan tersampaikan secara menarik dan komunikatif.
        </p>

        <p>
            Dalam menjalankan tugas, saya memimpin tim pemasaran untuk berkolaborasi dengan divisi lain, 
            seperti dokumentasi dan humas, sehingga strategi komunikasi berjalan selaras. 
            Kami membuat materi publikasi, menyusun jadwal distribusi konten, 
            serta menjaga interaksi yang baik dengan audiens agar tercipta antusiasme yang tinggi 
            dalam mengikuti kegiatan ini.
        </p>

        <p>
            Melalui pengalaman ini, saya belajar pentingnya kepemimpinan, koordinasi, dan kreativitas 
            dalam mengelola tim. Selain meningkatkan keterampilan dalam bidang pemasaran, 
            saya juga memahami bagaimana strategi komunikasi dapat memengaruhi kesuksesan acara. 
            Peran ini menjadi kesempatan berharga untuk mengasah kemampuan manajemen 
            serta memberi kontribusi nyata terhadap keberhasilan 
            <strong>Kunjungan Industri Bersama FIF ITTP</strong>.
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
