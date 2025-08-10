{{-- resources/views/kegiatan_kadep_eksos.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow-lg border-0 rounded-4 p-4">

        {{-- JUDUL --}}
        <h2 class="text-center fw-bold mb-4" style="color: #000;">
            Kepala Departemen EKSOS (Eksternal & Sosial)
        </h2>

        {{-- GAMBAR --}}
        <div class="d-flex justify-content-center mb-4">
            <img src="{{ asset('images/kadep.jpg') }}" 
                 alt="Kepala Departemen EKSOS (Eksternal & Sosial)" 
                 class="img-fluid rounded-4 shadow-sm"
                 style="max-width:600px;">
        </div>

        {{-- DESKRIPSI --}}
        <p>
            Sebagai <b>Kepala Departemen EKSOS</b> di Himpunan Mahasiswa Software Engineering (HMSE),
            saya bertanggung jawab memimpin dan mengoordinasikan berbagai kegiatan yang berfokus pada
            hubungan eksternal serta kegiatan sosial. Peran ini mencakup perencanaan, pengawasan, dan
            evaluasi program kerja agar dapat berjalan sesuai tujuan organisasi.
        </p>

        <p>
            Dalam menjalankan tugas, saya memimpin tim untuk menjalin kerja sama dengan pihak luar, seperti
            lembaga pendidikan, organisasi masyarakat, maupun sponsor, sekaligus menginisiasi kegiatan sosial
            yang bermanfaat bagi masyarakat. Kepemimpinan ini menuntut keterampilan komunikasi, negosiasi,
            serta kemampuan manajemen yang baik.
        </p>

        <p>
            Melalui pengalaman ini, saya belajar bagaimana memotivasi tim, menyelesaikan masalah secara efektif,
            dan memastikan bahwa setiap program membawa dampak positif baik bagi anggota himpunan maupun
            masyarakat luas.
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
