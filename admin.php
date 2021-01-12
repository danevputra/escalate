<?php 
include 'config.php';

// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
	header("Location:index.php");
}
include 'view2/header.php';
?>
<title>Admin Page</title>
</head>
<body>
<?php
include 'view2/sidebar_admin.php';
include 'view2/navbar_admin.php';
$sql = "SELECT * FROM user";
$query = mysqli_query($db, $sql);
$jumlah = mysqli_num_rows($query);
$sql2 = "SELECT package.id_transaksi,user.username, user.nama_umkm,bidang.nm_bidang,user.alamat,tipe_pkg.nm_pack, package.bukti FROM package INNER JOIN user INNER JOIN tipe_pkg INNER JOIN bidang ON package.id_user=user.id_user AND package.pack_type=tipe_pkg.id_pack AND package.payment_sts=0 AND user.bidang=bidang.id_bidang";
$query2 = mysqli_query($db, $sql2);
$jumlah2 = mysqli_num_rows($query2);
$sql3 = "SELECT package.id_transaksi,user.username, user.nama_umkm,bidang.nm_bidang,user.alamat,tipe_pkg.nm_pack, package.bukti FROM package INNER JOIN user INNER JOIN tipe_pkg INNER JOIN bidang ON package.id_user=user.id_user AND package.pack_type=tipe_pkg.id_pack AND package.payment_sts=1 AND package.install_sts=0 AND user.bidang=bidang.id_bidang";
$query3 = mysqli_query($db, $sql3);
$jumlah3 = mysqli_num_rows($query3);
$sql4 = "SELECT service.id_service, user.username, user.nama_umkm ,bidang.nm_bidang,tipe_pkg.nm_pack , service.keluhan FROM service INNER JOIN user INNER JOIN package INNER JOIN tipe_pkg INNER JOIN bidang ON service.id_service=user.id_user AND package.pack_type=tipe_pkg.id_pack AND service.id_user=package.id_user AND user.bidang=bidang.id_bidang AND service.service_sts=0 ";
$query4 = mysqli_query($db, $sql4);
$jumlah4 = mysqli_num_rows($query4);
?>
    <div class="page-title">
        <h3>Welcome</h3>
        <p class="text-subtitle text-muted">Selamat Datang di Halaman Admin</p>
	</div>
	<div class="row mb-2">
            <div class="col-12 col-md-3">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column">
                            <div class='px-3 py-3 d-flex justify-content-between'>
                                <h3 class='card-title'>User</h3>
                                <div class="card-right d-flex align-items-center">
                                    <p><?php echo $jumlah; ?> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column">
                            <div class='px-3 py-3 d-flex justify-content-between'>
                                <h3 class='card-title'>Order</h3>
                                <div class="card-right d-flex align-items-center">
                                    <p><?php echo $jumlah2; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column">
                            <div class='px-3 py-3 d-flex justify-content-between'>
                                <h3 class='card-title'>Installation</h3>
                                <div class="card-right d-flex align-items-center">
                                    <p><?php echo $jumlah3; ?> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column">
                            <div class='px-3 py-3 d-flex justify-content-between'>
                                <h3 class='card-title'>Service Desk</h3>
                                <div class="card-right d-flex align-items-center">
                                    <p><?php echo $jumlah4; ?> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
include 'view2/footer2.php';
?>