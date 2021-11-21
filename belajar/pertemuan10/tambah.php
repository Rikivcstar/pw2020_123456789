<?php 
require 'functions.php';

// Tangakap Data Pada Form
if(isset($_POST["tambah"])){

    if(tambah($_POST) > 0){

    echo "<script>
            alert('Data Berhasil Di Tambahkan')
            document.location.href= 'index.php';
        </script>";
}else {
     echo "<script>
            alert('Data Berhasil Di Tambahkan')
            document.location.href= 'index.php';
        </script>";
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Seafood</title>
</head>
<body>
    <h2> Tambah Data Seafood</h2>
    <form action="" method="POST">
        <ul>
        <li><label>
            Nama SeaFood :
            <input type="text" name="nama_seafood">
        </label>
        </li>
        <li>
        <label>
            Merk SeaFood :
            <input type="text" name="merk_seafood">
        </label>
        </li>
        <li>
        <label>
            Jumlah :
            <input type="text" name="jumlah">
        </label>
        </li>
        <li>
        <label>
            Harga :
            <input type="text" name="harga">
        </label>
        </li>
        <li>
        <label>
            Gambar :
            <input type="text" name="gambar">
        </label>
        </li>
        <br>
        <button type="submit" name="tambah">Tambah Data!</button>
        </ul>
    </form>
    
</body>
</html>