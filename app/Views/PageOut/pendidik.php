
  <main class="main">
    <style>
.pendidik-section {
  padding: 80px 0;
}

.pendidik-card {
  background: #ffffff;
  border-radius: 18px;
  overflow: hidden;
  box-shadow: 0 6px 25px rgba(0,0,0,.1);
  transition: transform .3s ease, box-shadow .3s ease;
  height: 100%;
}

.pendidik-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 12px 40px rgba(0,0,0,.15);
}

.pendidik-img {
  width: 100%;
  height: 260px;
  object-fit: cover;
}

.pendidik-body {
  padding: 20px;
}

.pendidik-name {
  font-size: 18px;
  font-weight: 700;
  margin-bottom: 10px;
  text-align: center;
}

.pendidik-table {
  font-size: 14px;
}

.pendidik-table td {
  padding: 4px 0;
  vertical-align: top;
}

.pendidik-label {
  font-weight: 600;
  color: #555;
  width: 35%;
}
</style>

<section class="pendidik-section">
  <div class="container">

    <div class="text-center mb-5">
      <h2>Data Pendidik</h2>
      <p>Guru dan tenaga pendidik MAN 1 Mandailing Natal</p>
    </div>

    <div class="row g-4">

      <?php if (!empty($pendidik)): ?>
        <?php foreach ($pendidik as $item): ?>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="pendidik-card">

              <?php if (!empty($item['image'])): ?>
                <img
                  src="<?= base_url('uploads/teacher_detail/' . $item['image']) ?>"
                  alt="<?= esc($item['name']) ?>"
                  class="pendidik-img"
                  loading="lazy"
                >
              <?php else: ?>
                <img
                  src="<?= base_url('assets2/img/default-user.png') ?>"
                  alt="Default"
                  class="pendidik-img"
                >
              <?php endif ?>

              <div class="pendidik-body">
                <div class="pendidik-name">
                  <?= esc($item['name']) ?>
                </div>

                <table class="table table-borderless pendidik-table">
                  <tr>
                    <td class="pendidik-label">Pendidikan</td>
                    <td>: <?= esc($item['education']) ?></td>
                  </tr>
                  <tr>
                    <td class="pendidik-label">Jenis Kelamin</td>
                    <td>: <?= esc($item['sex']) ?></td>
                  </tr>
                  <tr>
                    <td class="pendidik-label">TTL</td>
                    <td>: <?= date('d M Y', strtotime($item['birth_date'])) ?></td>
                  </tr>
                  <tr>
                    <td class="pendidik-label">Jenjang</td>
                    <td>: <?= esc($item['level']) ?></td>
                  </tr>
                  <tr>
                    <td class="pendidik-label">Jabatan</td>
                    <td>: <?= esc($item['role']) ?></td>
                  </tr>
                </table>

              </div>

            </div>
          </div>
        <?php endforeach ?>
      <?php else: ?>
        <p class="text-center">Data pendidik belum tersedia 😅</p>
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