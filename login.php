<!--
<!DOCTYPE html>
<html>
    <head>
        <title>
            Login 
        </title>
    </head>
    <body>
        <h3>Login Page</h3>
        <form action="login_proc.php" method="POST">
            <p>
                <label for="username">Username</label>
                <input type="text" name="username" placeholder="Username" required>
            </p>
            <p>
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Password" required>
            </p>
            <p>
                <input type="submit" name="masuk" value="Login">
            </p>
        </form>
    </body>
</html>
-->
<?php
include "view2/header.php";
?>
<title>Login Page</title>
</head>

<body>
    <div id="auth">
        
<div class="container">
    <div class="row">
        <div class="col-md-5 col-sm-12 mx-auto">
            <div class="card pt-4">
                <div class="card-body">
                    <div class="text-center mb-5">
                        <img src="view2/assets/images/login.png" height="48" class='mb-4'>
                        <h3>Sign In</h3>
                        <p>Please sign in to continue to Escalate.</p>
                    </div>
                    <form action="login_proc.php" method="POST">
                        <div class="form-group position-relative has-icon-left">
                            <label for="username">Username</label>
                            <div class="position-relative">
                                <input type="text" name="username" class="form-control" id="username" required>
                                <div class="form-control-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                    <i data-feather="user"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left">
                            <div class="clearfix">
                                <label for="password">Password</label>
                            </div>
                            <div class="position-relative">
                                <input type="password" class="form-control" id="password" name="password" required>
                                <div class="form-control-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                    <i data-feather="lock"></i>
                                </div>
                            </div>
                        </div>

                        <div class='form-check clearfix my-4'>
                            <div class="float-right">
                                <a href="signup.php">Don't have an account?</a>
                            </div>
                        </div>
                        <div class="clearfix">
                            <input type="submit" name="masuk" class="btn btn-primary float-right" value="Login">
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>

<?php 
include "view2/footer2.php";
?>