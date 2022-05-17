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
      <li class="utama"><a href="Design.php">Beranda</a></li>
      <li class="utama"><a href="index.php">Input Data</a></li>
      <li class="utama"><a href="formproduct.php">Belanja</a></li>
      <li class="utama"><a href="tablejoin.php">Lihat Data</a></li>
      <li class="utama logout"><a href="Logout.php">Logout</a></li>
    </ul>
  </nav>

  <main class="main">

    <div class="content">

    <h2>Data Transaction</h2>
  <table border="1">
    <tr><th>No</th><th>ID Transaksi</th><th>Nama Customer</th><th>Nama Barang</th><th>Jumlah Barang</th><th>Harga Satuan</th><th>Harga Total</th><th>Aksi</th></tr>
    <?php
    include 'koneksi.php';
    $sql = mysqli_query($koneksi, "SELECT employee.ID_Transaksi, employee.Nama_empl, product.Nama_Barang, product.Jumlah_Barang, product.Harga_Satuan, product.Harga_Total from product JOIN employee USING(ID_Transaksi)");
    $no=1;
    foreach ($sql as $row){
        echo "<tr>
            <td>$no</td>
            <td>".$row['ID_Transaksi']."</td>
            <td>".$row['Nama_empl']."</td>
            <td>".$row['Nama_Barang']."</td>
            <td>".$row['Jumlah_Barang']."</td>
            <td>".$row['Harga_Satuan']."</td>
            <td>".$row['Harga_Total']."</td>
            <td>
              <a href='delete.php?ID_Transaksi=$row[ID_Transaksi]'>Delete,</a>
              <a href='table.php'>More Info</a>
            </td>
              </tr>";
        $no++;
    }
    ?>
  </table>
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
