<style>
.highlight-card-box {
  position: relative;
  height: 350px;
  border-radius: 20px;
  overflow: hidden;
  box-shadow: 0 10px 30px rgba(0,0,0,0.2);
}

/* Background Image */
.highlight-bg {
  position: absolute;
  width: 100%;
  height: 100%;
  background-size: cover;
  background-position: center;
  filter: grayscale(30%);
}

/* Overlay Biru Gradient */
.highlight-overlay {
  position: absolute;
  width: 100%;
  height: 100%;
  background: linear-gradient(to right, rgba(0,123,255,0.85), rgba(0,0,0,0.2));
}

/* Content */
.highlight-content {
  position: relative;
  z-index: 2;
  max-width: 600px;
  padding: 50px;
  color: #fff;
}

/* Badge */
.badge-highlight {
  background: #fff;
  color: #007bff;
  padding: 5px 12px;
  border-radius: 20px;
  font-weight: 600;
  display: inline-block;
  margin-bottom: 15px;
}

/* Title */
.highlight-content h2 {
  font-size: 28px;
  font-weight: 700;
  margin-bottom: 10px;
}

/* Desc */
.highlight-content p {
  font-size: 15px;
  margin-bottom: 20px;
}

/* Button */
.btn-highlight {
  display: inline-block;
  padding: 10px 20px;
  background: #fff;
  color: #000;
  border-radius: 25px;
  font-weight: 600;
  text-decoration: none;
}

.btn-highlight:hover {
  background: #000;
  color: #fff;
}

/* Responsive */
@media (max-width: 768px) {
  .highlight-content {
    padding: 25px;
  }

  .highlight-content h2 {
    font-size: 20px;
  }
}

/* Pengumuman */

.announcement-box {
  margin-top: 30px;
}

/* Overlay beda warna (biar distinguish dari news) */
.announcement-overlay {
  position: absolute;
  width: 100%;
  height: 100%;
  background: linear-gradient(to right, rgba(255,193,7,0.9), rgba(0,0,0,0.3));
}
</style>
  
  
  <main class="main">

  <!-- section  -->

  <section id="highlight-card" class="highlight-card section">

  <div class="container">
    <?php if (!empty($news_highlight)): ?>

      <div class="highlight-card-box">

        <!-- Background Image -->
        <div class="highlight-bg"
             style="background-image: url('<?= base_url('uploads/news/' . $news_highlight['thumbnail']) ?>');">
        </div>

        <!-- Overlay -->
        <div class="highlight-overlay"></div>

        <!-- Content -->
        <div class="highlight-content">

          <span class="badge-highlight">Highlight</span>

          <h2>
            <?= esc($news_highlight['title']) ?>
          </h2>

          <p>
            <?= word_limiter(strip_tags($news_highlight['content']), 20) ?>
          </p>

          <a href="<?= base_url('news/' . $news_highlight['news_id']) ?>"
             class="btn-highlight">
            BACA SELENGKAPNYA
          </a>

        </div>

      </div>

    <?php endif; ?>
  </div>

</section>

  <!-- section -->

<!--Section pengumuman -->
<section id="announcement" class="announcement section">

  <div class="container">
    <?php if (!empty($announcement)): ?>

      <div class="highlight-card-box announcement-box">

        <!-- Background -->
        <div class="highlight-bg"
             style="background-image: url('<?= base_url('uploads/announcement/' . $announcement['thumbnail']) ?>');">
        </div>

        <!-- Overlay (beda warna biar beda vibe) -->
        <div class="announcement-overlay"></div>

        <!-- Content -->
        <div class="highlight-content">

          <span class="badge-highlight bg-warning text-dark">
            Pengumuman <?= esc($announcement['year']) ?>
          </span>

          <h2>
            Pengumuman Terbaru
          </h2>

          <p>
            <?= word_limiter(strip_tags($announcement['content']), 25) ?>
          </p>

          <!-- OPTIONAL kalau nanti mau detail page -->
          <!--
          <a href="<?= base_url('announcement/' . $announcement['announcement_id']) ?>"
             class="btn-highlight">
            Lihat Detail
          </a>
          -->

        </div>

      </div>

    <?php endif; ?>
  </div>

</section>

<!--Section pengumuman -->
    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="hero-wrapper">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 hero-content" data-aos="fade-right" data-aos-delay="100">
              <h1>
  <?= isset($opening) ? esc($opening['header']) : 'Smart, Disiplin, Religius' ?>
