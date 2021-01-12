<?php 
include 'config.php';
session_start();
// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
	header("Location:index.php");
}
include 'view2/header.php';
?>
<title>Konfirmasi Service Desk</title>
</head>
<body>
<?php
include 'view2/sidebar_admin.php';
include 'view2/navbar_admin.php';
$id = $_SESSION['id_user'];
?>

<div class="row" id="table-striped">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Konfirmasi Service Desk</h4>
      </div>
      <div class="card-content">
        <!-- table striped -->
        <div class="table-responsive">
          <table class="table table-striped mb-0">
            <thead>
              <tr>
                <th>id_service</th>
                <th>username</th>
                <th>nama UMKM</th>
                <th>Bidang UMKM</th>
                <th>nama paket</th>
                <th>keluhan</th>
                <th>konfirmasi service</th>
              </tr>
            </thead>
            <tbody>
            <?php
            include ('config.php');
            $sql = "SELECT service.id_service,user.username,user.nama_umkm,bidang.nm_bidang,tipe_pkg.nm_pack,service.keluhan FROM service INNER JOIN user,tipe_pkg,bidang,package WHERE service.id_user=user.id_user AND user.bidang=bidang.id_bidang AND package.id_user=service.id_user AND package.pack_type=tipe_pkg.id_pack AND service.service_sts=0";
            $query = mysqli_query($db, $sql);
            while($pay = mysqli_fetch_array($query)){
                echo "<form action='konfirmasi_service.php' method='post'>";
                echo "<tr>";

                echo "<td scope='row'><input type='hidden' name='id_service' value='".$pay['id_service']."'>".$pay['id_service']."</td>";
                echo "<td>".$pay['username']."</td>";
                echo "<td>".$pay['nama_umkm']."</td>";
                echo "<td>".$pay['nm_bidang']."</td>";
                echo "<td>".$pay['nm_pack']."</td>";
                echo "<td>".$pay['keluhan']."</td>";
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