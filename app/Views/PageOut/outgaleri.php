<main class="main">

<style>
.outgaleri {
    background: #f5f7fa;
    padding: 60px 15px;
}

/* GRID (Pinterest style) */
.gallery-grid {
    column-count: 4;
    column-gap: 15px;
}

@media (max-width: 992px) {
    .gallery-grid { column-count: 3; }
}

@media (max-width: 768px) {
    .gallery-grid { column-count: 2; }
}

@media (max-width: 480px) {
    .gallery-grid { column-count: 1; }
}

/* ITEM */
.gallery-item {
    position: relative;
    margin-bottom: 15px;
    overflow: hidden;
    border-radius: 16px;
}

/* IMAGE */
.gallery-img {
    width: 100%;
    display: block;
    border-radius: 16px;
    transition: transform .4s ease;
}

.gallery-item:hover .gallery-img {
    transform: scale(1.08);
}

/* OVERLAY */
.gallery-overlay {
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,0.5);
    opacity: 0;
    transition: .3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
}

.gallery-item:hover .gallery-overlay {
    opacity: 1;
}

/* TEXT */
.gallery-text {
    color: #fff;
    font-weight: 600;
    text-align: center;
    padding: 10px;
}
</style>

<section class="outgaleri">
  <div class="container">

    <h2 class="section-title text-center mb-5">Galeri</h2>

    <div class="gallery-grid">

      <?php foreach ($galeri as $item): ?>
        
        <a href="<?= base_url('uploads/galeri/' . $item['image']) ?>" 
           class="glightbox"
           data-gallery="galeri"
           data-title="<?= esc($item['header']) ?>">

          <div class="gallery-item">

            <img
              src="<?= base_url('uploads/galeri/' . $item['image']) ?>"
              class="gallery-img"
              alt="<?= esc($item['header']) ?>">

            <div class="gallery-overlay">
              <div class="gallery-text">
                <?= esc($item['header']) ?>
              </div>
            </div>

          </div>

        </a>

      <?php endforeach ?>

    </div>

  </div>
</section>

</main>

<footer id="footer" class="footer position-relative light-background">

  <div class="container footer-top">
    <div class="row gy-4">
      <div class="col-lg-4 col-md-6 footer-about">
        <a href="#" class="logo d-flex align-items-center">
          <span class="sitename">MAN 1 Mandailing Natal</span>
        </a>
        <div class="footer-contact pt-3">
          <p>Sumatra Utara, Indonesia</p>
          <p>Mandailing Natal</p>
          <p class="mt-3"><strong>Phone:</strong> <span>+62 812 3456 7890</span></p>
          <p><strong>Email:</strong> <span>info@man1mandailingnata.com</span></p>
        </div>
      </div>
    </div>
  </div>

  <div class="container text-center mt-4">
    <p>© MAN 1 Mandailing Natal</p>
  </div>

</footer>

<!-- Vendor JS -->
<script src="<?= base_url('assets2/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('assets2/vendor/glightbox/js/glightbox.min.js') ?>"></script>

<!-- INIT LIGHTBOX -->
<script>
  const lightbox = GLightbox({
    selector: '.glightbox'
  });
</script>

</body>
</html>