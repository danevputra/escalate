<?php 
include 'config.php';
session_start();
// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
	header("Location:index.php");
}
?>

<b>Halaman Konfirmasi Pembayaran</b>

<table border="1px" id="tabel">
<thead>
    <tr>
        <th>id_transaksi</th>
        <th>username</th>
        <th>nama UMKM</th>
        <th>nama bidang UMKM</th>
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

    echo "<td><input type='hidden' name='id_transaksi' value='".$pay['id_transaksi']."'>".$pay['id_transaksi']."</td>";
    echo "<td>".$pay['username']."</td>";
    echo "<td>".$pay['nama_umkm']."</td>";
    echo "<td>".$pay['nm_bidang']."</td>";
    echo "<td>".$pay['nm_pack']."</td>";
    echo "<td><a href='bukti/".$pay['bukti']."'target='blank'>".$pay['bukti']."</td>";
    echo "<td><button class='konfirmasi' type=submit name='konfirmasi'> Konfirmasi </button></td>";

    echo "</tr>";
    echo "</form>";
}
?>
</tbody>
</table>