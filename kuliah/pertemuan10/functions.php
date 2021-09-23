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

?>