<?php
session_start();
if (!isset($_SESSION['username'])){
	header("Location:login.php");
}
if (isset($_POST['service'])){
    include ("config.php");
    $keluhan = $_POST ["keluhan"];
    $user = $_SESSION['id_user'];

    $sql = "INSERT INTO service (id_user,keluhan) VALUE ('$user','$keluhan')";
    $query = mysqli_query($db,$sql);

    if($query){
        header("Location:service_success.php");
    }
    else{
        header("Location:service_failed.php");
    }
}
else {
    echo '<script>alert("Access Denied")</script>';  
}
?>