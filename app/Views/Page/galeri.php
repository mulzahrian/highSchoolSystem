<!-- Main wrapper -->
<div class="body-wrapper">

  <div class="container-fluid">
    <div class="card">
      <div class="card-body">

        <h5 class="card-title fw-semibold mb-4">GALERI</h5>

        <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addModal">
          + Add Data
        </button>

        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Header</th>
              <th>Image</th>
              <th>Status</th>
              <th width="160">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php if ($rows): foreach ($rows as $r): ?>
            <tr>
              <td><?= esc($r['header']) ?></td>

              <td>
                <img src="<?= base_url('uploads/galeri/'.$r['image']) ?>"
                     width="100"
                     class="img-thumbnail">
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
                  data-id="<?= $r['galeri_id'] ?>"
                  data-header="<?= esc($r['header']) ?>"
                  data-active="<?= $r['is_active'] ?>">
                  Edit
                </button>

                <a href="<?= base_url('galeri/delete/'.$r['galeri_id']) ?>"
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

<!-- ADD MODAL -->
<div class="modal fade" id="addModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <form action="<?= base_url('galeri/add') ?>" method="post" enctype="multipart/form-data">
        <div class="modal-body">

          <input type="text" name="header" class="form-control mb-2" placeholder="Header" required>

          <input type="file" name="image" class="form-control mb-2" required>

          <div class="form-check">
            <input type="checkbox" name="is_active" value="1" checked> Active
          </div>

          <button class="btn btn-primary mt-2">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>

<!-- EDIT MODAL -->
<div class="modal fade" id="editModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <form id="editForm" method="post" enctype="multipart/form-data">
        <div class="modal-body">

          <input type="text" name="header" id="edit_header" class="form-control mb-2" required>

          <input type="file" name="image" class="form-control mb-2">

          <div class="form-check">
            <input type="checkbox" name="is_active" id="edit_active" value="1"> Active
          </div>

          <button class="btn btn-success mt-2">Update</button>
        </div>
      </form>

    </div>
  </div>
</div>

<script>
const editModal = document.getElementById('editModal');

editModal.addEventListener('show.bs.modal', function (event) {
  const btn = event.relatedTarget;

  document.getElementById('edit_header').value = btn.dataset.header;
  document.getElementById('edit_active').checked = btn.dataset.active == 1;

  document.getElementById('editForm').action =
    "<?= base_url('galeri/update/') ?>" + btn.dataset.id;
});
</script>