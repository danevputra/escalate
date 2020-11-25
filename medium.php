<?php
session_start();
if (!isset($_SESSION['username'])){
	header("Location:login.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Micro</title>
    </head>
    <body>
        <h3>To complete your transaction please upload your payment script</h3>
        <p>Amount : Rp 800.000</p>

        <form action="buying.php" method="post" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
            <br>
            <!--<input type="submit" value="Upload Image" name="submit">-->
            <button type="submit" name="submit" value="3">Upload Image</button>
        </form>

    </body>
</html>