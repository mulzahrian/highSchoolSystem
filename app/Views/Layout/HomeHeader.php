<!DOCTYPE html>
<html lang="en">
  <link rel="shortcut icon" type="image/png" href="<?= base_url('assets/images/logos/favicon.ico') ?>" />

<!-- Top Logo Bar -->
<div class="container-fluid d-flex flex-column align-items-center py-2 border-bottom bg-white text-center">

  <!-- Logos -->
  <div class="d-flex align-items-center gap-3">
<img src="<?= base_url('assets2/img/Logo.png') ?>" alt="Logo MAN" height="40">
<img src="<?= base_url('assets2/img/KementerianLogo.png') ?>" alt="Logo Kementrian" height="40">
  </div>

  <!-- School Name -->
  <div class="fw-semibold mt-1">
    MAN 1 Mandailing Natal
  </div>

  <!-- Tagline -->
  <span class="badge rounded-pill bg-primary px-3 py-2 mt-2">
    Smart, Disiplin, Religius
  </span>

</div>



<head>
  
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Man 1 Mandailing Natal</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,10...&family=Raleway:ital,wght@...&display=swap" rel="stylesheet">
<!-- Vendor CSS Files -->
<link href="<?= base_url('assets2/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
<link href="<?= base_url('assets2/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
<link href="<?= base_url('assets2/vendor/aos/aos.css') ?>" rel="stylesheet">
<link href="<?= base_url('assets2/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">
<link href="<?= base_url('assets2/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
<!-- Main CSS File -->
<link href="<?= base_url('assets2/css/main.css') ?>" rel="stylesheet">


  <!-- =======================================================
  * Template Name: College
  * Template URL: https://bootstrapmade.com/college-bootstrap-education-template/
  * Updated: Jun 19 2025 with Bootstrap v5.3.6
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-end">

      <a href="index.html" class="align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
