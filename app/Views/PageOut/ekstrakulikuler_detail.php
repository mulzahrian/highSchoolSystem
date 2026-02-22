<main class="main">

<style>
.outekskul-section {
    background: #f4f6f8;
    padding: 60px 15px;
}

.outekskul-box {
    max-width: 1000px;
    margin: auto;
    background: #fff;
    border-radius: 16px;
    padding: 24px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.08);
}

.outekskul-title {
    font-size: 26px;
    font-weight: 700;
    color: #20c997;
    text-align: center;
    margin-bottom: 20px;
}

.outekskul-image {
    width: 100%;
    border-radius: 12px;
    margin-bottom: 20px;
}

.outekskul-content {
    font-size: 16px;
    line-height: 1.7;
    color: #444;
}
</style>

<section class="outekskul-section">
  <div class="container">

    <div class="outekskul-box">

      <div class="outekskul-title">
        <?= esc($ekskul['header']) ?>
      </div>

      <?php if (!empty($ekskul['image'])): ?>
        <img 
          src="<?= base_url('uploads/ekstrakulikuler/' . $ekskul['image']) ?>" 
          class="outekskul-image">
      <?php endif; ?>

      <div class="outekskul-content">
        <?= $ekskul['content']; ?>
      </div>

    </div>

  </div>
</section>

</main>