<?php 
include 'config.php';
session_start();
// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
	header("Location:index.php");
}
include 'view2/header.php';
?>
<title>Konfirmasi Pembayaran</title>
</head>
<body>
<?php
include 'view2/sidebar_admin.php';
include 'view2/navbar_admin.php';
?>

<!--<br/>
<div class = "page-header">
<h5 class="text-center font-weight-bold">Halaman Konfirmasi Pembayaran</h5>
</div>

<div class="container table-responsive"> 
<table class="table table-striped table-sm" id="tabel">
<thead>
    <tr>
        <th scope="col">id_transaksi</th>
        <th scope="col">username</th>
        <th scope="col">nama UMKM</th>
        <th scope="col">Bidang UMKM</th>
        <th scope="col">nama paket</th>
        <th scope="col">bukti pembayaran</th>
        <th scope="col">konfirmasi pembayaran</th>
    </tr>
</thead>
<tbody>
</tbody>
</table>
</div>-->

<div class="row" id="table-striped">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Konfirmasi Pembayaran</h4>
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
                <th>bukti pembayaran</th>
                <th>konfirmasi pembayaran</th>
              </tr>
            </thead>
            <tbody>
            <?php
            include ('config.php');
            $sql = "SELECT package.id_transaksi,user.username, user.nama_umkm,bidang.nm_bidang,user.alamat,tipe_pkg.nm_pack, package.bukti FROM package INNER JOIN user INNER JOIN tipe_pkg INNER JOIN bidang ON package.id_user=user.id_user AND package.pack_type=tipe_pkg.id_pack AND package.payment_sts=0 AND user.bidang=bidang.id_bidang";
            $query = mysqli_query($db, $sql);
            while($pay = mysqli_fetch_array($query)){
                echo "<form action='konfirmasi_payment.php' method='post'>";
                echo "<tr>";

                echo "<td scope='row'><input type='hidden' name='id_transaksi' value='".$pay['id_transaksi']."'>".$pay['id_transaksi']."</td>";
                echo "<td>".$pay['username']."</td>";
                echo "<td>".$pay['nama_umkm']."</td>";
                echo "<td>".$pay['nm_bidang']."</td>";
                echo "<td>".$pay['nm_pack']."</td>";
                echo "<td><a href='bukti/".$pay['bukti']."'target='blank'>".$pay['bukti']."</td>";
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