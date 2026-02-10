
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
        <h5 class="card-title fw-semibold mb-4">UKBM</h5>

<button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addModal">
  + Add UKBM
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
        <img src="<?= base_url('uploads/ukbm/'.$r['image']) ?>" width="80">
      </td>
       <td style="max-width:300px">
    <div style="max-height:80px; overflow:hidden">
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
          data-id="<?= $r['ukbm_id'] ?>"
          data-header="<?= esc($r['header']) ?>"
          data-content="<?= esc($r['content']) ?>"
          data-active="<?= $r['is_active'] ?>">
          Edit
        </button>

        <a href="<?= base_url('ukbm/delete/'.$r['ukbm_id']) ?>"
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

<div class="modal fade" id="addModal" tabindex="-1" data-bs-focus="false">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title fw-semibold">Add UKBM</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <form action="<?= base_url('ukbm/add') ?>" method="post" enctype="multipart/form-data">
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
            <textarea name="content" id="addEditor"></textarea>
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

<div class="modal fade" id="editModal" tabindex="-1" data-bs-focus="false">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title fw-semibold">Edit UKBM</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <form id="editForm" method="post" enctype="multipart/form-data">
        <div class="modal-body">

          <div class="mb-3">
            <label class="form-label">Header</label>
            <input type="text" name="header" id="edit_header" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Content</label>
            <textarea name="content" id="editEditor"></textarea>
          </div>

          <div class="mb-3">
            <label class="form-label">Image (optional)</label>
            <input type="file" name="image" class="form-control">
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

<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>

<script>
CKEDITOR.replace('addEditor');
CKEDITOR.replace('editEditor');

const editModal = document.getElementById('editModal');

editModal.addEventListener('show.bs.modal', function (event) {
  const btn = event.relatedTarget;

  document.getElementById('edit_header').value = btn.dataset.header;
  document.getElementById('edit_active').checked = btn.dataset.active == 1;

  CKEDITOR.instances.editEditor.setData(btn.dataset.content);

  document.getElementById('editForm').action =
    "<?= base_url('ukbm/update/') ?>" + btn.dataset.id;
});
</script>
