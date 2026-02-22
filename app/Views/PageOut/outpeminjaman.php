<main class="main">

<style>
.outpeminjaman-section {
    background: #f4f6f8;
    padding: 60px 15px;
}

.outpeminjaman-box {
    max-width: 1000px;
    margin: auto;
    background: #fff;
    border-radius: 16px;
    padding: 24px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.08);
}

.outpeminjaman-title {
    font-size: 24px;
    font-weight: 700;
    color: #0d6efd;
    text-align: center;
    margin-bottom: 20px;
}

.outpeminjaman-pdf {
    width: 100%;
    height: 80vh;
    border: none;
    border-radius: 12px;
}
</style>

<section class="outpeminjaman-section">
  <div class="container">

    <div class="outpeminjaman-box">

      <div class="outpeminjaman-title">
        <?= esc($peminjaman['header']) ?>
      </div>

      <?php if (!empty($peminjaman['pdf'])): ?>
        <iframe
          src="<?= base_url('uploads/peminjaman_barang/' . $peminjaman['pdf']) ?>"
          class="outpeminjaman-pdf">
        </iframe>
      <?php else: ?>
        <p class="text-center">File tidak tersedia</p>
      <?php endif; ?>

    </div>

  </div>
</section>

</main>