<?php
include 'koneksi.php';
$ID   = $_GET['ID_Transaksi'];
$query="DELETE from employee where ID_Transaksi='$ID'";
mysqli_query($koneksi, $query);
header("location:table.php");
?>
