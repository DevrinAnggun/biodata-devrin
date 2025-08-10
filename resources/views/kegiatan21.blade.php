@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow-lg border-0 rounded-4 p-4">

        {{-- JUDUL --}}
        <h2 class="text-center fw-bold mb-4" style="color: #000;">
            Pentas Tari Tradisional Jamberskuy
        </h2>

        {{-- GAMBAR --}}
        <div class="d-flex justify-content-center mb-4">
            <img src="{{ asset('images/toba.jpg') }}" 
                 alt="Pentas Tari Tradisional Jamberskuy" 
                 class="img-fluid rounded-4 shadow-sm"
                 style="max-width:300px;">
        </div>

        {{-- DESKRIPSI --}}
        <p>
            Dalam acara <b>Pentas Tari Tradisional Jamberskuy</b>, saya berkesempatan menampilkan 
            <b>tarian Medan</b> atau yang dikenal sebagai <b>Tari Danau Toba</b>. 
            Tarian ini menggambarkan keindahan alam dan kekayaan budaya Sumatera Utara, 
            dengan gerakan yang anggun dan penuh makna.
        </p>

        <p>
            Acara ini menjadi wadah untuk melestarikan dan memperkenalkan budaya tradisional 
            kepada masyarakat luas, khususnya generasi muda. Penampilan saya disaksikan oleh mahasiswa, 
            dosen, serta tamu undangan yang hadir untuk merayakan keberagaman budaya Nusantara.
        </p>

        <p>
            Melalui pengalaman ini, saya belajar tentang pentingnya menjaga warisan budaya 
            serta bagaimana seni tari dapat menjadi media yang efektif untuk menyampaikan pesan 
            dan nilai-nilai tradisi kepada audiens.
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