</h1>
<p>
  <?= isset($opening)
      ? esc(strip_tags($opening['content']))
      : 'MAN 1 Mandailing Natal berkomitmen menyelenggarakan pendidikan yang bermutu...' ?>
</p>              <div class="action-buttons">
                <a href="#" class="btn-primary">Start Your Journey</a>
              </div>
            </div>
            <div class="col-lg-6 hero-media" data-aos="zoom-in" data-aos-delay="200">
<img src="<?= isset($opening) && $opening['image']
    ? base_url('uploads/opening/' . $opening['image'])
    : base_url('assets2/img/education/image1.jpeg') ?>"
     alt="Education"
     class="img-fluid main-image">
              <div class="image-overlay">
                <div class="badge-accredited">
                  <i class="bi bi-patch-check-fill"></i>
                  <span>Accredited Excellence</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="feature-cards-wrapper" data-aos="fade-up" data-aos-delay="300">
        <div class="container">
          <div class="row gy-4">
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <div class="feature-card">
                <div class="feature-icon">
                  <i class="bi bi-book-fill"></i>
                </div>
                <div class="feature-content">
                  <h3>Smart</h3>
                  <p>Mengembangkan kecerdasan intelektual, kreativitas, dan kemampuan berpikir kritis peserta didik melalui pembelajaran yang aktif, inovatif, dan berorientasi pada prestasi.</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
              <div class="feature-card active">
                <div class="feature-icon">
                  <i class="bi bi-laptop-fill"></i>
                </div>
                <div class="feature-content">
                  <h3>Disiplin</h3>
                  <p>Menanamkan sikap tertib, tanggung jawab, dan konsistensi dalam belajar maupun berperilaku sebagai fondasi utama kesuksesan di masa depan.</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
              <div class="feature-card">
                <div class="feature-icon">
                  <i class="bi bi-people-fill"></i>
                </div>
                <div class="feature-content">
                  <h3>Religius</h3>
                  <p>Membentuk karakter peserta didik yang beriman, berakhlak mulia, dan menjadikan nilai-nilai keislaman sebagai pedoman dalam kehidupan sehari-hari.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- <div class="upcoming-event" data-aos="fade-up" data-aos-delay="400">
        <div class="container">
          <div class="event-content">
            <div class="event-date">
              <span class="day">15</span>
              <span class="month">NOV</span>
            </div>
            <div class="event-info">
              <h3>Spring Semester Open House</h3>
              <p>Join us to explore campus facilities, meet our faculty, and learn about scholarship opportunities.</p>
            </div>
            <div class="event-action">
              <a href="#" class="btn-event">RSVP Now</a>
              <span class="countdown">Starts in 3 weeks</span>
            </div>
          </div>
        </div>
      </div> -->

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center g-5">
          <div class="col-lg-6">
            <div class="about-content" data-aos="fade-up" data-aos-delay="200">
              <h3>Our Story</h3>
              <h2>Menapaki Sejarah, Membangun Generasi Berilmu dan Berakhlak</h2>
              <p></p>

              <div class="timeline">

  <?php if (!empty($histories)): ?>
    <?php foreach ($histories as $row): ?>
      <div class="timeline-item">
        <div class="timeline-dot"></div>
        <div class="timeline-content">
          <h4><?= esc($row['tahun']) ?></h4>
          <p><?= esc($row['history']) ?></p>
        </div>
      </div>
    <?php endforeach ?>
  <?php endif ?>

</div>

            </div>
          </div>

          <div class="col-lg-6">
  <div class="about-image" data-aos="zoom-in" data-aos-delay="300">
    <img src="<?= base_url('assets2/img/page2.jpeg') ?>"
         alt="Campus"
         class="img-fluid rounded">

    <div class="mission-vision" data-aos="fade-up" data-aos-delay="400">

      <!-- MISSION -->
      <div class="mission">
        <h3>Our Mission</h3>
        <?= isset($mission)
            ? $mission['content']
            : '<p>Mission content not available.</p>' ?>
      </div>

      <!-- VISION -->
      <div class="vision">
        <h3>Our Vision</h3>
        <?= isset($vision)
            ? $vision['content']
            : '<p>Vision content not available.</p>' ?>
      </div>

    </div>
  </div>
