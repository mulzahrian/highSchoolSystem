<main class="main">

<style>
.outmutasi-section {
    background: #f4f6f8;
    padding: 60px 15px;
}

.outmutasi-box {
    max-width: 1000px;
    margin: auto;
    background: #fff;
    border-radius: 16px;
    padding: 24px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.08);
}

.outmutasi-title {
    font-size: 24px;
    font-weight: 700;
    color: #0d6efd;
    text-align: center;
    margin-bottom: 20px;
}

.outmutasi-pdf {
    width: 100%;
    height: 80vh;
    border: none;
    border-radius: 12px;
}
</style>

<section class="outmutasi-section">
  <div class="container">

    <div class="outmutasi-box">

      <div class="outmutasi-title">
        <?= esc($mutasi['header']) ?>
      </div>

      <?php if (!empty($mutasi['pdf'])): ?>
        <iframe
          src="<?= base_url('uploads/mutasi_siswa/' . $mutasi['pdf']) ?>"
          class="outmutasi-pdf">
        </iframe>
      <?php else: ?>
        <p class="text-center">File tidak tersedia</p>
      <?php endif; ?>

    </div>

  </div>
</section>

</main>