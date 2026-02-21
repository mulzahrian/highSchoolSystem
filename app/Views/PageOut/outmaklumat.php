<main class="main">

<style>
.outmaklumat-section {
    background: #f4f6f8;
    padding: 60px 15px;
}

.outmaklumat-box {
    max-width: 1000px;
    margin: auto;
    background: #fff;
    border-radius: 16px;
    padding: 24px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.08);
}

.outmaklumat-title {
    font-size: 24px;
    font-weight: 700;
    color: #0d6efd;
    text-align: center;
    margin-bottom: 20px;
}

.outmaklumat-pdf {
    width: 100%;
    height: 80vh;
    border: none;
    border-radius: 12px;
}
</style>

<section class="outmaklumat-section">
  <div class="container">

    <div class="outmaklumat-box">

      <div class="outmaklumat-title">
        <?= esc($maklumat['header']) ?>
      </div>

      <?php if (!empty($maklumat['pdf'])): ?>
        <iframe
          src="<?= base_url('uploads/maklumat_layanan/' . $maklumat['pdf']) ?>"
          class="outmaklumat-pdf">
        </iframe>
      <?php else: ?>
        <p class="text-center">File tidak tersedia</p>
      <?php endif; ?>

    </div>

  </div>
</section>

</main>