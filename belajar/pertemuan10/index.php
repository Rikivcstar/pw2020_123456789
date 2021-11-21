<?php 
require 'functions.php';
$sos = query("SELECT * FROM seafood");

// jika Tombol Cari Diklik
if(isset($_POST["search"]))
{
    $sos = cari($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .container{
            padding: 40px;
            box-sizing: border-box;
        }
    </style>
    <title>daftar SeaFood</title>
</head>
<body style="background-color: gainsboro;">
    <h2 class="display-4 mb-5 mt-3 text-center">Daftar Seafood</h2>
    <div class="container bg-secondary">
    <form class="d-flex mb-3" action="" method="POST">
        <input style="width: 30%;" class="form-control me-2" name="keyword" type="search" placeholder="Cari data seafood" aria-label="Search" required autofocus autocomplete="off">
        <button class="btn btn-primary" name="search" type="submit">Search</button>
      </form>
    <div class="table-responsive">
    <table class="table table-bordered text-white text-center" >
        <tr>
            <th>#</th>
            <th>Nama SeaFood</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
    <?php if(empty($sos)): ?>
        <tr>
            <td colspan="4"><p style="color: red; font-style: italic; text-align: center; font-size: 20px;">Data Seafood Tidak Ada</p></td>
        </tr>
    <?php endif; ?>
    <?php
    $a = 1;
    foreach ($sos as $s ) : ?>
       
        <tr>
            <td><?= $a++; ?></td>
            <td><?= $s["nama_seafood"]; ?></td>
            <td><img src="img/<?= $s["gambar"]; ?>" alt="Seafood" width="50"></td>
            <td>
                <a href="detail-data.php?id=<?= $s["id_seafood"]; ?>" class="btn btn-danger">Lihat-Detail</a> | 
                <a href="tambah.php" class="btn btn-success " >Tambah-Data!</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
    </div>
    </div>
</body>
</html>