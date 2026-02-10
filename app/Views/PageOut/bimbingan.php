
  <style>
    .bimbingan-section {
    background: #f4f6f8;
    padding: 60px 15px;
}

.bimbingan-box {
    max-width: 900px;
    margin: auto;
    background: #ffffff;
    padding: 32px;
    border-radius: 16px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.08);
}

.bimbingan-title {
    font-size: 28px;
    font-weight: 700;
    color: #198754;
    text-align: center;
    margin-bottom: 24px;
}

.bimbingan-img {
    width: 100%;
    max-height: 420px;
    object-fit: cover;
    border-radius: 14px;
    margin-bottom: 24px;
}

.bimbingan-content {
    font-size: 16px;
    line-height: 1.9;
    color: #444;
}

.bimbingan-content p {
    margin-bottom: 16px;
}

  </style>
  <main class="main">
    <section class="bimbingan-section">
  <div class="container">

    <?php if ($bimbingan): ?>

      <div class="bimbingan-box">

        <h2 class="bimbingan-title">
          <?= esc($bimbingan['title']) ?>
        </h2>

        <?php if (!empty($bimbingan['image'])): ?>
          <img
            src="<?= base_url('uploads/bimbingan-karir/' . $bimbingan['image']) ?>"
            class="bimbingan-img"
            alt="<?= esc($bimbingan['title']) ?>">
        <?php endif ?>

        <div class="bimbingan-content">
          <?= $bimbingan['content'] ?>
        </div>

      </div>

    <?php else: ?>
      <p class="text-center">Data bimbingan karir belum tersedia.</p>
    <?php endif ?>

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