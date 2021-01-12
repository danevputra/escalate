<?php
session_start();
if (!isset($_SESSION['username'])){
	header("Location:login.php");
}
include 'view2/header.php';
?>
<title>Medium</title>
</head>
<body>
<?php
include "view2/sidebar_user.php";
include 'view2/navbar_user.php';
?>      
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
                            <p class="form-label">Total : Rp 800.000</p>
                            <br/>
                            <div class="col-md-6 mb-1">
                            <form action="buying.php" method="post" enctype="multipart/form-data">
                                    <div class="input-group mb-3">
                                        <input type="file" name="fileToUpload" id="fileToUpload">
                                        </div>
                                    </div>

                                    </fieldset>
                                    <button type="submit" name="submit" value="3" class="btn btn-primary">Upload</button>
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