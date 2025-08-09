@extends('layouts.app')

@section('content')
<main style="padding: 40px; max-width: 900px; margin: auto; text-align: center;">

    <!-- JUDUL -->
    <h2 style="margin-bottom: 25px; font-size: 2rem; font-weight: 700; text-align:center; color:#111;">
        Anggota EKSOS (Eksternal & Sosial) HMSE
    </h2>

    <!-- GAMBAR -->
    <img src="{{ asset('images/eksos.jpg') }}" 
         alt="Anggota EKSOS (Eksternal & Sosial) HMSE" 
         style="max-width:600px; margin:20px auto; display:block; border-radius:10px;">

    <!-- DESKRIPSI -->
    <p style="margin-top:20px; text-align:justify; font-size:1rem; line-height:1.8;">
      Sebagai <strong>Anggota EKSOS (Eksternal & Sosial) HMSE</strong>, saya bertugas menjalin hubungan 
      baik dengan pihak eksternal seperti organisasi mahasiswa lain, lembaga kampus, maupun mitra di luar 
      kampus. Peran ini juga mencakup kegiatan sosial yang melibatkan kepedulian terhadap masyarakat melalui 
      berbagai program dan aksi nyata.
    </p>

    <p style="margin-top:20px; text-align:justify; font-size:1rem; line-height:1.8;">
      Dalam menjalankan tugas, saya aktif berpartisipasi dalam perencanaan, koordinasi, dan pelaksanaan 
      kegiatan sosial, mulai dari bakti sosial, penggalangan dana, hingga kolaborasi lintas organisasi. 
      Setiap kegiatan dilakukan dengan tujuan memperluas jaringan, mempererat hubungan, serta membawa 
      dampak positif bagi masyarakat.
    </p>

    <p style="margin-top:20px; text-align:justify; font-size:1rem; line-height:1.8;">
      Melalui pengalaman di divisi EKSOS, saya belajar tentang pentingnya komunikasi efektif, negosiasi, 
      kerja sama tim, serta kepekaan sosial. Tugas ini memberikan kesempatan untuk mengembangkan keterampilan 
      interpersonal sekaligus berkontribusi nyata dalam membangun hubungan harmonis antara HMSE dan lingkungan 
      sekitar.
    </p>
</main>
@endsection
