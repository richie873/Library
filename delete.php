<?php
include 'koneksi.php';
$ID   = $_GET['ID_Transaksi'];
$query="DELETE from product where ID_Transaksi='$ID'";
mysqli_query($koneksi, $query);
header("location:tablejoin.php");
?>
