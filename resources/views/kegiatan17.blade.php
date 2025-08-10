@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow-lg border-0 rounded-4 p-4">

        {{-- JUDUL --}}
        <h2 class="text-center fw-bold mb-4" style="color: #000;">
            Moderator Seminar Blockchain Software Engineering
        </h2>

        {{-- GAMBAR --}}
        <div class="d-flex justify-content-center mb-4">
            <img src="{{ asset('images/moderator.jpg') }}" 
                 alt="Moderator Seminar Blockchain Software Engineering" 
                 class="img-fluid rounded-4 shadow-sm"
                 style="max-width:300px;">
        </div>

        {{-- DESKRIPSI --}}
        <p>
            Sebagai <b>Moderator Seminar Software Engineering</b> dengan topik <b>Blockchain</b>, 
            saya berperan mengatur jalannya acara agar berjalan lancar, interaktif, dan sesuai dengan susunan agenda yang telah disiapkan. 
            Seminar ini menghadirkan pembicara yang membahas perkembangan, manfaat, serta peluang teknologi blockchain 
            dalam dunia industri dan pengembangan perangkat lunak.
        </p>

        <p>
            Tugas saya meliputi membuka acara, memperkenalkan pembicara, memandu sesi diskusi, serta mengelola sesi 
            tanya jawab antara audiens dan narasumber. Peran ini menuntut keterampilan komunikasi publik, pengelolaan waktu, 
            dan kemampuan menjaga suasana agar tetap kondusif dan menarik bagi peserta.
        </p>

        <p>
            Pengalaman ini memberikan kesempatan berharga untuk mengasah kemampuan berbicara di depan umum, 
            memahami lebih dalam tentang teknologi blockchain, serta berinteraksi langsung dengan para ahli 
            dan peserta yang memiliki ketertarikan di bidang teknologi.
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
