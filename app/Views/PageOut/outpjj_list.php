<main class="main">

<style>
.pjj-section {
    padding: 60px 15px;
    background: #f4f6f8;
}

.pjj-card {
    border-radius: 16px;
    overflow: hidden;
    background: #fff;
    box-shadow: 0 10px 25px rgba(0,0,0,0.08);
    transition: 0.3s;
    cursor: pointer;
}

.pjj-card:hover {
    transform: translateY(-6px);
}

.pjj-img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.pjj-body {
    padding: 15px;
}

.pjj-title {
    font-size: 18px;
    font-weight: 600;
    color: #dc3545;
}
</style>

<section class="pjj-section">
  <div class="container">

    <div class="row">

      <?php foreach ($pjj as $item): ?>
        <div class="col-md-4 mb-4">
          <a href="<?= base_url('outpjj/' . $item['pembelajaran_id']) ?>" style="text-decoration:none;">

            <div class="pjj-card">
              <img 
                src="<?= base_url('uploads/pjj/' . $item['image']) ?>" 
                class="pjj-img"
              >

              <div class="pjj-body">
                <div class="pjj-title">
                  <?= esc($item['header']) ?>
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