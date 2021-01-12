<?php
include 'config.php';

// mengaktifkan session
session_start();

// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
  header("Location:index.php");
}
  include 'view2/header.php';
?>
<title>UMKM Hub</title>
</head>
<body>
<?php
include "view2/sidebar_user.php";
include 'view2/navbar_user.php';
?>
<!--<div class="page-title">
        <h3>UMKM Hub</h3>
        <p class="text-subtitle text-muted">Cari UMKM lain untuk berkolaborasi</p>
</div>
<div class="row">
<div>
  Cari UMKM <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Cari UMKM">
</div>
<div>
    <label for="bidang">Filter Bidang UMKM </label>
    <select id="mylist" onchange="myFilter()" class="form-control btn-sm btn-secondary dropdown-toggle" style="width : 200px">
        <option></option>
        <option>Fashion</option>
        <option>Skin Care dan Kosmetik</option>
        <option>Perlengkapan Bayi</option>
        <option>MUA</option>
        <option>Kuliner</option>
        <option>Furnitur</option>
        <option>Jasa Foto dan Video</option>
        <option>Buku</option>
    </select>
</div>
</div>

<div class="container table-responsive"> 
<table class="table table-striped table-sm" id="tabel">
<thead>
    <tr>
        <th scope="col">Nama UMKM</th>
        <th scope="col">Bidang</th>
        <th scope="col">Alamat</th>
    </tr>
</thead>
<tbody>
</tbody>
</table>
</div>
<script type="text/javascript" src="filter.js"> </script>-->



<div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>UMKM HUB</h3>
                <p class="text-subtitle text-muted">Cari UMKM untuk berkolaborasi</p>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body">
            <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
              <div class="dataTable-top">
              <div class="form-group">
              <div class="input-group">
                <div class="dataTable-dropdown text-left">
                  <select id="mylist" onchange="myFilter()" class="form-control dataTable-selector form-select" style="width: 200px;">
                      <option>Cari Bidang</option>
                      <option>Fashion</option>
                      <option>Skin Care dan Kosmetik</option>
                      <option>Perlengkapan Bayi</option>
                      <option>MUA</option>
                      <option>Kuliner</option>
                      <option>Furnitur</option>
                      <option>Jasa Foto dan Video</option>
                      <option>Buku</option>
                  </select>
                </div>
                <div class="dataTable-search text-right">
                    <input class="form-control dataTable-input" type="text" id="myInput" onkeyup="myFunction()" placeholder="Cari UMKM" style="width: 200px;">
                </div>
              </div>
              </div>
              </div>
              <div class="dataTable-container">
                <table class='table table-striped' id="tabel">
                    <thead>
                        <tr>
                            <th>Nama UMKM</th>
                            <th>Bidang</th>
                            <th>Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php
                      include ("config.php");

                      $sql = "SELECT * FROM user INNER JOIN bidang ON user.bidang=bidang.id_bidang AND role=1";
                      $query = mysqli_query($db, $sql);

                      while($umkm = mysqli_fetch_array($query)){
                          echo "<tr>";

                          echo "<td scope='row'>".$umkm['nama_umkm']."</td>";
                          echo "<td>".$umkm['nm_bidang']."</td>";
                          echo "<td>".$umkm['alamat']."</td>";

                          echo "</tr>";
                      }
                      ?>
                    </tbody>
                </table>
              </div>
            </div>
            </div>
        </div>

    </section>
    <script type="text/javascript" src="filter.js"> </script>
<?php
include "view2/footer.php";
?> 