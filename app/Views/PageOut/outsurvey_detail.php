<main class="main">

<style>
.outsurvey-detail {
    background: #f4f6f8;
    padding: 60px 15px;
}

.outsurvey-box {
    max-width: 1000px;
    margin: auto;
    background: #fff;
    border-radius: 16px;
    padding: 24px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.08);
}

.outsurvey-title {
    font-size: 24px;
    font-weight: 700;
    color: #0d6efd;
    text-align: center;
    margin-bottom: 20px;
}

.outsurvey-pdf {
    width: 100%;
    height: 80vh;
    border: none;
    border-radius: 12px;
}
</style>

<section class="outsurvey-detail">
  <div class="container">

    <div class="outsurvey-box">

      <div class="outsurvey-title">
        <?= esc($survey['header']) ?>
      </div>

      <?php if (!empty($survey['pdf'])): ?>
        <iframe
          src="<?= base_url('uploads/survey_kepuasan/' . $survey['pdf']) ?>"
          class="outsurvey-pdf">
        </iframe>
      <?php else: ?>
        <p class="text-center">File tidak tersedia</p>
      <?php endif; ?>

    </div>

  </div>
</section>

</main>