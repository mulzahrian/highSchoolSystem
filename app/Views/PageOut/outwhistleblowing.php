<main class="main">

<style>
.outwb-section {
    background: #f4f6f8;
    padding: 60px 15px;
}

.outwb-box {
    max-width: 1000px;
    margin: auto;
    background: #fff;
    border-radius: 16px;
    padding: 24px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.08);
}

.outwb-title {
    font-size: 24px;
    font-weight: 700;
    color: #6610f2;
    text-align: center;
    margin-bottom: 20px;
}

.outwb-pdf {
    width: 100%;
    height: 80vh;
    border: none;
    border-radius: 12px;
}
</style>

<section class="outwb-section">
  <div class="container">

    <div class="outwb-box">

      <div class="outwb-title">
        <?= esc($wb['header']) ?>
      </div>

      <?php if (!empty($wb['pdf'])): ?>
        <iframe
          src="<?= base_url('uploads/whistle_blowing/' . $wb['pdf']) ?>"
          class="outwb-pdf">
        </iframe>
      <?php else: ?>
        <p class="text-center">File tidak tersedia</p>
      <?php endif; ?>

    </div>

  </div>
</section>

</main>