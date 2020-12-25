<!--
<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up Page</title>
    </head>
    <body>
        <h3>Sign Up Form</h3>
        <form action="signup_proc.php" method="POST">
            <p>
                <label for ="username">Username</label>
                <input type="text" name="username" placeholder="Username" required> 
            </p>
            <p>
                <label for ="password">Password</label>
                <input type="password" name="password" placeholder="Password" required> 
            </p>
            <p>
                <label for ="nama">Nama UMKM</label>
                <input type="text" name="nama" placeholder="Nama UMKM" required> 
            </p>
            <p>
            <label for="bidang">Bidang UMKM </label>
            <select name="bidang">
                <option value=1>Fashion</option>
                <option value=2>Skin Care dan Kosmetik</option>
                <option value=3>Perlengkapan Bayi</option>
                <option value=4>MUA</option>
                <option value=5>Kuliner</option>
                <option value=6>Furnitur</option>
                <option value=7>Jasa Foto dan Video</option>
                <option value=8>Buku</option>
            </select>
            </p>
            
            <p>
                <label for ="alamat">Alamat</label>
                <textarea name="alamat" required></textarea> 
            </p>
            <p>
                <input type="submit" value="Daftar" name="daftar">
            </p> 
        </form>
    </body>
</html>
-->
<?php
include "view2/header.php";
?>
<title>Sign Up Page</title>
</head>

<body>
    <div id="auth">
        
<div class="container">
    <div class="row">
        <div class="col-md-7 col-sm-12 mx-auto">
            <div class="card pt-4">
                <div class="card-body">
                    <div class="text-center mb-5">
                        <img src="view2/assets/images/login.png" height="48" class='mb-4'>
                        <h3>Sign Up</h3>
                        <p>Please fill the form to register.</p>
                    </div>
                    <form action="signup_proc.php" method="POST">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="first-name-column">Username</label>
                                    <input type="text" id="first-name-column" class="form-control" name="username" required> 
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="last-name-column">Password</label>
                                    <input type="password" id="last-name-column" class="form-control" name="password" required> 
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="last-name-column">Nama UMKM</label>
                                    <input type="text" id="last-name-column" class="form-control"  name="nama" required> 
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="email-id-column">Alamat</label>
                                    <input type="text" id="email-id-column" class="form-control" name="alamat" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                            <div class="form-group">
                            <label for="bidang">Bidang UMKM </label>
                              <select name="bidang" class="form-control" id="dropdownMenuButton">
                                  <option value=1 class="form-control">Fashion</option>
                                  <option value=2 class="form-control">Skin Care dan Kosmetik</option>
                                  <option value=3 class="form-control">Perlengkapan Bayi</option>
                                  <option value=4 class="form-control">MUA</option>
                                  <option value=5 class="form-control">Kuliner</option>
                                  <option value=6 class="form-control">Furnitur</option>
                                  <option value=7 class="form-control">Jasa Foto dan Video</option>
                                  <option value=8 class="form-control">Buku</option>
                              </select>
                            </div>
                            </div>
                        </diV>

                                <a href="login.php">Have an account? Login</a>
                        <div class="clearfix">
                            <input type="submit" value="Daftar" name="daftar" class="btn btn-primary float-right">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>
<?php
include "view2/footer2.php";
?>