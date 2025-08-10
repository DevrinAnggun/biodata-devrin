@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow-lg border-0 rounded-4 p-4">
        <h2 class="text-center fw-bold mb-4" style="color: #000;">
            Anggota Divisi Konsumsi FLS2N SMA/SMK Se-Banyumas
        </h2>

        {{-- GAMBAR --}}
        <div class="d-flex justify-content-center mb-4">
            <img src="{{ asset('images/fls2n.jpg') }}" 
                 alt="Anggota Divisi Konsumsi FLS2N SMA/SMK Se-Banyumas" 
                 class="img-fluid rounded-4 shadow-sm" 
                 style="max-width:300px;">
        </div>

        {{-- DESKRIPSI --}}
        <p>
            Sebagai <strong>Anggota Divisi Konsumsi FLS2N SMA/SMK Se-Banyumas</strong>, 
            saya berperan aktif dalam memastikan kebutuhan konsumsi seluruh peserta, panitia, 
            dan tamu undangan terpenuhi dengan baik. Peran ini menuntut koordinasi yang matang 
            serta kemampuan mengatur logistik agar kegiatan berjalan lancar tanpa kendala.
        </p>

        <p>
            Dalam pelaksanaan kegiatan, saya terlibat langsung dalam proses perencanaan menu, 
            pengadaan konsumsi, hingga pendistribusian kepada seluruh peserta. Divisi konsumsi 
            memiliki peran vital untuk menjaga kenyamanan acara, sehingga diperlukan tanggung jawab 
            yang tinggi, ketelitian, serta kerja sama tim yang solid untuk memastikan semua kebutuhan 
            tercukupi tepat waktu.
        </p>

        <p>
            Melalui pengalaman ini, saya belajar banyak tentang pentingnya manajemen logistik, 
            komunikasi efektif, serta kemampuan menyelesaikan masalah di lapangan. Tugas di divisi konsumsi 
            memberikan pemahaman bahwa keberhasilan sebuah acara bukan hanya ditentukan oleh penampilan utama, 
            tetapi juga oleh detail kecil yang mendukung jalannya kegiatan secara menyeluruh.
        </p>

        {{-- TOMBOL KEMBALI --}}
        <div class="text-center mt-4">
            <a href="{{ url('/') }}#pengalaman" 
               class="btn btn-primary px-4 py-2 rounded-pill shadow">
                Kembali
            </a>
        </div>
    </div>
</div>
@endsection
