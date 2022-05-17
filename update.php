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
      <li class="utama logout"><a href="#">Logout</a></li>
    </ul>
  </nav>

  <main class="main">

    <div class="content">
    <form method = "post" action = "edit.php">
    <h2> Masukkan Data Anda </h2>
    <table>
            <tr><td> NIK: </td>
                <td> <input type = "text" name= "ID_Transaksi">
            </td></tr>
            <tr><td> Nama: </td>
                <td> <input type = "text" name= "Nama_empl">
            </td></tr> 
            <tr><td> No HP: </td>
                <td> <input type = "text" name= "NoHP_empl">
            </td></tr> 
            <tr><td> Alamat: </td>
                <td> <input type = "text" name= "Alamat_empl">
            </td></tr> 
            <tr><td> Jenis Kelamin: </td> <td>
                <input type="radio" name="Gender_empl" value="L">Laki Laki
                <input type="radio" name="Gender_empl" value="P">Perempuan
            </td></tr>
            <tr><td> Email: </td> <td>
                <input type = "text" name = "Email_empl">
            </td></tr>
            <tr><td><input type = "submit" name = "save" value = "Ubah Data"></tr></td>
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
