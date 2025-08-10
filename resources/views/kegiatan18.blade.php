@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow-lg border-0 rounded-4 p-4">

        {{-- JUDUL --}}
        <h2 class="text-center fw-bold mb-4" style="color: #000;">
            Student Staff Blogwalking TUP
        </h2>

        {{-- GAMBAR --}}
        <div class="d-flex justify-content-center mb-4">
            <img src="{{ asset('images/bestie.jpg') }}" 
                 alt="Student Staff Blogwalking TUP" 
                 class="img-fluid rounded-4 shadow-sm"
                 style="max-width:600px;">
        </div>

        {{-- DESKRIPSI --}}
        <p>
            Sebagai <b>Student Staff Blogwalking TUP</b>, saya bertugas melakukan 
            <em>link commenting</em> pada berbagai situs dan blog dari beragam domain negara. 
            Kegiatan ini bertujuan untuk meningkatkan visibilitas, jangkauan, dan optimasi mesin pencari (SEO) 
            dari konten yang dikelola, sehingga dapat menarik lebih banyak pengunjung dari berbagai negara.
        </p>

        <p>
            Dalam prosesnya, saya melakukan pencarian blog yang relevan, membaca konten, 
            lalu memberikan komentar yang sesuai dan bernilai, disertai tautan yang mengarah 
            ke website atau halaman target. Aktivitas ini membutuhkan ketelitian, pemahaman 
            strategi SEO, serta keterampilan komunikasi tertulis yang baik.
        </p>

        <p>
            Melalui peran ini, saya belajar mengenai teknik <em>off-page SEO</em>, 
            pentingnya interaksi yang membangun di komunitas daring, serta cara 
            memanfaatkan perbedaan domain negara untuk memperluas jangkauan audiens.
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
