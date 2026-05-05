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

  <div class="body-wrapper-inner">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">

          <h5 class="card-title fw-semibold mb-4">USER</h5>

            <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addModal">
            + Add User
            </button>

            <table class="table table-bordered">
            <thead>
                <tr>
                <th>Name</th>
                <th>Email</th>
                <th width="150">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($rows): foreach ($rows as $r): ?>
                <tr>
                <td><?= esc($r['name']) ?></td>
                <td><?= esc($r['email']) ?></td>
                <td>
                    <button
                    class="btn btn-warning btn-sm"
                    data-bs-toggle="modal"
                    data-bs-target="#editModal"
                    data-id="<?= $r['id'] ?>"
                    data-name="<?= esc($r['name']) ?>"
                    data-email="<?= esc($r['email']) ?>">
                    Edit
                    </button>

                    <a href="<?= base_url('user/delete/'.$r['id']) ?>"
                    class="btn btn-danger btn-sm"
                    onclick="return confirm('Delete data?')">
                    Delete
                    </a>
                </td>
                </tr>
                <?php endforeach; else: ?>
                <tr>
                <td colspan="3" class="text-center text-muted">No data</td>
                </tr>
                <?php endif ?>
            </tbody>
            </table>

        </div>
      </div>
    </div>
  </div>

<!-- ================= ADD MODAL ================= -->
<div class="modal fade" id="addModal">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Add User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <form action="<?= base_url('user/add') ?>" method="post">
        <div class="modal-body">

          <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
          </div>

          <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
          </div>

          <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
          </div>

        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>

<!-- ================= EDIT MODAL ================= -->
<div class="modal fade" id="editModal">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Edit User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <form id="editForm" method="post">
        <div class="modal-body">

          <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" id="edit_name" class="form-control" required>
          </div>

          <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" id="edit_email" class="form-control" required>
          </div>

          <div class="mb-3">
            <label>Password (optional)</label>
            <input type="password" name="password" class="form-control">
          </div>

        </div>

        <div class="modal-footer">
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

  document.getElementById('edit_name').value = btn.dataset.name;
  document.getElementById('edit_email').value = btn.dataset.email;

  document.getElementById('editForm').action =
    "<?= base_url('user/update/') ?>" + btn.dataset.id;
});
</script>