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

//    jika Data Yg Ditampilkan Hanya Satu Data
    if(mysqli_num_rows($result) === 1){
        return mysqli_fetch_assoc($result);
    }

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
// fungsi Hapus

function hapus($id){

    global $conn;
    mysqli_query($conn,"DELETE FROM seafood WHERE id_seafood = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama_seafood"]);
    $merk = htmlspecialchars($data["merk_seafood"]);
    $jumlah = htmlspecialchars( $data["jumlah"]);
    $harga = htmlspecialchars($data["harga"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "UPDATE seafood SET
                nama_seafood = '$nama',
                merk_seafood = '$merk',
                jumlah = '$jumlah',
                harga = '$harga',
                gambar = '$gambar'
                WHERE id_seafood = $id ";
    
      mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);


}

function cari($keyword){
    global $conn;

    $query = "SELECT * FROM seafood WHERE 
               nama_seafood LIKE '%$keyword%' OR
               merk_seafood LIKE '%$keyword%' OR
               harga LIKE '%$keyword%' ";

   $result = mysqli_query($conn,$query);
    
    $rows = [];
        while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
   }
    return $rows;
}

?>