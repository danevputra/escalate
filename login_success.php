<?php 
include 'config.php';

// mengaktifkan session
session_start();

// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
	header("Location:index.php");
}

if($_SESSION['role']==1){
// menampilkan pesan selamat datang
include 'view2/header.php';?>
<title>Welcome</title>
</head>
<body class="d-flex flex-column min-vh-100">
<?php
include "view2/sidebar_user.php";
include 'view2/navbar_user.php';
//include "view2/body.php";
//echo "<div align='right'>". $_SESSION['username']."</div>";

$id = $_SESSION['id_user'];
$sql = "SELECT * FROM package WHERE id_user=$id";
$query = mysqli_query($db, $sql);
$install = mysqli_fetch_array($query);
if($install!=NULL){
	$sts_pay = $install['payment_sts'];
	$sts = $install['install_sts'];
	if($sts_pay == 0){
		include "view2/body_user1.php";
	} 
	else if ($sts_pay==1&&$sts==0) {
		include "view2/body_user2.php";
	}
	else if($sts_pay==1&&$sts==1){
		include "view2/body_user3.php";
	}
}
else{
	include 'cont1.php';
}
?>

<?php
include 'view2/footer.php';
}
?>

<?php
if ($_SESSION['role']==2) {
	include 'admin.php';
}
?>
