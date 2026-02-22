<main class="main">

<style>
.video-section {
  padding: 80px 0;
}

.video-box {
  background: #ffffff;
  padding: 30px;
  border-radius: 18px;
  box-shadow: 0 6px 30px rgba(0,0,0,.1);
}

.video-box h2 {
  font-weight: 700;
  margin-bottom: 15px;
  color: #0d6efd;
}

.video-desc {
  color: #666;
  margin-bottom: 25px;
}

.video-frame iframe {
  width: 100%;
  height: 450px;
  border-radius: 14px;
  border: none;
}
</style>

<section class="video-section">
  <div class="container">

    <div class="text-center mb-5">
      <h2>Video Profile</h2>
      <p>Lihat lebih dekat tentang sekolah kami 🎬</p>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-10">

        <div class="video-box text-center">

          <div class="video-desc">
            Profil MAN 1 Mandailing Natal
          </div>

          <div class="video-frame">
            <?php if (!empty($video['url'])): ?>
              <?= $video['url'] ?>
            <?php else: ?>
              <p class="text-center">Video belum tersedia 😅</p>
            <?php endif ?>
          </div>

        </div>

      </div>
    </div>

  </div>
</section>

</main>