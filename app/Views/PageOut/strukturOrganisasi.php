
  <main class="main">
  <style>
.struktur-section {
  padding: 80px 0;
}

.struktur-box {
  background: #ffffff;
  padding: 30px;
  border-radius: 18px;
  box-shadow: 0 6px 30px rgba(0,0,0,.1);
}

.struktur-box h2 {
  font-weight: 700;
  margin-bottom: 20px;
  color: #0d6efd;
}

.struktur-img {
  width: 100%;
  max-height: 900px;
  object-fit: contain;
  border-radius: 12px;
  background: #f8f9fa;
  padding: 15px;
}

.struktur-note {
  margin-top: 15px;
  color: #666;
  font-size: 14px;
}
</style>

<section class="struktur-section">
  <div class="container">

    <div class="text-center mb-5">
      <h2>Struktur Organisasi</h2>
      <p>Susunan kepengurusan dan tata kerja</p>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-10">

        <div class="struktur-box text-center">

          <?php if (!empty($struktur['image'])): ?>
            <img
              src="<?= base_url('uploads/organization/' . $struktur['image']) ?>"
              alt="Struktur Organisasi"
              class="struktur-img"
              loading="lazy"
            >
            <div class="struktur-note">
              Klik gambar untuk memperbesar
            </div>
          <?php else: ?>
            <p>Struktur organisasi belum tersedia 😅</p>
          <?php endif ?>

        </div>

      </div>
    </div>

  </div>
</section>

<script>
  // optional: klik gambar untuk zoom (simple)
  document.addEventListener('DOMContentLoaded', function () {
    const img = document.querySelector('.struktur-img');
    if (img) {
      img.addEventListener('click', function () {
        window.open(this.src, '_blank');
      });
    }
  });
</script>


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