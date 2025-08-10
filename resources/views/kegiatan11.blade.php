{{-- resources/views/kegiatan_pameran.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow-lg border-0 rounded-4 p-4">
        {{-- JUDUL --}}
        <h2 class="text-center fw-bold mb-4" style="color: #000;">
            Pameran Software Engineering 2024
        </h2>

        {{-- GAMBAR --}}
        <div class="d-flex justify-content-center mb-4">
            <img src="{{ asset('images/donat.jpg') }}" 
                 alt="Pameran Software Engineering 2024"
                 class="img-fluid rounded-4 shadow-sm"
                 style="max-width:400px;">
        </div>

        {{-- DESKRIPSI --}}
        <p>
            Pada kegiatan <b>Pameran Software Engineering 2024</b>, saya bersama kelompok terlibat aktif 
            dalam menjalankan proyek kewirausahaan untuk mata kuliah <i>Manajemen Bisnis</i>. 
            Kami memutuskan untuk berjualan donat sebagai produk utama, menggabungkan konsep pemasaran kreatif 
            dengan strategi penjualan langsung kepada pengunjung pameran.
        </p>

        <p>
            Proses ini melibatkan perencanaan yang matang mulai dari penentuan resep, perhitungan biaya produksi, 
            penetapan harga, hingga strategi promosi. Kami juga membagi peran di dalam tim untuk memastikan semua 
            aspek berjalan lancar, mulai dari produksi, pelayanan pelanggan, hingga pengelolaan keuangan.
        </p>

        <p>
            Melalui pengalaman ini, saya belajar secara langsung mengenai praktik kewirausahaan, pentingnya kerja 
            sama tim, serta bagaimana beradaptasi dengan kondisi pasar dan kebutuhan konsumen. 
            Kegiatan ini tidak hanya memberikan pengalaman bisnis, tetapi juga mengasah kemampuan komunikasi 
            dan pelayanan yang baik kepada pelanggan.
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
