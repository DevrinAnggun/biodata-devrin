@extends('layouts.app')

@section('content')
<main style="padding: 40px; max-width: 900px; margin: auto; text-align: center;">

    <!-- JUDUL -->
    <h2 style="margin-bottom: 25px; font-size: 2rem; font-weight: 700; text-align:center; color:#111;">
        Kepala Departemen EKSOS (Eksternal & Sosial)
    </h2>

    <!-- GAMBAR -->
    <img src="{{ asset('images/kadep.jpg') }}" 
         alt="Kepala Departemen EKSOS (Eksternal & Sosial)" 
         style="max-width:600px; margin:20px auto; display:block; border-radius:10px;">

    <!-- DESKRIPSI -->
    <p style="margin-top:20px; text-align:justify; font-size:1rem; line-height:1.8;">
      Sebagai <strong>Kepala Departemen EKSOS</strong> di Himpunan Mahasiswa Software Engineering (HMSE), 
      saya bertanggung jawab memimpin dan mengoordinasikan berbagai kegiatan yang berfokus pada hubungan eksternal 
      serta kegiatan sosial. Peran ini mencakup perencanaan, pengawasan, dan evaluasi program kerja agar dapat berjalan 
      sesuai tujuan organisasi.
    </p>

    <p style="margin-top:20px; text-align:justify; font-size:1rem; line-height:1.8;">
      Dalam menjalankan tugas, saya memimpin tim untuk menjalin kerja sama dengan pihak luar, seperti lembaga pendidikan, 
      organisasi masyarakat, maupun sponsor, sekaligus menginisiasi kegiatan sosial yang bermanfaat bagi masyarakat. 
      Kepemimpinan ini menuntut keterampilan komunikasi, negosiasi, serta kemampuan manajemen yang baik.
    </p>

    <p style="margin-top:20px; text-align:justify; font-size:1rem; line-height:1.8;">
      Melalui pengalaman ini, saya belajar bagaimana memotivasi tim, menyelesaikan masalah secara efektif, 
      dan memastikan bahwa setiap program membawa dampak positif baik bagi anggota himpunan maupun masyarakat luas.
    </p>
</main>
@endsection
