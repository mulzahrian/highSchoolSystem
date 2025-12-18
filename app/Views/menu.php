<!DOCTYPE html>
<html>
<head>
  <title>Menu</title>
</head>
<body>
  <h2>Welcome, <?= session('user_name') ?> 👋</h2>

  <p>Email: <?= session('user_email') ?></p>

  <a href="<?= base_url('logout') ?>">Logout</a>
</body>
</html>
