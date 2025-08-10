{{-- resources/views/kegiatan_eksos.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow-lg border-0 rounded-4 p-4">
        
        {{-- JUDUL --}}
        <h2 class="text-center fw-bold mb-4" style="color: #000;">
            Anggota EKSOS (Eksternal & Sosial) HMSE
        </h2>

        {{-- GAMBAR --}}
        <div class="d-flex justify-content-center mb-4">
            <img src="{{ asset('images/eksos.jpg') }}" 
                 alt="Anggota EKSOS (Eksternal & Sosial) HMSE" 
                 class="img-fluid rounded-4 shadow-sm"
                 style="max-width:600px;">
        </div>

        {{-- DESKRIPSI --}}
        <p>
            Sebagai <b>Anggota EKSOS (Eksternal & Sosial) HMSE</b>, saya bertugas menjalin hubungan 
            baik dengan pihak eksternal seperti organisasi mahasiswa lain, lembaga kampus, maupun mitra 
            di luar kampus. Peran ini juga mencakup kegiatan sosial yang melibatkan kepedulian terhadap 
            masyarakat melalui berbagai program dan aksi nyata.
        </p>

        <p>
            Dalam menjalankan tugas, saya aktif berpartisipasi dalam perencanaan, koordinasi, dan pelaksanaan 
            kegiatan sosial, mulai dari bakti sosial, penggalangan dana, hingga kolaborasi lintas organisasi. 
            Setiap kegiatan dilakukan dengan tujuan memperluas jaringan, mempererat hubungan, serta membawa 
            dampak positif bagi masyarakat.
        </p>

        <p>
            Melalui pengalaman di divisi EKSOS, saya belajar tentang pentingnya komunikasi efektif, negosiasi, 
            kerja sama tim, serta kepekaan sosial. Tugas ini memberikan kesempatan untuk mengembangkan keterampilan 
            interpersonal sekaligus berkontribusi nyata dalam membangun hubungan harmonis antara HMSE dan lingkungan 
            sekitar.
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
