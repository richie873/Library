
<?php
include 'koneksi.php';
    $ID = $_POST ['ID_Transaksi'];
    $NamaBarang = $_POST ['Nama_Barang'];
    $JumlahBarang = $_POST ['Jumlah_Barang'];
    $HargaSatuan = $_POST ['Harga_Satuan'];
    $HargaTotal = $_POST ['Harga_Total'];
    
$query="UPDATE product SET Nama_Barang='$NamaBarang',Jumlah_Barang='$JumlahBarang',Harga_Satuan='$HargaSatuan', Harga_Total='$HargaTotal'where ID_Transaksi='$ID'";
mysqli_query($koneksi, $query);
header("location:updateProduct.php");
?>