<img src="<?= base_url('assets2/img/Logo.png') ?>" alt="" height="70">
        <!-- <h1 class="sitename">College</h1> -->
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
        <li class="dropdown"><a href="<?= base_url('home') ?>"><span>Home</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="<?= base_url('out-speach-headmaster') ?>">Sambutan Kepala Madrasah</a></li>
              <li><a href="<?= base_url('out-video-profile') ?>">Video Profile Madrasah</a></li>
              <li><a href="<?= base_url('sejarah') ?>">Sejarah</a></li>
              <li><a href="<?= base_url('visi-misi') ?>">Visi Misi</a></li>
              <li><a href="<?= base_url('struktur-organisasi') ?>">Struktur Organisasi</a></li>
              <li><a href="<?= base_url('lokasi') ?>">Lokasi</a></li>
              <li><a href="<?= base_url('profil-guru') ?>">Profil Guru</a></li>
              <li><a href="<?= base_url('pendidik') ?>">Tenaga Pendidik</a></li>
              <li><a href="<?= base_url('out-profile-teacher') ?>">Tenaga Kependidik</a></li>
              <li><a href="<?= base_url('sarana-prasarana') ?>">Sarana Prasarana</a></li>
            </ul>
          </li>
          <li><a href="<?= base_url('berita') ?>">Berita</a></li>
          <li class="dropdown"><a href="<?= base_url('home') ?>"><span>Program</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="<?= base_url('rencana-strategis') ?>">Rencana Strategis</a></li>
              <li class="dropdown"><a href=""><span>Akademik</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>    
              <li><a href="<?= base_url('pengumuman') ?>">Pengumuman</a></li>
              <li><a href="<?= base_url('kalender-akademik') ?>">Kalender Akademin</a></li>
              <li><a href="<?= base_url('kom') ?>">KOM</a></li>
              <li><a href="<?= base_url('bimbingan') ?>">Bimbingan Karir dan Study Lanjut</a></li>
              <li><a href="<?= base_url('outpjj') ?>">Pembelajaran Jarak Jauh</a></li>
              <li class="dropdown">
                <a href="#">PTMT<i class="bi bi-chevron-down toggle-dropdown"></i></a>

                <?php if (!empty($ptmt)) : ?>
                    <ul>
                        <?php foreach ($ptmt as $item) : ?>
                            <li>
                                <a href="<?= base_url('outptmt/' . $item['ptmt_id']) ?>">
                                    <?= esc($item['header']) ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </li>
              <li><a href="<?= base_url('outsks') ?>">SKS</a></li>
              <li><a href="<?= base_url('outukbm') ?>">UKBM</a></li>
              </ul>
              <li>
              <li class="dropdown">
                <a href="#">Keterampilan<i class="bi bi-chevron-down toggle-dropdown"></i></a>

                <?php if (!empty($keterampilan)) : ?>
                    <ul>
                        <?php foreach ($keterampilan as $item) : ?>
                            <li>
                                <a href="<?= base_url('outketerampilan/' . $item['keterampilan_id']) ?>">
                                    <?= esc($item['header']) ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </li>
              <li class="dropdown">
                <a href="#">Ekstrakurikuler<i class="bi bi-chevron-down toggle-dropdown"></i></a>

                <?php if (!empty($ekstrakulikuler)) : ?>
                    <ul>
                        <?php foreach ($ekstrakulikuler as $item) : ?>
                            <li>
                                <a href="<?= base_url('outekstrakulikuler/' . $item['ekstrakulikuler_id']) ?>">
                                    <?= esc($item['header']) ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </li>
              <li class="dropdown">
                <a href="<?= base_url('visi-misi') ?>">Layanan Madrasah<i class="bi bi-chevron-down toggle-dropdown"></i></a>

                <?php if (!empty($layanan_madrasah)) : ?>
                    <ul>
                        <?php foreach ($layanan_madrasah as $item) : ?>
                            <li>
                                <a href="<?= base_url('outlayanan-madrasah/' . $item['layanan_id']) ?>">
                                    <?= esc($item['header']) ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </li>
            </ul>
          </li>
          <li class="dropdown"><a href="<?= base_url('home') ?>"><span>Zona Integritas</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li class="dropdown"><a href="<?= base_url('home') ?>"><span>Akuntabilitas</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>    
              <li><a href="<?= base_url('outlaporan-kinerja') ?>">Laporan Kinerja</a></li>
              <li><a href="<?= base_url('outperkin') ?>">Perkin</a></li>
              </ul>
              <li>
              <li><a href="<?= base_url('outrelasi-belanja') ?>">Realisasi Belanja</a></li>
              <li><a href="<?= base_url('outlima-budaya') ?>">5 Budaya Kerja Kementrian</a></li>
              <li><a href="<?= base_url('outzona-integrasi') ?>">Zona Integritas - Eviden</a></li>
              <li class="dropdown">
    <a href="<?= base_url('outzona-integrasi') ?>">Pelayanan Public<i class="bi bi-chevron-down toggle-dropdown"></i></a> 
    <?php if (!empty($layanan_public)) : ?>
        <ul>
            <?php foreach ($layanan_public as $item) : ?>
                <li>
                    <a href="<?= base_url('outlayanan-public/' . $item['layanan_id']) ?>">
                        <?= esc($item['header']) ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</li>
<li class="dropdown">
    <a href="#">PPID<i class="bi bi-chevron-down toggle-dropdown"></i></a>

    <?php if (!empty($ppid)) : ?>
        <ul>
            <?php foreach ($ppid as $item) : ?>
                <li>
                    <a href="<?= base_url('outppid/' . $item['ppid_id']) ?>">
                        <?= esc($item['header']) ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</li>
             <li><a href="<?= base_url('outyel-yel') ?>">Yel-Yel dan Jargon</a></li>
             <li><a href="<?= base_url('outpengendalian-intern') ?>">Sistem Pengendalian Intern Pemerintah</a></li>
             <li><a href="<?= base_url('outwhistle-blowing') ?>">Whistleblowing System</a></li>
             <li><a href="<?= base_url('outpengendalian-gratifikasi') ?>">Pengendalian Gratifikasi</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="<?= base_url('home') ?>"><span>PTSP</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="<?= base_url('outtracat') ?>">TRACAT</a></li>
                  <li><a href="<?= base_url('outmaklumat-layanan') ?>">Maklumat Layanan</a></li>
                  <li><a href="<?= base_url('outalur-tamu') ?>">Alur Pelayanan Tamu</a></li>
                  <li><a href="<?= base_url('outalur-penelitian') ?>">Alur Izin Penelitian</a></li>
                  <li><a href="<?= base_url('outalur-penelitian') ?>">Legalisasi Dokumen</a></li>
                  <li><a href="<?= base_url('outpeminjaman-barang') ?>">Peminjaman/Pengembalian Barang</a></li>
                  <li><a href="<?= base_url('outmutasi-siswa') ?>">Mutasi Siswa</a></li>
                  <li><a href="<?= base_url('outsurvey-kepuasan') ?>">Survei Kepuasan Masyarakat</a></li>
                </ul>
          </li>
          <li class="dropdown"><a href="#"><span>PMB</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="https://www.ppdb.mansatumandailingnatal.sch.id/">PMB</a></li>
                  <li><a href="<?= base_url('outppdb') ?>">Pengumuman PMB</a></li>
                </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Agen Perubahan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
