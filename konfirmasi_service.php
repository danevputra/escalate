<?php
// mengaktifkan session
session_start();

// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
	header("Location:index.php");
}
include "config.php";
if (isset($_POST['konfirmasi'])){
    $id_service = $_POST['id_service'];

    $sql = "UPDATE service SET service_sts=1 WHERE id_service=$id_service ";
    $query = mysqli_query($db,$sql);

    if($query){
        header('Location:service_admin.php');
    }
    else{
        die('Gagal');
    }
} else {
    die ('Access Denied');
}
?>