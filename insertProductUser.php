<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RichiePedia</title>
  <link rel="stylesheet" href="style.css">
</head>

<body background = "background.jpg" >

<header class="header">
    <h1>Web Marketplace Murah</h1>
    <p>Nama: Richie Stevanus - No HP: 081291424681 - Student ID: 012201905024 - Email: richie.stevanus12@gmail.com</p>
  </header>

  <nav class="navbar">
  <ul>
    <li class="utama"><a href="DesignUser.php">Beranda</a></li>
      <li class="utama"><a href="indexUser.php">Input Data</a></li>
      <li class="utama"><a href="formproductUser.php">Belanja</a></li>
      <li class="utama logout"><a href="Logout.php">Logout</a></li>
    </ul>
  </nav>

  <main class="main">

    <div class="content">
    <form method = "post" action = "insert.php">

    <?php
    include 'koneksi.php'; 
    if (isset($_POST['Simpan']))
    {
    
    $ID = $_POST ['ID_Transaksi'];
    $NamaBarang = $_POST ['Nama_Barang'];
    $JumlahBarang = $_POST ['Jumlah_Barang'];
    $HargaSatuan = $_POST ['Harga_Satuan'];
    $HargaTotal = $_POST ['Harga_Total'];

    $sql = "INSERT INTO product (ID_Transaksi,Nama_Barang,Jumlah_Barang,Harga_Satuan,Harga_Total)
    VALUES ('$ID','$NamaBarang','$JumlahBarang','$HargaSatuan','$HargaTotal')";

    if (mysqli_query($koneksi, $sql)) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
      }
    }
    ?>
    </div>
    
    <aside class="sidebar">
      <h2>Tentang</h2>
      <p>Website ini dibuat oleh saya sendiri Richie Stevanus, untuk memenuhi Projek UAS Server-Side Internet Programming, Website ini menggunakan HTML, dan CSS untuk memperindah Design web, lalu juga menggunakan PHP untuk membuat Data bisa tersimpan kedalam Database
        dan juga untuk menapilkan Data yang sudah tersimpan didalam Database</p>
      <br>
      <h2>Produk Terlaris Saat Ini</h2>
      <p><img src="barang.jpg" Height="200" width="250"></p>
    </aside>
  </main>

  <footer class="footer">
    <p>Copyright &copy 2017 SUSANTOKUN</p>
  </footer>
</body>
</html>
