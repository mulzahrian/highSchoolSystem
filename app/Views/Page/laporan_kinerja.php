<!-- Main wrapper -->
<div class="body-wrapper">

  <!-- Header -->
  <header class="app-header">
    <nav class="navbar navbar-expand-lg navbar-light">
      <ul class="navbar-nav">
        <li class="nav-item d-block d-xl-none">
          <a class="nav-link sidebartoggler" id="headerCollapse" href="javascript:void(0)">
            <i class="ti ti-menu-2"></i>
          </a>
        </li>
      </ul>

      <div class="navbar-collapse justify-content-end px-0">
        <ul class="navbar-nav flex-row ms-auto align-items-center">
          <li class="nav-item dropdown">
            <a class="nav-link" href="javascript:void(0)" data-bs-toggle="dropdown">
              <img src="<?= base_url('assets/images/profile/user-1.jpg') ?>"
                   width="35" height="35" class="rounded-circle">
            </a>
            <div class="dropdown-menu dropdown-menu-end">
              <a href="<?= base_url('logout') ?>" class="dropdown-item text-danger">Logout</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- Content -->
  <div class="body-wrapper-inner">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">

          <h5 class="card-title fw-semibold mb-4">LAPORAN KINERJA</h5>

          <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addModal">
            + Add Laporan
          </button>

          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Header</th>
                <th>PDF</th>
                <th>Status</th>
                <th width="160">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php if ($rows): foreach ($rows as $r): ?>
              <tr>
                <td><?= esc($r['header']) ?></td>

                <td>
                  <a href="<?= base_url('uploads/laporan-kinerja/'.$r['pdf']) ?>"
                     target="_blank"
                     class="btn btn-sm btn-info">
                    View PDF
                  </a>
                </td>

                <td>
                  <span class="badge <?= $r['is_active'] ? 'bg-success' : 'bg-secondary' ?>">
                    <?= $r['is_active'] ? 'Active' : 'Inactive' ?>
                  </span>
                </td>

                <td>
                  <button
                    class="btn btn-warning btn-sm"
                    data-bs-toggle="modal"
                    data-bs-target="#editModal"
                    data-id="<?= $r['sks'] ?>"
                    data-header="<?= esc($r['header']) ?>"
                    data-active="<?= $r['is_active'] ?>">
                    Edit
                  </button>

                  <a href="<?= base_url('laporan-kinerja/delete/'.$r['sks']) ?>"
                     class="btn btn-danger btn-sm"
                     onclick="return confirm('Delete data?')">
                    Delete
                  </a>
                </td>
              </tr>
              <?php endforeach; else: ?>
              <tr>
                <td colspan="4" class="text-center text-muted">No data</td>
              </tr>
              <?php endif ?>
            </tbody>
          </table>

        </div>
      </div>
    </div>
  </div>
</div>

<!-- ================= ADD MODAL ================= -->
<div class="modal fade" id="addModal" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title fw-semibold">Add Laporan Kinerja</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <form action="<?= base_url('laporan-kinerja/add') ?>" method="post" enctype="multipart/form-data">
        <div class="modal-body">

          <div class="mb-3">
            <label class="form-label">Header</label>
            <input type="text" name="header" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Upload PDF</label>
            <input type="file" name="pdf" class="form-control" accept="application/pdf" required>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="is_active" value="1" checked>
            <label class="form-check-label">Active</label>
          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>

<!-- ================= EDIT MODAL ================= -->
<div class="modal fade" id="editModal" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title fw-semibold">Edit Laporan Kinerja</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <form id="editForm" method="post" enctype="multipart/form-data">
        <div class="modal-body">

          <div class="mb-3">
            <label class="form-label">Header</label>
            <input type="text" name="header" id="edit_header" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Replace PDF (optional)</label>
            <input type="file" name="pdf" class="form-control" accept="application/pdf">
          </div>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="is_active" id="edit_active" value="1">
            <label class="form-check-label">Active</label>
          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-success">Update</button>
        </div>
      </form>

    </div>
  </div>
</div>

<!-- ================= SCRIPT ================= -->
<script>
const editModal = document.getElementById('editModal');

editModal.addEventListener('show.bs.modal', function (event) {
  const btn = event.relatedTarget;

  document.getElementById('edit_header').value = btn.dataset.header;
  document.getElementById('edit_active').checked = btn.dataset.active == 1;

  document.getElementById('editForm').action =
    "<?= base_url('laporan-kinerja/update/') ?>" + btn.dataset.id;
});
</script>
