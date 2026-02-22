<main class="main">

<style>
.outptmt-section {
    background: #f4f6f8;
    padding: 60px 15px;
}

.outptmt-box {
    max-width: 1000px;
    margin: auto;
    background: #fff;
    border-radius: 16px;
    padding: 24px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.08);
}

.outptmt-title {
    font-size: 24px;
    font-weight: 700;
    color: #0dcaf0;
    text-align: center;
    margin-bottom: 20px;
}

.outptmt-pdf {
    width: 100%;
    height: 80vh;
    border: none;
    border-radius: 12px;
}
</style>

<section class="outptmt-section">
  <div class="container">

    <div class="outptmt-box">

      <div class="outptmt-title">
        <?= esc($ptmt['header']) ?>
      </div>

      <?php if (!empty($ptmt['pdf'])): ?>

        <!-- tombol download -->
        <div style="text-align:center; margin-bottom:10px;">
          <a href="<?= base_url('uploads/ptmt/' . $ptmt['pdf']) ?>" target="_blank">
            Download PDF
          </a>
        </div>

        <!-- viewer -->
        <iframe
          src="<?= base_url('uploads/ptmt/' . $ptmt['pdf']) ?>"
          class="outptmt-pdf">
        </iframe>

      <?php else: ?>
        <p class="text-center">File tidak tersedia</p>
      <?php endif; ?>

    </div>

  </div>
</section>

</main>