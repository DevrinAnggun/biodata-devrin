@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow-lg border-0 rounded-4 p-4">
        <h2 class="text-center fw-bold mb-4" style="color: #000;">
            Anggota PDD SERBU (Software Engineering Berbuka)
        </h2>

        {{-- GAMBAR TENGAH --}}
        <div class="d-flex justify-content-center mb-4">
            <img src="{{ asset('images/serbu.jpg') }}" alt="PDD SERBU" 
                 class="img-fluid rounded-4 shadow-sm" style="max-width:500px;">
        </div>

        {{-- DESKRIPSI --}}
        <p>
            Sebagai <b>Anggota PDD (Publikasi, Dokumentasi, dan Desain) SERBU</b> atau 
            <b>Software Engineering Berbuka</b>, saya berperan aktif dalam mengelola informasi 
            serta mendukung kebutuhan publikasi acara. Divisi PDD memiliki tanggung jawab utama 
            dalam menyajikan informasi kegiatan secara menarik dan komunikatif.
        </p>

        <p>
            Pada kegiatan <b>SERBU</b>, yaitu acara berbuka bersama mahasiswa Software Engineering, 
            saya berkontribusi dalam membuat konten publikasi, mendokumentasikan momen-momen kegiatan, 
            serta merancang desain visual yang mendukung citra positif organisasi. 
            Mulai dari pembuatan poster, feed media sosial, hingga dokumentasi foto dan video saat acara berlangsung.
        </p>

        <p>
            Beberapa tugas yang saya kerjakan di divisi PDD antara lain:
            <ul>
                <li><b>Merancang poster dan konten digital</b> untuk promosi kegiatan.</li>
                <li><b>Mengelola dokumentasi</b> berupa foto dan video kegiatan.</li>
                <li><b>Menyusun laporan publikasi</b> setelah acara selesai sebagai arsip organisasi.</li>
                <li><b>Bekerja sama dengan divisi lain</b> untuk memastikan informasi tersampaikan dengan baik.</li>
            </ul>
        </p>

        <p>
            Dengan bergabung di divisi PDD, saya belajar banyak tentang pentingnya komunikasi visual, 
            konsistensi branding, serta kerja sama tim yang solid. Pengalaman ini semakin memperkaya kemampuan saya 
            di bidang desain grafis, publikasi digital, serta pengelolaan dokumentasi acara.
        </p>

        <p>
            Menjadi bagian dari <b>SERBU</b> memberikan pengalaman berharga, karena saya tidak hanya ikut meramaikan kegiatan, 
            tetapi juga mendukung keberhasilan acara dari sisi publikasi dan dokumentasi, sehingga setiap momen kebersamaan 
            dapat dikenang dan disebarluaskan dengan baik.
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
