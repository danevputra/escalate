<?php
    session_start();
    if (!isset($_SESSION['username'])){
        header("Location:login.php");
    }
    include "view2/header.php";
?>
<script>
    window.alert("Keluhan tersampaikan");
    window.location.href = "login_success.php";
</script>