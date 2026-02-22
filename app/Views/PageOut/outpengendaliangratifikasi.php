<main class="main">

<style>
.outgratifikasi-section {
    background: #f4f6f8;
    padding: 60px 15px;
}

.outgratifikasi-box {
    max-width: 1000px;
    margin: auto;
    background: #fff;
    border-radius: 16px;
    padding: 24px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.08);
}

.outgratifikasi-title {
    font-size: 24px;
    font-weight: 700;
    color: #198754;
    text-align: center;
    margin-bottom: 20px;
}

.outgratifikasi-pdf {
    width: 100%;
    height: 80vh;
    border: none;
    border-radius: 12px;
}
</style>

<section class="outgratifikasi-section">
  <div class="container">

    <div class="outgratifikasi-box">

      <div class="outgratifikasi-title">
        <?= esc($gratifikasi['header']) ?>
      </div>

      <?php if (!empty($gratifikasi['pdf'])): ?>
        <iframe
          src="<?= base_url('uploads/pengendalian_gratifikasi/' . $gratifikasi['pdf']) ?>"
          class="outgratifikasi-pdf">
        </iframe>
      <?php else: ?>
        <p class="text-center">File tidak tersedia</p>
      <?php endif; ?>

    </div>

  </div>
</section>

</main>