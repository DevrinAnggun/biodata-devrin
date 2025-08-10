<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portofolio Devrin</title>
  @vite('resources/css/app.css')
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

  <header id="navbar">
    <h1>Portofolio Devrin</h1>
    <p>Web & Mobile Developer Enthusiast</p>
    <nav>
      <a href="#tentang">Tentang</a>
      <a href="#sertifikat">Sertifikat</a>
      <a href="#portofolio">Portofolio</a>
      <a href="#kontak">Kontak</a>
    </nav>
  </header>

  <main>
    <section id="tentang" class="mb-large" style="display: flex; flex-wrap: wrap; align-items: center; gap: 40px;">
  <div style="flex: 1; min-width: 280px;">
    <h2>Tentang Saya</h2>
    <p>Halo! Saya <strong>Devrin Anggun Saputri</strong>, mahasiswi Telkom University Purwokerto jurusan Software Engineering. Saya memiliki minat kuat dalam pengembangan aplikasi berbasis web dan mobile, terutama menggunakan Laravel dan Flutter.</p>
    <p>Beberapa proyek yang saya kembangkan berkaitan langsung dengan kebutuhan masyarakat desa dan UMKM lokal, seperti aplikasi KWT Karangtengah dan sistem pengajuan surat online di Kelurahan Karangtengah.</p>
    <p>Saya percaya bahwa teknologi bisa menyederhanakan banyak hal, dan saya senang menjadi bagian dari proses itu.</p>
  </div>

  <div style="flex: 1; min-width: 280px; text-align: center;">
    <img src="{{ asset('images/aku.jpg') }}" alt="Foto Devrin"
         style="width: 300px; height: 300px; object-fit: cover; border-radius: 50%; box-shadow: 0 6px 15px rgba(0,0,0,0.15);" />
    <p style="margin-top: 12px; font-size: 0.95rem; color: #555;">Devrin Anggun Saputri</p>
  </div>
</section>

<section id="tentang" class="mb-large" style="display: flex; flex-wrap: wrap; align-items: center; gap: 40px;">
  <div style="flex: 1; min-width: 280px;">
    <h2>Pengalaman & Kegiatan</h2>
