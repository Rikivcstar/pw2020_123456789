<?php 
require 'functions.php';
// Ambil Data Dari query
    $id =$_GET["id"];
    $s = query("SELECT * FROM seafood WHERE id_seafood = $id");

// Tangakap Data Pada Form
if(isset($_POST["ubah"])){

    if(ubah($_POST) > 0){

    echo "<script>
            alert('Data Berhasil Di Edit')
            document.location.href= 'index.php';
        </script>";
}else {
     echo "<script>
            alert('Data Berhasil Di Edit')
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
            <input type="hidden" name="id" value="<?= $s["id_seafood"]; ?>">
        <li><label>
            Nama SeaFood :
            <input type="text" name="nama_seafood" value="<?= $s["nama_seafood"]; ?>">
        </label>
        </li>
        <li>
        <label>
            Merk SeaFood :
            <input type="text" name="merk_seafood" value="<?= $s["merk_seafood"]; ?>">
        </label>
        </li>
        <li>
        <label>
            Jumlah :
            <input type="text" name="jumlah" value="<?= $s["jumlah"]; ?>">
        </label>
        </li>
        <li>
        <label>
            Harga :
            <input type="text" name="harga" value="<?= $s["harga"]; ?>">
        </label>
        </li>
        <li>
        <label>
            Gambar :
            <input type="text" name="gambar" value="<?= $s["gambar"]; ?>">
        </label>
        </li>
        <br>
        <button type="submit" name="ubah">Ubah Data!</button>
        </ul>
    </form>
    
</body>
</html>