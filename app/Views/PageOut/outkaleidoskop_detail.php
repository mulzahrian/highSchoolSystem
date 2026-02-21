<main class="main">

<style>
.kaleidoskop-detail {
    background: #f4f6f8;
    padding: 60px 15px;
}

.kaleidoskop-box {
    max-width: 900px;
    margin: auto;
    background: #fff;
    border-radius: 16px;
    padding: 32px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.08);
}

.kaleidoskop-title {
    font-size: 28px;
    font-weight: 700;
    margin-bottom: 20px;
}

.kaleidoskop-img {
    width: 100%;
    max-height: 420px;
    object-fit: cover;
    border-radius: 14px;
    margin-bottom: 24px;
}

.kaleidoskop-content {
    line-height: 1.9;
    color: #444;
}
</style>

<section class="kaleidoskop-detail">
  <div class="container">

    <div class="kaleidoskop-box">

      <div class="kaleidoskop-title">
        <?= esc($kaleidoskop['header']) ?>
      </div>

      <?php if (!empty($kaleidoskop['image'])): ?>
        <img
          src="<?= base_url('uploads/kaleidoskop/' . $kaleidoskop['image']) ?>"
          class="kaleidoskop-img"
          alt="<?= esc($kaleidoskop['header']) ?>">
      <?php endif ?>

      <div class="kaleidoskop-content">
        <?= $kaleidoskop['content'] ?>
      </div>

    </div>

  </div>
</section>

</main>