<!-- MAIN -->
<div class="body-wrapper">

<header class="app-header">
  <nav class="navbar navbar-expand-lg navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item d-block d-xl-none">
        <a class="nav-link sidebartoggler" href="#">
          <i class="ti ti-menu-2"></i>
        </a>
      </li>
    </ul>
  </nav>
</header>

<div class="body-wrapper-inner">
  <div class="container-fluid">
    <div class="card">
      <div class="card-body">

        <h5 class="card-title fw-semibold mb-4">Speach Headmaster</h5>

        <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addModal">
          + Add Data
        </button>

        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Photo</th>
              <th>Speach</th>
              <th>Status</th>
              <th width="150">Action</th>
            </tr>
          </thead>

          <tbody>
            <?php foreach ($speaches as $row): ?>
              <tr>
                <td>
                  <img src="<?= base_url($row['photo']) ?>" width="80">
                </td>

                <td><?= esc($row['speach']) ?></td>

                <td>
                  <?= $row['is_active'] 
                    ? '<span class="badge bg-success">Active</span>' 
                    : '<span class="badge bg-secondary">Inactive</span>' ?>
                </td>

                <td>
                  <button 
                    class="btn btn-warning btn-sm btn-edit"
                    data-id="<?= $row['speach_id'] ?>"
                    data-speach="<?= esc($row['speach']) ?>"
                    data-active="<?= $row['is_active'] ?>"
                    data-bs-toggle="modal"
                    data-bs-target="#editModal">
                    Edit
                  </button>

                  <a href="<?= base_url('speach-headmaster/delete/' . $row['speach_id']) ?>"
                     class="btn btn-danger btn-sm"
                     onclick="return confirm('Delete this data?')">
                    Delete
                  </a>
                </td>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>

      </div>
    </div>
  </div>
</div>
</div>

<!-- ADD -->
<div class="modal fade" id="addModal">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">

      <form action="<?= base_url('speach-headmaster/add') ?>" method="post" enctype="multipart/form-data">
        <div class="modal-header">
          <h5>Add Data</h5>
        </div>

        <div class="modal-body">

          <div class="mb-3">
            <label>Photo</label>
            <input type="file" name="photo" class="form-control" required>
          </div>

          <div class="mb-3">
            <label>Speach</label>
            <textarea name="speach" class="form-control" rows="4" required></textarea>
          </div>

        </div>

        <div class="modal-footer">
          <button class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>

<!-- EDIT -->
<div class="modal fade" id="editModal">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">

      <form id="editForm" method="post" enctype="multipart/form-data">
        <div class="modal-header">
          <h5>Edit Data</h5>
        </div>

        <div class="modal-body">

          <div class="mb-3">
            <label>Photo (optional)</label>
            <input type="file" name="photo" class="form-control">
          </div>

          <div class="mb-3">
            <label>Speach</label>
            <textarea name="speach" id="edit_speach" class="form-control"></textarea>
          </div>

          <div class="mb-3">
            <label>Status</label>
            <select name="is_active" id="edit_active" class="form-control">
              <option value="1">Active</option>
              <option value="0">Inactive</option>
            </select>
          </div>

        </div>

        <div class="modal-footer">
          <button class="btn btn-primary">Update</button>
        </div>
      </form>

    </div>
  </div>
</div>

<!-- SCRIPT -->
<script>
document.querySelectorAll('.btn-edit').forEach(btn => {
  btn.addEventListener('click', function () {

    const id = this.dataset.id;
    const speach = this.dataset.speach;
    const active = this.dataset.active;

    document.getElementById('edit_speach').value = speach;
    document.getElementById('edit_active').value = active;

    document.getElementById('editForm').action =
      "<?= base_url('speach-headmaster/update/') ?>" + id;
  });
});
</script>