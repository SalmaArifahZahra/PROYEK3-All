<!DOCTYPE html>
<html>

<head>
    <title><?= esc($title) ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .header {
            background: #007bff;
            color: #fff;
            padding: 15px;
            text-align: center;
        }

        .menu {
            background: #f4f4f4;
            padding: 10px;
            text-align: center;
        }

        .menu a {
            margin: 0 10px;
            text-decoration: none;
            color: #007bff;
        }

        .content {
            flex: 1;
            padding: 20px;
            min-height: 300px;
        }

        .footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>

<body>

    <div class="header">
        <h2>My Website</h2>
    </div>

    <div class="menu">
        <a href="<?= base_url('home') ?>" class="<?= ($title == 'Home') ? 'active' : '' ?>">Home</a>
        <a href="<?= base_url('mahasiswa') ?>" class="<?= ($title == 'Mahasiswa') ? 'active' : '' ?>">Mahasiswa</a>
        <a href="/logout" onclick="return confirm('Apakah Anda yakin ingin logout?')">Logout</a>
    </div>

    <div class="content">
        <?php if ($content) {
            echo view($content);
        } ?>
    </div>

    <div class="footer">
        <p>&copy; <?= date('Y') ?> My Website</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>
</html>