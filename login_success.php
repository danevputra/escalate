<?php 
include 'config.php';

// mengaktifkan session
session_start();

// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
	//header("Location:index.php");
}

if($_SESSION['role']==1){
// menampilkan pesan selamat datang
include 'header.php';
include 'navbar_login.php';
//echo "<div align='right'>". $_SESSION['username']."</div>";

$id = $_SESSION['id_user'];
$sql = "SELECT * FROM package WHERE id_user=$id";
$query = mysqli_query($db, $sql);
$install = mysqli_fetch_array($query);
if($install!=NULL){
	$sts = $install['install_sts'];
	if($sts==0){
		echo "<br/><p>Instalasi akan segera kami lakukan dalam 3 hari kedepan, mohon menunggu.</p>";
	}
	else {
		echo "<br/><p>Produk anda telah terpasang, apabila anda mengalami kendala, silakan hubungi kami </p>";
	}
}
else{
	echo "<br/><p>Ayo beli produk kami sekarang!</p>";
	include 'cont1.php';
	echo "<br/>";
}
?>
<a href="service_desk.php">Hubungi Kami</a>
<?php
include 'footer.php';
}
?>

<?php
if ($_SESSION['role']==2) {
	include 'admin.php';
}
?>
