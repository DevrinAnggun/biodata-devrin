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
    <section id="tentang" style="display: flex; flex-wrap: wrap; align-items: center; gap: 40px;">
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

  <section class="detail-kegiatan">
  <div class="container text-center">
    <h2 class="mb-4">Daftar Pengalaman & Kegiatan Lainnya</h2>

    <div class="list-group text-start" style="max-width:800px; margin:0 auto;">
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
</div>

   <section id="sertifikat">
  <h2>Sertifikat</h2>
  <div class="cert-grid">
    <div class="cert-item">
      <strong>Dicoding - Belajar Dasar Pemrograman Web</strong><br>
      <small>Terbit: 2023</small><br>
      <a href="{{ asset('images/gbr.png') }}" target="_blank">
        <img src="{{ asset('images/gbr.png') }}" alt="Sertifikat Dicoding Web" />
      </a>
    </div>
    <div class="cert-item">
      <strong>Google UX Design Certificate</strong><br>
      <small>Terbit: 2024 (Coursera)</small><br>
      <a href="{{ asset('images/gbr.png') }}" target="_blank">
        <img src="{{ asset('images/gbr.png') }}" alt="Sertifikat Google UX" />
      </a>
    </div>
    <div class="cert-item">
      <strong>Flutter Fundamental - Dicoding</strong><br>
      <small>Terbit: 2025</small><br>
      <a href="{{ asset('images/gbr.png') }}" target="_blank">
        <img src="{{ asset('images/gbr.png') }}" alt="Sertifikat Flutter" />
      </a>
    </div>
    <div class="cert-item">
      <strong>BuildWith Angga - Laravel Web Development</strong><br>
      <small>Terbit: 2023</small><br>
      <a href="{{ asset('images/gbr.png') }}" target="_blank">
        <img src="{{ asset('images/gbr.png') }}" alt="Sertifikat Laravel" />
      </a>
    </div>
  </div>
</section>


    <section id="portofolio">
      <h2>Proyek Portofolio</h2>

      <div class="project-container">
        <img src="{{ asset('images/gambar.png') }}" alt="KWT App" />
        <div>
          <strong style="font-size: 1.1rem;">Aplikasi KWT Karangtengah</strong>
          <p>Aplikasi mobile berbasis Flutter untuk memudahkan warga desa dalam memesan produk UMKM seperti sayur, makanan, dan minuman. Dilengkapi fitur pelacakan status pesanan (diterima, diproses, siap diambil).</p>
        </div>
      </div>

      <div class="project-container reverse">
        <div>
          <strong style="font-size: 1.1rem;">Website RT 01 Karangtengah</strong>
          <p>Website berbasis PHP native untuk mendigitalisasi informasi lingkungan RT, termasuk kontak warga, agenda RT, dan arsip dokumen.</p>
        </div>
        <img src="{{ asset('images/gambar.png') }}" alt="Website RT" />
      </div>

      <div class="project-container">
        <img src="{{ asset('images/gambar.png') }}" alt="Website Kelurahan" />
        <div>
          <strong style="font-size: 1.1rem;">Website Kelurahan Karangtengah</strong>
          <p>Sistem pengajuan surat secara online, informasi layanan desa, profil pegawai, dan pengelolaan data penduduk. Dikembangkan dengan Laravel dan Bootstrap.</p>
        </div>
      </div>

      <div class="project-container reverse">
        <div>
          <strong style="font-size: 1.1rem;">Website UMKM Karangtengah</strong>
          <p>Situs katalog produk-produk UMKM di desa Karangtengah. Tiap UMKM bisa memiliki halaman profil, daftar produk, dan testimoni pelanggan. Bisa dikembangkan jadi marketplace di versi selanjutnya.</p>
        </div>
        <img src="{{ asset('images/gambar.png') }}" alt="Website UMKM" />
      </div>
    </section>

    <<section id="kontak" style="text-align: left;">
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
