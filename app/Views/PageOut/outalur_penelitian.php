<main class="main">

<style>
.alur-section {
    background: #f5f7fa;
    padding: 60px 15px;
}

.alur-box {
    max-width: 1000px;
    margin: auto;
    background: #fff;
    border-radius: 16px;
    padding: 24px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.08);
}

.alur-title {
    font-size: 26px;
    font-weight: 700;
    text-align: center;
    margin-bottom: 20px;
}

/* PDF viewer */
.pdf-viewer {
    width: 100%;
    height: 80vh;
    border-radius: 12px;
    border: none;
}
</style>

<section class="alur-section">
  <div class="container">

    <div class="alur-box">

      <?php if ($alur): ?>

        <div class="alur-title">
          <?= esc($alur['header']) ?>
        </div>

        <!-- PDF VIEW -->
        <iframe 
          src="<?= base_url('uploads/alur_penelitian/' . $alur['pdf']) ?>" 
          class="pdf-viewer">
        </iframe>

      <?php else: ?>

        <div class="text-center">
          <p>Data belum tersedia</p>
        </div>

      <?php endif; ?>

    </div>

  </div>
</section>

</main>