<div class="body-wrapper">

  <header class="app-header">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="navbar-collapse justify-content-end px-0">
        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" data-bs-toggle="dropdown">
              <img src="<?= base_url('assets/images/profile/user-1.jpg') ?>"
                   width="35" height="35" class="rounded-circle">
            </a>
            <div class="dropdown-menu dropdown-menu-end">
              <a href="<?= base_url('logout') ?>"
                 class="btn btn-outline-primary mx-3 mt-2 d-block">
                Logout
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <div class="body-wrapper-inner">
    <div class="container-fluid">

      <div class="card">
        <div class="card-body">

          <h5 class="card-title fw-semibold mb-4">Agen Perubahan</h5>

          <button class="btn btn-primary mb-3"
                  data-bs-toggle="modal"
                  data-bs-target="#addModal">
            + Add Data
          </button>

          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Header</th>
                <th>Image</th>
                <th>Content</th>
                <th>Status</th>
                <th width="160">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php if ($rows): foreach ($rows as $r): ?>
              <tr>
                <td><?= esc($r['header']) ?></td>

                <td>
                  <img src="<?= base_url('uploads/agen_perubahan/'.$r['image']) ?>"
                       width="80">
                </td>

                <td style="max-width:250px">
                  <div style="max-height:80px; overflow:hidden;">
                    <?= $r['content'] ?>
                  </div>
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
                    data-id="<?= $r['agen_id'] ?>"
                    data-header="<?= esc($r['header']) ?>"
                    data-content="<?= esc($r['content']) ?>"
                    data-active="<?= $r['is_active'] ?>">
                    Edit
                  </button>

                  <a href="<?= base_url('agen_perubahan/delete/'.$r['agen_id']) ?>"
                     class="btn btn-danger btn-sm"
                     onclick="return confirm('Delete data?')">
                    Delete
                  </a>
                </td>
              </tr>
              <?php endforeach; else: ?>
              <tr>
                <td colspan="5" class="text-center text-muted">No data</td>
              </tr>
              <?php endif ?>
            </tbody>
          </table>

        </div>
      </div>

    </div>
  </div>
</div>


<!-- ADD MODAL -->
<div class="modal fade" id="addModal" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title fw-semibold">Add Agen Perubahan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <form action="<?= base_url('agen_perubahan/add') ?>"
            method="post"
            enctype="multipart/form-data">

        <div class="modal-body">

          <div class="mb-3">
            <label class="form-label">Header</label>
            <input type="text" name="header" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="file" name="image" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Content</label>
            <textarea name="content" class="form-control" rows="5" required></textarea>
          </div>

          <div class="form-check">
            <input class="form-check-input"
                   type="checkbox"
                   name="is_active"
                   value="1"
                   checked>
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


<!-- EDIT MODAL -->
<div class="modal fade" id="editModal" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title fw-semibold">Edit Agen Perubahan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <form id="editForm" method="post" enctype="multipart/form-data">

        <div class="modal-body">

          <div class="mb-3">
            <label class="form-label">Header</label>
            <input type="text" name="header" id="edit_header" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Image (optional)</label>
            <input type="file" name="image" class="form-control">
          </div>

          <div class="mb-3">
            <label class="form-label">Content</label>
            <textarea name="content" id="edit_content" class="form-control" rows="5" required></textarea>
          </div>

          <div class="form-check">
            <input class="form-check-input"
                   type="checkbox"
                   name="is_active"
                   id="edit_active"
                   value="1">
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


<script>
const editModal = document.getElementById('editModal');

editModal.addEventListener('show.bs.modal', function (event) {
  const btn = event.relatedTarget;

  document.getElementById('edit_header').value = btn.dataset.header;
  document.getElementById('edit_content').value = btn.dataset.content;
  document.getElementById('edit_active').checked = btn.dataset.active == 1;

  document.getElementById('editForm').action =
    "<?= base_url('agen_perubahan/update/') ?>" + btn.dataset.id;
});
</script>
