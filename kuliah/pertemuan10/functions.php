<?php 
// koneksi ke DataBase

    $db = "green_seafood";
    $name = "root";
    $pass = "";
    $server ="localhost";

   $conn= mysqli_connect($server,$name,$pass,$db) or die (mysqli_error($conn));


function query($query){
   global $conn;
   $result = mysqli_query($conn,$query);
   $rows = [];
   while($row = mysqli_fetch_assoc($result)){
       $rows[] = $row;
   }
   return $rows;

}

function tambah($data){

    global $conn;
    $nama = htmlspecialchars($data["nama_seafood"]);
    $merk = htmlspecialchars($data["merk_seafood"]);
    $jumlah = htmlspecialchars( $data["jumlah"]);
    $harga = htmlspecialchars($data["harga"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "INSERT INTO seafood 
                VALUES
            (null,'$nama','$merk','$jumlah','$harga','$gambar')";
    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}

?>