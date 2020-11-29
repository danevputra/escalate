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
echo "<div align='right'>". $_SESSION['username']."</div>";
include 'cont1.php';
?>
<br/>
<br/>
<a href="hub.php">UMKM Hub</a>
<br/>
<br/>
<a href="logout.php">logout</a>
<?php
include 'footer.php';
}
?>

<?php
if ($_SESSION['role']==2) {
	include 'admin.php';
}
?>
