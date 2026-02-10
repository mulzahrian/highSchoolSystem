
  <main class="main">
<style>
    /* LIST */
.pengumuman {
    background: #f5f7fa;
    padding: 60px 15px;
}

.section-title {
    text-align: center;
    font-size: 28px;
    font-weight: 700;
    margin-bottom: 40px;
}

.pengumuman-card {
    background: #fff;
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 10px 25px rgba(0,0,0,0.08);
    transition: .3s ease;
}

.pengumuman-card:hover {
    transform: translateY(-6px);
}

.pengumuman-img {
    width: 100%;
    height: 180px;
    object-fit: cover;
}

.pengumuman-year {
    background: #20385b;
    color: #fff;
    text-align: center;
    padding: 14px;
    font-weight: 600;
}

/* DETAIL */
.pengumuman-detail {
    background: #f4f6f8;
    padding: 60px 15px;
}

.pengumuman-detail-box {
    max-width: 900px;
    margin: auto;
    background: #fff;
    border-radius: 16px;
    padding: 32px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.08);
}

.pengumuman-detail-year {
    font-size: 26px;
    font-weight: 700;
    color: #0d6efd;
    text-align: center;
    margin-bottom: 24px;
}

.pengumuman-detail-img {
    width: 100%;
    max-height: 420px;
    object-fit: cover;
    border-radius: 14px;
    margin-bottom: 28px;
}

.pengumuman-detail-content {
    line-height: 1.9;
    color: #444;
}

</style>
<section class="pengumuman">
  <div class="container">

    <h2 class="section-title">Pengumuman</h2>

    <div class="row g-4">
      <?php foreach ($pengumuman as $item): ?>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <a href="<?= base_url('pengumuman/' . $item['announcement_id']) ?>"
             class="text-decoration-none text-dark">

            <div class="pengumuman-card">
              <img
                src="<?= base_url('uploads/announcement/' . $item['thumbnail']) ?>"
                class="pengumuman-img"
                alt="Pengumuman <?= esc($item['year']) ?>">

              <div class="pengumuman-year">
                <?= esc($item['year']) ?>
              </div>
            </div>

          </a>
        </div>
      <?php endforeach ?>
    </div>

  </div>
</section>

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
        
        </div>

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