{{-- resources/views/kegiatan_baksos.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow-lg border-0 rounded-4 p-4">

        {{-- JUDUL --}}
        <h2 class="text-center fw-bold mb-4" style="color: #000;">
            Ketua Pelaksana Bakti Sosial Software Engineering 2024
        </h2>

        {{-- GAMBAR --}}
        <div class="d-flex justify-content-center mb-4">
            <img src="{{ asset('images/baksos.jpg') }}" 
                 alt="Ketua Pelaksana Bakti Sosial Software Engineering 2024" 
                 class="img-fluid rounded-4 shadow-sm"
                 style="max-width:600px;">
        </div>

        {{-- DESKRIPSI --}}
        <p>
            Sebagai <b>Ketua Pelaksana Bakti Sosial Software Engineering 2024</b>, saya memimpin jalannya 
            kegiatan sosial yang dilaksanakan di <b>Panti Asuhan Harapan Mulia</b>. Kegiatan ini merupakan 
            wujud kepedulian mahasiswa Software Engineering terhadap masyarakat, khususnya anak-anak panti asuhan, 
            sekaligus bagian dari rangkaian perayaan <b>Diesnatalis Software Engineering</b>.
        </p>

        <p>
            Dalam acara ini, saya bertanggung jawab penuh atas perencanaan, koordinasi, dan pelaksanaan seluruh rangkaian kegiatan, 
            termasuk acara <b>tumpengan</b> sebagai simbol rasa syukur dan kebersamaan. Saya mengatur pembagian tugas 
            kepada panitia, menjalin komunikasi dengan pihak panti, serta memastikan bahwa acara berlangsung lancar 
            dan memberikan dampak positif bagi para peserta maupun penerima manfaat.
        </p>

        <p>
            Pengalaman ini memperkuat keterampilan saya dalam memimpin tim, mengelola waktu, serta mengatasi tantangan di lapangan. 
            Lebih dari itu, kegiatan bakti sosial ini memberikan pelajaran berharga tentang arti kepedulian, empati, dan kontribusi nyata 
            dalam membangun hubungan yang harmonis antara mahasiswa dan masyarakat.
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
