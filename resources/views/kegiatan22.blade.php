@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow-lg border-0 rounded-4 p-4">
        <h2 class="text-center text-dark fw-bold mb-4">
         Koordinator Divisi Konsumsi Pre-Competition
        </h2>


        <!-- GAMBAR -->
    <img src="{{ asset('images/precom.jpg') }}" 
         alt="Pentas Tari Tradisional Jamberskuy" 
         style="max-width:300px; margin:20px auto; display:block; border-radius:10px;">

        {{-- DESKRIPSI --}}
        <p>
            Sebagai <b>Koordinator Divisi Konsumsi</b> dalam kegiatan <b>Pre-Competition</b> yang dilaksanakan di 
            <b>Gedung Soetedja, Purwokerto</b>, saya bertanggung jawab penuh atas perencanaan, pengadaan, dan distribusi 
            konsumsi bagi peserta, panitia, dan tamu undangan. Saya memimpin 3 anggota tim untuk memastikan seluruh 
            kebutuhan konsumsi terpenuhi tepat waktu dengan kualitas yang baik.
        </p>

        <p>
            Tugas saya meliputi penyusunan anggaran konsumsi, memilih menu yang sesuai, melakukan koordinasi dengan vendor, 
            serta mengatur pembagian tugas anggota agar distribusi makanan dan minuman berjalan lancar. 
            Saya juga memastikan ketersediaan konsumsi sepanjang acara tanpa mengganggu jalannya rangkaian kegiatan.
        </p>

        <p>
            Dalam memimpin divisi ini, saya belajar mengatur strategi kerja, mengantisipasi kebutuhan mendadak, dan menjaga 
            komunikasi efektif antara panitia dan penyedia layanan konsumsi. Peran ini mengasah kemampuan manajemen tim, 
            kepemimpinan, serta ketelitian dalam pengelolaan logistik.
        </p>

        <p>
            Pengalaman sebagai <b>Koordinator Divisi Konsumsi</b> memberikan saya wawasan berharga tentang pentingnya 
            perencanaan detail, kerja sama tim yang solid, serta fleksibilitas dalam menghadapi perubahan situasi di lapangan.
        </p>

        {{-- TOMBOL BALIK --}}
        <div class="text-center mt-4">
            <a href="{{ url('/') }}#pengalaman" class="btn btn-primary px-4 py-2 rounded-pill shadow">
                Kembali
            </a>
        </div>
    </div>
</div>
@endsection
