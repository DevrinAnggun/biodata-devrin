@extends('layouts.app')

@section('content')
<main style="padding: 40px; max-width: 900px; margin: auto; text-align: center;">

    <!-- JUDUL -->
    <h2 style="margin-bottom: 25px; font-size: 2rem; font-weight: 700; text-align:center; color:#111;">
        Student Staff Blogwalking TUP
    </h2>

    <!-- GAMBAR -->
    <img src="{{ asset('images/bestie.jpg') }}" 
         alt="Student Staff Blogwalking TUP" 
         style="max-width:600px; margin:20px auto; display:block; border-radius:10px;">

    <!-- DESKRIPSI -->
    <p style="margin-top:20px; text-align:justify; font-size:1rem; line-height:1.8;">
        Sebagai <strong>Student Staff Blogwalking TUP</strong>, saya bertugas melakukan 
        <em>link commenting</em> pada berbagai situs dan blog dari beragam domain negara. 
        Kegiatan ini bertujuan untuk meningkatkan visibilitas, jangkauan, dan optimasi mesin pencari (SEO) 
        dari konten yang dikelola, sehingga dapat menarik lebih banyak pengunjung dari berbagai negara.
    </p>

    <p style="margin-top:20px; text-align:justify; font-size:1rem; line-height:1.8;">
        Dalam prosesnya, saya melakukan pencarian blog yang relevan, membaca konten, 
        lalu memberikan komentar yang sesuai dan bernilai, disertai tautan yang mengarah 
        ke website atau halaman target. Aktivitas ini membutuhkan ketelitian, pemahaman 
        strategi SEO, serta keterampilan komunikasi tertulis yang baik.
    </p>

    <p style="margin-top:20px; text-align:justify; font-size:1rem; line-height:1.8;">
        Melalui peran ini, saya belajar mengenai teknik <em>off-page SEO</em>, 
        pentingnya interaksi yang membangun di komunitas daring, serta cara 
        memanfaatkan perbedaan domain negara untuk memperluas jangkauan audiens.
    </p>
</main>
@endsection
