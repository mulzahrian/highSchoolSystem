<!DOCTYPE html>
<html lang="en">

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
    <link href="<?= base_url('assets/images/logos/favicon.ico') ?>" rel="icon">
    <link href="<?= base_url('assets/images/logos/favicon.ico') ?>" rel="apple-touch-icon">

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
              <li><a href="about.html">Sambutan Kepala Madrasah</a></li>
              <li><a href="<?= base_url('sejarah') ?>">Sejarah</a></li>
              <li><a href="<?= base_url('visi-misi') ?>">Visi Misi</a></li>
              <li><a href="<?= base_url('struktur-organisasi') ?>">Struktur Organisasi</a></li>
              <li><a href="<?= base_url('lokasi') ?>">Lokasi</a></li>
              <li><a href="<?= base_url('profil-guru') ?>">Profil Guru</a></li>
              <li><a href="<?= base_url('pendidik') ?>">Tenaga Pendidik</a></li>
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
              <li><a href="<?= base_url('kalender-akademik') ?>">Pembelajaran Jarak Jauh</a></li>
              <li><a href="<?= base_url('kalender-akademik') ?>">PTMT</a></li>
              <li><a href="<?= base_url('kalender-akademik') ?>">SKS</a></li>
              <li><a href="<?= base_url('kalender-akademik') ?>">UKBM</a></li>
              </ul>
              <li>
              <li><a href="<?= base_url('visi-misi') ?>">Keterampilan</a></li>
              <li><a href="<?= base_url('visi-misi') ?>">Ekstra Kulikuler</a></li>
              <li><a href="<?= base_url('visi-misi') ?>">Layanan Madrasah</a></li>
            </ul>
          </li>
          <li><a href="news.html">Zona Integritas</a></li>
          <li class="dropdown"><a href="#"><span>PTSP</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="<?= base_url('outtracat') ?>">TRACAT</a></li>
                  <li><a href="<?= base_url('outmaklumat-layanan') ?>">Maklumat Layanan</a></li>
                  <li><a href="<?= base_url('outmaklumat-layanan') ?>">Alur Pelayanan Tamu</a></li>
                </ul>
          </li>
          <li class="dropdown"><a href="#"><span>PPDB</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="https://www.ppdb.mansatumandailingnatal.sch.id/">PPDB</a></li>
                  <li><a href="<?= base_url('outppdb') ?>">Pengumuman PPDB</a></li>
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
<div class="position-relative text-center">
<img src="<?= base_url('assets2/img/banner.jpeg') ?>"
     alt="Banner MAN 1 Mandailing Natal"
     class="img-fluid w-100">

  <!-- Text inside banner -->
<div class="position-absolute top-50 start-50 translate-middle text-center">
  <h2 class="fw-bold mb-0 text-white bg-dark bg-opacity-50 px-3 py-2 rounded">
    MAN 1 Mandailing Natal
  </h2>
</div>

</div>