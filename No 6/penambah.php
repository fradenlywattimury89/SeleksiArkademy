<?php
    include("config/koneksi.php");
    $sql = "INSERT INTO product(name,price,id_category,id_cashier) ";
    $sql.= "VALUES ('".$_POST['product']."','".$_POST['price']."','".$_POST['category']."','".$_POST['nama_cashier']."')";
    mysqli_query($config,$sql) or exit("Error query : <b>".$sql."</b>.");
    echo "Data Telah Ditambahkan.";
?>