{{-- resources/views/kegiatan4.blade.php --}}
@extends('layouts.app')

@section('content')
<section class="detail-kegiatan">
    <div class="container text-center">
        <h2 class="mb-4">Ketua Pelaksana Studi Banding HMSE ITTP X HMTI UNUGHA</h2>

        {{-- Gambar Kegiatan --}}
        <img src="{{ asset('images/stuban.jpg') }}" alt="Studi Banding HMSE ITTP X HMTI UNUGHA"
             style="max-width:450px; border-radius:12px; margin:20px auto; display:block; box-shadow:0 6px 15px rgba(0,0,0,0.15);">

        {{-- Deskripsi --}}
        <div class="text-start mt-4" style="max-width:800px; margin:0 auto;">
            <p>
                Sebagai <b>Ketua Pelaksana</b> dalam kegiatan Studi Banding antara 
                <b>Himpunan Mahasiswa Software Engineering (HMSE) ITTP</b> dengan 
                <b>Himpunan Mahasiswa Teknik Informatika (HMTI) UNUGHA</b>, saya bertanggung jawab penuh dalam 
                perencanaan, pelaksanaan, serta evaluasi acara.
            </p>

            <p>
                Kegiatan studi banding ini bertujuan untuk <b>bertukar pengalaman organisasi, memperluas wawasan 
                mengenai program kerja, serta membangun relasi antar himpunan</b>. Saya berperan dalam menyusun 
                timeline kegiatan, mengkoordinasikan panitia lintas divisi, serta menjadi penghubung utama antara 
                HMSE ITTP dan HMTI UNUGHA.
            </p>

            <p>
                Dalam pelaksanaan acara, saya memastikan seluruh agenda berjalan lancar, suasana tetap kondusif, 
                serta setiap permasalahan dapat diselesaikan dengan cepat. Melalui kegiatan ini, saya belajar 
                tentang <b>kepemimpinan, manajemen acara, komunikasi antar organisasi, serta problem solving</b>.
            </p>

            <p>
                Studi banding ini juga memberikan manfaat besar dalam mempererat hubungan baik antar kampus dan 
                membuka peluang kolaborasi di masa mendatang.
            </p>
        </div>

        {{-- Tombol kembali --}}
        <div class="mt-4">
            <a href="{{ url('/') }}#pengalaman" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</section>
@endsection
