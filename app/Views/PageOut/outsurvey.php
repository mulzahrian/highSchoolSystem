<main class="main">

<style>
.outsurvey-section {
    background: #f5f7fa;
    padding: 60px 15px;
}

.outsurvey-box {
    background: #fff;
    border-radius: 16px;
    padding: 24px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.08);
}

.table th {
    background: #20385b;
    color: #fff;
}

.btn-detail {
    background: #0d6efd;
    color: #fff;
    border-radius: 8px;
    padding: 6px 12px;
    text-decoration: none;
}
</style>

<section class="outsurvey-section">
  <div class="container">

    <div class="outsurvey-box">

      <h3 class="text-center mb-4">Survey Kepuasan</h3>

      <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle text-center">
          <thead>
            <tr>
              <th>No</th>
              <th>Header</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; foreach ($survey as $item): ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><?= esc($item['header']) ?></td>
                <td>
                  <a href="<?= base_url('outsurvey-kepuasan/' . $item['survey_id']) ?>" 
                     class="btn-detail">
                     Detail
                  </a>
                </td>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>

    </div>

  </div>
</section>

</main>