</div>
      </div>

    </section><!-- /About Section -->

    <!-- Featured Programs Section -->
    <section id="featured-programs" class="featured-programs section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Berita Terkini</h2>
        <p>Informasi Terkni Mengenai Man 1 Mandailing Natal</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-5">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
  <?php if (!empty($news_highlight)): ?>
    <div class="program-banner">
      <div class="banner-image">
        <img src="<?= base_url('uploads/news/' . $news_highlight['thumbnail']) ?>"
             alt="Berita"
             class="img-fluid">
        <div class="banner-badge">
          <span class="badge-text">Highlight</span>
        </div>
      </div>

      <div class="banner-info">
        <div class="program-header">
          <h3><?= esc($news_highlight['title']) ?></h3>
        </div>

        <?= $news_highlight['content'] ?>

        <a href="<?= base_url('news/' . $news_highlight['news_id']) ?>"
           class="discover-btn">
          Baca Berita
        </a>
      </div>
    </div>
  <?php endif ?>
</div>


<div class="col-lg-6">
  <div class="programs-grid">
    <div class="row g-3">

      <?php foreach ($news_normal as $i => $row): ?>
        <div class="col-12" data-aos="fade-left" data-aos-delay="<?= 200 + ($i * 100) ?>">
          <div class="program-item">

            <div class="item-icon">
              <img src="<?= base_url('uploads/news/' . $row['thumbnail']) ?>"
                   alt="Berita"
                   class="img-fluid">
            </div>

            <div class="item-content">
              <h4><?= esc($row['title']) ?></h4>
              <?= esc(substr(strip_tags($row['content']), 0, 120)) ?>...
            </div>

            <div class="item-arrow">
              <a href="<?= base_url('news/' . $row['news_id']) ?>">
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>

          </div>
        </div>
      <?php endforeach ?>

    </div>
  </div>
</div>
</div>
</div>

    </section><!-- /Featured Programs Section -->

    
    <!-- Recent News Section -->
    <section id="recent-news" class="recent-news section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Recent News</h2>
        <p>Berita Berita Terkini</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

<?php foreach ($news as $item): ?>
  <div class="col-xl-6" data-aos="fade-up">

    <a href="<?= base_url('news/' . $item['news_id']) ?>"
       class="text-decoration-none text-dark">

      <article class="post-item d-flex">

        <div class="post-img">
          <img src="<?= base_url('uploads/news/' . $item['thumbnail']) ?>"
               alt="<?= esc($item['title']) ?>"
               class="img-fluid"
               loading="lazy">
        </div>

        <div class="post-content flex-grow-1">
          <span class="category">Berita</span>

          <h2 class="post-title">
            <?= esc($item['title']) ?>
          </h2>

          <p class="post-description">
            <?= word_limiter(strip_tags($item['content']), 25) ?>
          </p>

          <div class="post-meta">
            <span class="post-date">
              <?= date('d M Y', strtotime($item['created_at'])) ?>
            </span>
          </div>
        </div>

      </article>

    </a>

  </div>
<?php endforeach ?>


</div>


      </div>

    </section><!-- /Recent News Section -->


   <!-- section navigasi -->
<section class="navigation-section py-5">
  <div class="container">

    <h3 class="section-title mb-4">Navigasi</h3>
    <p class="section-subtitle mb-4">Akses Fitur Website Lebih Cepat</p>

    <div class="row g-4">

      <!-- Item -->
      <div class="col-12 col-md-6 col-lg-4">
        <a href="https://www.ppdb.mansatumandailingnatal.sch.id/" class="nav-card">
          <i class="bi bi-star" style="font-size:2rem;"></i>
          <span>SNPBD</span>
        </a>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <a href="https://rdm.man1mandailingnatal.sch.id/auth#!/dashboard" class="nav-card">
          <i class="bi bi-journal-text" style="font-size:2rem;"></i>
          <span>RAPORT</span>
        </a>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <a href="<?= base_url('outtracat') ?>" class="nav-card">
          <i class="bi bi-box-arrow-in-right" style="font-size:2rem;"></i>
          <span>PTSP</span>
        </a>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <a href="#" class="nav-card">
          <i class="bi bi-info-circle" style="font-size:2rem;"></i>
          <span>PPID</span>
        </a>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <a href="<?= base_url('outzona-integrasi') ?>" class="nav-card">
          <i class="bi bi-pencil-square" style="font-size:2rem;"></i>
          <span>ZONA INTEGRITAS</span>
        </a>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <a href="https://rdm.man1mandailingnatal.sch.id/auth#!/dashboard" class="nav-card">
          <i class="bi bi-exclamation-circle" style="font-size:2rem;"></i>
          <span>LAPOR</span>
        </a>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <a href="<?= base_url('outmutasi-siswa') ?>" class="nav-card">
          <i class="bi bi-people" style="font-size:2rem;"></i>
          <span>KESISWAAN</span>
        </a>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <a href="<?= base_url('outsks') ?>" class="nav-card">
          <i class="bi bi-book" style="font-size:2rem;"></i>
          <span>KURIKULUM</span>
        </a>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <a href="#" class="nav-card">
          <i class="bi bi-people-network" style="font-size:2rem;"></i>
          <span>HUMAS</span>
        </a>
      </div>

    </div>
  </div>
