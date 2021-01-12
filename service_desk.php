<?php
session_start();
if (!isset($_SESSION['username'])){
	header("Location:login.php");
}
include 'view2/header.php';
?>
<title>Service Desk</title>
</head>
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
<body>
<?php
include "view2/sidebar_user.php";
include 'view2/navbar_user.php';
?>
    <!--<br/>
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
    </div>-->
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Service Desk</h3>
            </div>
        </div>

    </div>
    <section class="section">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Silakan Tulis Keluhan Anda (maks.500 karakter)</label>
                            <br/>
                            <label for="exampleFormControlTextarea1" class="form-label" style="color:red">Hanya dapat digunakan apabila anda telah membeli produk kami.</label>
                            <form action="service_proc.php" method="POST">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="keluhan" class="form-control" onkeyup="countChar(this)"></textarea>
                            <br/>
                            <div id="charNum"></div>
                            <br/>
                            <div class='form-check-sm'>
                              <div class="checkbox">
                                  <input type="checkbox" id="checkbox1" class='form-check-input' required>
                                  <label for="checkbox1">Keluhan ini saya sampaikan dengan sejujur-jujurnya</label>
                              </div>
                            </div>
                            <br/>
                            <input type="submit" id="service" name="service" value="Kirimkan" class="btn btn-primary">
                            </form>
                            <br/>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php 
    include ('view2/footer2.php');
?>