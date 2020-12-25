<?php
session_start();
if (!isset($_SESSION['username'])){
	header("Location:login.php");
}
include ('header.php');
include ('navbar_login.php');
?>
        <title>Medium</title>
    </head>
    <body>
    <br/>
    <div class="container">
        <div class="jumbotron">
        <h3 class="display-4 text-center">Selesaikan Pembayaran anda</h3>
        <hr class="my-4">
        <p>Total : Rp 800.000</p>

        <form action="buying.php" method="post" enctype="multipart/form-data">
        Foto Bukti Pembayaran:
            <label class="btn-sm btn-primary">
            Browse <input type="file" name="fileToUpload" id="fileToUpload" hidden required>
            </label>
            <!--<input type="file" name="fileToUpload" id="fileToUpload" class="btn btn-primary">-->
            <br>
            <!--<input type="submit" value="Upload Image" name="submit">-->
            <button type="submit" name="submit" value="3" class="btn-sm btn-primary">Upload Image</button>
        </form>
        </div>
        </div>
<?php 
    include ('footer.php');
?>