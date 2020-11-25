<?php
include 'config.php';

// mengaktifkan session
session_start();

// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
	header("Location:index.php");
}
?>
<h3>Selamat Datang di UMKM Hub</h3>
<p>
    Cari UMKM <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Cari nama UMKM">
</p>
<p>
    <label for="bidang">Filter Bidang UMKM </label>
    <select name="bidang" id="myFilter" onkeyup="myFilter()">
        <option value=0></option>
        <option>Fashion</option>
        <option>Skin Care dan Kosmetik</option>
        <option>Perlengkapan Bayi</option>
        <option>MUA</option>
        <option>Kuliner</option>
        <option>Furnitur</option>
        <option>Jasa Foto dan Video</option>
        <option>Buku</option>
    </select>
</p>

<?php
include ('hub_table.php');
?>

<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("tabel");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
function myFilter() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myFilter");
  filter = input.value.toUpperCase();
  table = document.getElementById("tabel");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>