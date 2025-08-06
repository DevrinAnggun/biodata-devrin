@extends('layouts.app') {{-- pakai layout utama --}}

@section('content')
<section class="detail-kegiatan">
    <div class="container text-center">

        {{-- JUDUL --}}
        <h2 class="mb-4">Staff Humas LDK & MAKRAB SE 2023</h2>

        {{-- GAMBAR --}}
        <img src="{{ asset('images/humas.jpg') }}" 
             alt="Staff Humas LDK & MAKRAB SE 2023"
             style="max-width:450px; border-radius:10px; margin:20px auto; display:block; box-shadow:0 4px 12px rgba(0,0,0,0.15);" />

        {{-- DESKRIPSI SINGKAT --}}
        <p class="mt-4">
            Sebagai <b>Staff Humas</b> dalam kegiatan <b>Latihan Dasar Kepemimpinan (LDK)</b> 
            dan <b>Malam Keakraban (MAKRAB) Software Engineering 2023</b>, 
            saya berperan dalam menjalin komunikasi serta membangun hubungan baik antara panitia, peserta, dan pihak eksternal.
        </p>

        {{-- DESKRIPSI PANJANG --}}
        <p>
            Tugas utama saya meliputi publikasi acara, koordinasi informasi kepada peserta, 
            serta menjaga citra positif kegiatan melalui komunikasi yang efektif. 
            Saya juga ikut memastikan seluruh informasi terkait rundown acara, teknis kegiatan, 
            serta kebutuhan peserta dapat tersampaikan dengan baik.
        </p>

        <p>
            Dengan menjadi bagian dari divisi Humas, saya belajar pentingnya keterampilan komunikasi, 
            koordinasi antar tim, serta cara menyampaikan pesan dengan jelas dan persuasif. 
            Pengalaman ini sangat berharga untuk mengasah soft skill sekaligus membangun relasi positif.
        </p>

        {{-- BUTTON KEMBALI --}}
        <a href="{{ url('/') }}#pengalaman" class="btn btn-primary mt-3">Kembali</a>
    </div>
</section>
@endsection