<div class="row">
  <!-- Kotak Nama Kegiatan -->
  <div class="col-md-8">
    <div class="card">
      <div class="card-header fw-bold">
        Nama Kegiatan
      </div>
      <div class="card-body p-0">
        <div class="list-group text-start">
          <a href="{{ url('kegiatan1') }}" class="list-group-item list-group-item-action">
    1. Sekretaris JAMBERSKUY UKM SENI TEMANI
  </a>
  <a href="{{ url('kegiatan2') }}" class="list-group-item list-group-item-action">
    2. Anggota PDD SERBU (Software Engineering Berbuka)
  </a>
  <a href="{{ url('kegiatan3') }}" class="list-group-item list-group-item-action">
    3. Staff Humas LDK & MAKRAB SE 2023
  </a>
  <a href="{{ url('kegiatan4') }}" class="list-group-item list-group-item-action">
    4. Ketua Pelaksana Studi Banding HMSE ITTP X HMTI UNUGHA
  </a>
  <a href="{{ url('kegiatan5') }}" class="list-group-item list-group-item-action">
    5. Sekretaris DIESNATALIS SE Ke-7
  </a>
  <a href="{{ url('kegiatan6') }}" class="list-group-item list-group-item-action">
    6. Internship HMSE di Bidang Pengembangan Minat dan Bakat (PEMDA)
  </a>
  <a href="{{ url('kegiatan7') }}" class="list-group-item list-group-item-action">
    7. Kunjungan Industri Bersama FIF ITTP
  </a>
  <a href="{{ url('kegiatan8') }}" class="list-group-item list-group-item-action">
    8. CENTIVE 2023 ITTP
  </a>
  <a href="{{ url('kegiatan9') }}" class="list-group-item list-group-item-action">
    9. Anggota Divisi Konsumsi FLS2N SMA/SMK Se-Banyumas
  </a>
  <a href="{{ url('kegiatan10') }}" class="list-group-item list-group-item-action">
    10. SERABI (Software Engineering Berbagai)
  </a>
  <a href="{{ url('kegiatan11') }}" class="list-group-item list-group-item-action">
    11. Pameran Software Engineering 2024
  </a>
  <a href="{{ url('kegiatan12') }}" class="list-group-item list-group-item-action">
    12. Anggota EKSOS (Eksternal & Sosial) HMSE
  </a>
  <a href="{{ url('kegiatan13') }}" class="list-group-item list-group-item-action">
    13. Kepala Departemen EKSOS (Eksternal & Sosial)
  </a>
  <a href="{{ url('kegiatan14') }}" class="list-group-item list-group-item-action">
    14. Panitia LDK & MAKRAB 2024
  </a>
  <a href="{{ url('kegiatan15') }}" class="list-group-item list-group-item-action">
    15. Kepala Departemen EKSOS (Eksternal & Sosial)
  </a>
  <a href="{{ url('kegiatan16') }}" class="list-group-item list-group-item-action">
    16. Ketua Pelaksana Bakti Sosial Software Engineering 2024
  </a>
  <a href="{{ url('kegiatan17') }}" class="list-group-item list-group-item-action">
    17. Moderator Seminar Blockchain Software Engineering
  </a>
  <a href="{{ url('kegiatan18') }}" class="list-group-item list-group-item-action">
    18. Student Staff Blogwalking TUP
  </a>
  <a href="{{ url('kegiatan19') }}" class="list-group-item list-group-item-action">
    19. Student Staff Library TUP
  </a>
  <a href="{{ url('kegiatan20') }}" class="list-group-item list-group-item-action">
    20. Staff Poster Kemahasiswaan
  </a>
  <a href="{{ url('kegiatan21') }}" class="list-group-item list-group-item-action">
    21. Pentas Tari Tradisional Jamberskuy
  </a>
  <a href="{{ url('kegiatan22') }}" class="list-group-item list-group-item-action">
    22. Koordinator Divisi Konsumsi Pre-Competition 
  </a>
  <a href="{{ url('kegiatan23') }}" class="list-group-item list-group-item-action">
    23. Staff Poster Kemahasiswaan
  </a>
  <a href="{{ url('kegiatan24') }}" class="list-group-item list-group-item-action">
    24. Staff Poster Kemahasiswaan
  </a>
  <a href="{{ url('kegiatan25') }}" class="list-group-item list-group-item-action">
    25. Staff Poster Kemahasiswaan
  </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Kotak Dokumen Pendukung -->
  <div class="col-md-4">
    <div class="card">
      <div class="card-header fw-bold">
        Dokumen Lainnya
      </div>
      <div class="card-body">
    <p>Lihat dokumen resmi kegiatan lainnya:</p>
    <a href="{{ route('dokumen.surat_tugas') }}" class="btn btn-primary mb-2 w-100">
        📄 Surat Tugas
    </a>
    <a href="{{ route('dokumen.surat_keterangan') }}" class="btn btn-success w-100">
        📜 Surat Keterangan Panitia
    </a>
</div>

      </div>
    </div>
  </div>
