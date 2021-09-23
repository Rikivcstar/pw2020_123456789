<?php 
require 'functions.php';
$sos = query("SELECT * FROM seafood");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daftar SeaFood</title>
</head>
<body>
    <h2>Daftar Seafood</h2>
    <table border ="1" cellpadding = "5" cellspacing = "0">
        <tr>
            <th>#</th>
            <th>Nama SeaFood</th>
            <th>Merk SeaFoood</th>
            <th>jumlah Beli</th>
            <th>Harga</th>
            <th>Gambar</th>
        </tr>
    <?php
    $a = 1;
    foreach ($sos as $s ) : ?>
       
        <tr>
            <td><?= $a++; ?></td>
            <td><?= $s["nama_seafood"]; ?></td>
            <td><?= $s["merk_seafood"]; ?></td>
            <td><?= $s["jumlah"]; ?></td>
            <td><?= $s["harga"]; ?></td>
            <td><img src="img/<?= $s["gambar"]; ?>" alt="Seafood" width="50"></td>
        </tr>
        <?php endforeach; ?>
    </table>
    
</body>
</html>