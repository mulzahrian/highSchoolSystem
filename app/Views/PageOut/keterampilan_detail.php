<main class="main">

<style>
.outskill-section {
    background: #f4f6f8;
    padding: 60px 15px;
}

.outskill-box {
    max-width: 1000px;
    margin: auto;
    background: #fff;
    border-radius: 16px;
    padding: 24px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.08);
}

.outskill-title {
    font-size: 26px;
    font-weight: 700;
    color: #fd7e14;
    text-align: center;
    margin-bottom: 20px;
}

.outskill-image {
    width: 100%;
    border-radius: 12px;
    margin-bottom: 20px;
}

.outskill-content {
    font-size: 16px;
    line-height: 1.7;
    color: #444;
}
</style>

<section class="outskill-section">
  <div class="container">

    <div class="outskill-box">

      <div class="outskill-title">
        <?= esc($keterampilan['header']) ?>
      </div>

      <?php if (!empty($keterampilan['image'])): ?>
        <img 
          src="<?= base_url('uploads/keterampilan/' . $keterampilan['image']) ?>" 
          class="outskill-image">
      <?php endif; ?>

      <div class="outskill-content">
        <?= $keterampilan['content']; ?>
      </div>

    </div>

  </div>
</section>

</main>