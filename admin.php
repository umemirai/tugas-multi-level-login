<?php
require_once 'session.php';
if ($_SESSION['level'] != 0) header("Location: user.php");
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      min-height: 100vh;
      display: flex;
    }
    .sidebar {
      width: 250px;
      background-color: #343a40;
      color: #fff;
    }
    .sidebar a {
      color: #fff;
      text-decoration: none;
      display: block;
      padding: 15px;
    }
    .sidebar a:hover {
      background-color: #495057;
    }
    .content {
      flex-grow: 1;
      padding: 30px;
      background-color: #f8f9fa;
    }
  </style>
</head>
<body>

  <div class="sidebar d-flex flex-column">
    <h4 class="text-center py-4 border-bottom">Admin Panel</h4>
    <a href="#">Dashboard</a>
    <a href="#">Manajemen Produk</a>
    <a href="#">Statistik Pengguna</a>
    <a href="#">Pengaturan Sistem</a>
    <a href="logout.php" class="mt-auto text-danger">Logout</a>
  </div>

  <div class="content">
    <h2>Selamat datang, <?= $_SESSION['username'] ?> (Admin)</h2>
    <p class="text-muted">Ini adalah halaman dashboard dengan tampilan sidebar.</p>

    <div class="row g-4 mt-4">
      <div class="col-md-4">
        <div class="card shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Statistik Pengguna</h5>
            <p class="card-text">Lihat data dan aktivitas pengguna.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Manajemen Produk</h5>
            <p class="card-text">Tambah, edit, atau hapus produk.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Pengaturan Sistem</h5>
            <p class="card-text">Atur konfigurasi sistem dan keamanan.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
