<main class="main">

<style>
.teacher-section {
    background: #f4f6f8;
    padding: 60px 20px;
}

.teacher-title {
    text-align: center;
    font-size: 28px;
    font-weight: 700;
    margin-bottom: 40px;
    color: #20c997;
}

.teacher-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 25px;
}

.teacher-card {
    background: #fff;
    border-radius: 18px;
    overflow: hidden;
    box-shadow: 0 15px 30px rgba(0,0,0,0.08);
    transition: 0.3s;
    text-align: center;
}

.teacher-card:hover {
    transform: translateY(-8px);
}

.teacher-img {
    width: 100%;
    height: 260px;
    object-fit: cover;
}

.teacher-body {
    padding: 20px;
}

.teacher-name {
    font-size: 18px;
    font-weight: 700;
    color: #333;
}

.teacher-role {
    font-size: 14px;
    color: #20c997;
    margin-bottom: 10px;
}

.teacher-detail {
    font-size: 14px;
    color: #555;
    line-height: 1.6;
}
</style>

<section class="teacher-section">
  <div class="container">

    <div class="teacher-title">
      Profile Guru
    </div>

    <div class="teacher-grid">

      <?php foreach ($teachers as $t): ?>
        <div class="teacher-card">

          <?php if (!empty($t['image'])): ?>
            <img 
              src="<?= base_url('uploads/teacher/' . $t['image']) ?>" 
              class="teacher-img"
            >
          <?php endif; ?>

          <div class="teacher-body">
            <div class="teacher-name"><?= esc($t['name']) ?></div>
            <div class="teacher-role"><?= esc($t['role']) ?></div>
            <div class="teacher-detail"><?= esc($t['detail']) ?></div>
          </div>

        </div>
      <?php endforeach; ?>

    </div>

  </div>
</section>

</main>