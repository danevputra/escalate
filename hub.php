<?php
include 'config.php';

// mengaktifkan session
session_start();

// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
  header("Location:index.php");
}
  include 'header.php';
  include 'navbar_login.php';
?>
<h3>Selamat Datang di UMKM Hub</h3>
<p>
  Cari UMKM <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Cari UMKM">
</p>
<p>
    <label for="bidang">Filter Bidang UMKM </label>
    <select id="mylist" onchange="myFilter()" class="form-control btn-sm btn-secondary dropdown-toggle" style="width : 200px">
        <option></option>
        <option>Fashion</option>
        <option>Skin Care dan Kosmetik</option>
        <option>Perlengkapan Bayi</option>
        <option>MUA</option>
        <option>Kuliner</option>
        <option>Furnitur</option>
        <option>Jasa Foto dan Video</option>
        <option>Buku</option>
    </select>
</p>

<div class="container table-responsive"> 
<table class="table table-striped table-sm" id="tabel">
<thead>
    <tr>
        <th scope="col">Nama UMKM</th>
        <th scope="col">Bidang</th>
        <th scope="col">Alamat</th>
    </tr>
</thead>
<tbody>
<?php
include ("config.php");

$sql = "SELECT * FROM user INNER JOIN bidang ON user.bidang=bidang.id_bidang AND role=1";
$query = mysqli_query($db, $sql);

while($umkm = mysqli_fetch_array($query)){
    echo "<tr>";

    echo "<td scope='row'>".$umkm['nama_umkm']."</td>";
    echo "<td>".$umkm['nm_bidang']."</td>";
    echo "<td>".$umkm['alamat']."</td>";

    echo "</tr>";
}
?>
</tbody>
</table>
</div>
<script type="text/javascript" src="filter.js"> </script> 