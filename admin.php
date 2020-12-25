<?php 
include 'config.php';

// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
	header("Location:index.php");
}
include 'header.php';
include 'navbar_login_admin.php';
?>
<br/>
<!--<div class = "page-header">
	<h4 class="ml-2 font-weight-bold">Selamat Datang Administrator</h4>
	<p class="ml-3">Silakan melihat pekerjaan yang tersisa pada halaman berikut : </p>
</div>

<div class="wrapper">
	<nav id="sidebar">
		<div class="sidebar-header">
            <h3>Bootstrap Sidebar</h3>
        </div>
		<ul class="list-unstyled components">
			<li class="active"><a href="payment_admin.php">payment</a></li>
			<li><a href="payment_admin.php">payment</a></li>
			<li><a href="install_admin.php">install request</a></li>
			<li><a href="service_admin.php">service desk</a></li>
		</ul>
	</nav>
</div>-->

<div class="d-flex" id="wrapper">

<!-- Sidebar -->
<div class="bg-light border-right" id="sidebar-wrapper">
  <div class="list-group list-group-flush">
	<a href="payment_admin.php" class="list-group-item list-group-item-action bg-light">Konfirmasi pembayaran</a>
	<a href="install_admin.php" class="list-group-item list-group-item-action bg-light">Konfirmasi instalasi</a></li>
	<a href="service_admin.php" class="list-group-item list-group-item-action bg-light">service desk</a>
  </div>
</div>
</div>
<?php
include 'footer.php';
?>