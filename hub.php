<?php
include 'config.php';

// mengaktifkan session
session_start();

// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
	header("Location:index.php");
}
?>
<html>
  <head>
  <script type="text/javascript" src="filter.js"> 
    </script> 
  </head>
  <body>
    <h3>Selamat Datang di UMKM Hub</h3>
    <p>
      Cari UMKM <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Cari UMKM">
    </p>
    <p>
        <label for="bidang">Filter Bidang UMKM </label>
        <select id="mylist" onchange="myFilter()" class='form-control'>
            <option></option>
            <option value="Fashion">Fashion</option>
            <option>Skin Care dan Kosmetik</option>
            <option>Perlengkapan Bayi</option>
            <option>MUA</option>
            <option>Kuliner</option>
            <option>Furnitur</option>
            <option>Jasa Foto dan Video</option>
            <option>Buku</option>
        </select>
    </p>

    <table border="1px" id="tabel">
    <thead>
        <tr>
            <th>Nama UMKM</th>
            <th>Bidang</th>
            <th>Alamat</th>
        </tr>
    </thead>
    <tbody>
    <?php
    include ("config.php");

    $sql = "SELECT * FROM user INNER JOIN bidang ON user.bidang=bidang.id_bidang AND role=1";
    $query = mysqli_query($db, $sql);

    while($umkm = mysqli_fetch_array($query)){
        echo "<tr>";

        echo "<td>".$umkm['nama_umkm']."</td>";
        echo "<td>".$umkm['nm_bidang']."</td>";
        echo "<td>".$umkm['alamat']."</td>";

        echo "</tr>";
    }
    ?>
    </tbody>
    </table>
  </body>
</html>