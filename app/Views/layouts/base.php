<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'Agrovantage') ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .my-5 { margin-top: 3rem !important; margin-bottom: 3rem !important; }
        .text-center { text-align: center !important; }
        .lead { font-size: 1.25rem; font-weight: 300; }
        .mt-3 { margin-top: 1rem !important; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>">Agrovantage</a>
            <div class="d-flex">
                <a class="nav-link" href="#">Login</a>
                <a class="nav-link" href="#">Register</a>
                <a class="nav-link" href="#">Cart</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <?= $this->renderSection('content') ?>
    </div>

    <footer class="bg-light py-3 text-center">
        © <?= date('Y') ?> Agrovantage. All rights reserved.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>