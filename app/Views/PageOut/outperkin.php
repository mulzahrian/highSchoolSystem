<main class="main">

<style>
.outperkin-section {
    background: #f4f6f8;
    padding: 60px 15px;
}

.outperkin-box {
    max-width: 1000px;
    margin: auto;
    background: #fff;
    border-radius: 16px;
    padding: 24px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.08);
}

.outperkin-title {
    font-size: 24px;
    font-weight: 700;
    color: #dc3545;
    text-align: center;
    margin-bottom: 20px;
}

.outperkin-pdf {
    width: 100%;
    height: 80vh;
    border: none;
    border-radius: 12px;
}
</style>

<section class="outperkin-section">
  <div class="container">

    <div class="outperkin-box">

      <div class="outperkin-title">
        <?= esc($perkin['header']) ?>
      </div>

      <?php if (!empty($perkin['pdf'])): ?>
        <iframe
          src="<?= base_url('uploads/perkin/' . $perkin['pdf']) ?>"
          class="outperkin-pdf">
        </iframe>
      <?php else: ?>
        <p class="text-center">File tidak tersedia</p>
      <?php endif; ?>

    </div>

  </div>
</section>

</main>