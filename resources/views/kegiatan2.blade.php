@extends('layouts.app') {{-- gunakan layout utama --}}

@section('content')
<section class="detail-kegiatan">
    <div class="container text-center">

        {{-- JUDUL --}}
        <h2 class="fw-bold mb-4">Anggota PDD SERBU (Software Engineering Berbuka)</h2>

        {{-- GAMBAR --}}
        <img src="{{ asset('images/serbu.jpg') }}" 
             alt="PDD SERBU" 
             class="img-fluid rounded shadow mb-4"
             style="max-width:450px;">

        {{-- DESKRIPSI --}}
        <div class="text-start" style="max-width: 800px; margin: 0 auto;">
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
                Tugas saya meliputi:
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
        </div>

        {{-- TOMBOL KEMBALI --}}
        <a href="{{ url('/') }}#pengalaman" class="btn btn-primary mt-4">Kembali</a>
    </div>
</section>
@endsection
