<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "dbkoneksi";

$koneksi = mysqli_connect($server,$username,$password);
$select_db = mysqli_select_db($koneksi, $db);

?>