<?php
include ("config.php");

if(isset($_POST["masuk"]))  
 {  
           $username = mysqli_real_escape_string($db, $_POST["username"]);  
           $password = mysqli_real_escape_string($db, $_POST["password"]);  
           $query = "SELECT * FROM user WHERE username = '$username'";  
           $result = mysqli_query($db, $query);  
           if(mysqli_num_rows($result) > 0)  
           {  
                while($row = mysqli_fetch_array($result))  
                {  
                     if(password_verify($password, $row["password"]))  
                     {  
						session_start();
						$_SESSION['username'] = $username;
						$_SESSION['status'] = "login";
						$_SESSION['id_user'] = $row['id_user'];
						$_SESSION['role'] = $row['role'];
						header("Location:login_success.php");  
                     }  
                     else  
                     {  
						  echo '
                                   <script>
                                   window.alert("Gagal Login");
                                   window.location.href = "login.php";
                                   </script>';
                     }  
                }  
		   }
		   else  
			{  
				echo '
                    <script>
                    window.alert("Gagal Login");
                    window.location.href = "login.php";
                    </script>';  
			}      
}
else  
{  
	echo '
     <script>
     window.alert("Gagal Login");
     window.location.href = "login.php";
     </script>';  
}   
 ?>