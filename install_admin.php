<?php 
include 'config.php';
session_start();
// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
	header("Location:index.php");
}
include 'view2/header.php';
?>
<title>Konfirmasi Instalasi</title>
</head>
<body>
<?php
include 'view2/sidebar_admin.php';
include 'view2/navbar_admin.php';
?>

<div class="row" id="table-striped">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Konfirmasi Instalasi</h4>
      </div>
      <div class="card-content">
        <!-- table striped -->
        <div class="table-responsive">
          <table class="table table-striped mb-0">
            <thead>
              <tr>
                <th>id_transaksi</th>
                <th>username</th>
                <th>nama UMKM</th>
                <th>Bidang UMKM</th>
                <th>nama paket</th>
                <th>konfirmasi instalasi</th>
              </tr>
            </thead>
            <tbody>
            <?php
            include ('config.php');
            $sql = "SELECT package.id_transaksi,user.username, user.nama_umkm,bidang.nm_bidang,user.alamat,tipe_pkg.nm_pack, package.bukti FROM package INNER JOIN user INNER JOIN tipe_pkg INNER JOIN bidang ON package.id_user=user.id_user AND package.pack_type=tipe_pkg.id_pack AND package.payment_sts=1 AND package.install_sts=0 AND user.bidang=bidang.id_bidang";
            $query = mysqli_query($db, $sql);
            while($pay = mysqli_fetch_array($query)){
                echo "<form action='konfirmasi_install.php' method='post'>";
                echo "<tr>";

                echo "<td scope='row'><input type='hidden' name='id_transaksi' value='".$pay['id_transaksi']."'>".$pay['id_transaksi']."</td>";
                echo "<td>".$pay['username']."</td>";
                echo "<td>".$pay['nama_umkm']."</td>";
                echo "<td>".$pay['nm_bidang']."</td>";
                echo "<td>".$pay['nm_pack']."</td>";
                echo "<td><button class='btn btn-primary btn-sm' type='submit' name='konfirmasi'> Konfirmasi </button></td>";

                echo "</tr>";
                echo "</form>";
            }
            ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include "view2/footer2.php";
?>