<?php
session_start();
if (!isset($_SESSION['username'])){
	header("Location:login.php");
}
include ('header.php');
include ('navbar_login.php');
?>
        <script src="http://code.jquery.com/jquery-1.5.js"></script>
    <script>
      function countChar(val) {
        var len = val.value.length;
        if (len >= 500) {
          val.value = val.value.substring(0, 500);
        } else {
          $('#charNum').text(500 - len);
        }
      };
    </script>
        <title>Service Desk</title>
    </head>
    <body>
    <br/>
    <div class="container">
        <div class="jumbotron">
        <h3 class="display-5 text-center">Sevice Desk</h3>
        <hr class="my-4">
        <form action="service_proc.php" method="POST">
            <textarea name="keluhan" class="form-control" onkeyup="countChar(this)"></textarea>
            <div id="charNum"></div>
            <br/>
            <div class="text-center">
            <input type="submit" id="service" name="service" value="Kirimkan" class="btn-sm btn-primary">
            </div>
        </form>
        </div>
    </div>    
<?php 
    include ('footer.php');
?>