</div>


   <section id="sertifikat" style="margin-top: 70px; text-align: center;">
    <h2 style="margin-bottom: 30px;">Sertifikat</h2>

    <div class="cert-grid" style="
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 30px;
        justify-items: center;
    ">
        <!-- 1 -->
        <div class="cert-item" style="text-align: center;">
            <strong>MySkill (HTML)</strong><br>
            <small>Terbit: 2023</small><br><br>
            <a href="{{ asset('images/sertifikat/html.jpg') }}" target="_blank">
                <img src="{{ asset('images/sertifikat/html.jpg') }}" 
                     alt="Sertifikat My Skill Web" 
                     style="width: 100%; max-width: 250px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1);" />
            </a>
        </div>

        <!-- 2 -->
        <div class="cert-item" style="text-align: center;">
            <strong>MySkill (CSS)</strong><br>
            <small>Terbit: 2023</small><br><br>
            <a href="{{ asset('images/sertifikat/css.jpg') }}" target="_blank">
                <img src="{{ asset('images/sertifikat/css.jpg') }}" 
                     alt="Sertifikat My Skill CSS" 
                     style="width: 100%; max-width: 250px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1);" />
            </a>
        </div>

        <!-- 3 -->
        <div class="cert-item" style="text-align: center;">
            <strong>MySkill (Figma)</strong><br>
            <small>Terbit: 2023</small><br><br>
            <a href="{{ asset('images/sertifikat/figma.jpg') }}" target="_blank">
                <img src="{{ asset('images/sertifikat/figma.jpg') }}" 
                     alt="Sertifikat My Skill Figma" 
                     style="width: 100%; max-width: 250px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1);" />
            </a>
        </div>

        <!-- 4 -->
        <div class="cert-item" style="text-align: center;">
            <strong>Centive ITTP 2023</strong><br>
            <small>Terbit: 2023</small><br><br>
            <a href="{{ asset('images/sertifikat/centive.jpg') }}" target="_blank">
                <img src="{{ asset('images/sertifikat/centive.jpg') }}" 
                     alt="Sertifikat Centive ITTP 2023" 
                     style="width: 100%; max-width: 250px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1);" />
            </a>
        </div>

        <!-- 5 -->
        <div class="cert-item" style="text-align: center;">
            <strong>Workshop Content Writer</strong><br>
            <small>Terbit: 2023</small><br><br>
            <a href="{{ asset('images/sertifikat/workshop.png') }}" target="_blank">
                <img src="{{ asset('images/sertifikat/workshop.png') }}" 
                     alt="Sertifikat Workshop Content Writer" 
                     style="width: 100%; max-width: 250px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1);" />
            </a>
        </div>

        <!-- 6 -->
        <div class="cert-item" style="text-align: center;">
            <strong>Design Poster</strong><br>
            <small>Terbit: 2023</small><br><br>
            <a href="{{ asset('images/sertifikat/poster.jpg') }}" target="_blank">
                <img src="{{ asset('images/sertifikat/poster.jpg') }}" 
                     alt="Sertifikat Design Poster" 
                     style="width: 100%; max-width: 250px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1);" />
            </a>
        </div>

        <!-- 7 -->
        <div class="cert-item" style="text-align: center;">
            <strong>Peserta Seminar Diesnatalis SE</strong><br>
            <small>Terbit: 2023</small><br><br>
            <a href="{{ asset('images/sertifikat/seminarhmse.jpg') }}" target="_blank">
                <img src="{{ asset('images/sertifikat/seminarhmse.jpg') }}" 
                     alt="Sertifikat Peserta Seminar Diesnatalis SE" 
                     style="width: 100%; max-width: 250px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1);" />
            </a>
        </div>

        <!-- 8 - 12 sertifikat tambahan -->
        <div class="cert-item" style="text-align: center;">
            <strong>Peserta Ospek Kampus ITTP</strong><br>
            <small>Terbit: 2022</small><br><br>
            <a href="{{ asset('images/sertifikat/todays.jpg') }}" target="_blank">
                <img src="{{ asset('images/sertifikat/todays.jpg') }}" 
                     alt="Sertifikat Peserta Ospek Kampus ITTP" 
                     style="width: 100%; max-width: 250px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1);" />
            </a>
        </div>

        <div class="cert-item" style="text-align: center;">
            <strong>Peserta Ospek Fakultas FIF</strong><br>
            <small>Terbit: 2022</small><br><br>
            <a href="{{ asset('images/sertifikat/infection.jpg') }}" target="_blank">
                <img src="{{ asset('images/sertifikat/infection.jpg') }}" 
                     alt="Sertifikat Peserta Ospek Fakultas FIF" 
                     style="width: 100%; max-width: 250px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1);" />
            </a>
        </div>

        <div class="cert-item" style="text-align: center;">
            <strong>Peserta Ospek Prodi</strong><br>
            <small>Terbit: 2022</small><br><br>
            <a href="{{ asset('images/sertifikat/prodi.jpg') }}" target="_blank">
                <img src="{{ asset('images/sertifikat/prodi.jpg') }}" 
                     alt="Sertifikat Ospek Prodi SE" 
                     style="width: 100%; max-width: 250px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1);" />
            </a>
        </div>

        <div class="cert-item" style="text-align: center;">
            <strong>Relawan KIP-K Nasional</strong><br>
            <small>Terbit: 2023</small><br><br>
            <a href="{{ asset('images/sertifikat/kip.jpg') }}" target="_blank">
                <img src="{{ asset('images/sertifikat/kip.jpg') }}" 
                     alt="Sertifikat Relawan KIP-K Nasional" 
                     style="width: 100%; max-width: 250px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1);" />
            </a>
        </div>

        <div class="cert-item" style="text-align: center;">
            <strong>Webinar Study Aboard</strong><br>
            <small>Terbit: 2023</small><br><br>
            <a href="{{ asset('images/sertifikat/aboard.jpg') }}" target="_blank">
                <img src="{{ asset('images/sertifikat/aboard.jpg') }}" 
                     alt="Sertifikat Webinar Study Aboard" 
                     style="width: 100%; max-width: 250px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1);" />
            </a>
        </div>
    </div>
