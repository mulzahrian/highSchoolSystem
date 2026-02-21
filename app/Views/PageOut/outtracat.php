<main class="main">

<style>
.outtracat {
    background: #f4f6f8;
    padding: 60px 15px;
}

.outtracat-title {
    text-align: center;
    font-size: 28px;
    font-weight: 700;
    margin-bottom: 40px;
}

.tracat-card {
    background: #fff;
    border-radius: 16px;
    padding: 25px 15px;
    text-align: center;
    transition: 0.3s;
    box-shadow: 0 10px 25px rgba(0,0,0,0.08);
    height: 100%;
}

.tracat-card:hover {
    transform: translateY(-6px);
}

.tracat-img {
    width: 70px;
    height: 70px;
    object-fit: contain;
    margin-bottom: 12px;
}

.tracat-header {
    font-weight: 600;
    font-size: 14px;
    color: #333;
}
</style>

<section class="outtracat">
  <div class="container">

    <div class="outtracat-title">
      Tracat Menu
    </div>

    <div class="row g-4 justify-content-center">
      <?php foreach ($tracat as $item): ?>
        <div class="col-lg-2 col-md-3 col-4">

          <a href="<?= esc($item['url']) ?>" target="_blank"
             class="text-decoration-none">

            <div class="tracat-card">

              <?php if (!empty($item['image'])): ?>
                <img 
                  src="<?= base_url('uploads/tracat/' . $item['image']) ?>" 
                  class="tracat-img"
                  alt="<?= esc($item['header']) ?>">
              <?php endif; ?>

              <div class="tracat-header">
                <?= esc($item['header']) ?>
              </div>

            </div>

          </a>

        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>

</main>