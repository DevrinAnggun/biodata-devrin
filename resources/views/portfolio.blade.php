<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portofolio Devrin</title>
  @vite('resources/css/app.css')


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

  <section id="pengalaman">
  <h2>Pengalaman & Kegiatan</h2>
  <div class="experience-grid">

    <div class="experience-item">
      <a href="{{ asset('images/jamberskuy.jpg') }}" target="_blank">
        <img src="{{ asset('images/jamberskuy.jpg') }}" alt="KWT Karangtengah" />
      </a>
      <h3>Sekretaris JAMBERSKUY UKM SENI TEMANI</h3>
      <p>
        Sebagai sekretaris dalam organisasi JAMBERSKUY UKM SENI TEMANI, saya berperan dalam mendukung kelancaran administrasi dan komunikasi internal. 
        Tugas utama meliputi pencatatan hasil rapat, pengarsipan dokumen penting, penyusunan agenda kegiatan, serta memastikan koordinasi antaranggota berjalan efektif.
      </p>
      <a href="{{ url('kegiatan1') }}" class="read-more">Baca Selengkapnya</a>

    </div>

    <div class="experience-item">
      <a href="{{ asset('images/serbu.jpg') }}" target="_blank">
        <img src="{{ asset('images/serbu.jpg') }}" alt="Website Kelurahan" />
      </a>
      <h3>Anggota PDD SERBU (Software Engineering Berbuka)</h3>
     {{-- DESKRIPSI --}}
<p>
    Sebagai <b>Anggota PDD (Publikasi, Dokumentasi, dan Desain) SERBU</b> atau <b>Software Engineering Berbuka</b>, 
    saya berperan aktif dalam mengelola informasi serta mendukung kebutuhan publikasi acara. 
    Divisi PDD memiliki tanggung jawab utama dalam menyajikan informasi kegiatan secara menarik dan komunikatif, 
    baik melalui media cetak maupun digital. 
</p>

      <a href="{{ url('kegiatan2') }}" class="read-more">Baca Selengkapnya</a>
    </div>

    <div class="experience-item">
  <a href="{{ asset('images/humas.jpg') }}" target="_blank">
    <img src="{{ asset('images/humas.jpg') }}" alt="Staff Humas LDK & MAKRAB SE 2023" />
  </a>
  <h3>Staff Humas LDK & MAKRAB SE 2023</h3>
  <p>
    Berperan dalam menjalin komunikasi, publikasi acara, dan koordinasi informasi 
    antara panitia, peserta, serta pihak eksternal selama kegiatan LDK & MAKRAB Software Engineering 2023.
  </p>
  <a href="{{ url('kegiatan3') }}" class="read-more">Baca Selengkapnya</a>
</div>

    <div class="experience-item">
      <a href="{{ asset('images/stuban.jpg') }}" target="_blank">
        <img src="{{ asset('images/stuban.jpg') }}" alt="Website UMKM" />
      </a>
      <h3>Ketua Pelaksana Studi Banding HMSE ITTP X HMTI UNUGHA</h3>
      <p>
        Sebagai Ketua Pelaksana dalam kegiatan Studi Banding antara Himpunan Mahasiswa Software Engineering (HMSE) ITTP 
        dengan Himpunan Mahasiswa Teknik Informatika (HMTI) UNUGHA, saya bertanggung jawab penuh dalam perencanaan, pelaksanaan, serta evaluasi acara.
      </p>
      <a href="{{ url('kegiatan4') }}" class="read-more">Baca Selengkapnya</a>
    </div>

    <div class="experience-item">
      <a href="{{ asset('images/diesnatalis.jpg') }}" target="_blank">
        <img src="{{ asset('images/diesnatalis.jpg') }}" alt="Website UMKM" />
      </a>
      <h3>Sekretaris DIESNATALIS SE Ke-7</h3>
      <p>
        Sebagai Ketua Pelaksana dalam kegiatan Studi Banding antara Himpunan Mahasiswa Software Engineering (HMSE) ITTP 
        dengan Himpunan Mahasiswa Teknik Informatika (HMTI) UNUGHA, saya bertanggung jawab penuh dalam perencanaan, pelaksanaan, serta evaluasi acara.
      </p>
      <a href="{{ url('kegiatan5') }}" class="read-more">Baca Selengkapnya</a>
    </div>

    <div class="experience-item">
  <a href="{{ asset('images/intern.jpg') }}" target="_blank">
    <img src="{{ asset('images/intern.jpg') }}" alt="Internship HMSE Bidang PEMDA" />
  </a>
  <h3>Internship HMSE Bidang PEMDA</h3>
  <p>
    Mendukung program kerja di bidang minat dan bakat, mulai dari penyusunan agenda, pelaksanaan acara, 
    hingga dokumentasi kegiatan.  
  </p>
  <a href="{{ url('kegiatan6') }}" class="read-more">Baca Selengkapnya</a>
</div>


    <div class="experience-item">
  <a href="{{ asset('images/lainnya.jpg') }}" target="_blank">
    <img src="{{ asset('images/lainnya.jpg') }}" alt="Pengalaman Lainnya" />
  </a>
  <h3>Pengalaman Lainnya</h3>
  <p>
    Daftar pengalaman dan kegiatan tambahan yang tidak ditampilkan di halaman utama. 
    Klik untuk melihat selengkapnya.
  </p>
  <a href="{{ url('kegiatan-lainnya') }}" class="read-more">Lihat Daftar Lengkap</a>
</div>

  </div>
</section>


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

    <section id="kontak">
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
