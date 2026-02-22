<main class="main">

<style>
.outalur-section {
    background: #f4f6f8;
    padding: 60px 15px;
}

.outalur-box {
    max-width: 1000px;
    margin: auto;
    background: #fff;
    border-radius: 16px;
    padding: 24px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.08);
}

.outalur-title {
    font-size: 24px;
    font-weight: 700;
    color: #0d6efd;
    text-align: center;
    margin-bottom: 20px;
}

.outalur-pdf {
    width: 100%;
    height: 80vh;
    border: none;
    border-radius: 12px;
}
</style>

<section class="outalur-section">
  <div class="container">

    <div class="outalur-box">

      <div class="outalur-title">
        <?= esc($alur['header']) ?>
      </div>

      <?php if (!empty($alur['pdf'])): ?>
        <iframe
          src="<?= base_url('uploads/alur_tamu/' . $alur['pdf']) ?>"
          class="outalur-pdf">
        </iframe>
      <?php else: ?>
        <p class="text-center">File tidak tersedia</p>
      <?php endif; ?>

    </div>

  </div>
</section>

</main>