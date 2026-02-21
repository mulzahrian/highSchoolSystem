<main class="main">

<style>
.outartikel {
    background: #f5f7fa;
    padding: 60px 15px;
}

.outartikel-card {
    background: #fff;
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 10px 25px rgba(0,0,0,0.08);
    transition: .3s ease;
}

.outartikel-card:hover {
    transform: translateY(-6px);
}

.outartikel-img {
    width: 100%;
    height: 180px;
    object-fit: cover;
}

.outartikel-title {
    padding: 14px;
    font-weight: 600;
    text-align: center;
}
</style>

<section class="outartikel">
  <div class="container">

    <h2 class="section-title">Artikel</h2>

    <div class="row g-4">
      <?php foreach ($artikel as $item): ?>
        <div class="col-lg-3 col-md-4 col-sm-6">

          <a href="<?= base_url('outartikel/' . $item['artikel_id']) ?>"
             class="text-decoration-none text-dark">

            <div class="outartikel-card">

              <img
                src="<?= base_url('uploads/artikel/' . $item['image']) ?>"
                class="outartikel-img"
                alt="<?= esc($item['header']) ?>">

              <div class="outartikel-title">
                <?= esc($item['header']) ?>
              </div>

            </div>

          </a>

        </div>
      <?php endforeach ?>
    </div>

  </div>
</section>

</main>