{{-- resources/views/kegiatan4.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow-lg border-0 rounded-4 p-4">
        <h2 class="text-center fw-bold mb-4" style="color: #000;">
            Ketua Pelaksana Studi Banding HMSE ITTP X HMTI UNUGHA
        </h2>

        {{-- GAMBAR TENGAH --}}
        <div class="d-flex justify-content-center mb-4">
            <img src="{{ asset('images/stuban.jpg') }}" 
                 alt="Studi Banding HMSE ITTP X HMTI UNUGHA"
                 class="img-fluid rounded-4 shadow-sm"
                 style="max-width:500px;">
        </div>

        {{-- DESKRIPSI --}}
        <p>
            Sebagai <b>Ketua Pelaksana</b> dalam kegiatan Studi Banding antara 
            <b>Himpunan Mahasiswa Software Engineering (HMSE) ITTP</b> dengan 
            <b>Himpunan Mahasiswa Teknik Informatika (HMTI) UNUGHA</b>, 
            saya bertanggung jawab penuh dalam perencanaan, pelaksanaan, serta evaluasi acara.
        </p>

        <p>
            Kegiatan studi banding ini bertujuan untuk <b>bertukar pengalaman organisasi, memperluas wawasan 
            mengenai program kerja, serta membangun relasi antar himpunan</b>. 
            Saya berperan dalam menyusun timeline kegiatan, mengkoordinasikan panitia lintas divisi, 
            serta menjadi penghubung utama antara HMSE ITTP dan HMTI UNUGHA.
        </p>

        <p>
            Dalam pelaksanaan acara, saya memastikan seluruh agenda berjalan lancar, suasana tetap kondusif, 
            serta setiap permasalahan dapat diselesaikan dengan cepat. 
            Melalui kegiatan ini, saya belajar tentang <b>kepemimpinan, manajemen acara, komunikasi antar organisasi, 
            serta problem solving</b>.
        </p>

        <p>
            Studi banding ini juga memberikan manfaat besar dalam mempererat hubungan baik antar kampus 
            dan membuka peluang kolaborasi di masa mendatang.
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
