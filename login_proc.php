<?php
include ("config.php");
 
$username = $_POST['username'];
$password = $_POST['password'];
$hash = password_hash($password, PASSWORD_DEFAULT);
 
$login = "SELECT * from user WHERE username='$username'";
$query = mysqli_query ($db,$login);
$data = mysqli_fetch_array($query);
$id = $data['id_user'];
$role = $data['role'];
$cek = mysqli_num_rows($query);
//die ("$cek");
 
if($cek > 0){
    if (!password_verify($password, $hash)) {
        header("Location:login_failed.php");
        exit;
    }
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	$_SESSION['id_user'] = $id;
	$_SESSION['role'] = $role;
	header("Location:login_success.php");
}else{
	header("Location:login_failed.php");	
}
?>