
 <style>
/* ===== TIMELINE STYLE ===== */
.timeline-section {
  padding: 80px 0;
}

.timeline {
  position: relative;
  margin-left: 20px;
}

.timeline::before {
  content: "";
  position: absolute;
  left: 10px;
  top: 0;
  width: 3px;
  height: 100%;
  background: #04405d;
}

.timeline-item {
  position: relative;
  margin-bottom: 40px;
  padding-left: 40px;
}

.timeline-dot {
  position: absolute;
  left: 2px;
  top: 8px;
  width: 18px;
  height: 18px;
  background: #04405d;
  border-radius: 50%;
}

.timeline-content {
  background: #ffffff;
  padding: 20px;
  border-radius: 12px;
  box-shadow: 0 4px 20px rgba(0,0,0,.08);
}

.timeline-year {
  display: inline-block;
  font-size: 18px;
  font-weight: 700;
  color: #04405d;
  margin-bottom: 10px;
}

.timeline-img {
  width: 100%;
  max-height: 220px;
  object-fit: cover;
  border-radius: 10px;
  margin: 12px 0;
}

.timeline-text {
  color: #555;
  line-height: 1.7;
}
</style>
 
 <main class="main">
    <section class="timeline-section">
  <div class="container">

    <div class="section-title text-center mb-5">
      <h2>Sejarah Sekolah</h2>
      <p>Perjalanan dari masa ke masa</p>
    </div>

    <div class="timeline">

      <?php if (!empty($histories)): ?>
        <?php foreach ($histories as $item): ?>
          <div class="timeline-item">
            <div class="timeline-dot"></div>

            <div class="timeline-content">
              <div class="timeline-year">
                <?= esc($item['tahun']) ?>
              </div>

              <?php if (!empty($item['image'])): ?>
                <img
                  src="<?= base_url('uploads/' . $item['image']) ?>"
                  alt="Sejarah <?= esc($item['tahun']) ?>"
                  class="timeline-img"
                >
              <?php endif ?>

              <p class="timeline-text">
                <?= esc($item['history']) ?>
              </p>
            </div>
          </div>
        <?php endforeach ?>
      <?php else: ?>
        <p class="text-center">Belum ada data sejarah 😅</p>
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