<main class="main">

<style>
.outdownload {
    background: #f5f7fa;
    padding: 60px 15px;
}

.outdownload-card {
    background: #fff;
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 10px 25px rgba(0,0,0,0.08);
    transition: .3s ease;
}

.outdownload-card:hover {
    transform: translateY(-6px);
}

.outdownload-img {
    width: 100%;
    height: 180px;
    object-fit: cover;
}

.outdownload-title {
    padding: 14px;
    font-weight: 600;
    text-align: center;
}
</style>

<section class="outdownload">
  <div class="container">

    <h2 class="section-title">Download</h2>

    <div class="row g-4">
      <?php foreach ($download as $item): ?>
        <div class="col-lg-3 col-md-4 col-sm-6">

          <a href="<?= base_url('outdownload/' . $item['agen_id']) ?>"
             class="text-decoration-none text-dark">

            <div class="outdownload-card">

              <img
                src="<?= base_url('uploads/download/' . $item['image']) ?>"
                class="outdownload-img"
                alt="<?= esc($item['header']) ?>">

              <div class="outdownload-title">
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