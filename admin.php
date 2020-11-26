<?php 
include 'config.php';

// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
	header("Location:index.php");
}
?>
<h3>Halaman Admin</h3>
<a href="payment_admin.php">payment</a>
<a href="install_admin.php">install request</a>
<br>
<a href="logout.php">logout</a>