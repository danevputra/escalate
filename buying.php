<?php
session_start();
if (!isset($_SESSION['username'])){
	header("Location:login.php");
}
include ("config.php");
$target_dir = "bukti/";
$nama_asli = basename($_FILES["fileToUpload"]["name"]);
$nama = uniqid().'-'. $nama_asli;
$target_file = $target_dir . $nama;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$tipe = $_POST ["submit"];
$user = $_SESSION['id_user'];

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    header("Location:login_success.php");
    
    $sql = "INSERT INTO package (pack_type,id_user,bukti) VALUE ('$tipe','$user','$nama')";
    $query = mysqli_query($db,$sql);
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>
