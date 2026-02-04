
  <main class="main">
    <style>
.guru-section {
  padding: 80px 0;
}

.guru-card {
  background: #ffffff;
  border-radius: 18px;
  overflow: hidden;
  box-shadow: 0 6px 25px rgba(0,0,0,.1);
  transition: transform .3s ease, box-shadow .3s ease;
  height: 100%;
}

.guru-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 12px 40px rgba(0,0,0,.15);
}

.guru-img {
  width: 100%;
  height: 280px;
  object-fit: cover;
}

.guru-body {
  padding: 20px;
  text-align: center;
}

.guru-name {
  font-size: 18px;
  font-weight: 700;
  margin-bottom: 6px;
}

.guru-role {
  font-size: 14px;
  color: #0d6efd;
  font-weight: 600;
  margin-bottom: 10px;
}

.guru-detail {
  font-size: 14px;
  color: #555;
  line-height: 1.6;
}
</style>

<section class="guru-section">
  <div class="container">

    <div class="text-center mb-5">
      <h2>Profil Guru</h2>
      <p>Tenaga pendidik MAN 1 Mandailing Natal</p>
    </div>

    <div class="row g-4">

      <?php if (!empty($teachers)): ?>
        <?php foreach ($teachers as $guru): ?>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="guru-card">

              <?php if (!empty($guru['image'])): ?>
                <img
                  src="<?= base_url('uploads/teacher/' . $guru['image']) ?>"
                  alt="<?= esc($guru['name']) ?>"
                  class="guru-img"
                  loading="lazy"
                >
              <?php else: ?>
                <img
                  src="<?= base_url('assets2/img/default-user.png') ?>"
                  class="guru-img"
                  alt="Default Guru"
                >
              <?php endif ?>

              <div class="guru-body">
                <div class="guru-name">
                  <?= esc($guru['name']) ?>
                </div>

                <div class="guru-role">
                  <?= esc($guru['role']) ?>
                </div>

                <?php if (!empty($guru['detail'])): ?>
                  <div class="guru-detail">
                    <?= esc($guru['detail']) ?>
                  </div>
                <?php endif ?>
              </div>

            </div>
          </div>
        <?php endforeach ?>
      <?php else: ?>
        <p class="text-center">Data guru belum tersedia 😅</p>
      <?php endif ?>

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