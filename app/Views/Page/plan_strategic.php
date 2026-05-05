
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler " id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link " href="javascript:void(0)" id="drop1" data-bs-toggle="dropdown" aria-expanded="false">
                <iconify-icon icon="solar:bell-linear" class="fs-6"></iconify-icon>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
               
              <li class="nav-item dropdown">
                <a class="nav-link " href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="<?= base_url('assets/images/profile/user-1.jpg') ?>" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <a href="<?= base_url('logout') ?>" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
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

        <h5 class="card-title fw-semibold mb-4">Plan Strategic</h5>

        <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addPlanModal">
          + Add Plan
        </button>

        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Thumbnail</th>
              <th>Year</th>
              <th>Content</th>
              <th>Status</th>
              <th>Created At</th>
              <th width="120">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php if (!empty($plans)): ?>
              <?php foreach ($plans as $row): ?>
                <tr>
                  <td>
                    <?php if ($row['thumbnail']): ?>
                      <img src="<?= base_url('uploads/plan_strategic/' . $row['thumbnail']) ?>"
                           width="80" class="img-thumbnail">
                    <?php endif ?>
                  </td>
                  <td><?= esc($row['year']) ?></td>
                  <td><?= character_limiter(strip_tags($row['content']), 80) ?></td>
                  <td><?= $row['is_active'] ? 'Active' : 'Inactive' ?></td>
                  <td><?= esc($row['created_at']) ?></td>
                  <td>
                    <button class="btn btn-warning btn-sm btn-edit"
    data-id="<?= $row['plan_id'] ?>"
    data-year="<?= esc($row['year']) ?>"
    data-content="<?= esc($row['content']) ?>"
    data-active="<?= $row['is_active'] ?>"
    data-bs-toggle="modal"
    data-bs-target="#editModal">
  Edit
</button>
                    <a href="<?= base_url('plan-strategic/delete/' . $row['plan_id']) ?>"
                       class="btn btn-danger btn-sm"
                       onclick="return confirm('Delete this plan?')">
                      Delete
                    </a>
                  </td>
                </tr>
              <?php endforeach ?>
            <?php else: ?>
              <tr>
                <td colspan="6" class="text-center text-muted">No data</td>
              </tr>
            <?php endif ?>
          </tbody>
        </table>

      </div>
    </div>
  </div>
</div>

<!-- MODAL ADD -->
<div class="modal fade" id="addPlanModal" tabindex="-1" data-bs-focus="false">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title fw-semibold">Add Plan Strategic</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <form action="<?= base_url('plan-strategic/add') ?>" method="post" enctype="multipart/form-data">
        <div class="modal-body">

          <div class="mb-3">
            <label class="form-label">Year</label>
            <input type="text" name="year" class="form-control" placeholder="ex: 2025 - 2030" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Thumbnail</label>
            <input type="file" name="thumbnail" class="form-control">
          </div>

          <div class="mb-3">
            <label class="form-label">Content</label>
            <textarea name="content" id="historyEditor" class="form-control" rows="6"></textarea>
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

<!-- MODAL EDIT -->
<div class="modal fade" id="editModal" tabindex="-1">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title fw-semibold">Edit Plan Strategic</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <form id="editForm" method="post" enctype="multipart/form-data">
        <div class="modal-body">

          <input type="hidden" id="editId">

          <div class="mb-3">
            <label class="form-label">Year</label>
            <input type="text" name="year" id="editYear" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Thumbnail (optional)</label>
            <input type="file" name="thumbnail" class="form-control">
          </div>

          <div class="mb-3">
            <label class="form-label">Content</label>
            <textarea name="content" id="editContent" class="form-control" rows="6"></textarea>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="editActive" name="is_active" value="1">
            <label class="form-check-label">Active</label>
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

<script>
document.querySelectorAll('.btn-edit').forEach(button => {
  button.addEventListener('click', function () {

    const id      = this.dataset.id;
    const year    = this.dataset.year;
    const content = this.dataset.content;
    const active  = this.dataset.active;

    document.getElementById('editId').value = id;
    document.getElementById('editYear').value = year;
    document.getElementById('editContent').value = content;

    // checkbox
    document.getElementById('editActive').checked = active == 1;

    // set action form
    document.getElementById('editForm').action =
      "<?= base_url('plan-strategic/update/') ?>" + id;
  });
});
</script>