</section>

      <section id="proyek-portofolio" style="margin-top:70px;">
  <h2>Proyek Portofolio</h2>

  <div class="project-container">
    <img src="{{ asset('images/portofolio1.png') }}" alt="My Biodata" />
    <div>
      <strong>My Biodata</strong>
      <p>Website ini merupakan salah satu project pengembangan saya tentang biodata dan portofolio saya.</p>
    </div>
  </div>

  <div class="project-container">
    <img src="{{ asset('images/portofolio1.png') }}" alt="My Biodata" />
    <div>
      <strong>My Biodata</strong>
      <p>Website ini merupakan salah satu project pengembangan saya tentang biodata dan portofolio saya.</p>
    </div>
  </div>

  <!-- Project lainnya tinggal copy struktur di atas -->
</section>

<style>
  /* Judul section biar ada jarak sama konten */
  #proyek-portofolio h2 {
    text-align: center;
    margin-bottom: 40px;
  }

  /* Setiap project tampil vertikal dengan teks center */
  .project-container {
    text-align: center;
    margin-bottom: 40px; /* jarak antar proyek */
  }

  /* Biar gambar tidak terlalu mepet */
  .project-container img {
    max-width: 250px;
    height: auto;
    margin-bottom: 15px;
    border-radius: 10px;
  }

  /* Judul project */
  .project-container strong {
    font-size: 1.2rem;
    display: block;
    margin-bottom: 8px;
  }

  /* Paragraf project */
  .project-container p {
    line-height: 1.6;
    max-width: 600px;
    margin: 0 auto; /* biar center */
  }
</style>


    <section id="kontak" class="mb-large" style="text-align: left;">
  <h2>Kontak</h2>
  <p>Email: devrinanggun90@gmail.com</p>
  <p>WhatsApp: 0812-2903-5962</p>
  <p>Instagram: <a href="https://www.instagram.com/devrinanggun_?igsh=bW1mdm0yYnEyc2Vw" target="_blank">Instagram.com/in/devrin</a></p>
  <p>LinkedIn: <a href="https://www.linkedin.com/in/devrin-anggun-saputri-045002252/" target="_blank">linkedin.com/in/devrin</a></p>
  <p>GitHub: <a href="https://github.com/DevrinAnggun?tab=repositories" target="_blank">github.com/devrinanggun</a></p>
</section>
</main>

  <footer>
    &copy; {{ date('Y') }} Devrin Anggun Saputri. All rights reserved.
  </footer>

  <script>
    window.addEventListener('scroll', function () {
      const navbar = document.getElementById('navbar');
      if (window.scrollY > 10) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    });
  </script>
</body>
</html>
