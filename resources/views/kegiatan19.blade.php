@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow-lg border-0 rounded-4 p-4">

        {{-- JUDUL --}}
        <h2 class="text-center fw-bold mb-4" style="color: #000;">
            Student Staff Library TUP
        </h2>

        {{-- GAMBAR --}}
        <div class="d-flex justify-content-center mb-4">
            <img src="{{ asset('images/perpus.jpg') }}" 
                 alt="Student Staff Library TUP" 
                 class="img-fluid rounded-4 shadow-sm"
                 style="max-width:300px;">
        </div>

        {{-- DESKRIPSI --}}
        <p>
            Sebagai <b>Student Staff Library TUP</b>, saya bertugas melakukan proses 
            digitalisasi dokumen dengan cara memindai skripsi dari angkatan awal 
            untuk dijadikan arsip dalam bentuk <em>softfile</em>. Kegiatan ini bertujuan untuk 
            menjaga kelestarian dokumen akademik sekaligus memudahkan akses bagi mahasiswa dan staf perpustakaan.
        </p>

        <p>
            Proses digitalisasi melibatkan penataan dokumen fisik, pemindaian dengan kualitas tinggi, 
            pengelolaan file, serta penamaan dan penyimpanan arsip secara sistematis. Hal ini memerlukan 
            ketelitian tinggi dan tanggung jawab penuh untuk memastikan dokumen tersimpan dengan aman 
            dan mudah ditemukan.
        </p>

        <p>
            Pengalaman ini mengajarkan saya pentingnya pengarsipan digital dalam dunia akademik, 
            sekaligus meningkatkan keterampilan teknis dalam pengoperasian perangkat pemindaian 
            dan manajemen file digital.
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
