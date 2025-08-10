@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow-lg border-0 rounded-4 p-4">
    <h2 class="text-center fw-bold mb-4" style="color: #000;">
        SERABI (Software Engineering Berbagai) - Purbalingga
    </h2>

    <!-- GAMBAR -->
    <img src="{{ asset('images/serabi.jpg') }}" 
         alt="SERABI (Software Engineering Berbagai) di Purbalingga" 
         style="max-width:300px; margin:20px auto; display:block; border-radius:10px;">

    <!-- DESKRIPSI -->
    <p style="margin-top:20px; text-align:justify; font-size:1rem; line-height:1.8;">
      <strong>SERABI (Software Engineering Berbagai)</strong> adalah kegiatan berbagi ilmu dan keterampilan 
      di bidang <em>Software Engineering</em> yang dilaksanakan di wilayah Purbalingga, khususnya di lingkungan 
      sekolah dasar (SD) dan kelurahan/desa. Kegiatan ini bertujuan untuk memperkenalkan teknologi informasi 
      dan pemrograman kepada masyarakat agar mampu mengenal dan memanfaatkannya dalam kehidupan sehari-hari.
    </p>

    <p style="margin-top:20px; text-align:justify; font-size:1rem; line-height:1.8;">
      Selama kegiatan berlangsung, tim memberikan materi mulai dari pengenalan dasar komputer, penggunaan 
      perangkat lunak, hingga praktik membuat aplikasi sederhana. Metode yang digunakan bersifat interaktif 
      melalui penjelasan teori, demonstrasi langsung, dan sesi tanya jawab, sehingga peserta dapat memahami 
      materi dengan mudah dan menyenangkan.
    </p>

    <p style="margin-top:20px; text-align:justify; font-size:1rem; line-height:1.8;">
      Selain menjadi sarana transfer ilmu, <strong>SERABI</strong> juga mempererat hubungan antara praktisi 
      teknologi dengan masyarakat Purbalingga. Diharapkan melalui kegiatan ini, peserta tidak hanya mendapatkan 
      keterampilan baru, tetapi juga termotivasi untuk terus belajar, berinovasi, dan memanfaatkan teknologi 
      demi kemajuan daerah.
    </p>
    {{-- TOMBOL KEMBALI --}}
        <div class="text-center mt-4">
            <a href="{{ url('/') }}#pengalaman" 
               class="btn btn-primary px-4 py-2 rounded-pill shadow">
                Kembali
            </a>
        </div>
</main>
@endsection
