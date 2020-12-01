<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Sign Up Page</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="view/css/sb-admin-2.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-6 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-6">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Buat Akun!</h1>
              </div>
              <form class="user" action="signup_proc.php" method="POST">
                <!--<div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Last Name">
                  </div>
                </div>-->
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleFirstName"  name="username" placeholder="Username" required>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-user" id="exampleInputPassword" name="password" placeholder="Password" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleFirstName" name="nama" placeholder="Nama UMKM" required>
                </div>
                <div class="dropdown mb-4">
                    <label for="bidang">Bidang UMKM </label>
                    <select name="bidang" id="dropdownMenuButton" class="btn btn-secondary dropdown-toggle btn-icon-split">
                        <option value=1>Fashion</option>
                        <option value=2>Skin Care dan Kosmetik</option>
                        <option value=3>Perlengkapan Bayi</option>
                        <option value=4>MUA</option>
                        <option value=5>Kuliner</option>
                        <option value=6>Furnitur</option>
                        <option value=7>Jasa Foto dan Video</option>
                        <option value=8>Buku</option>
                    </select>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleFirstName" name="alamat" placeholder="Alamat UMKM" required>
                </div>
                <p>
                    <input type="submit" class="btn btn-primary btn-user btn-block" value="Daftar Sekarang" name="daftar">
                </p> 
                <hr>
                <a href="index.html" class="btn btn-google btn-user btn-block">
                  <i class="fab fa-google fa-fw"></i> Register with Google
                </a>
                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                  <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                </a>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="login.php">Sudah Punya Akun? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>

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