<?php if (!empty($agen_perubahan)): ?>
    <?php foreach ($agen_perubahan as $item): ?>
        <li>
            <a href="<?= base_url('agen-perubahan/' . urlencode(strtolower($item['header']))) ?>">
                <?= esc($item['header']) ?>
            </a>
        </li>
    <?php endforeach; ?>
<?php else: ?>
    <li><a href="#">No Data</a></li>
<?php endif; ?>
</ul>
          </li>

          <li class="dropdown"><a href="#"><span>Fitur</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="<?= base_url('auth') ?>">Login</a></li>
              <li><a href="<?= base_url('outdownload') ?>">Download</a></li>
              <li><a href="<?= base_url('outgaleri') ?>">Galeri</a></li>
              <li><a href="<?= base_url('outartikel') ?>">Artikel</a></li>
              <li><a href="<?= base_url('outkaleidoskop') ?>">Kaleidoskop</a></li>
              <li><a href="<?= base_url('outalur-penelitian') ?>">Alur Izin Penelitian</a></li>
              <li><a href="https://rdm.man1mandailingnatal.sch.id/auth#!/dashboard">Raport Digital</a></li>
              <li class="dropdown"><a href="#"><span>NISN</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="https://nisn.data.kemdikbud.go.id/">Cek NISN</a></li>
                  <li><a href="https://nisn.data.kemdikbud.go.id/index.php/Cindex/formcaribynama">Cek Berdasarkan Nama</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <!-- <li><a href="contact.html">Contact</a></li> -->
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>

      <!-- Banner Section -->
<!-- Carousel Banner -->
<div id="bannerCarousel" 
     class="carousel slide carousel-fade position-relative" 
     data-bs-ride="carousel" 
     data-bs-interval="2000">

  <div class="carousel-inner">

    <div class="carousel-item active">
      <img src="<?= base_url('assets2/img/banner.jpeg') ?>" 
           class="d-block w-100" 
           style="height:400px; object-fit:cover;"
           alt="Banner 1">
    </div>

    <div class="carousel-item">
      <img src="<?= base_url('assets2/img/banner2.jpeg') ?>" 
           class="d-block w-100"
           style="height:400px; object-fit:cover;"
           alt="Banner 2">
    </div>

    <div class="carousel-item active">
      <img src="<?= base_url('assets2/img/banner3.jpeg') ?>" 
           class="d-block w-100" 
           style="height:400px; object-fit:cover;"
           alt="Banner 3">
    </div>

  </div>

  <!-- Overlay -->
  <div class="position-absolute top-50 start-50 translate-middle text-center w-100" style="z-index: 10;">

    <!-- Logo -->
    <div class="mb-2">
      <img src="<?= base_url('assets2/img/Logo.png') ?>" height="50">
      <img src="<?= base_url('assets2/img/KementerianLogo.png') ?>" height="50">
    </div>

    <!-- Text -->
    <h2 class="fw-bold text-white bg-dark bg-opacity-50 px-4 py-2 rounded d-inline-block">
      Selamat Datang di MAN 1 Mandailing Natal
    </h2>

    <p class="fw-bold mt-2 zona-text">
  Zona Integritas
</p>

  </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<style>
  .zona-text {
  font-size: 32px; /* lebih besar */
  font-weight: 800;
  color: red;

  /* garis luar putih */
  -webkit-text-stroke: 1.5px white;

  /* fallback biar tetap keliatan di browser lain */
  text-shadow: 
    1px 1px 0 white,
   -1px 1px 0 white,
    1px -1px 0 white,
   -1px -1px 0 white;
}
</style>