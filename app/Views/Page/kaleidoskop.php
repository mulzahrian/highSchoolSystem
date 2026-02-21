<!-- Main wrapper -->
<div class="body-wrapper">

  <!-- Header -->
  <header class="app-header">
    <nav class="navbar navbar-expand-lg navbar-light">
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

  <div class="container-fluid">
    <div class="card">
      <div class="card-body">

        <h5 class="card-title fw-semibold mb-4">KALEIDOSKOP</h5>

        <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addModal">
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
                <img src="<?= base_url('uploads/kaleidoskop/'.$r['image']) ?>"
                     width="100"
                     class="img-thumbnail">
              </td>

              <td style="max-width:250px;">
                <?= substr(strip_tags($r['content']), 0, 80) ?>...
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
                  data-id="<?= $r['Kaleidoskop_id'] ?>"
                  data-header="<?= esc($r['header']) ?>"
                  data-content="<?= htmlspecialchars($r['content']) ?>"
                  data-active="<?= $r['is_active'] ?>">
                  Edit
                </button>

                <a href="<?= base_url('kaleidoskop/delete/'.$r['Kaleidoskop_id']) ?>"
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

<!-- ADD MODAL -->
<div class="modal fade" id="addModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <form action="<?= base_url('kaleidoskop/add') ?>" method="post" enctype="multipart/form-data">
        <div class="modal-body">

          <input type="text" name="header" class="form-control mb-2" placeholder="Header" required>

          <input type="file" name="image" class="form-control mb-2" required>

          <textarea name="content" id="add_content" class="form-control mb-2" required></textarea>

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

          <textarea name="content" id="edit_content" class="form-control mb-2" required></textarea>

          <div class="form-check">
            <input type="checkbox" name="is_active" id="edit_active" value="1"> Active
          </div>

          <button class="btn btn-success mt-2">Update</button>
        </div>
      </form>

    </div>
  </div>
</div>

<!-- CKEDITOR -->
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>

<script>
CKEDITOR.replace('add_content');
CKEDITOR.replace('edit_content');

const editModal = document.getElementById('editModal');

editModal.addEventListener('show.bs.modal', function (event) {
  const btn = event.relatedTarget;

  document.getElementById('edit_header').value = btn.dataset.header;
  document.getElementById('edit_active').checked = btn.dataset.active == 1;

  CKEDITOR.instances.edit_content.setData(btn.dataset.content);

  document.getElementById('editForm').action =
    "<?= base_url('kaleidoskop/update/') ?>" + btn.dataset.id;
});
</script>