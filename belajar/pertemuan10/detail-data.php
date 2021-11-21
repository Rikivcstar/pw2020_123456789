<?php 
 require 'functions.php';

 $id =$_GET["id"];

 $s = query("SELECT * FROM seafood WHERE id_seafood = $id");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail-Data Seafood</title>
</head>
<body>
    <h2>Detail-Data Seafood Green</h2>
    <ul>
        <li><img src="img/<?= $s["gambar"]; ?>" alt="sosis" width="150" ></li>
        <li>Nama Seafood : <?= $s["nama_seafood"]; ?></li>
        <li>Merk Seafood : <?= $s["merk_seafood"]; ?></li>
        <li>Jumlah Beli : <?= $s["jumlah"]; ?></li>
        <li>Harga : <?= $s["harga"]; ?></li>
        <li><a href="hapus.php?id=<?= $s["id_seafood"]; ?>" onclick="confirm('YAKIN INGIN DI HAPUS')">Hapus</a> | <a href="edit.php?id=<?= $s["id_seafood"]; ?>">Edit</a></li>
        <li><a href="index.php">Kembali</a></li>

    </ul>
</body>
</html>