@extends('layouts.app')

@section('content')
<main style="padding: 40px; max-width: 900px; margin: auto; text-align: center;">

    <!-- JUDUL -->
    <h2 style="margin-bottom: 25px; font-size: 2rem; font-weight: 700; text-align:center; color:#111;">
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
</main>
@endsection
