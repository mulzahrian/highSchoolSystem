<main class="main">

<style>
.outartikel-detail {
    background: #f4f6f8;
    padding: 60px 15px;
}

.outartikel-box {
    max-width: 900px;
    margin: auto;
    background: #fff;
    border-radius: 16px;
    padding: 32px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.08);
}

.outartikel-title {
    font-size: 26px;
    font-weight: 700;
    color: #0d6efd;
    text-align: center;
    margin-bottom: 24px;
}

.outartikel-img {
    width: 100%;
    max-height: 420px;
    object-fit: cover;
    border-radius: 14px;
    margin-bottom: 28px;
}

.outartikel-content {
    line-height: 1.9;
    color: #444;
}
</style>

<section class="outartikel-detail">
  <div class="container">

    <div class="outartikel-box">

      <div class="outartikel-title">
        <?= esc($artikel['header']) ?>
      </div>

      <?php if (!empty($artikel['image'])): ?>
        <img
          src="<?= base_url('uploads/artikel/' . $artikel['image']) ?>"
          class="outartikel-img"
          alt="<?= esc($artikel['header']) ?>">
      <?php endif ?>

      <div class="outartikel-content">
        <?= $artikel['content'] ?>
      </div>

    </div>

  </div>
</section>

</main>