@extends('layouts.app')

@section('content')
<main style="padding: 40px; max-width: 900px; margin: auto; text-align: center;">

    <!-- JUDUL -->
    <h2 style="margin-bottom: 25px; font-size: 2rem; font-weight: 700; text-align:center; color:#111;">
        Pameran Software Engineering 2024
    </h2>

    <!-- GAMBAR -->
    <img src="{{ asset('images/donat.jpg') }}" 
         alt="Pameran Software Engineering 2024" 
         style="max-width:300px; margin:20px auto; display:block; border-radius:10px;">

    <!-- DESKRIPSI -->
    <p style="margin-top:20px; text-align:justify; font-size:1rem; line-height:1.8;">
      Pada kegiatan <strong>Pameran Software Engineering 2024</strong>, saya bersama kelompok terlibat aktif 
      dalam menjalankan proyek kewirausahaan untuk mata kuliah <em>Manajemen Bisnis</em>. Kami memutuskan untuk 
      berjualan donat sebagai produk utama, menggabungkan konsep pemasaran kreatif dengan strategi penjualan 
      langsung kepada pengunjung pameran.
    </p>

    <p style="margin-top:20px; text-align:justify; font-size:1rem; line-height:1.8;">
      Proses ini melibatkan perencanaan yang matang mulai dari penentuan resep, perhitungan biaya produksi, 
      penetapan harga, hingga strategi promosi. Kami juga membagi peran di dalam tim untuk memastikan semua 
      aspek berjalan lancar, mulai dari produksi, pelayanan pelanggan, hingga pengelolaan keuangan.
    </p>

    <p style="margin-top:20px; text-align:justify; font-size:1rem; line-height:1.8;">
      Melalui pengalaman ini, saya belajar secara langsung mengenai praktik kewirausahaan, pentingnya kerja 
      sama tim, serta bagaimana beradaptasi dengan kondisi pasar dan kebutuhan konsumen. Kegiatan ini tidak 
      hanya memberikan pengalaman bisnis, tetapi juga mengasah kemampuan komunikasi dan pelayanan yang baik 
      kepada pelanggan.
    </p>
</main>
@endsection
