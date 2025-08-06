@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow-lg border-0 rounded-4 p-4">
        <h2 class="text-center text-primary fw-bold mb-4">
            Sekretaris JAMBERSKUY UKM SENI TEMANI
        </h2>

        {{-- GAMBAR TENGAH --}}
        <div class="d-flex justify-content-center mb-4">
            <img src="{{ asset('images/jamberskuy.jpg') }}" alt="Kegiatan UKM Seni" 
                 class="img-fluid rounded-4 shadow-sm" style="max-width:500px;">
        </div>

      {{-- DESKRIPSI --}}
<p>
    Sebagai <b>Sekretaris dalam organisasi JAMBERSKUY UKM SENI TEMANI</b>, saya memiliki peran penting 
    dalam memastikan roda organisasi berjalan dengan baik. Tugas saya tidak hanya terbatas pada pencatatan hasil rapat 
    dan pengarsipan dokumen, tetapi juga menjadi penghubung utama dalam komunikasi internal antaranggota maupun eksternal 
    dengan pihak kampus dan organisasi lain. Saya menyusun agenda kegiatan secara terstruktur, membuat notulen rapat, 
    serta memastikan informasi tersampaikan dengan cepat, jelas, dan tepat sasaran.
</p>

<p>
    Selain itu, saya ikut berkontribusi dalam perencanaan strategis, membantu ketua dalam menyusun program kerja tahunan, 
    dan memastikan setiap divisi memiliki arahan serta dokumentasi yang rapi. Peran ini menuntut saya untuk disiplin, detail, 
    dan mampu mengatur prioritas di tengah berbagai kesibukan akademik maupun organisasi. 
</p>

<p>
    Kegiatan <b>UKM SENI TEMANI</b> sendiri berfokus pada pengembangan minat dan bakat seni mahasiswa, mencakup musik, tari, 
    teater, seni rupa, hingga seni pertunjukan kontemporer. Melalui program <b>JAMBERSKUY</b>, organisasi ini menjadi wadah 
    kreatif untuk menampung ide dan ekspresi seni mahasiswa.
</p>

<p>
    Beberapa kegiatan rutin yang kami jalankan antara lain:
    <ul>
        <li><b>Latihan mingguan</b> untuk mengasah keterampilan seni sesuai minat anggota.</li>
        <li><b>Workshop dan pelatihan seni</b> dengan menghadirkan pemateri dari kalangan profesional.</li>
        <li><b>Pentas seni tahunan</b> sebagai ajang apresiasi karya anggota kepada publik.</li>
        <li><b>Kolaborasi lintas organisasi</b> guna memperluas jaringan dan pengalaman seni.</li>
    </ul>
</p>

<p>
    Dengan terlibat aktif sebagai sekretaris, saya belajar mengelola waktu, bekerja sama dengan tim yang beragam, 
    serta menghadapi tantangan menjaga konsistensi organisasi. Pengalaman ini mengasah keterampilan administratif, 
    komunikasi, kepemimpinan, dan manajemen acara. 
</p>

<p>
    Saya percaya, pengalaman di <b>JAMBERSKUY UKM SENI TEMANI</b> memberikan bekal berharga untuk pengembangan diri saya 
    baik secara akademik, profesional, maupun sosial. UKM ini bukan hanya tempat berkarya, tetapi juga ruang tumbuh bersama 
    untuk menciptakan lingkungan kampus yang lebih hidup, kreatif, dan penuh inspirasi.
</p>


        {{-- TOMBOL BALIK --}}
        <div class="text-center mt-4">
            <a href="{{ url('/') }}#pengalaman" class="btn btn-primary px-4 py-2 rounded-pill shadow">
                Kembali ke Pengalaman
            </a>
        </div>
    </div>
</div>
@endsection
