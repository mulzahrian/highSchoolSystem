<main class="main">

<style>
.ukbm-detail {
    padding: 60px 15px;
    background: #f4f6f8;
}

.ukbm-box {
    max-width: 900px;
    margin: auto;
    background: #fff;
    border-radius: 16px;
    padding: 24px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.08);
}

.ukbm-title {
    font-size: 26px;
    font-weight: 700;
    color: #0d6efd;
    margin-bottom: 20px;
}

.ukbm-img {
    width: 100%;
    border-radius: 12px;
    margin-bottom: 20px;
}

.ukbm-content {
    font-size: 16px;
    line-height: 1.7;
}
</style>

<section class="ukbm-detail">
  <div class="container">

    <div class="ukbm-box">

      <div class="ukbm-title">
        <?= esc($ukbm['header']) ?>
      </div>

      <img 
        src="<?= base_url('uploads/ukbm/' . $ukbm['image']) ?>" 
        class="ukbm-img"
      >

      <div class="ukbm-content">
        <?= $ukbm['content'] ?>
      </div>

    </div>

  </div>
</section>

</main>