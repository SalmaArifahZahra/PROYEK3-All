<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Register</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet">
  
  <style>
    body, html {
      height: 100%;
    }
    .container {
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .card {
      background-color: #0BA6DF;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.15);
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="col-md-4">
      <div class="card">
        <h3 class="text-center mb-4 fs-1 text-white">Register</h3>

          <!-- ALERT FLASH MESSAGE -->
        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?= session()->getFlashdata('error') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= session()->getFlashdata('success') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <form action="/registerAction" method="post">
          <?= csrf_field(); ?>

          <div class="mb-3">
            <label for="username" class="form-label text-white">Username</label>
            <input type="text" class="form-control" name="username" id="username"  placeholder="Masukkan Username" required>
          </div>

          <div class="mb-3">
            <label for="password" class="form-label text-white">Password</label>
            <input type="password" class="form-control" name="password" id="password"  placeholder="Masukkan Password" required>
          </div>

          <button type="submit" class="btn btn-block text-white w-100" style="background-color:#154D71;">
            Register
          </button>

          <p class="text-center mt-3 text-white">
            Sudah punya akun? <a href="/" class="text-warning">Login di sini</a>
          </p>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
