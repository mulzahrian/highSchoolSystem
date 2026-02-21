<main class="main">

<style>
.outdownload-detail {
    background: #f4f6f8;
    padding: 60px 15px;
}

.outdownload-box {
    max-width: 900px;
    margin: auto;
    background: #fff;
    border-radius: 16px;
    padding: 32px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.08);
}

.outdownload-title {
    font-size: 26px;
    font-weight: 700;
    color: #0d6efd;
    text-align: center;
    margin-bottom: 24px;
}

.outdownload-img {
    width: 100%;
    max-height: 420px;
    object-fit: cover;
    border-radius: 14px;
    margin-bottom: 28px;
}

.outdownload-content {
    line-height: 1.9;
    color: #444;
}
</style>

<section class="outdownload-detail">
  <div class="container">

    <div class="outdownload-box">

      <div class="outdownload-title">
        <?= esc($download['header']) ?>
      </div>

      <?php if (!empty($download['image'])): ?>
        <img
          src="<?= base_url('uploads/download/' . $download['image']) ?>"
          class="outdownload-img"
          alt="<?= esc($download['header']) ?>">
      <?php endif ?>

      <div class="outdownload-content">
        <?= $download['content'] ?>
      </div>

    </div>

  </div>
</section>

</main>