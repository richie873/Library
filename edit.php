<?php
include 'koneksi.php';
$ID = $_POST ['ID_Transaksi'];
$Name = $_POST ['Nama_empl'];
$NoHP = $_POST ['NoHP_empl'];
$Email = $_POST ['Email_empl'];
$Alamat = $_POST ['Alamat_empl'];
$Gender = $_POST ['Gender_empl'];

$query="UPDATE employee SET Nama_empl='$Name',NoHP_empl='$NoHP',Email_empl='$Email',Alamat_empl='$Alamat',Gender_empl='$Gender' where ID_Transaksi='$ID'";
mysqli_query($koneksi, $query);
header("location:update.php");
?>
