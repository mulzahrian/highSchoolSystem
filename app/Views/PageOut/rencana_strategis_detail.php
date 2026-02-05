
  <main class="main">
    <style>
.plan-detail {
    background: #f4f6f8;
    padding: 60px 15px;
}

.plan-detail .container {
    max-width: 900px;
    margin: 0 auto;
}

.plan-detail-box {
    background: #ffffff;
    border-radius: 16px;
    padding: 32px;
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
    animation: fadeUp 0.6s ease;
}

/* YEAR TITLE */
.plan-detail-year {
    font-size: 28px;
    font-weight: 700;
    color: #0d6efd;
    text-align: center;
    margin-bottom: 24px;
}

/* IMAGE */
.plan-detail-img {
    width: 100%;
    max-height: 420px;
    object-fit: cover;
    border-radius: 14px;
    margin-bottom: 28px;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
}

/* CONTENT */
.plan-detail-content {
    font-size: 16px;
    line-height: 1.9;
    color: #444;
}

.plan-detail-content p {
    margin-bottom: 16px;
}

.plan-detail-content ul,
.plan-detail-content ol {
    padding-left: 20px;
    margin-bottom: 16px;
}

.plan-detail-content li {
    margin-bottom: 8px;
}

/* ANIMATION */
@keyframes fadeUp {
    from {
        opacity: 0;
        transform: translateY(25px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* RESPONSIVE */
@media (max-width: 768px) {
    .plan-detail-box {
        padding: 22px;
    }

    .plan-detail-year {
        font-size: 22px;
    }
}

</style>

<section class="plan-detail">
  <div class="container">

    <div class="plan-detail-box">

      <div class="plan-detail-year">
        Rencana Strategis <?= esc($plan['year']) ?>
      </div>

      <?php if (!empty($plan['thumbnail'])): ?>
        <img
          src="<?= base_url('uploads/plan_strategic/' . $plan['thumbnail']) ?>"
          class="plan-detail-img"
          alt="Rencana <?= esc($plan['year']) ?>"
        >
      <?php endif ?>

      <!-- CONTENT HTML -->
      <div class="plan-detail-content">
        <?= $plan['content'] ?>
      </div>

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