<main class="main">

<style>
.outpengendalian-section {
    background: #f4f6f8;
    padding: 60px 15px;
}

.outpengendalian-box {
    max-width: 1000px;
    margin: auto;
    background: #fff;
    border-radius: 16px;
    padding: 24px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.08);
}

.outpengendalian-title {
    font-size: 24px;
    font-weight: 700;
    color: #0dcaf0;
    text-align: center;
    margin-bottom: 20px;
}

.outpengendalian-pdf {
    width: 100%;
    height: 80vh;
    border: none;
    border-radius: 12px;
}
</style>

<section class="outpengendalian-section">
  <div class="container">

    <div class="outpengendalian-box">

      <div class="outpengendalian-title">
        <?= esc($pengendalian['header']) ?>
      </div>

      <?php if (!empty($pengendalian['pdf'])): ?>
        <iframe
          src="<?= base_url('uploads/pengendalian_intern/' . $pengendalian['pdf']) ?>"
          class="outpengendalian-pdf">
        </iframe>
      <?php else: ?>
        <p class="text-center">File tidak tersedia</p>
      <?php endif; ?>

    </div>

  </div>
</section>

</main>