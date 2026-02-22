<main class="main">

<style>
.outlaporan-section {
    background: #f4f6f8;
    padding: 60px 15px;
}

.outlaporan-box {
    max-width: 1000px;
    margin: auto;
    background: #fff;
    border-radius: 16px;
    padding: 24px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.08);
}

.outlaporan-title {
    font-size: 24px;
    font-weight: 700;
    color: #198754;
    text-align: center;
    margin-bottom: 20px;
}

.outlaporan-pdf {
    width: 100%;
    height: 80vh;
    border: none;
    border-radius: 12px;
}
</style>

<section class="outlaporan-section">
  <div class="container">

    <div class="outlaporan-box">

      <div class="outlaporan-title">
        <?= esc($laporan['header']) ?>
      </div>

      <?php if (!empty($laporan['pdf'])): ?>
        <iframe
          src="<?= base_url('uploads/laporan-kinerja/' . $laporan['pdf']) ?>"
          class="outlaporan-pdf">
        </iframe>
      <?php else: ?>
        <p class="text-center">File tidak tersedia</p>
      <?php endif; ?>

    </div>

  </div>
</section>

</main>