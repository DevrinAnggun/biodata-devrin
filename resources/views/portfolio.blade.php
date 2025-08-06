<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portofolio Devrin</title>
  <style>
    :root {
      --primary-color: #0d47a1;
      --accent-color: #1976d2;
      --bg-color: #ffffff;
      --text-color: #333333;
      --section-bg: #f0f6ff;
    }

    html {
      scroll-behavior: smooth;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      padding: 0;
      background-color: var(--bg-color);
      color: var(--text-color);
    }

    header {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      background-color: transparent;
      color: white;
      text-align: center;
      padding: 10px 10px;
      z-index: 1000;
      transition: background-color 0.3s ease, box-shadow 0.3s ease;
    }

    #navbar.scrolled {
      background-color: var(--primary-color);
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
    }

    nav {
      margin-top: 10px;
    }

    nav a {
      margin: 0 20px;
      color: white;
      text-decoration: none;
      font-weight: bold;
      font-size: 16px;
    }

    nav a:hover {
      text-decoration: underline;
    }

    main {
      max-width: 900px;
      margin: 140px auto 40px;
      background-color: var(--section-bg);
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    }

    h1, h2 {
      color: var(--accent-color);
    }

    section {
      margin-bottom: 80px;
    }

    footer {
      text-align: center;
      padding: 20px;
      background-color: var(--primary-color);
      color: white;
    }

    .cert-item, .project-item {
      margin-bottom: 10px;
    }

    .project-container {
      display: flex;
      align-items: center;
      margin-bottom: 40px;
      gap: 20px;
      flex-wrap: wrap;
    }

    .project-container.reverse {
      flex-wrap: wrap-reverse;
    }

    .project-container img {
      width: 280px;
      border-radius: 10px;
    }

    .project-container div {
      flex: 1;
    }

    .cert-item img {
  width: 100%;
  max-width: 300px;
  transition: transform 0.3s ease;
}

.cert-item img:hover {
  transform: scale(1.03);
}

    .cert-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 30px;
  margin-top: 30px;
}

.cert-item {
  background-color: white;
  padding: 15px;
  border-radius: 10px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
  text-align: center;
}

.cert-item img {
  width: 100%;
  max-height: 180px;
  object-fit: contain;
  border-radius: 8px;
  margin-top: 10px;
  transition: transform 0.3s ease;
}

.cert-item img:hover {
  transform: scale(1.05);
}

.experience-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
  gap: 30px;
  margin-top: 30px;
}

.experience-item {
  background-color: white;
  padding: 20px;
  border-radius: 12px;
  box-shadow: 0 2px 10px rgba(0,0,0,0.1);
  text-align: center;
}

.experience-item img {
  width: 100%;
  max-height: 180px;
  object-fit: cover;
  border-radius: 10px;
  transition: transform 0.3s ease;
}

.experience-item img:hover {
  transform: scale(1.05);
}

.experience-item h3 {
  color: var(--accent-color);
  margin-top: 15px;
}

  </style>
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
  <h2>Pengalaman</h2>
  <div class="experience-grid">

    <div class="experience-item">
      <a href="{{ asset('images/kegiatan.jpg') }}" target="_blank">
        <img src="{{ asset('images/kegiatan.jpg') }}" alt="KWT Karangtengah" />
      </a>
      <h3>Aplikasi KWT Karangtengah</h3>
      <p>Mengembangkan aplikasi mobile berbasis Flutter untuk membantu warga desa memesan produk UMKM. Saya merancang UI/UX dan menghubungkan ke sistem pelacakan pesanan.</p>
    </div>

    <div class="experience-item">
      <a href="{{ asset('images/kegiatan.jpg') }}" target="_blank">
        <img src="{{ asset('images/kegiatan.jpg') }}" alt="Website Kelurahan" />
      </a>
      <h3>Website Kelurahan Karangtengah</h3>
      <p>Berperan sebagai fullstack developer dalam pengembangan website layanan digital desa. Fitur utama termasuk pengajuan surat online dan manajemen data penduduk.</p>
    </div>

    <div class="experience-item">
      <a href="{{ asset('images/kegiatan.jpg') }}" target="_blank">
        <img src="{{ asset('images/kegiatan.jpg') }}" alt="Website RT 01" />
      </a>
      <h3>Website RT 01 Karangtengah</h3>
      <p>Membuat website berbasis PHP native untuk menyampaikan informasi lingkungan, jadwal agenda RT, dan kontak warga. Fokus pada kemudahan akses dan kecepatan.</p>
    </div>

    <div class="experience-item">
      <a href="{{ asset('images/kegiatan.jpg') }}" target="_blank">
        <img src="{{ asset('images/kegiatan.jpg') }}" alt="Website UMKM" />
      </a>
      <h3>Website UMKM Desa</h3>
      <p>Merancang situs katalog produk UMKM yang dapat berkembang menjadi marketplace. Saya fokus pada integrasi data produk dan halaman profil untuk tiap pelaku usaha.</p>
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
      <p>Email: devrin.anggun@example.com</p>
      <p>WhatsApp: 0812-xxxx-xxxx</p>
      <p>LinkedIn: <a href="https://linkedin.com/in/devrin" target="_blank">linkedin.com/in/devrin</a></p>
      <p>GitHub: <a href="https://github.com/devrinanggun" target="_blank">github.com/devrinanggun</a></p>
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
