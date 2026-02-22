<main class="main">

<style>
.outlayanan-section {
    background: #f4f6f8;
    padding: 60px 15px;
}

.outlayanan-box {
    max-width: 1000px;
    margin: auto;
    background: #fff;
    border-radius: 16px;
    padding: 24px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.08);
}

.outlayanan-title {
    font-size: 24px;
    font-weight: 700;
    color: #0d6efd;
    text-align: center;
    margin-bottom: 20px;
}

.outlayanan-pdf {
    width: 100%;
    height: 80vh;
    border: none;
    border-radius: 12px;
}
</style>

<section class="outlayanan-section">
  <div class="container">

    <div class="outlayanan-box">

      <div class="outlayanan-title">
        <?= esc($layanan['header']) ?>
      </div>

      <?php if (!empty($layanan['pdf'])): ?>
        <iframe
          src="<?= base_url('uploads/layanan_public/' . $layanan['pdf']) ?>"
          class="outlayanan-pdf">
        </iframe>
      <?php else: ?>
        <p class="text-center">File tidak tersedia</p>
      <?php endif; ?>

    </div>

  </div>
</section>

</main>