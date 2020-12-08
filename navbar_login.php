<?php 
include 'config.php';
?>
<body>
<nav class="navbar navbar-expand bg-primary">
    <a class="navbar-brand" href="#">
        <img src="view/img/logo.png" width="30" height="30" alt="">
        <span style="color:white;">Escalate</span>
    </a>
    <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link" style="color:white;" href="#"><?php echo $_SESSION['username'];?></a>
    </li>
    <li class="nav-item">
      <div class="topbar-divider d-none d-sm-block"></div>
    </li>
    <li class="nav-item">
      <a class="nav-link" style="color:white;" href="hub.php">hub</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" style="color:white;" href="logout.php">logout</a>
    </li>
    </ul> 
</nav>