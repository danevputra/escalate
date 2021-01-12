<?php
session_start();
if (!isset($_SESSION['username'])){
	header("Location:login.php");
}
include 'view2/header.php';
?>
<title>Micro</title>
</head>
<body>
<?php
include "view2/sidebar_user.php";
include 'view2/navbar_user.php';
?>
        <!--<br/>
        <div class="container">
        <div class="jumbotron">
        <h3 class="display-4 text-center">Selesaikan Pembayaran anda</h3>
        <hr class="my-4">
        <p>Total : Rp 200.000</p>

        <form action="buying.php" method="post" enctype="multipart/form-data">
            Foto Bukti Pembayaran:
            <label class="btn-sm btn-primary">
            Browse <input type="file" name="fileToUpload" id="fileToUpload" hidden required>
            </label>
            <input type="file" name="fileToUpload" id="fileToUpload" class="btn btn-primary">
            <br>
            <input type="submit" value="Upload Image" name="submit">
            <button type="submit" name="submit" value="1" class="btn-sm btn-primary">Upload Image</button>
        </form>
        </div>
        </div>-->
        
        
        <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Payment Page</h3>
            </div>
        </div>

    </div>
    <section class="section">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <p class="form-label">Silakan Upload Bukti Pembayaran Anda</p>
                            <p class="form-label">Total : Rp 200.000</p>
                            <br/>
                            <div class="col-md-6 mb-1">
                            <form action="buying.php" method="post" enctype="multipart/form-data">
                                    <div class="input-group mb-3">
                                        <input type="file" name="fileToUpload" id="fileToUpload">
                                        </div>
                                    </div>

                                    </fieldset>
                                    <button type="submit" name="submit" value="1" class="btn btn-primary">Upload</button>
                                </form>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php 
    include ('view2/footer2.php');
?>