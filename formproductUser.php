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
    <form method = "post" action = "insertProductUser.php">
    <h2> Masukkan Data Anda & Product </h2>
        <table>
            <tr><td> NIK: </td>
                <td> <input type = "text" name= "ID_Transaksi">
            <tr><td> Nama Barang: </td>
                <td> <input type = "text" name= "Nama_Barang">
            </td></tr> 
            <tr><td> Jumlah Barang: </td> <td>
                <select name="Jumlah_Barang">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </td></tr>
            <tr><td> Harga Satuan: Rp. </td>
                <td> <input type = "text" name= "Harga_Satuan">
            </td></tr>             </td></tr>
            <tr><td> Harga Total: Rp. </td> <td>
                <input type = "text" name = "Harga_Total">
            </td></tr>
            <tr><td><input type = "submit" name = "Simpan" value = "submit"></tr></td>
        </table>
    </form>
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

