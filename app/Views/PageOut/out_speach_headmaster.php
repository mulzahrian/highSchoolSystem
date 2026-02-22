<main class="main">

<style>
.speach-section {
  padding: 80px 0;
}

.speach-card {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  background: #ffffff;
  padding: 30px;
  border-radius: 18px;
  box-shadow: 0 6px 30px rgba(0,0,0,.1);
  gap: 20px;
}

.speach-photo {
  flex: 0 0 250px;
  max-width: 250px;
  border-radius: 18px;
  overflow: hidden;
}

.speach-photo img {
  width: 100%;
  height: auto;
  display: block;
}

.speach-text {
  flex: 1;
  color: #333;
}

.speach-text h3 {
  color: #0d6efd;
  font-weight: 700;
  margin-bottom: 15px;
}

.speach-text p {
  font-size: 1.1rem;
  line-height: 1.7;
}
</style>

<section class="speach-section">
  <div class="container">

    <div class="text-center mb-5">
      <h2>Pidato Kepala Sekolah</h2>
      <p>Menginspirasi seluruh civitas MAN 1 Mandailing Natal</p>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-10">

        <div class="speach-card">

          <div class="speach-photo">
            <?php if (!empty($speach['photo'])): ?>
              <img src="<?= base_url($speach['photo']) ?>" alt="Foto Kepala Sekolah">
            <?php else: ?>
              <img src="<?= base_url('assets2/img/default-avatar.png') ?>" alt="Foto Default">
            <?php endif; ?>
          </div>

          <div class="speach-text">
            <?php if (!empty($speach['speach'])): ?>
              <p><?= nl2br($speach['speach']) ?></p>
            <?php else: ?>
              <p>Pidato belum tersedia 😅</p>
            <?php endif; ?>
          </div>

        </div>

      </div>
    </div>

  </div>
</section>

</main>