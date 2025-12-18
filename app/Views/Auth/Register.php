<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden text-bg-light min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="<?= base_url('assets/images/logos/Logo.png') ?>" alt="" class="img-fluid" style="max-width: 120px;">
                </a>
                <h3 class="text-center">Register</h3>
                <?php if (session()->getFlashdata('errors')) : ?>
                  <div class="alert alert-danger">
                    <?php foreach (session()->getFlashdata('errors') as $error) : ?>
                      <p><?= esc($error) ?></p>
                    <?php endforeach ?>
                  </div>
                <?php endif ?>
                <form action="<?= base_url('register') ?>" method="post">
                  <?= csrf_field() ?>

                  <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" required>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Email Address</label>
                    <input type="email" name="email" class="form-control" required>
                  </div>

                  <div class="mb-4">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" required>
                  </div>
                  <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">
                    Sign Up
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>