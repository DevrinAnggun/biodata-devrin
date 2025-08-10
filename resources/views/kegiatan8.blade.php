@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow-lg border-0 rounded-4 p-4">
        <h2 class="text-center fw-bold mb-4" style="color: #000;">
            CENTIVE 2023 ITTP
        </h2>

        {{-- GAMBAR TENGAH --}}
        <div class="d-flex justify-content-center mb-4">
            <img src="{{ asset('images/centive.jpg') }}" 
                 alt="CENTIVE 2023 ITTP" 
                 class="img-fluid rounded-4 shadow-sm" 
                 style="max-width:300px;">
        </div>

        {{-- DESKRIPSI --}}
        <p>
            Sebagai peserta dalam <strong>CENTIVE 2023 ITTP</strong>, saya mendapatkan kesempatan 
            untuk mengasah kemampuan berpikir kreatif serta inovatif melalui rangkaian kompetisi 
            dan kegiatan yang diselenggarakan. Event ini memberikan pengalaman berharga dalam 
            menguji keterampilan, pengetahuan, serta ide-ide baru yang dapat diterapkan dalam 
            dunia teknologi dan pengembangan perangkat lunak.
        </p>

        <p>
            Dalam kompetisi ini, saya belajar untuk mengembangkan solusi dari sebuah permasalahan 
            nyata dengan pendekatan analitis dan kerja sama tim. Proses brainstorming, presentasi ide, 
            serta diskusi dengan juri dan peserta lain memperluas wawasan saya mengenai berbagai sudut 
            pandang dalam dunia inovasi teknologi. Kegiatan ini juga melatih kemampuan komunikasi dan 
            presentasi agar ide dapat tersampaikan secara efektif.
        </p>

        <p>
            Melalui keterlibatan di <strong>CENTIVE 2023 ITTP</strong>, saya semakin terdorong untuk 
            berani berinovasi dan berkontribusi dalam pengembangan teknologi di masa depan. Pengalaman 
            ini menjadi motivasi penting bagi saya untuk terus mengasah keterampilan, meningkatkan rasa 
            percaya diri, serta membangun jejaring dengan mahasiswa dari berbagai bidang dan institusi.
        </p>

        {{-- TOMBOL BALIK --}}
        <div class="text-center mt-4">
            <a href="{{ url('/') }}#pengalaman" 
               class="btn btn-primary px-4 py-2 rounded-pill shadow">
                Kembali
            </a>
        </div>
    </div>
</div>
@endsection
