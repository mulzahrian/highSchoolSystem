
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

        <h5 class="card-title fw-semibold mb-4">News</h5>

        <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addNewsModal">
          + Add News
        </button>

        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Thumbnail</th>
              <th>Title</th>
              <th>Type</th>
              <th>Content</th>
              <th>Status</th>
              <th>Views</th>
              <th>Created At</th>
              <th width="120">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php if (!empty($news)): ?>
              <?php foreach ($news as $row): ?>
                <tr>
                  <td>
                    <?php if ($row['thumbnail']): ?>
                      <img src="<?= base_url('uploads/news/' . $row['thumbnail']) ?>"
                           width="80" class="img-thumbnail">
                    <?php endif ?>
                  </td>
                  <td><?= esc($row['title']) ?></td>
                  <td>
                    <span class="badge <?= $row['type'] == 'highlight' ? 'bg-danger' : 'bg-secondary' ?>">
                      <?= esc($row['type']) ?>
                    </span>
                  </td>
                  <td><?= character_limiter(strip_tags($row['content']), 80) ?></td>
                  <td><?= $row['is_active'] ? 'Active' : 'Inactive' ?></td>
                  <td><?= esc($row['view_count']) ?></td>
                  <td><?= esc($row['created_at']) ?></td>
                  <td>
                    <button class="btn btn-warning btn-sm"
          data-bs-toggle="modal"
          data-bs-target="#editNewsModal<?= $row['news_id'] ?>">
    Edit
  </button>
                    <a href="<?= base_url('news/delete/' . $row['news_id']) ?>"
                       class="btn btn-danger btn-sm"
                       onclick="return confirm('Delete this news?')">
                      Delete
                    </a>
                  </td>
                </tr>
              <?php endforeach ?>
            <?php else: ?>
              <tr>
                <td colspan="8" class="text-center text-muted">No data</td>
              </tr>
            <?php endif ?>
          </tbody>
        </table>

      </div>
    </div>
  </div>
</div>

<!-- MODAL ADD -->
<div class="modal fade" id="addNewsModal" tabindex="-1" data-bs-focus="false">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title fw-semibold">Add News</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <form action="<?= base_url('news/add') ?>" method="post" enctype="multipart/form-data">
        <div class="modal-body">

          <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Type</label>
            <select name="type" class="form-select" required>
              <option value="">-- Select --</option>
              <option value="highlight">Highlight</option>
              <option value="normal">Normal</option>
            </select>
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

<?php foreach ($news as $row): ?>
<div class="modal fade" id="editNewsModal<?= $row['news_id'] ?>" tabindex="-1" data-bs-focus="false">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title fw-semibold">Edit News</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <form action="<?= base_url('news/edit/' . $row['news_id']) ?>" method="post" enctype="multipart/form-data">
        <div class="modal-body">

          <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" value="<?= esc($row['title']) ?>" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Type</label>
            <select name="type" class="form-select" required>
              <option value="highlight" <?= $row['type'] == 'highlight' ? 'selected' : '' ?>>Highlight</option>
              <option value="normal" <?= $row['type'] == 'normal' ? 'selected' : '' ?>>Normal</option>
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Thumbnail</label>
            <input type="file" name="thumbnail" class="form-control">
            <?php if ($row['thumbnail']): ?>
              <img src="<?= base_url('uploads/news/' . $row['thumbnail']) ?>" width="120" class="img-thumbnail mt-2">
            <?php endif ?>
          </div>

          <div class="mb-3">
            <label class="form-label">Content</label>
            <textarea name="content" id="historyEditor<?= $row['news_id'] ?>" class="form-control" rows="6"><?= esc($row['content']) ?></textarea>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="is_active" value="1" <?= $row['is_active'] ? 'checked' : '' ?>>
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
<?php endforeach ?>