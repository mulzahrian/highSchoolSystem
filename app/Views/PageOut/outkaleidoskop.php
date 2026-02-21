<main class="main">

<style>
.outkaleidoskop {
    background: #f5f7fa;
    padding: 60px 15px;
}

/* CARD NEWS STYLE */
.news-card {
    position: relative;
    border-radius: 16px;
    overflow: hidden;
    height: 250px;
    cursor: pointer;
}

.news-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform .4s ease;
}

.news-card:hover .news-img {
    transform: scale(1.1);
}

/* overlay gelap */
.news-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(to top, rgba(0,0,0,0.8), rgba(0,0,0,0.2));
}

/* text di bawah */
.news-content {
    position: absolute;
    bottom: 0;
    color: #fff;
    padding: 16px;
}

.news-title {
    font-size: 18px;
    font-weight: 700;
    line-height: 1.3;
}

.news-badge {
    font-size: 12px;
    background: #0d6efd;
    padding: 4px 10px;
    border-radius: 20px;
    display: inline-block;
    margin-bottom: 8px;
}
</style>

<section class="outkaleidoskop">
  <div class="container">

    <h2 class="section-title">Kaleidoskop</h2>

    <div class="row g-4">
      <?php foreach ($kaleidoskop as $item): ?>
        <div class="col-lg-4 col-md-6">

          <a href="<?= base_url('outkaleidoskop/' . $item['Kaleidoskop_id']) ?>"
             class="text-decoration-none">

            <div class="news-card">

              <img
                src="<?= base_url('uploads/kaleidoskop/' . $item['image']) ?>"
                class="news-img"
                alt="<?= esc($item['header']) ?>">

              <div class="news-overlay"></div>

              <div class="news-content">
                <div class="news-badge">Kaleidoskop</div>
                <div class="news-title">
                  <?= esc($item['header']) ?>
                </div>
              </div>

            </div>

          </a>

        </div>
      <?php endforeach ?>
    </div>

  </div>
</section>

</main>