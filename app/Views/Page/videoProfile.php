<!--  Main wrapper -->
<div class="body-wrapper">
  <!--  Header Start -->
  <header class="app-header">
    <nav class="navbar navbar-expand-lg navbar-light">
      <ul class="navbar-nav">
        <li class="nav-item d-block d-xl-none">
          <a class="nav-link sidebartoggler" id="headerCollapse" href="javascript:void(0)">
            <i class="ti ti-menu-2"></i>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="javascript:void(0)" id="drop1" data-bs-toggle="dropdown">
            <iconify-icon icon="solar:bell-linear" class="fs-6"></iconify-icon>
            <div class="notification bg-primary rounded-circle"></div>
          </a>
        </li>
      </ul>

      <div class="navbar-collapse justify-content-end px-0">
        <ul class="navbar-nav flex-row ms-auto align-items-center">
          <li class="nav-item dropdown">
            <a class="nav-link" href="javascript:void(0)" data-bs-toggle="dropdown">
              <img src="<?= base_url('assets/images/profile/user-1.jpg') ?>" width="35" class="rounded-circle">
            </a>
            <div class="dropdown-menu dropdown-menu-end">
              <div class="message-body">
                <a href="#" class="dropdown-item">My Profile</a>
                <a href="<?= base_url('logout') ?>" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- CONTENT -->
  <div class="body-wrapper-inner">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">

          <h5 class="card-title fw-semibold mb-4">Video Profile</h5>

          <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addModal">
            + Add Video
          </button>

          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Video URL</th>
                <th>Status</th>
                <th>Created At</th>
                <th width="150">Action</th>
              </tr>
            </thead>

            <tbody>
              <?php if (!empty($videos)): ?>
                <?php foreach ($videos as $row): ?>
                  <tr>
                    <td>
                      <a href="<?= esc($row['url']) ?>" target="_blank">
                        <?= esc($row['url']) ?>
                      </a>
                    </td>

                    <td>
                      <?= $row['is_active'] 
                        ? '<span class="badge bg-success">Active</span>' 
                        : '<span class="badge bg-secondary">Inactive</span>' ?>
                    </td>

                    <td><?= esc($row['created_at']) ?></td>

                    <td>
                      <button 
                        class="btn btn-warning btn-sm btn-edit"
                        data-id="<?= $row['video_id'] ?>"
                        data-url="<?= esc($row['url']) ?>"
                        data-active="<?= $row['is_active'] ?>"
                        data-bs-toggle="modal"
                        data-bs-target="#editModal">
                        Edit
                      </button>

                      <a href="<?= base_url('video-profile/delete/' . $row['video_id']) ?>"
                         class="btn btn-danger btn-sm"
                         onclick="return confirm('Delete this video?')">
                        Delete
                      </a>
                    </td>
                  </tr>
                <?php endforeach ?>
              <?php else: ?>
                <tr>
                  <td colspan="4" class="text-center text-muted">
                    No data available
                  </td>
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
<div class="modal fade" id="addModal" tabindex="-1" data-bs-focus="false">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title fw-semibold">Add Video</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <form action="<?= base_url('video-profile/add') ?>" method="post">
        <div class="modal-body">

          <div class="mb-3">
            <label class="form-label">Video URL</label>
            <input type="text" name="url" class="form-control"
                   placeholder="https://youtube.com/..." required>
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
<div class="modal fade" id="editModal" tabindex="-1" data-bs-focus="false">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title fw-semibold">Edit Video</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <form id="editForm" method="post">
        <div class="modal-body">

          <div class="mb-3">
            <label class="form-label">Video URL</label>
            <input type="text" name="url" id="edit_url" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Status</label>
            <select name="is_active" id="edit_active" class="form-control">
              <option value="1">Active</option>
              <option value="0">Inactive</option>
            </select>
          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </form>

    </div>
  </div>
</div>

<!-- ================= SCRIPT ================= -->
<script>
document.querySelectorAll('.btn-edit').forEach(btn => {
  btn.addEventListener('click', function () {

    const id = this.dataset.id;
    const url = this.dataset.url;
    const active = this.dataset.active;

    document.getElementById('edit_url').value = url;
    document.getElementById('edit_active').value = active;

    document.getElementById('editForm').action =
      "<?= base_url('video-profile/update/') ?>" + id;
  });
});
</script>