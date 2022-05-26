<?php 

SESSION_START();

$acc_username = "admin";
$acc_password = "password";

$url_add = "https://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
if(isset($_REQUEST['login_button']) === true){
	if($_REQUEST['form_username'] != $acc_username){
			header("Location: ".$url_add."?notexist");
	}
	else if($_REQUEST['form_username'] == $acc_username && $_REQUEST['form_password'] != $acc_password){
			header("Location: ".$url_add."?wrongpass");
	}
	else if($_REQUEST['form_username'] == $acc_username && $_REQUEST['form_password'] == $acc_password){
			header("Location: ".$url_add."?success");

			$_SESSION['ses_username'] = $acc_username;
			$_SESSION['ses_password'] = $acc_password;
			$_SESSION['ses_fullname'] = $acc_fullname;
			$_SESSION['ses_address'] = $acc_address;
			
	}
	
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iofrm</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/login-style.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
    <div class="form-body without-side">
        <div class="website-logo">
            <a href="index.html">
                <div class="logo">
                    <img class="logo-size" src="img/images/logo-light.png" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Sign In</h3>
                        <p>Log in your account to gain access to the vessel.</p>
                        <form method ="POST">
                        <?php
                        if(isset($_REQUEST['notexist'])===true){
                        echo "<div class='alert alert-danger' role='alert'> Username doest not exist... </div>";
                        }
                        else if(isset($_REQUEST['wrongpass']) ===true){
                            echo "<div class='alert alert-warning' role='alert'> Incorrect Password... </div>";					
                        }
                        else if(isset($_REQUEST['success']) ===true){
                            echo "<div class='alert alert-success' role='alert'> Redirecting... </div>";	
                            header("Refresh: 5; url=home.php");			
                        }
                        else if(isset($_REQUEST['logout']) === true)
                        {
                            echo "<div class='alert alert-info' role='alert'> Thank you... </div>";	
                        }
                        ?> 
                        <input class="form-control" type="text" name="form_username" placeholder="E-mail Address" required>
                            <input class="form-control" type="password" name="form_password" placeholder="Password" required>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn" name="login_button">Login </button></a>
                                <span> </span><a href="forget.php">Forget password?</a>
                            </div>
                        </form>
                       
                        <div class="other-links">
                            <div class="text">Or login with</div>
                            <a href=""><i class="fab fa-facebook-f"></i>Facebook</a><a href="#"><i class="fab fa-google"></i>Google</a><a href="#"><i class="fab fa-twitter"></i>Twitter</a>
                        </div>
                        <div class="page-links">
                            <a href="register.php">Create New Account</a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="js_1/jquery.min.js"></script>
<script src="js_1/popper.min.js"></script>
<script src="js_1/bootstrap.min.js"></script>
<script src="js_1/main.js"></script>
<script src="js_1/cleave.min.js"></script>

</body>
</html>