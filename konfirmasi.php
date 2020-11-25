<?php
// mengaktifkan session
session_start();

// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
	header("Location:index.php");
}
include "config.php";
if (isset($_POST['konfirmasi'])){
    $id_transaksi = $_POST['id_transaksi'];

    $sql = "UPDATE package SET payment_sts=1 WHERE id_transaksi=$id_transaksi ";
    $query = mysqli_query($db,$sql);

    if($query){
        header('Location:login_success.php');
    }
    else{
        die('Gagal');
    }
} else {
    die ('Access Denied');
}
?>