</section>

<style>
/* section wrapper */
.navigation-section {
  background-color: #04415f; /* biru sekolahan */
  color: #fff;
  border-radius: 18px;
  padding: 40px 20px;
}

.navigation-section .section-title {
  font-weight: 700;
  color: #fff;
  text-align: left;
}

.navigation-section .section-subtitle {
  color: #fff;
  text-align: left;
}

/* card styling */
.nav-card {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 10px;
  padding: 25px 15px;
  background-color: transparent;
  border: 2px solid #fff;
  border-radius: 12px;
  text-align: center;
  color: #fff;
  font-weight: 600;
  transition: all 0.3s ease;
  width: 100%;
  min-height: 140px; /* bikin semua card rata tinggi */
  box-sizing: border-box;
}

.nav-card i {
  display: block;
}

/* hover effect */
.nav-card:hover {
  background-color: #fff;
  color: #04415f;
  text-decoration: none;
  transform: translateY(-5px);
  box-shadow: 0 6px 20px rgba(0,0,0,0.15);
}
</style>
  </main>

  <footer id="footer" class="footer position-relative light-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">MAN 1 Mandailing Natal</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Sumatra Utara, Indonesia</p>
            <p>RH5C+3V8, Parbangunan, Kec. Panyabungan, Kabupaten Mandailing Natal, Sumatera Utara 22952
            <p class="mt-3"><strong>Phone:</strong> <span>+62 812 3456 7890</span></p>
            <p><strong>Email:</strong> <span>info@man1mandailingnata.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <!-- <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul> -->
        </div>

        <!-- <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div> -->
<!-- 
        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Hic solutasetp</h4>
          <ul>
            <li><a href="#">Molestiae accusamus iure</a></li>
            <li><a href="#">Excepturi dignissimos</a></li>
            <li><a href="#">Suscipit distinctio</a></li>
            <li><a href="#">Dilecta</a></li>
            <li><a href="#">Sit quas consectetur</a></li>
          </ul>
        </div> -->

        <!-- <div class="col-lg-2 col-md-3 footer-links">
          <h4>Nobis illum</h4>
          <ul>
            <li><a href="#">Ipsam</a></li>
            <li><a href="#">Laudantium dolorum</a></li>
            <li><a href="#">Dinera</a></li>
            <li><a href="#">Trodelas</a></li>
            <li><a href="#">Flexo</a></li>
          </ul>
        </div> -->

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">MAN 1 Mandailing Natal</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">Wartech Id</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="<?= base_url('assets2/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('assets2/vendor/php-email-form/validate.js') ?>"></script>
<script src="<?= base_url('assets2/vendor/aos/aos.js') ?>"></script>
<script src="<?= base_url('assets2/vendor/swiper/swiper-bundle.min.js') ?>"></script>
<script src="<?= base_url('assets2/vendor/purecounter/purecounter_vanilla.js') ?>"></script>
<script src="<?= base_url('assets2/vendor/imagesloaded/imagesloaded.pkgd.min.js') ?>"></script>
<script src="<?= base_url('assets2/vendor/isotope-layout/isotope.pkgd.min.js') ?>"></script>
<script src="<?= base_url('assets2/vendor/glightbox/js/glightbox.min.js') ?>"></script>

<!-- Main JS File -->
<script src="<?= base_url('assets2/js/main.js') ?>"></script>


</body>

</html>