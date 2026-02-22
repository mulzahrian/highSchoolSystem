<main class="main">

<style>
.sks-section {
    padding: 60px 15px;
    background: #f4f6f8;
}

.sks-table {
    background: #fff;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 10px 25px rgba(0,0,0,0.08);
}

.sks-table th {
    background: #0d6efd;
    color: #fff;
}

.sks-link {
    text-decoration: none;
    color: #0d6efd;
    font-weight: 500;
}
</style>

<section class="sks-section">
  <div class="container">

    <div class="table-responsive sks-table">
      <table class="table table-hover mb-0">
        <thead>
          <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>

          <?php $no = 1; foreach ($sks as $s): ?>
            <tr>
              <td><?= $no++ ?></td>
              <td><?= esc($s['header']) ?></td>
              <td>
                <a href="<?= base_url('outsks/' . $s['sks']) ?>" class="sks-link">
                  Lihat Detail
                </a>
              </td>
            </tr>
          <?php endforeach; ?>

        </tbody>
      </table>
    </div>

  </div>
</section>

</main>