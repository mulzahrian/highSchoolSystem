<main class="main">

<style>
.ukbm-section {
    padding: 60px 15px;
    background: #f4f6f8;
}

.ukbm-card {
    border-radius: 16px;
    overflow: hidden;
    background: #fff;
    box-shadow: 0 10px 25px rgba(0,0,0,0.08);
    transition: 0.3s;
    cursor: pointer;
}

.ukbm-card:hover {
    transform: translateY(-5px);
}

.ukbm-img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.ukbm-body {
    padding: 15px;
}

.ukbm-title {
    font-size: 18px;
    font-weight: 600;
    color: #0d6efd;
}
</style>

<section class="ukbm-section">
  <div class="container">

    <div class="row">

      <?php foreach ($ukbm as $u): ?>
        <div class="col-md-4 mb-4">
          <a href="<?= base_url('outukbm/' . $u['ukbm_id']) ?>" style="text-decoration:none;">
            
            <div class="ukbm-card">
              <img 
                src="<?= base_url('uploads/ukbm/' . $u['image']) ?>" 
                class="ukbm-img"
              >

              <div class="ukbm-body">
                <div class="ukbm-title">
                  <?= esc($u['header']) ?>
                </div>
              </div>
            </div>

          </a>
        </div>
      <?php endforeach; ?>

    </div>

  </div>
</section>

</main>