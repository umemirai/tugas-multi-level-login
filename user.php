<?php
require_once 'session.php';
if ($_SESSION['level'] != 1) header("Location: admin.php");
require_once 'produk.php';
$produk = getProduk();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-white">
    <div class="container py-5">
        <div class="mb-4">
            <h2>Halo, <?= $_SESSION['username'] ?>!</h2>
            <p class="text-muted">Berikut adalah daftar produk yang tersedia:</p>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach ($produk as $item): ?>
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title"><?= $item['nama'] ?></h5>
                            <p class="card-text">Harga: Rp <?= number_format($item['harga'], 0, ',', '.') ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="mt-5 text-end">
            <a href="logout.php" class="btn btn-outline-secondary">Logout</a>
        </div>
    </div>
</body>
</html>
