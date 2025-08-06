@extends('layouts.app')

@section('content')
<section class="detail-kegiatan">
    <div class="container text-center">
        <h2>Sekretaris DIESNATALIS SE Ke-7</h2>
        <img src="{{ asset('images/diesnatalis.jpg') }}" alt="DIESNATALIS SE Ke-7"
             style="max-width:450px; border-radius:10px; margin:20px auto; display:block;">

        <p class="mt-4 text-start">
            Sebagai <b>Sekretaris DIESNATALIS SE Ke-7</b>, saya bertanggung jawab dalam mendukung kelancaran administrasi 
            dan dokumentasi seluruh rangkaian acara perayaan ulang tahun Program Studi Software Engineering.
        </p>

        <p class="text-start">
            <b>Tugas utama saya mencakup:</b>
            <ul class="text-start">
                <li>Menyusun agenda kegiatan mulai dari rapat persiapan hingga acara puncak.</li>
                <li>Mencatat notulen rapat dan mendistribusikannya kepada seluruh panitia.</li>
                <li>Mengelola arsip dokumen penting, seperti proposal, surat menyurat, dan laporan pertanggungjawaban.</li>
                <li>Mendukung koordinasi antar divisi, sehingga setiap divisi dapat melaksanakan tugasnya dengan efektif.</li>
                <li>Mengatur komunikasi internal agar informasi tersampaikan dengan jelas dan tepat waktu.</li>
            </ul>
        </p>

        <p class="text-start">
            Melalui peran ini, saya belajar mengelola administrasi acara besar, meningkatkan keterampilan komunikasi, 
            serta memastikan setiap detail acara terdokumentasi dengan baik. Pengalaman ini juga melatih ketelitian, 
            kedisiplinan, dan tanggung jawab dalam menjalankan tugas sebagai bagian dari tim inti kepanitiaan.
        </p>

        <a href="{{ url('/') }}#pengalaman" class="btn btn-primary mt-3">⬅ Kembali</a>
    </div>
</section>
@endsection
