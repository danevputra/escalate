<?php
include ("config.php");
if (isset($_POST['daftar'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hash = password_hash($password,PASSWORD_DEFAULT);
    $nama_umkm = $_POST['nama'];
    $bidang = $_POST['bidang'];
    $alamat = $_POST['alamat'];

    $sql = "INSERT INTO user (username,password,nama_umkm,bidang,alamat) VALUE ('$username','$hash','$nama_umkm',$bidang,'$alamat')";
    $query = mysqli_query($db,$sql);

    if($query){
        header('Location: index.php?status=sukses');
    }
    else{
        header('Location: index.php?status=gagal');
    }
} else {
    die ('Access Denied');
}
?>