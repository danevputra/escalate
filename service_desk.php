<?php
session_start();
if (!isset($_SESSION['username'])){
	header("Location:login.php");
}
?>

<html>
    <head>
        <title>Service Desk</title>
    </head>
    <body>
        <div>Sevice Desk (max.500 characters)</div>
        <form action="service_proc.php" method="POST">
            <textarea name="keluhan"></textarea>
            <br/>
            <input type="submit" id="service" name="service" value="kirimkan">
        </form>
    </body>
</html>