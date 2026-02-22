<main class="main">

<style>
.outppid-section {
    background: #f4f6f8;
    padding: 60px 15px;
}

.outppid-box {
    max-width: 1000px;
    margin: auto;
    background: #fff;
    border-radius: 16px;
    padding: 24px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.08);
}

.outppid-title {
    font-size: 24px;
    font-weight: 700;
    color: #198754;
    text-align: center;
    margin-bottom: 20px;
}

.outppid-pdf {
    width: 100%;
    height: 80vh;
    border: none;
    border-radius: 12px;
}
</style>

<section class="outppid-section">
  <div class="container">

    <div class="outppid-box">

      <div class="outppid-title">
        <?= esc($ppid['header']) ?>
      </div>

      <?php if (!empty($ppid['pdf'])): ?>
        <iframe
          src="<?= base_url('uploads/ppid/' . $ppid['pdf']) ?>"
          class="outppid-pdf">
        </iframe>
      <?php else: ?>
        <p class="text-center">File tidak tersedia</p>
      <?php endif; ?>

    </div>

  </div>
</section>

</main>