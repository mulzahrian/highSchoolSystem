<main class="main">

<style>
.outmadrasah-section {
    background: #f4f6f8;
    padding: 60px 15px;
}

.outmadrasah-box {
    max-width: 1000px;
    margin: auto;
    background: #fff;
    border-radius: 16px;
    padding: 24px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.08);
}

.outmadrasah-title {
    font-size: 26px;
    font-weight: 700;
    color: #dc3545;
    text-align: center;
    margin-bottom: 20px;
}

.outmadrasah-image {
    width: 100%;
    border-radius: 12px;
    margin-bottom: 20px;
}

.outmadrasah-content {
    font-size: 16px;
    line-height: 1.7;
    color: #444;
}
</style>

<section class="outmadrasah-section">
  <div class="container">

    <div class="outmadrasah-box">

      <div class="outmadrasah-title">
        <?= esc($layanan['header']) ?>
      </div>

      <?php if (!empty($layanan['image'])): ?>
        <img 
          src="<?= base_url('uploads/layanan-madrasah/' . $layanan['image']) ?>" 
          class="outmadrasah-image">
      <?php endif; ?>

      <div class="outmadrasah-content">
        <?= $layanan['content']; ?>
      </div>

    </div>

  </div>
</section>

</main>