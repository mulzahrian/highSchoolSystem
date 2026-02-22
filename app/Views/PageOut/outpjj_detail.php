<main class="main">

<style>
.pjj-detail {
    padding: 60px 15px;
    background: #f4f6f8;
}

.pjj-box {
    max-width: 900px;
    margin: auto;
    background: #fff;
    border-radius: 16px;
    padding: 24px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.08);
}

.pjj-title {
    font-size: 26px;
    font-weight: 700;
    color: #dc3545;
    margin-bottom: 20px;
}

.pjj-img {
    width: 100%;
    border-radius: 12px;
    margin-bottom: 20px;
}

.pjj-content {
    font-size: 16px;
    line-height: 1.7;
}
</style>

<section class="pjj-detail">
  <div class="container">

    <div class="pjj-box">

      <div class="pjj-title">
        <?= esc($pjj['header']) ?>
      </div>

      <img 
        src="<?= base_url('uploads/pjj/' . $pjj['image']) ?>" 
        class="pjj-img"
      >

      <div class="pjj-content">
        <?= $pjj['content'] ?>
      </div>

    </div>

  </div>
</section>

</main>