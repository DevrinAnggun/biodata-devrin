@extends('layouts.app')

@section('content')
<section class="detail-kegiatan">
    <div class="container text-center">
        <h2>Internship HMSE Bidang PEMDA</h2>
        
        {{-- GAMBAR --}}
        <img src="{{ asset('images/intern.jpg') }}" alt="Internship HMSE Bidang PEMDA" 
             style="max-width:400px; border-radius:8px; margin:20px auto; display:block;">
        
        {{-- DESKRIPSI --}}
        <div class="text-start mt-4" style="max-width: 800px; margin: 0 auto;">
            <p>
                Sebagai <b>Internship HMSE di Bidang Pengembangan Minat dan Bakat (PEMDA)</b>, 
                saya berperan dalam mendukung berbagai program kerja yang berfokus pada 
                pengembangan potensi mahasiswa Software Engineering.
            </p>

            <p>
                Tugas saya meliputi:
                <ul>
                    <li>Membantu menyusun dan menyiapkan agenda kegiatan di bidang PEMDA.</li>
                    <li>Mendukung pelaksanaan event yang berkaitan dengan minat dan bakat mahasiswa.</li>
                    <li>Berkoordinasi dengan divisi lain untuk memastikan kelancaran acara.</li>
                    <li>Menyusun laporan kegiatan serta dokumentasi sebagai bentuk pertanggungjawaban.</li>
                </ul>
            </p>

            <p>
                Melalui pengalaman ini, saya belajar tentang pentingnya kerja tim, manajemen acara, 
                serta memahami lebih dalam bagaimana sebuah organisasi mahasiswa merancang program 
                yang bermanfaat bagi anggotanya. Internship ini menjadi kesempatan berharga untuk 
                mengembangkan keterampilan komunikasi, kepemimpinan, dan koordinasi.
            </p>
        </div>

        {{-- TOMBOL KEMBALI --}}
        <a href="{{ url('/') }}#pengalaman" class="btn btn-primary mt-4">Kembali</a>
    </div>
</section>
@endsection
